@extends('layouts.app')
<style type="text/css">
	.panel-actions a {
    background-color: transparent;
    border-radius: 2px;
    color: #0088cc !important;
    font-size: 13px;
    height: 24px;
    line-height: 24px;
    text-align: center;
    width: 98px !important;
}
.panel-actions a:hover{
	color: red !important;
}
.panel-heading {
    padding: 18px 18px 0px 18px !important;
    position: relative;
}
</style>
@section('page')
<h2>View All Districts</h2>
@endsection('page')

@section('content')

<div class="col-md-6">
							<section class="panel panel-featured">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down">View Districts</a>
									</div>

									<h2 class="panel-title">Bomi</h2>
									<p>District# 1 - 3</p>
								</header>
								<div class="panel-body" style="display: block;">
									<code>Dist.#1 Members:{!!$bomi1!!}  Female:{!!$bomi1f!!}  Male:{!!$bomi1m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/bomiDist1') }}">Print <i class="fa fa-print"></i></a></code>
<br>
									<code>Dist.#2 Members:{!!$bomi2!!}  Female:{!!$bomi2f!!}  Male:{!!$bomi2m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/bomiDist2') }}">Print <i class="fa fa-print"></i></a></code>
									<br>
									<code>Dist.#3 Members:{!!$bomi3!!}  Female:{!!$bomi3f!!}  Male:{!!$bomi3m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/bomiDist3') }}">Print <i class="fa fa-print"></i></a></code>
								</div>
							</section>

							<section class="panel panel-featured">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down">View Districts</a>
									</div>

									<h2 class="panel-title">Bong</h2>
									<p>District# 1 - 7</p>
								</header>
								<div class="panel-body" style="display: block;">
									<code>Dist.#1 Members:{!!$bong1!!}  Female:{!!$bong1f!!}  Male:{!!$bong1m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/bongDist1') }}">Print <i class="fa fa-print"></i></a></code>
<br>
									<code>Dist.#2 Members:{!!$bong2!!}  Female:{!!$bong2f!!}  Male:{!!$bong2m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/bongDist2') }}">Print <i class="fa fa-print"></i></a></code>
									<br>
									<code>Dist.#3 Members:{!!$bong3!!}  Female:{!!$bong3f!!}  Male:{!!$bong3m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/bongDist3') }}">Print <i class="fa fa-print"></i></a></code>
									<br>
									<code>Dist.#4 Members:{!!$bong4!!}  Female:{!!$bong4f!!}  Male:{!!$bong4m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/bongDist4') }}">Print <i class="fa fa-print"></i></a></code>
									<br>
									<code>Dist.#5 Members:{!!$bong5!!}  Female:{!!$bong5f!!}  Male:{!!$bong5m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/bongDist5') }}">Print <i class="fa fa-print"></i></a></code>
									<br>
									<code>Dist.#6 Members:{!!$bong6!!}  Female:{!!$bong6f!!}  Male:{!!$bong6m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/bongDist6') }}">Print <i class="fa fa-print"></i></a></code>
									<br>
									<code>Dist.#7 Members:{!!$bong7!!}  Female:{!!$bong7f!!}  Male:{!!$bong7m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/bongDist7') }}">Print <i class="fa fa-print"></i></a></code>
								</div>
							</section>

							<section class="panel panel-featured">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down">View Districts</a>
									</div>

									<h2 class="panel-title">Gbarpolu</h2>
									<p>District# 1 - 3</p>
								</header>
								<div class="panel-body" style="display: block;">
									<code>Dist.#1 Members:{!!$gbarpolu1!!}  Female:{!!$gbarpolu1f!!}  Male:{!!$gbarpolu1m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/gbarpoluDist1') }}">Print <i class="fa fa-print"></i></a></code>
