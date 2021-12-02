@extends('layouts.app')

@section('content')
<div class="col-md-12 col-lg-5">
									<div class="col-md-12">
										<section class="panel panel-group">
											<header class="panel-heading bg-primary" style="    background: #edeef9;border: 2px solid #f74566;color: #000;border-radius: 28px;">
						
												<div class="widget-profile-info">
													<div class="profile-picture">
														<img src="{!! asset('images/Bomi.jpg') !!}">
													</div>
													<div class="profile-info">
														<h4 class="name text-semibold">Bomi </h4>
														<h5 class="role">Total Members: {!! $bomiTotal !!}</h5>
														<h5 class="role">Female: {!! $bomiFemale !!}</h5>
														<h5 class="role">Male: {!! $bomiMale !!}</h5>
														<div class="profile-footer">
															<a href="{{ URL::to('home/bomiRooster')}}" style="color: #000;font-weight:bold;color:red;">VIEW MEMBERS</a>
														</div>
													</div>
												</div>
						
											</header>
										</section>

										<section class="panel panel-group">
											<header class="panel-heading bg-primary" style="    background: #edeef9;border: 2px solid #9b3d98;color: #000;border-radius: 28px;">
						
												<div class="widget-profile-info">
													<div class="profile-picture">
														<img src="{!! asset('images/Bong.jpg') !!}">
													</div>
													<div class="profile-info">
														<h4 class="name text-semibold">Bong </h4>
														<h5 class="role">Total Members: {!! $bongTotal !!}</h5>
														<h5 class="role">Female: {!! $bongFemale !!}</h5>
														<h5 class="role">Male: {!! $bongMale !!}</h5>														<div class="profile-footer">
															<a href="{{ URL::to('home/bongRooster')}}" style="color: #000;font-weight:bold;color:red;">VIEW MEMBERS</a>
														</div>
													</div>
												</div>
						
											</header>
										</section>

										<section class="panel panel-group">
											<header class="panel-heading bg-primary" style="    background: #edeef9;border: 2px solid #226734;color: #000;border-radius: 28px;">
						
												<div class="widget-profile-info">
													<div class="profile-picture">
														<img src="{!! asset('images/Gbarpolo.jpg') !!}">
													</div>
													<div class="profile-info">
														<h4 class="name text-semibold">Gbarpolu </h4>
														<h5 class="role">Total Members: {!! $gbarpoluTotal !!}</h5>
														<h5 class="role">Female: {!! $gbarpoluFemale !!}</h5>
														<h5 class="role">Male: {!! $gbarpoluMale !!}</h5>
														<div class="profile-footer">
															<a href="{{ URL::to('home/gbarpoluRooster')}}" style="color: #000;font-weight:bold;color:red;">VIEW MEMBERS</a>
														</div>
													</div>
												</div>
						
											</header>
										</section>

										<section class="panel panel-group">
											<header class="panel-heading bg-primary" style="    background: #edeef9;border: 2px solid #081e65;color: #000;border-radius: 28px;">
						
												<div class="widget-profile-info">
													<div class="profile-picture">
														<img src="{!! asset('images/Grand-Bassa.jpg') !!}">
													</div>
													<div class="profile-info">
														<h4 class="name text-semibold">Grand Bassa </h4><h5 class="role">Total Members: {!! $BassaTotal !!}</h5>
														<h5 class="role">Female: {!! $BassaFemale !!}</h5>
														<h5 class="role">Male: {!! $BassaMale !!}</h5>
														<div class="profile-footer">
															<a href="{{ URL::to('home/grandBassaRooster')}}" style="color: #000;font-weight:bold;color:red;">VIEW MEMBERS</a>
														</div>
													</div>
												</div>
											</header>
										</section>
										<section class="panel panel-group">
											<header class="panel-heading bg-primary" style="background: #edeef9;border: 2px solid #226734;color: #000;border-radius: 28px;">
						
												<div class="widget-profile-info">
													<div class="profile-picture">
														<img src="{!! asset('images/Grand-Cape-Mount.jpg') !!}">
													</div>
													<div class="profile-info">
														<h4 class="name text-semibold">Grand Cape Mount </h4>
														<h5 class="role">Total Members: {!! $CapeMountTotal !!}</h5>
														<h5 class="role">Female: {!! $CapeMountFemale !!}</h5>
														<h5 class="role">Male: {!! $CapeMountMale !!}</h5>
														<div class="profile-footer">
															<a href="{{ URL::to('home/grandCapeMountRooster')}}" style="color: #000;font-weight:bold;color:red;">VIEW MEMBERS</a>
														</div>
													</div>
												</div>
						
											</header>
										</section>
										<section class="panel panel-group">
											<header class="panel-heading bg-primary" style="background: #edeef9;border: 2px solid #0099ff;color: #000;border-radius: 28px;">
						
												<div class="widget-profile-info">
													<div class="profile-picture">
														<img src="{!! asset('images/Grand-Gedeh.jpg') !!}">
													</div>
													<div class="profile-info">
														<h4 class="name text-semibold">Grand Gedeh </h4>
														<h5 class="role">Total Members: {!! $gedehTotal !!}</h5>
														<h5 class="role">Female: {!! $gedehFemale !!}</h5>
														<h5 class="role">Male: {!! $gedehMale !!}</h5>
														<div class="profile-footer">
															<a href="{{ URL::to('home/grandGedehRooster')}}" style="color: #000;font-weight:bold;color:red;">VIEW MEMBERS</a>
														</div>
													</div>
												</div>
						
											</header>
										</section>
										<section class="panel panel-group">
											<header class="panel-heading bg-primary" style="    background: #edeef9;border: 2px solid #226734;color: #000;border-radius: 28px;">
												<div class="widget-profile-info">
													<div class="profile-picture">
														<img src="{!! asset('images/Grand-Kru.jpg') !!}">
													</div>
													<div class="profile-info">
														<h4 class="name text-semibold">Grand Kru </h4>
														<h5 class="role">Total Members: {!! $kruTotal !!}</h5>
														<h5 class="role">Female: {!! $kruFemale !!}</h5>
														<h5 class="role">Male: {!! $kruMale !!}</h5>
														<div class="profile-footer">
															<a href="{{ URL::to('home/grandKruRooster')}}" style="color: #000;font-weight:bold;color:red;">VIEW MEMBERS</a>
														</div>
													</div>
												</div>
						
											</header>
										</section>

										<section class="panel panel-group">
											<header class="panel-heading bg-primary" style="    background: #edeef9;border: 2px solid #226734;color: #000;border-radius: 28px;">
												<div class="widget-profile-info">
													<div class="profile-picture">
														<img src="{!! asset('images/Lofa.jpg') !!}">
													</div>
													<div class="profile-info">
														<h4 class="name text-semibold">Lofa </h4>
														<h5 class="role">Total Members: {!! $lofaTotal !!}</h5>
														<h5 class="role">Female: {!! $lofaFemale !!}</h5>
														<h5 class="role">Male: {!! $lofaMale !!}</h5>
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
											<header class="panel-heading bg-primary" style="    background: #edeef9;border: 2px solid #c03031;color: #000;border-radius: 28px;">
						
												<div class="widget-profile-info">
													<div class="profile-picture">
														<img src="{!! asset('images/Margibi.jpg') !!}">
													</div>
													<div class="profile-info">
														<h4 class="name text-semibold">Margibi </h4>
														<h5 class="role">Total Members: {!! $margibiTotal !!}</h5>
														<h5 class="role">Female: {!! $margibiFemale !!}</h5>
														<h5 class="role">Male: {!! $margibiMale !!}</h5>
														<div class="profile-footer">
															<a href="{{ URL::to('home/margibiRooster')}}" style="color: #000;font-weight:bold;color:red;">VIEW MEMBERS</a>
														</div>
													</div>
												</div>
											</header>
										</section>
										<section class="panel panel-group">
											<header class="panel-heading bg-primary" style="    background: #edeef9;border: 2px solid #fad115;color: #000;border-radius: 28px;">
						
												<div class="widget-profile-info">
													<div class="profile-picture">
														<img src="{!! asset('images/Maryland.jpg') !!}">
													</div>
													<div class="profile-info">
														<h4 class="name text-semibold">Maryland </h4>
														<h5 class="role">Total Members: {!! $marylandTotal !!}</h5>
														<h5 class="role">Female: {!! $marylandFemale !!}</h5>
														<h5 class="role">Male: {!! $marylandMale !!}</h5>
														<div class="profile-footer">
															<a href="{{ URL::to('home/marylandRooster')}}" style="color: #000;font-weight:bold;color:red;">VIEW MEMBERS</a>
														</div>
													</div>
												</div>
											</header>
										</section>
										<section class="panel panel-group">
											<header class="panel-heading bg-primary" style="    background: #edeef9;border: 2px solid #081e65;color: #000;border-radius: 28px;">
						
												<div class="widget-profile-info">
													<div class="profile-picture">
														<img src="{!! asset('images/Montserrado.jpg') !!}">
													</div>
													<div class="profile-info">
														<h4 class="name text-semibold">Montserrado </h4>
														<h5 class="role">Total Members: {!! $montserradoTotal !!}</h5>
														<h5 class="role">Female: {!! $montserradoFemale !!}</h5>
														<h5 class="role">Male: {!! $montserradoMale !!}</h5>
														<div class="profile-footer">
															<a href="{{ URL::to('home/montserradoRooster')}}" style="color: #000;font-weight:bold;color:red;">VIEW MEMBERS</a>
														</div>
													</div>
												</div>
											</header>
										</section>
										<section class="panel panel-group">
											<header class="panel-heading bg-primary" style="    background: #edeef9;border: 2px solid #226734;color: #000;border-radius: 28px;">
						
												<div class="widget-profile-info">
													<div class="profile-picture">
														<img src="{!! asset('images/Nimba.jpg') !!}">
													</div>
													<div class="profile-info">
														<h4 class="name text-semibold">Nimba </h4>
														<h5 class="role">Total Members: {!! $nimbaTotal !!}</h5>
														<h5 class="role">Female: {!! $nimbaFemale !!}</h5>
														<h5 class="role">Male: {!! $nimbaMale !!}</h5>
														<div class="profile-footer">
															<a href="{{ URL::to('home/nimbaRooster')}}" style="color: #000;font-weight:bold;color:red;">VIEW MEMBERS</a>
														</div>
													</div>
												</div>
											</header>
										</section>
										<section class="panel panel-group">
											<header class="panel-heading bg-primary" style="    background: #edeef9;border: 2px solid #002768;color: #000;border-radius: 28px;">
						
												<div class="widget-profile-info">
													<div class="profile-picture">
														<img src="{!! asset('images/River-Cess.jpg') !!}">
													</div>
													<div class="profile-info">
														<h4 class="name text-semibold">River-Cess </h4>
														<h5 class="role">Total Members: {!! $riverCessTotal !!}</h5>
														<h5 class="role">Female: {!! $riverCessFemale !!}</h5>
														<h5 class="role">Male: {!! $riverCessMale !!}</h5>
														<div class="profile-footer">
															<a href="{{ URL::to('home/riverCessRooster')}}" style="color: #000;font-weight:bold;color:red;">VIEW MEMBERS</a>
														</div>
													</div>
												</div>
											</header>
										</section>
										<section class="panel panel-group">
											<header class="panel-heading bg-primary" style="    background: #edeef9;border: 2px solid #226734;color: #000;border-radius: 28px;">
						
												<div class="widget-profile-info">
													<div class="profile-picture">
														<img src="{!! asset('images/River-Gee.jpg') !!}">
													</div>
													<div class="profile-info">
														<h4 class="name text-semibold">River-Gee</h4>
														<h5 class="role">Total Members: {!! $riverGeeTotal !!}</h5>
														<h5 class="role">Female: {!! $riverGeeFemale !!}</h5>
														<h5 class="role">Male: {!! $riverGeeMale !!}</h5>
														<div class="profile-footer">
															<a href="{{ URL::to('home/riverGeeRooster')}}" style="color: #000;font-weight:bold;color:red;">VIEW MEMBERS</a>
														</div>
													</div>
												</div>
											</header>
										</section>
										<section class="panel panel-group">
											<header class="panel-heading bg-primary" style="    background: #edeef9;border: 2px solid #226734;color: #000;border-radius: 28px;">
						
												<div class="widget-profile-info">
													<div class="profile-picture">
														<img src="{!! asset('images/Sinoe.jpg') !!}">
													</div>
													<div class="profile-info">
														<h4 class="name text-semibold">Sinoe</h4>
														<h5 class="role">Total Members: {!! $sinoeTotal !!}</h5>
														<h5 class="role">Female: {!! $sinoeFemale !!}</h5>
														<h5 class="role">Male: {!! $sinoeMale !!}</h5>
														<div class="profile-footer">
															<a href="{{ URL::to('home/sinoeRooster')}}" style="color: #000;font-weight:bold;color:red;">VIEW MEMBERS</a>
														</div>
													</div>
												</div>
											</header>
										</section>

									</div>
							</div>
@endsection