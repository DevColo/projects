<!-- <!DOCTYPE html>
 
<html lang="en">
<head>
<title>Install DataTables in Laravel - Tutsmake.com</title> -->
@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{!! asset('assets/vendor/bootstrap/css/bootstrap.min.css') !!}">
<link rel="stylesheet" href="{!! asset('assets/vendor/jquery-datatables/media/css/dataTables.bootstrap.min.css') !!}">
<script src="{!! asset('assets/vendor/jquery/jquery.js') !!}"></script>
<script src="{!! asset('assets/vendor/vendor/bootstrap/js/bootstrap.min.js') !!}"></script>
<script src="{!! asset('assets/vendor/jquery-datatables/media/js/jquery.dataTables.js') !!}"></script>
<script src="{!! asset('assets/vendor/magnific-popup/magnific-popup.js') !!}"></script>
<!-- <script src="{!! asset('assets/vendor/jquery/jquery.min.js') !!}"></script>
<link rel="stylesheet" href="{!! asset('assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css') !!}" /> -->
</head> 
         <div class="table-responsive">
            <table class="table table-bordered" id="members_table">
               <thead>
                  <tr>
                     <th>Id</th>
                     <th>First Name</th>
                     <th>Last Name</th>
                     <th>Sex</th>
                     <th>Voter ID</th>
                     <th>Age</th>
                     <th>County</th>
                     <th>District</th>
                     <th>Cell#</th>
                     <th>Email</th><!-- 
                     <th>Action</th> -->
                  </tr>
               </thead>
            </table>
         </div>
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" arial-labelledby="editModal" aria-hidden="false" >
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Modal Title</h5>
          <button>
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </div>
    </div> 
</div>
   <script>
   $(document).ready( function () {
    $('#members_table').DataTable({
           processing: true,
           serverSide: true,
           ajax: "{{ url('home/members-list') }}",
           columns: [

                    { data: 'member_id', name: 'member_id' },
                    { data: 'fname', name: 'fname' },
                    { data: 'lname', name: 'lname' },
                    { data: 'gender', name: 'gender' },
                    { data: 'voterID', name: 'voterID' },
                    { data: 'age', name: 'age' },
                    { data: 'county', name: 'county' },
                    { data: 'district', name: 'district' },
                    { data: 'cell', name: 'cell' },
                    { data: 'email', name: 'email' }
                    // {data: 'action', name: 'action', orderable: false, searchable: false}

                 ]
        });
     });
  </script><!-- 
   </body>
</html> 
 -->
 @endsection('content')