<br>
									<code>Dist.#2 Members:{!!$gbarpolu2!!}  Female:{!!$gbarpolu2f!!}  Male:{!!$gbarpolu2m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/gbarpoluDist2') }}">Print <i class="fa fa-print"></i></a></code>
									<br>
									<code>Dist.#3 Members:{!!$gbarpolu3!!}  Female:{!!$gbarpolu3f!!}  Male:{!!$gbarpolu3m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/gbarpoluDist3') }}">Print <i class="fa fa-print"></i></a></code>
								</div>
							</section>

							<section class="panel panel-featured">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down">View Districts</a>
									</div>

									<h2 class="panel-title">Grand-Bassa</h2>
									<p>District# 1 - 5</p>
								</header>
								<div class="panel-body" style="display: block;">
									<code>Dist.#1 Members:{!!$bassa1!!}  Female:{!!$bassa1f!!}  Male:{!!$bassa1m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/bassaDist1') }}">Print <i class="fa fa-print"></i></a></code>
<br>
									<code>Dist.#2 Members:{!!$bassa2!!}  Female:{!!$bassa2f!!}  Male:{!!$bassa2m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/bassaDist2') }}">Print <i class="fa fa-print"></i></a></code>
									<br>
									<code>Dist.#3 Members:{!!$bassa3!!}  Female:{!!$bassa3f!!}  Male:{!!$bassa3m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/bassaDist3') }}">Print <i class="fa fa-print"></i></a></code>
									<br>
									<code>Dist.#4 Members:{!!$bassa4!!}  Female:{!!$bassa4f!!}  Male:{!!$bassa4m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/bassaDist4') }}">Print <i class="fa fa-print"></i></a></code>
									<br>
									<code>Dist.#5 Members:{!!$bassa5!!}  Female:{!!$bassa5f!!}  Male:{!!$bassa5m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/bassaDist5') }}">Print <i class="fa fa-print"></i></a></code>
								</div>
							</section>

							<section class="panel panel-featured">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down">View Districts</a>
									</div>

									<h2 class="panel-title">Grand-Cape-Mount</h2>
									<p>District# 1 - 3</p>
								</header>
								<div class="panel-body" style="display: block;">
									<code>Dist.#1 Members:{!!$cape1!!}  Female:{!!$cape1f!!}  Male:{!!$cape1m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/capeDist1') }}">Print <i class="fa fa-print"></i></a></code>
<br>
									<code>Dist.#2 Members:{!!$cape2!!}  Female:{!!$cape2f!!}  Male:{!!$cape2m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/capeDist2') }}">Print <i class="fa fa-print"></i></a></code>
									<br>
									<code>Dist.#3 Members:{!!$cape3!!}  Female:{!!$cape3f!!}  Male:{!!$cape3m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/capeDist3') }}">Print <i class="fa fa-print"></i></a></code>
								</div>
							</section>

							<section class="panel panel-featured">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down">View Districts</a>
									</div>

									<h2 class="panel-title">Grand-Gedeh</h2>
									<p>District# 1 - 3</p>
								</header>
								<div class="panel-body" style="display: block;">
									<code>Dist.#1 Members:{!!$gedeh1!!}  Female:{!!$gedeh1f!!}  Male:{!!$gedeh1m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/gedehDist1') }}">Print <i class="fa fa-print"></i></a></code>
<br>
									<code>Dist.#2 Members:{!!$gedeh2!!}  Female:{!!$gedeh2f!!}  Male:{!!$gedeh2m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/gedehDist2') }}">Print <i class="fa fa-print"></i></a></code>
									<br>
									<code>Dist.#3 Members:{!!$gedeh3!!}  Female:{!!$gedeh3f!!}  Male:{!!$gedeh3m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/gedehDist3') }}">Print <i class="fa fa-print"></i></a></code>
								</div>
							</section>

							<section class="panel panel-featured">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down">View Districts</a>
									</div>

									<h2 class="panel-title">Grand-Kru</h2>
									<p>District# 1 - 2</p>
								</header>
								<div class="panel-body" style="display: block;">
									<code>Dist.#1 Members:{!!$kru1!!}  Female:{!!$kru1f!!}  Male:{!!$kru1m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/kruDist1') }}">Print <i class="fa fa-print"></i></a></code>
<br>
									<code>Dist.#2 Members:{!!$kru2!!}  Female:{!!$kru2f!!}  Male:{!!$kru2m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/kruDist2') }}">Print <i class="fa fa-print"></i></a></code>
								</div>
							</section>

							<section class="panel panel-featured">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down">View Districts</a>
									</div>

									<h2 class="panel-title">Lofa</h2>
									<p>District# 1 - 5</p>
								</header>
								<div class="panel-body" style="display: block;">
									<code>Dist.#1 Members:{!!$lofa1!!}  Female:{!!$lofa1f!!}  Male:{!!$lofa1m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/lofaDist1') }}">Print <i class="fa fa-print"></i></a></code>
