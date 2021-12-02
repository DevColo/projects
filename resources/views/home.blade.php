@extends('layouts.app')
<link rel="stylesheet" type="text/css" href="{!! asset('assets/vendor/jquery-idletimer/libs/jquery-loader.js') !!}">
<style type="text/css">
	.box{
		width: 800px;
		margin: 0 auto;
	}
	.label {
    display: inline;
    padding: .4em .7em .4em !important;
    font-size: 10px !important;
}
.head {
    background: #071146 !important;
    color: #fff !important;
    font-size: 23px !important;
    padding: 4px 0px 4px 0px !important;
    }
    .age{
    	font-size: 17px !important;
    color: #5f0222 !important;
    }
</style>


@section('page')
<h2>Home</h2>
@endsection('page')

@section('content')
<h3 align="center" style="color: #F44336;">Members General Stastistics</h3>
<br>
<div class="panel panel-default">
	<div class="panel-body">
		<div  style="text-align: center;">
			<h2 class="head">Total Members: {!! $Total !!}</h2><br>
			<h2 class="head">Total Females: {!! $Female !!}</h2><br>
			<h2 class="head">Total Males: {!! $Male !!}</h2><br>
		</div>

		<div style="margin: 20px 0 10px 30px">
                                                <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                                    <span class="label label-success">Age: 18-24yrs</span>
                                                    <h3 class="age">{!! $ageGroup1!!}</h3>
                                                </div>
                                                 <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                                    <span class="label label-info">Age: 25-30yrs</span>
                                                    <h3 class="age">{!! $ageGroup2!!}</h3>
                                                </div>
                                                <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                                    <span class="label label-danger">Age: 31-40yrs</span>
                                                    <h3 class="age">{!! $ageGroup3!!}</h3>
                                                </div>
                                                <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                                    <span class="label label-warning">Age: 41yrs and above </span>
                                                    <h3 class="age">{!! $ageGroup4!!}</h3>
                                                </div> 
                                            </div>
	</div>
</div>
@endsection

