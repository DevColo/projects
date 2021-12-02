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
p {
    margin: 0 0 -5px !important;
}
.panel-heading.bg-primary {
    background: #fff !important;
    /* border: 1px solid #1c1d1c; */
    color: #443d3d !important;
    border-radius: 15px !important;
    padding: 10px !important;
    box-shadow: 0px 0px 6px 1px !important;
}
</style>

@section('page')
<h2>View All Counties</h2>
@endsection('page')

@section('content')
<div class="col-md-12 col-lg-5">
                                    <div class="col-md-12">
                                        <section class="panel panel-group">
                                            <header class="panel-heading bg-primary">
                        
                                                <div class="widget-profile-info">
                                                    <div class="profile-picture">
                                                        <img src="{!! asset('images/Bomi.jpg') !!}">
                                                    </div>
                                                    <div class="profile-info">
                                                        <p class="name text-semibold">Bomi </p>
                                                        <p>Total Members: {!! $bomiAll !!}</p>
                                                        <p>Female: {!! $bomiFemale !!}</p>
                                                        <p>Male: {!! $bomiMale !!}</p>
                                                        <div class="profile-footer">
                                                            <a href="{{ URL::to('home/bomiRooster')}}" style="color: #000;font-weight:bold;color:red;">VIEW MEMBERS</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </header>
                                        </section>

                                        <section class="panel panel-group">
                                            <header class="panel-heading bg-primary">
                        
                                                <div class="widget-profile-info">
                                                    <div class="profile-picture">
                                                        <img src="{!! asset('images/Bong.jpg') !!}">
                                                    </div>
                                                    <div class="profile-info">
                                                        <p class="name text-semibold">Bong </p>
                                                        <p>Total Members: {!! $bongAll !!}</p>
                                                        <p>Female: {!! $bongFemale !!}</p>
                                                        <p>Male: {!! $bongMale !!}</p>
                                                        <div class="profile-footer">
                                                            <a href="{{ URL::to('home/bongRooster')}}" style="color: #000;font-weight:bold;color:red;">VIEW MEMBERS</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </header>
                                        </section>
                                      
                                        <section class="panel panel-group">
                                            <header class="panel-heading bg-primary">
                        
                                                <div class="widget-profile-info">
                                                    <div class="profile-picture">
                                                        <img src="{!! asset('images/Gbarpolo.jpg') !!}">
                                                    </div>
                                                    <div class="profile-info">
                                                        <p class="name text-semibold">Gbarpolu</p>
                                                        <p>Total Members: {!! $gbarpoluAll !!}</p>
                                                        <p>Female: {!! $gbarpoluFemale !!}</p>
                                                        <p>Male: {!! $gbarpoluMale !!}</p>
                                                        <div class="profile-footer">
                                                            <a href="{{ URL::to('home/gbarpoluRooster')}}" style="color: #000;font-weight:bold;color:red;">VIEW MEMBERS</a>
                                                        </div>
                                                    </div>
                                                </div>
                        
                                            </header>
                                        </section>

                                        <section class="panel panel-group">
                                            <header class="panel-heading bg-primary">
                        
                                                <div class="widget-profile-info">
                                                    <div class="profile-picture">
                                                        <img src="{!! asset('images/Grand-Bassa.jpg') !!}">
                                                    </div>
                                                    <div class="profile-info">
                                                        <p class="name text-semibold">Grand Bassa</p>
                                                        <p>Total Members: {!! $bassaAll !!}</p>
                                                        <p>Female: {!! $bassaFemale !!}</p>
                                                        <p>Male: {!! $bassaMale !!}</p>
                                                        <div class="profile-footer">
                                                            <a href="{{ URL::to('home/bassaRooster')}}" style="color: #000;font-weight:bold;color:red;">VIEW MEMBERS</a>
                                                        </div>
                                                    </div>
                                                </div>
                        
                                            </header>
                                        </section>

                                        <section class="panel panel-group">
                                            <header class="panel-heading bg-primary">
                        
                                                <div class="widget-profile-info">
                                                    <div class="profile-picture">
                                                        <img src="{!! asset('images/Grand-Cape-Mount.jpg') !!}">
                                                    </div>
                                                    <div class="profile-info">
                                                        <p class="name text-semibold">Grand Cape Mount</p>
                                                        <p>Total Members: {!! $capeAll !!}</p>
                                                        <p>Female: {!! $capeFemale !!}</p>
                                                        <p>Male: {!! $capeMale !!}</p>
                                                        <div class="profile-footer">
                                                            <a href="{{ URL::to('home/capeRooster')}}" style="color: #000;font-weight:bold;color:red;">VIEW MEMBERS</a>
                                                        </div>
                                                    </div>
                                                </div>
                        
                                            </header>
                                        </section>

                                        <section class="panel panel-group">
                                            <header class="panel-heading bg-primary">
                        
                                                <div class="widget-profile-info">
                                                    <div class="profile-picture">
                                                        <img src="{!! asset('images/Grand-Gedeh.jpg') !!}">
                                                    </div>
                                                    <div class="profile-info">
                                                        <p class="name text-semibold">Grand Gedeh</p>
                                                        <p>Total Members: {!! $gedehAll !!}</p>
                                                        <p>Female: {!! $gedehFemale !!}</p>
                                                        <p>Male: {!! $gedehMale !!}</p>
                                                        <div class="profile-footer">
                                                            <a href="{{ URL::to('home/gedehRooster')}}" style="color: #000;font-weight:bold;color:red;">VIEW MEMBERS</a>
                                                        </div>
                                                    </div>
                                                </div>
                        
                                            </header>
                                        </section>

                                        <section class="panel panel-group">
                                            <header class="panel-heading bg-primary">
                        
                                                <div class="widget-profile-info">
                                                    <div class="profile-picture">
                                                        <img src="{!! asset('images/Grand-Kru.jpg') !!}">
                                                    </div>
                                                    <div class="profile-info">
                                                        <p class="name text-semibold">Grand Kru</p>
                                                        <p>Total Members: {!! $kruAll !!}</p>
                                                        <p>Female: {!! $kruFemale !!}</p>
                                                        <p>Male: {!! $kruMale !!}</p>
                                                        <div class="profile-footer">
                                                            <a href="{{ URL::to('home/kruRooster')}}" style="color: #000;font-weight:bold;color:red;">VIEW MEMBERS</a>
                                                        </div>
                                                    </div>
                                                </div>
                        
                                            </header>
                                        </section>

                                        <section class="panel panel-group">
                                            <header class="panel-heading bg-primary">
                        
                                                <div class="widget-profile-info">
                                                    <div class="profile-picture">
                                                        <img src="{!! asset('images/Lofa.jpg') !!}">
                                                    </div>
                                                    <div class="profile-info">
                                                        <p class="name text-semibold">Lofa</p>
                                                        <p>Total Members: {!! $lofaAll !!}</p>
                                                        <p>Female: {!! $lofaFemale !!}</p>
                                                        <p>Male: {!! $lofaMale !!}</p>
                                                        <div class="profile-footer">
                                                            <a href="{{ URL::to('home/lofaRooster')}}" style="color: #000;font-weight:bold;color:red;">VIEW MEMBERS</a>
                                                        </div>
                                                    </div>
                                                </div>
                        
                                            </header>
                                        </section>
                                    </div>
                            </div>

                            <div class="col-md-12 col-lg-5">
                                    <div class="col-md-12">
                                    
                                        <section class="panel panel-group">
                                            <header class="panel-heading bg-primary">
                        
                                                <div class="widget-profile-info">
                                                    <div class="profile-picture">
                                                        <img src="{!! asset('images/Margibi.jpg') !!}">
                                                    </div>
                                                    <div class="profile-info">
                                                        <p class="name text-semibold">Margibi</p>
                                                        <p>Total Members: {!! $margibiAll  !!}</p>
                                                        <p>Female: {!! $margibiFemale !!}</p>
                                                        <p>Male: {!! $margibiMale !!}</p>
                                                        <div class="profile-footer">
                                                            <a href="{{ URL::to('home/margibiRooster')}}" style="color: #000;font-weight:bold;color:red;">VIEW MEMBERS</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </header>
                                        </section>

                                        <section class="panel panel-group">
                                            <header class="panel-heading bg-primary">
                        
                                                <div class="widget-profile-info">
                                                    <div class="profile-picture">
                                                        <img src="{!! asset('images/Maryland.jpg') !!}">
                                                    </div>
                                                    <div class="profile-info">
                                                        <p class="name text-semibold">Maryland</p>
                                                        <p>Total Members: {!! $marylandAll  !!}</p>
                                                        <p>Female: {!! $marylandFemale !!}</p>
                                                        <p>Male: {!! $marylandMale !!}</p>
                                                        <div class="profile-footer">
                                                            <a href="{{ URL::to('home/marylandRooster')}}" style="color: #000;font-weight:bold;color:red;">VIEW MEMBERS</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </header>
                                        </section>

                                        <section class="panel panel-group">
                                            <header class="panel-heading bg-primary">
                        
                                                <div class="widget-profile-info">
                                                    <div class="profile-picture">
                                                        <img src="{!! asset('images/Montserrado.jpg') !!}">
                                                    </div>
                                                    <div class="profile-info">
                                                        <p class="name text-semibold">Montserrado</p>
                                                        <p>Total Members: {!! $montAll  !!}</p>
                                                        <p>Female: {!! $montFemale !!}</p>
                                                        <p>Male: {!! $montMale !!}</p>
                                                        <div class="profile-footer">
                                                            <a href="{{ URL::to('home/montRooster')}}" style="color: #000;font-weight:bold;color:red;">VIEW MEMBERS</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </header>
                                        </section>

                                        <section class="panel panel-group">
                                            <header class="panel-heading bg-primary">
                        
                                                <div class="widget-profile-info">
                                                    <div class="profile-picture">
                                                        <img src="{!! asset('images/Nimba.jpg') !!}">
                                                    </div>
                                                    <div class="profile-info">
                                                        <p class="name text-semibold">Nimba</p>
                                                        <p>Total Members: {!! $nimbaAll  !!}</p>
                                                        <p>Female: {!! $nimbaFemale !!}</p>
                                                        <p>Male: {!! $nimbaMale !!}</p>
                                                        <div class="profile-footer">
                                                            <a href="{{ URL::to('home/nimbaRooster')}}" style="color: #000;font-weight:bold;color:red;">VIEW MEMBERS</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </header>
                                        </section>

                                        <section class="panel panel-group">
                                            <header class="panel-heading bg-primary">
                        
                                                <div class="widget-profile-info">
                                                    <div class="profile-picture">
                                                        <img src="{!! asset('images/River-Cess.jpg') !!}">
                                                    </div>
                                                    <div class="profile-info">
                                                        <p class="name text-semibold">River-Cess</p>
                                                        <p>Total Members: {!! $cessAll  !!}</p>
                                                        <p>Female: {!! $cessFemale !!}</p>
                                                        <p>Male: {!! $cessMale !!}</p>
                                                        <div class="profile-footer">
                                                            <a href="{{ URL::to('home/cessRooster')}}" style="color: #000;font-weight:bold;color:red;">VIEW MEMBERS</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </header>
                                        </section>

                                        <section class="panel panel-group">
                                            <header class="panel-heading bg-primary">
                        
                                                <div class="widget-profile-info">
                                                    <div class="profile-picture">
                                                        <img src="{!! asset('images/River-Gee.jpg') !!}">
                                                    </div>
                                                    <div class="profile-info">
                                                        <p class="name text-semibold">River-Gee</p>
                                                        <p>Total Members: {!! $geeAll  !!}</p>
                                                        <p>Female: {!! $geeFemale !!}</p>
                                                        <p>Male: {!! $geeMale !!}</p>
                                                        <div class="profile-footer">
                                                            <a href="{{ URL::to('home/geeRooster')}}" style="color: #000;font-weight:bold;color:red;">VIEW MEMBERS</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </header>
                                        </section>

                                        <section class="panel panel-group">
                                            <header class="panel-heading bg-primary">
                        
                                                <div class="widget-profile-info">
                                                    <div class="profile-picture">
                                                        <img src="{!! asset('images/Sinoe.jpg') !!}">
                                                    </div>
                                                    <div class="profile-info">
                                                        <p class="name text-semibold">Sinoe</p>
                                                        <p>Total Members: {!! $sinoeAll  !!}</p>
                                                        <p>Female: {!! $sinoeFemale !!}</p>
                                                        <p>Male: {!! $sinoeMale !!}</p>
                                                        <div class="profile-footer">
                                                            <a href="{{ URL::to('home/sinoeRooster')}}" style="color: #000;font-weight:bold;color:red;">VIEW MEMBERS</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </header>
                                        </section>

                                    </div>
                            </div>

@endsection('content')