<br>
									<code>Dist.#2 Members:{!!$lofa2!!}  Female:{!!$lofa2f!!}  Male:{!!$lofa2m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/lofaDist2') }}">Print <i class="fa fa-print"></i></a></code>
									<br>
									<code>Dist.#3 Members:{!!$lofa3!!}  Female:{!!$lofa3f!!}  Male:{!!$lofa3m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/lofaDist3') }}">Print <i class="fa fa-print"></i></a></code>
									<br>
									<code>Dist.#4 Members:{!!$lofa4!!}  Female:{!!$lofa4f!!}  Male:{!!$lofa4m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/lofaDist4') }}">Print <i class="fa fa-print"></i></a></code>
									<br>
									<code>Dist.#5 Members:{!!$lofa5!!}  Female:{!!$lofa5f!!}  Male:{!!$lofa5m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/lofaDist5') }}">Print <i class="fa fa-print"></i></a></code>
								</div>
							</section>
						</div>


						<div class="col-md-6">
							<section class="panel panel-featured">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down">View Districts</a>
									</div>

									<h2 class="panel-title">Margibi</h2>
									<p>District# 1 - 5</p>
								</header>
								<div class="panel-body" style="display: block;">
									<code>Dist.#1 Members:{!!$Margibi1!!}  Female:{!!$Margibi1f!!}  Male:{!!$Margibi1m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/margibiDist1') }}">Print <i class="fa fa-print"></i></a></code>
<br>
									<code>Dist.#2 Members:{!!$Margibi2!!}  Female:{!!$Margibi2f!!}  Male:{!!$Margibi2m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/margibiDist2') }}">Print <i class="fa fa-print"></i></a></code>
									<br>
									<code>Dist.#3 Members:{!!$Margibi3!!}  Female:{!!$Margibi3f!!}  Male:{!!$Margibi3m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/margibiDist3') }}">Print <i class="fa fa-print"></i></a></code>
									<br>
									<code>Dist.#4 Members:{!!$Margibi4!!}  Female:{!!$Margibi4f!!}  Male:{!!$Margibi4m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/margibiDist4') }}">Print <i class="fa fa-print"></i></a></code>
									<br>
									<code>Dist.#5 Members:{!!$Margibi5!!}  Female:{!!$Margibi5f!!}  Male:{!!$Margibi5m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/margibiDist5') }}">Print <i class="fa fa-print"></i></a></code>
								</div>
							</section>

							<section class="panel panel-featured">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down">View Districts</a>
									</div>

									<h2 class="panel-title">Maryland</h2>
									<p>District# 1 - 3</p>
								</header>
								<div class="panel-body" style="display: block;">
									<code>Dist.#1 Members:{!!$mary1!!}  Female:{!!$mary1f!!}  Male:{!!$mary1m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/maryDist1') }}">Print <i class="fa fa-print"></i></a></code>
<br>
									<code>Dist.#2 Members:{!!$mary2!!}  Female:{!!$mary2f!!}  Male:{!!$mary2m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/maryDist2') }}">Print <i class="fa fa-print"></i></a></code>
									<br>
									<code>Dist.#3 Members:{!!$mary3!!}  Female:{!!$mary3f!!}  Male:{!!$mary3m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/maryDist3') }}">Print <i class="fa fa-print"></i></a></code>
								</div>
							</section>

							<section class="panel panel-featured">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down">View Districts</a>
									</div>

									<h2 class="panel-title">Montserrado</h2>
									<p>District# 1 - 17</p>
								</header>
								<div class="panel-body" style="display: block;">
									<code>Dist.#1 Members:{!!$mont1!!}  Female:{!!$mont1f!!}  Male:{!!$mont1m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/montDist1') }}">Print <i class="fa fa-print"></i></a></code>
