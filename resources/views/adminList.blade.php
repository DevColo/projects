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
@section('content')
<div class="table-responsive">
    <a href="{{ URL::to('home/adminList/getPDF') }}" class="btn btn-primary" style="float:right;margin-bottom: 5px;">Print Rooster <i class="fa fa-print"></i></a>
	<table class="table table-bordered" id="users-table" width="100%">
        <thead>
            <tr>
                <th>Photo</th>
                <th>FullName</th>
                <th>County</th>
                <th>District</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody style="background-color:#ffffff;">
            @foreach($data as $row)
                <tr>
                    <td><img width="50px" src="{{ asset('photo/') }}/{{$row->photo}}"></td>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->county }}</td>
                    <td>{{ $row->district }}</td>
                    <td>{{ $row->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection('content')