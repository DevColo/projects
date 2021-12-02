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
.panel-featured {
    border-top: 3px solid #3F51B5 !important;
}
code {
    padding: 3px 4px !important;
    font-size: 92% !important;
    color: #0b021d !important;
    background-color: #02126914 !important;
    border-radius: 4px;
    font-weight: bold !important;
}
</style>
@section('page')
<h2>View Age Group per County</h2>
@endsection('page')

@section('content')

<div class="col-md-6">
							<section class="panel panel-featured">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down">Age Group</a>
									</div>

									<h2 class="panel-title">Bomi</h2>
								</header>
								<div class="panel-body" style="display: block;">
									<code>18-24yrs: {!!$bomiAge1!!}</code>
									<br>
									<code>25-30yrs: {!!$bomiAge2!!}</code>
									<br>
									<code>31-40yrs: {!!$bomiAge3!!}</code>
									<br>
									<code>41yrs above: {!!$bomiAge4!!}</code>
								</div>
							</section>

							<section class="panel panel-featured">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down">Age Group</a>
									</div>

									<h2 class="panel-title">Bong</h2>
								</header>
								<div class="panel-body" style="display: block;">
									<code>18-24yrs: {!!$bongAge1!!}</code>
									<br>
									<code>25-30yrs: {!!$bongAge2!!}</code>
									<br>
									<code>31-40yrs: {!!$bongAge3!!}</code>
									<br>
									<code>41yrs above: {!!$bongAge4!!}</code>
								</div>
							</section>

							<section class="panel panel-featured">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down">Age Group</a>
									</div>

									<h2 class="panel-title">Gbarpolu</h2>
								</header>
								<div class="panel-body" style="display: block;">
									<code>18-24yrs: {!!$gbarpoluAge1!!}</code>
									<br>
									<code>25-30yrs: {!!$gbarpoluAge2!!}</code>
									<br>
									<code>31-40yrs: {!!$gbarpoluAge3!!}</code>
									<br>
									<code>41yrs above: {!!$gbarpoluAge4!!}</code>
								</div>
							</section>

							<section class="panel panel-featured">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down">Age Group</a>
									</div>

									<h2 class="panel-title">Grand-Bassa</h2>
								</header>
								<div class="panel-body" style="display: block;">
									<code>18-24yrs: {!!$bassaAge1!!} </code>
									<br>
									<code>25-30yrs: {!!$bassaAge2!!} </code>
									<br>
									<code>31-40yrs: {!!$bassaAge3!!} </code>
									<br>
									<code>41yrs above: {!!$bassaAge4!!} </code>
								</div>
							</section>

							<section class="panel panel-featured">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down">Age Group</a>
									</div>

									<h2 class="panel-title">Grand-Cape-Mount</h2>
								</header>
								<div class="panel-body" style="display: block;">
									<code>18-24yrs: {!!$capeAge1!!}</code>
									<br>
									<code>25-30yrs: {!!$capeAge2!!}</code>
									<br>
									<code>31-40yrs: {!!$capeAge3!!}</code>
									<br>
									<code>41yrs above: {!!$capeAge4!!}</code>
								</div>
							</section>

							<section class="panel panel-featured">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down">Age Group</a>
									</div>

									<h2 class="panel-title">Grand-Gedeh</h2>
								</header>
								<div class="panel-body" style="display: block;">
									<code>18-24yrs: {!!$gedehAge1!!} </code>
									<br>
									<code>25-30yrs: {!!$gedehAge2!!} </code>
									<br>
									<code>31-40yrs: {!!$gedehAge3!!} </code>
									<br>
									<code>41yrs above: {!!$gedehAge4!!} </code>
								</div>
							</section>

							<section class="panel panel-featured">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down">Age Group</a>
									</div>

									<h2 class="panel-title">Grand-Kru</h2>
								</header>
								<div class="panel-body" style="display: block;">
									<code>18-24yrs: {!!$kruAge1!!}</code>
									<br>
									<code>25-30yrs: {!!$kruAge2!!}</code>
									<br>
									<code>31-40yrs: {!!$kruAge3!!}</code>
									<br>
									<code>41yrs above: {!!$kruAge4!!}</code>
								</div>
							</section>

							<section class="panel panel-featured">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down">Age Group</a>
									</div>

									<h2 class="panel-title">Lofa</h2>
								</header>
								<div class="panel-body" style="display: block;">
									<code>18-24yrs: {!!$lofaAge1!!}</code>
									<br>
									<code>25-30yrs: {!!$lofaAge2!!}</code>
									<br>
									<code>31-40yrs: {!!$lofaAge3!!}</code>
									<br>
									<code>41yrs above: {!!$lofaAge4!!}</code>
								</div>
							</section>
						</div>


						<div class="col-md-6">
							<section class="panel panel-featured">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down">Age Group</a>
									</div>

									<h2 class="panel-title">Margibi</h2>
								</header>
								<div class="panel-body" style="display: block;">
									<code>18-24yrs: {!!$margibiAge1!!}</code>
									<br>
									<code>25-30yrs: {!!$margibiAge2!!}</code>
									<br>
									<code>31-40yrs: {!!$margibiAge3!!}</code>
									<br>
									<code>41yrs above: {!!$margibiAge4!!}</code>
								</div>
							</section>

							<section class="panel panel-featured">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down">Age Group</a>
									</div>

									<h2 class="panel-title">Maryland</h2>
								</header>
								<div class="panel-body" style="display: block;">
									<code>18-24yrs: {!!$maryAge1!!}</code>
									<br>
									<code>25-30yrs: {!!$maryAge2!!}</code>
									<br>
									<code>31-40yrs: {!!$maryAge3!!}</code>
									<br>
									<code>41yrs above: {!!$maryAge4!!}</code>
								</div>
							</section>

							<section class="panel panel-featured">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down">Age Group</a>
									</div>

									<h2 class="panel-title">Montserrado</h2>

								</header>
								<div class="panel-body" style="display: block;">
									<code>18-24yrs: {!!$montAge1!!}</code>
									<br>
									<code>25-30yrs: {!!$montAge2!!}</code>
									<br>
									<code>31-40yrs: {!!$montAge3!!}</code>
									<br>
									<code>41yrs above: {!!$montAge4!!}</code>
								</div>
							</section>

							<section class="panel panel-featured">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down">Age Group</a>
									</div>

									<h2 class="panel-title">Nimba</h2>
								</header>
								<div class="panel-body" style="display: block;">
									<code>18-24yrs: {!!$nimbaAge1!!} </code>
									<br>
									<code>25-30yrs: {!!$nimbaAge2!!} </code>
									<br>
									<code>31-40yrs: {!!$nimbaAge3!!} </code>
									<br>
									<code>41yrs above: {!!$nimbaAge4!!} </code>
								</div>
							</section>

							<section class="panel panel-featured">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down">Age Group</a>
									</div>

									<h2 class="panel-title">River-Cess</h2>
								</header>
								<div class="panel-body" style="display: block;">
									<code>18-24yrs: {!!$cessAge1!!}</code>
									<br>
									<code>25-30yrs: {!!$cessAge2!!}</code>
									<br>
									<code>31-40yrs: {!!$cessAge3!!}</code>
									<br>
									<code>41yrs above: {!!$cessAge4!!}</code>
								</div>
							</section>

							<section class="panel panel-featured">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down">Age Group</a>
									</div>

									<h2 class="panel-title">River-Gee</h2>
								</header>
								<div class="panel-body" style="display: block;">
									<code>18-24yrs: {!!$geeAge1!!}</code>
									<br>
									<code>25-30yrs: {!!$geeAge2!!}</code>
									<br>
									<code>31-40yrs: {!!$geeAge3!!}</code>
									<br>
									<code>41yrs above: {!!$geeAge4!!}</code>
								</div>
							</section>


							<section class="panel panel-featured">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down">Age Group</a>
									</div>

									<h2 class="panel-title">Sinoe</h2>
								</header>
								<div class="panel-body" style="display: block;">
									<code>18-24yrs: {!!$sinoeAge1!!} </code>
									<br>
									<code>25-30yrs: {!!$sinoeAge2!!} </code>
									<br>
									<code>31-40yrs: {!!$sinoeAge3!!} </code>
									<br>
									<code>41yrs above: {!!$sinoeAge4!!} </code>
								</div>
							</section>
						</div>
@endsection('content')