<br>
									<code>Dist.#2 Members:{!!$mont2!!}  Female:{!!$mont2f!!}  Male:{!!$mont2m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/montDist2') }}">Print <i class="fa fa-print"></i></a></code>
									<br>
									<code>Dist.#3 Members:{!!$mont3!!}  Female:{!!$mont3f!!}  Male:{!!$mont3m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/montDist3') }}">Print <i class="fa fa-print"></i></a></code>
									<br>
									<code>Dist.#4 Members:{!!$mont4!!}  Female:{!!$mont4f!!}  Male:{!!$mont4m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/montDist4') }}">Print <i class="fa fa-print"></i></a></code>
									<br>
									<code>Dist.#5 Members:{!!$mont5!!}  Female:{!!$mont5f!!}  Male:{!!$mont5m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/montDist5') }}">Print <i class="fa fa-print"></i></a></code>
									<br>
									<code>Dist.#6 Members:{!!$mont6!!}  Female:{!!$mont6f!!}  Male:{!!$mont6m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/montDist6') }}">Print <i class="fa fa-print"></i></a></code>
									<br>
									<code>Dist.#7 Members:{!!$mont7!!}  Female:{!!$mont7f!!}  Male:{!!$mont7m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/montDist7') }}">Print <i class="fa fa-print"></i></a></code>
								<br>
									<code>Dist.#8 Members:{!!$mont8!!}  Female:{!!$mont8f!!}  Male:{!!$mont8m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/montDist8') }}">Print <i class="fa fa-print"></i></a></code>
								<br>
									<code>Dist.#9 Members:{!!$mont9!!}  Female:{!!$mont9f!!}  Male:{!!$mont9m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/montDist9') }}">Print <i class="fa fa-print"></i></a></code>
								<br>
									<code>Dist.#10 Members:{!!$mont10!!}  Female:{!!$mont10f!!}  Male:{!!$mont10m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/montDist10') }}">Print <i class="fa fa-print"></i></a></code>
								<br>
									<code>Dist.#11 Members:{!!$mont11!!}  Female:{!!$mont11f!!}  Male:{!!$mont11m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/montDist11') }}">Print <i class="fa fa-print"></i></a></code>
								<br>
									<code>Dist.#12 Members:{!!$mont12!!}  Female:{!!$mont12f!!}  Male:{!!$mont12m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/montDist12') }}">Print <i class="fa fa-print"></i></a></code>
								<br>
									<code>Dist.#13 Members:{!!$mont13!!}  Female:{!!$mont13f!!}  Male:{!!$mont13m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/montDist13') }}">Print <i class="fa fa-print"></i></a></code>
								<br>
									<code>Dist.#14 Members:{!!$mont14!!}  Female:{!!$mont14f!!}  Male:{!!$mont14m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/montDist14') }}">Print <i class="fa fa-print"></i></a></code>
								<br>
									<code>Dist.#15 Members:{!!$mont15!!}  Female:{!!$mont15f!!}  Male:{!!$mont15m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/montDist15') }}">Print <i class="fa fa-print"></i></a></code>
								<br>
									<code>Dist.#16 Members:{!!$mont16!!}  Female:{!!$mont16f!!}  Male:{!!$mont16m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/montDist16') }}">Print <i class="fa fa-print"></i></a></code>
								<br>
									<code>Dist.#17 Members:{!!$mont17!!}  Female:{!!$mont17f!!}  Male:{!!$mont17m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/montDist17') }}">Print <i class="fa fa-print"></i></a></code>
								</div>
							</section>

							<section class="panel panel-featured">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down">View Districts</a>
									</div>

									<h2 class="panel-title">Nimba</h2>
									<p>District# 1 - 9</p>
								</header>
								<div class="panel-body" style="display: block;">
									<code>Dist.#1 Members:{!!$nimba1!!}  Female:{!!$nimba1f!!}  Male:{!!$nimba1m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/nimbaDist1') }}">Print <i class="fa fa-print"></i></a></code>
