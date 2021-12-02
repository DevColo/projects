@extends('layouts.app')
<style type="text/css">
    table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    line-height: 25px;
    background: #fff;
    text-align: center;
}
    th{
            border-bottom-width: 2px;
    border: 1px solid #dddddd;
    padding: 2px;
    line-height: 1.428571;
    text-align: center;
    font-size: 14px;
    font-family: system-ui;
    font-weight: 700;
    color: #525252;
    background: #fff;
    }
    td {
    border: 1px solid #dddddd;
    padding: 6px;
    line-height: 1.428571;
    text-align: center;
    font-family: sans-serif;
    color: #525252;
    font-size: 14px;
}
</style>
@section('page')
<h2>Bong County General Rooster</h2>
@endsection('page')

@section('content')
<div class="table-responsive">
    
    <a href="{{ URL::to('home/bongRooster/getPDF') }}" class="btn btn-primary" style="float:right;margin-bottom: 5px;">Print Rooster <i class="fa fa-print"></i></a>
	<table class="table table-bordered" id="users-table" width="100%">
        <thead>
            <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Sex</th>
        <th>Voter ID</th>
        <th>Age</th>
        <th>County</th>
        <th>District</th>
        <th>Cell</th>
        <th>Email</th>
      </tr>
        </thead>
        <tbody style="background-color:#ffffff;">
            @foreach($data as $row)
                <tr>
                   <td>{{$row->member_id}}</td>
          <td>{{$row->fname}}</td>
          <td>{{$row->lname}}</td>
          <td>{{$row->gender}}</td>
          <td>{{$row->voterID}}</td>
          <td>{{$row->age}}</td>
          <td>{{$row->county}}</td>
          <td>{{$row->district}}</td>
          <td>{{$row->cell}}</td>
          <td>{{$row->email}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection('content')