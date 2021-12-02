<!DOCTYPE html>
<html>
<head>
    <title>Datatables Server Side Processing in Laravel</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>       
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <br />
    <h3 align="center">Datatables Server Side Processing in Laravel</h3>
    <br />
    <div align="right">
        <button type="button" name="add" id="add_data" class="btn btn-success btn-sm">Add</button>
    </div>
    <br />
    <table id="student_table" class="table table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                     <th>First Name</th>
                     <th>Last Name</th>
                     <th>Gender</th>
                     <th>Date of birth</th>
                     <th>County</th>
                     <th>District</th>
                     <th>Cell#</th>
                     <th>Email</th>
                     <th>Action</th>
            </tr>
        </thead>
    </table>
</div>

<div id="studentModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" id="student_form">
                <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal">&times;</button>
                   <h4 class="modal-title">Add Data</h4>
                </div>
                <div class="modal-body">
                    {{csrf_field()}}
                    <span id="form_output"></span>
                    <div class="form-group">
                        <label>Enter member id</label>
                        <input type="text" name="member_id" id="member_id" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Enter First Name</label>
                        <input type="text" name="fname" id="fname" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Enter Last Name</label>
                        <input type="text" name="lname" id="lname" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Enter Gender</label>
                        <input type="text" name="gender" id="gender" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Enter Date of birth</label>
                        <input type="text" name="birthDate" id="birthDate" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Enter County</label>
                        <input type="text" name="county" id="county" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Enter District</label>
                        <input type="text" name="district" id="district" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Enter Cell#</label>
                        <input type="text" name="cell" id="cell" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Enter Email</label>
                        <input type="text" name="email" id="email" class="form-control" />
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="button_action" id="button_action" value="insert" />
                    <input type="submit" name="submit" id="action" value="Add" class="btn btn-info" />
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function() {
     $('#student_table').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('home/ajaxdata/getdata') }}",
        "columns":[
            { "data": "member_id" },
            { "data": "fname" },
            { "data": "lname" },
            { "data": "gender" },
            { "data": "birthDate" },
            { "data": "county" },
            { "data": "district" },
            { "data": "cell" },
            { "data": "email" },
            { "data": "action", orderable:false, searchable: false}
        ]
     });

    $('#add_data').click(function(){
        $('#studentModal').modal('show');
        $('#student_form')[0].reset();
        $('#form_output').html('');
        $('#button_action').val('insert');
        $('#action').val('Add');
        $('.modal-title').text('Add Data');
    });

    $('#student_form').on('submit', function(event){
        event.preventDefault();
        var form_data = $(this).serialize();
        $.ajax({
            url:"{{ route('home/ajaxdata/postdata') }}",
            method:"POST",
            data:form_data,
            dataType:"json",
            success:function(data)
            {
                if(data.error.length > 0)
                {
                    var error_html = '';
                    for(var count = 0; count < data.error.length; count++)
                    {
                        error_html += '<div class="alert alert-danger">'+data.error[count]+'</div>';
                    }
                    $('#form_output').html(error_html);
                }
                else
                {
                    $('#form_output').html(data.success);
                    $('#student_form')[0].reset();
                    $('#action').val('Add');
                    $('.modal-title').text('Add Data');
                    $('#button_action').val('insert');
                    $('#student_table').DataTable().ajax.reload();
                }
            }
        })
    });

    $(document).on('click', '.edit', function(){
        var id = $(this).attr("id");
        $('#form_output').html('');
        $.ajax({
            url:"{{route('home/ajaxdata/fetchdata')}}",
            method:'get',
            data:{id:id},
            dataType:'json',
            success:function(data)
            {
                $('#member_id').val(data.member_id);
                $('#fname').val(data.fname);
                $('#lname').val(data.lname);
                $('#gender').val(data.gender);
                $('#birthDate').val(data.birthDate);
                $('#county').val(data.county);
                $('#district').val(data.district);
                $('#cell').val(data.cell);
                $('#email').val(data.email);
                $('#studentModal').modal('show');
                $('#action').val('Edit');
                $('.modal-title').text('Edit Data');
                $('#button_action').val('update');
            }
        })
    });

});
</script>
</body>
</html>