<br>
									<code>Dist.#2 Members:{!!$nimba2!!}  Female:{!!$nimba2f!!}  Male:{!!$nimba2m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/nimbaDist2') }}">Print <i class="fa fa-print"></i></a></code>
									<br>
									<code>Dist.#3 Members:{!!$nimba3!!}  Female:{!!$nimba3f!!}  Male:{!!$nimba3m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/nimbaDist3') }}">Print <i class="fa fa-print"></i></a></code>
									<br>
									<code>Dist.#4 Members:{!!$nimba4!!}  Female:{!!$nimba4f!!}  Male:{!!$nimba4m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/nimbaDist4') }}">Print <i class="fa fa-print"></i></a></code>
									<br>
									<code>Dist.#5 Members:{!!$nimba5!!}  Female:{!!$nimba5f!!}  Male:{!!$nimba5m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/nimbaDist5') }}">Print <i class="fa fa-print"></i></a></code>
									<br>
									<code>Dist.#6 Members:{!!$nimba6!!}  Female:{!!$nimba6f!!}  Male:{!!$nimba6m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/nimbaDist6') }}">Print <i class="fa fa-print"></i></a></code>
									<br>
									<code>Dist.#7 Members:{!!$nimba7!!}  Female:{!!$nimba7f!!}  Male:{!!$nimba7m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/nimbaDist7') }}">Print <i class="fa fa-print"></i></a></code>
									<br>
									<code>Dist.#8 Members:{!!$nimba8!!}  Female:{!!$nimba8f!!}  Male:{!!$nimba8m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/nimbaDist8') }}">Print <i class="fa fa-print"></i></a></code>
									<br>
									<code>Dist.#9 Members:{!!$nimba9!!}  Female:{!!$nimba9f!!}  Male:{!!$nimba9m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/nimbaDist9') }}">Print <i class="fa fa-print"></i></a></code>
								</div>
							</section>

							<section class="panel panel-featured">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down">View Districts</a>
									</div>

									<h2 class="panel-title">River-Cess</h2>
									<p>District# 1 - 2</p>
								</header>
								<div class="panel-body" style="display: block;">
									<code>Dist.#1 Members:{!!$cess1!!}  Female:{!!$cess1f!!}  Male:{!!$cess1m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/cessDist1') }}">Print <i class="fa fa-print"></i></a></code>
<br>
									<code>Dist.#2 Members:{!!$cess2!!}  Female:{!!$cess2f!!}  Male:{!!$cess2m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/cessDist2') }}">Print <i class="fa fa-print"></i></a></code>
								</div>
							</section>

							<section class="panel panel-featured">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down">View Districts</a>
									</div>

									<h2 class="panel-title">River-Gee</h2>
									<p>District# 1 - 3</p>
								</header>
								<div class="panel-body" style="display: block;">
									<code>Dist.#1 Members:{!!$gee1!!}  Female:{!!$gee1f!!}  Male:{!!$gee1m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/geeDist1') }}">Print <i class="fa fa-print"></i></a></code>
<br>
									<code>Dist.#2 Members:{!!$gee2!!}  Female:{!!$gee2f!!}  Male:{!!$gee2m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/geeDist2') }}">Print <i class="fa fa-print"></i></a></code>
									<br>
									<code>Dist.#3 Members:{!!$gee3!!}  Female:{!!$gee3f!!}  Male:{!!$gee3m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/geeDist3') }}">Print <i class="fa fa-print"></i></a></code>
								</div>
							</section>


							<section class="panel panel-featured">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down">View Districts</a>
									</div>

									<h2 class="panel-title">Sinoe</h2>
									<p>District# 1 - 3</p>
								</header>
								<div class="panel-body" style="display: block;">
									<code>Dist.#1 Members:{!!$sinoe1!!}  Female:{!!$sinoe1f!!}  Male:{!!$sinoe1m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/sinoeDist1') }}">Print <i class="fa fa-print"></i></a></code>
<br>
									<code>Dist.#2 Members:{!!$sinoe2!!}  Female:{!!$sinoe2f!!}  Male:{!!$sinoe2m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/sinoeDist2') }}">Print <i class="fa fa-print"></i></a></code>
									<br>
									<code>Dist.#3 Members:{!!$sinoe3!!}  Female:{!!$sinoe3f!!}  Male:{!!$sinoe3m!!} <a style="background:#0088cc;color:#fff;padding:2px;" href="{{ URL::to('home/sinoeDist3') }}">Print <i class="fa fa-print"></i></a></code>
								</div>
							</section>
						</div>
@endsection('content')