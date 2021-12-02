@extends('layouts.app')

@section('content')
<div class="table-responsive">
	<table class="table table-bordered" id="users-table" width="100%" style="padding:0px;">
        <thead>
            <tr>
                
                <th width="10%">Photo</th>
                <th width="4%">ID</th>
                <th width="8%">First Name</th>
                <th width="10%">Last Name</th>
                <th width="4%">Gender</th>
                <th width="8%">DOB</th>
                <th width="5%">County</th>
                <th width="12%">District</th>
                <th width="8%">Cell</th>
                <th width="8%">Email</th>
                <th width="40%">Action</th>
            </tr>
        </thead>
    </table>
</div>
@endsection('content')
<script type="text/javascript">
	$(document).ready(function(){
		$('users-table').DataTables({
			processing: true,
			serverSide: true,
			ajax:{
				url: "{{ route('viewMember') }}",
			},
			columns:[
			   {
			   	data: 'photo',
			   	name: 'photo',
			   	render: function(data, type, full, meta){
			   		return "<img src={{ URL::to('/')}}/photo/"
			   		        data + "width='70' class='img-thumbnail' />"
			   	},
			   	orderable: false
			   },
			   {
			   	data: 'member_id',
			   	name: 'member_id'
			   },
			   {
			   	data: 'fname',
			   	name: 'fname'
			   },
			   {
			   	data: 'lname',
			   	name: 'lname'
			   },
			   {
			   	data: 'gender',
			   	name: 'gender'
			   },
			   {
			   	data: 'birthData',
			   	name: 'birthData'
			   },
			   {
			   	data: 'county',
			   	name: 'county',
			   },
			   {
			   	data: 'district',
			   	name: 'district'
			   },
			   {
			   	data: 'cell',
			   	name: 'cell'
			   },
			   {
			   	data: 'email',
			   	name: 'email'
			   },
			   {
			    data: 'admin_id',
			    name: 'admin_id'
			   },
			   {
			   	data: 'action',
			   	name: 'action',
			   	orderable: false
			   }
			]
		});
	});
</script> 