@extends('english.layout.main')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
	<!--================ start banner Area =================-->
	<section class="home-banner-area relative" id="home" data-parallax="scroll" data-image-src="{{ asset(Setting()->HomePicture) }}">
		<div class="overlay-bg overlay"></div>
		<div class="container">
			<div class="row fullscreen justify-content-lg-begin">
				<div class="banner-content col-lg-7">
					<!-- ===============================  Home  ======================================== -->
					@if ($message = Session::get('success'))
					<div class="alert alert-success" role="alert">
			          {!! $message !!}
			        </div>
                    <?php Session::forget('success');?>
                    @endif
                    <!-- ===============================  Home  ======================================== -->
                    @if ($message = Session::get('error'))
                    <div class="alert alert-success" role="alert">
			          {!! $message !!}
			        </div>
                    <?php Session::forget('error');?>
                    <!-- ===============================  Home  ======================================== -->
                    @endif
					<h1 style="margin-top: 0px;">
						<!-- ===============================  Home  ======================================== -->
						{{ Setting()->title_home_en }} <br>
						
					</h1>
					<!-- ===============================  Home  ======================================== -->
					<h4>{!! Setting()->sub_title_home_en !!}</h4>
					<a href="{{ url('Contact')}}" class="primary-btn">
						Rejoignez-nous
						<i class="ti-angle-right ml-1"></i>
					</a>
					<!-- ===============================  Home  ======================================== -->
				</div>
			</div>
		</div>
	</section>
	
	<!--================ End banner Area =================-->
	<!--================ Start About Area =================-->
	<section class="about_area lite_bg">
		<!-- ===============================  Home  ======================================== -->
		<style type="text/css">
			.about_area .about_bg{
				background:linear-gradient(0deg, rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
				url('{{ asset(Setting()->AboutPicture) }}');background-repeat:no-repeat;background-size:cover;
				background-size:cover;
				position:absolute;right:0;top:0;height:100%;width:50%;z-index:-1}
		</style>
	</section>
	<!--================ End About Area =================-->

	<!--================ Start Features Area =================-->
	<section class="features-area section-gap-top">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="section-title">
						{{-- <span> Dignity, Opportunity, Hope </span> --}}
						<h2><span>A propos</span></h2>
					</div>
				</div>
			</div>
			<div class="row feature_inner">
				<div class="col-lg-4 col-md-6">
					<div class="feature-item">
						<i class="fi flaticon-compass"></i>
						<h4>Faire un don</h4>
						<!-- ===============================  Home  ======================================== -->
						<p>{!! Setting()->content_feature_en !!}</p>
						<!-- ===============================  Home  ======================================== -->
						<a href="{{ url('Contact') }}" class="primary-btn2">Voir plus</a>
						<!-- ===============================  Home  ======================================== -->
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="feature-item">
						<i class="fi flaticon-desk"></i>
						<h4>Donner de l'inspiration</h4>
						<!-- ===============================  Home  ======================================== -->
						<p>{!! Setting()->content_feature_two_en !!}</p>
						<!-- ===============================  Home  ======================================== -->
						<a href="{{ url('Contact') }}" class="primary-btn2">Voir plus</a>
						<!-- ===============================  Home  ======================================== -->
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="feature-item">
						<i class="fi flaticon-bathroom"></i>
						<h4>Devenez bénévole</h4>
						<!-- ===============================  Home  ======================================== -->
						<p>{!! Setting()->content_feature_three_en !!}</p>
						<!-- ===============================  Home  ======================================== -->
						<a href="{{ url('Contact') }}" class="primary-btn2">Voir plus</a>
						<!-- ===============================  Home  ======================================== -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Features Area =========================-->
	<!--================ Start Popular Causes Area =================-->
	<section class="popular-cause-area section-gap-top">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="section-title">
						{{-- <span> Dignity, Opportunity, Hope </span> --}}
						<h2><span>Crowfunding</span></h2>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- ===============================  Home  ======================================== -->
                @foreach($Causes as $Cause)      
				<div class="col-lg-4 col-md-6">
					<div class="card single-popular-cause">
						<div class="card-body">
							<figure>
								<!-- ===============================  Home  ======================================== -->
								<img class="card-img-top img-fluid" src="{!! asset($Cause->image) !!}" alt="Card image cap">
							</figure>
							<div class="card_inner_body">
								<!-- ===============================  Home  ======================================== -->
								 @if(isset($Cause->Category->title))
								 <div class="tag">{{ $Cause->Category->title }}</div>
		                         @else
		                           <div class="tag">No Category</div>
		                         @endif
		                         <!-- ===============================  Home  ======================================== -->
								<h4 class="card-title">{!! substr($Cause->Title_en, 0, 190) !!}</h4>
								<div class="d-flex justify-content-between raised_goal">
									<!-- ===============================  Home  ======================================== -->
									<p>Raised: {!! $Cause->Raised !!}</p>
									<!-- ===============================  Home  ======================================== -->
									<p><span>Goal: {!! $Cause->Goal !!}</span></p>
									<!-- ===============================  Home  ======================================== -->
								</div>
								<div class="d-flex justify-content-between donation align-items-center">
									<!-- ===============================  Home  ======================================== -->
									<a href="{!! url('Causes') !!}/{!! $Cause->slug !!}" class="primary-btn">Donate</a>
									<!-- ===============================  Home  ======================================== -->
									<p><span class="ti-heart mr-1"></span> {!! $Cause->Donors !!} Donors</p>
									<!-- ===============================  Home  ======================================== -->
								</div>
							</div>
						</div>
					</div>
				</div>
                @endforeach
                <!-- ===============================  Home  ======================================== -->
			</div>
		</div>
	</section>
	<!--================ End Popular Causes Area =================-->

	<!--================ Start callto Area =================-->
	<section class="callto-area section-gap relative" data-parallax="scroll" data-image-src="{{ asset(Setting()->HomePicture) }}">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<p class="top_text">Besoin de votre aide?</p>
					<div class="call-wrap mx-auto">
						<h1>Nous recherchons des bénévoles dans votre région !</h1>
						<p>Faites une différence dans votre communauté en rejoignant nos efforts pour résoudre des problèmes locaux. 
							Que ce soit pour des projets de géolocalisation, de crowdfunding ou de crowdsourcing, votre contribution est essentielle. Ensemble, nous pouvons apporter des changements positifs.
						</p>
						<!-- ===============================  Home  ======================================== -->
						<a href="{{ route('register') }}" class="primary-btn mt-5">
							Sign up
							<i class="ti-angle-right ml-1"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End callto Area ===========================-->
	<!--================ Start Upcoming Event Area =================-->
	<section class="upcoming_event_area section-gap-top">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="section-title">
						<h2><span>Crowdsourcing</span></h2>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- ===============================  Home Event ======================================== -->
                @foreach($Events as $Event)     
				<div class="col-lg-6">
					<div class="single_upcoming_event">
						<div class="row align-items-center">
							<div class="col-lg-6 col-md-6">
								<figure>
									<!-- ===============================  Home Event ======================================== -->
									<img class="img-fluid w-100" src="{!! asset($Event->image) !!}" alt="">
									<div class="date">
										<!-- ===============================  Home Event ======================================== -->
										{{ date('M j', strtotime($Event->created_at)) }}
									</div>
								</figure>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="content_wrapper">
									<h3 class="title">
										<!-- ===============================  Home Event ======================================== -->
										<a href="{!! url('Events') !!}/{!! $Event->slug !!}">{!! substr($Event->Title_en, 0, 190) !!}</a>
									</h3>
									<p>
										<!-- ===============================  Home Event ======================================== -->
										{!! substr($Event->Content_en, 0, 60) !!}
									</p>
									<!-- ===============================  Home Event ======================================== -->
									<div class="d-flex count_time justify-content-lg-start justify-content-center" id="clockdiv1">
										<div class="single_time">
											<h4 class="days">{!! $Event->Days !!}</h4>
											<p>Jours</p>
										</div>
										<div class="single_time">
											<h4 class="hours">{!! $Event->Hours !!}</h4>
											<p>Heures</p>
										</div>
										<div class="single_time">
											<h4 class="minutes">{!! $Event->Minutes !!}</h4>
											<p>Minutes</p>
										</div>
									</div>
									<!-- ===============================  Home Event ======================================== -->
									<a href="{!! url('Events') !!}/{!! $Event->slug !!}" class="primary-btn2">Voir plus</a>
								</div>
							</div>
						</div>
					</div>
				</div>
                @endforeach
                <!-- ===============================  Home Event ======================================== -->
			</div>
		</div>
	</section>
	<!--================ End Upcoming Event Area =================-->

	<!--================ Start Home Blog Area =================-->
	<section class="blog-area section-gap-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-12">
					<div class="home-blog-left">
						<h2>Dernières nouveautés
							 </h2>
						<p>
							<!-- ===============================  Home Post ======================================== -->
							{!! Setting()->content_blog_en !!} 
						</p>
						<a href="{{ url('Posts') }}" class="primary-btn2">Montre plus</a>
					</div>
				</div> 
				<!-- ===============================  Home Post ======================================== -->
                @foreach($Posts as $Post)
				<div class="col-lg-4 col-md-6 single-blog">
					<div class="thumb">
						
						<img class="img-fluid" src="{!! asset($Post->image) !!}" alt="{!! substr($Post->Title_en, 0, 190) !!}">
					</div>
					<div class="single-blog-info">
						<p class="tag">
							  <!-- ===============================  Home Post ======================================== -->
							  @if(isset($Post->Category->title))
                              <span>{{ $Post->Category->title }}</span>
                              @else
                              <span>No Category</span>
                              @endif
                              <!-- ===============================  Home Post ======================================== -->
							<span>{{ date('M j, Y', strtotime($Post->created_at)) }}</span>
						</p>
						<!-- ===============================  Home Post ======================================== -->
						<a href="{!! url('Posts') !!}/{!! $Post->slug !!}">
							<h4>{!! substr($Post->Title_en, 0, 190) !!}</h4>
						</a>
						<!-- ===============================  Home Post ======================================== -->
						<div class="meta-bottom d-flex">
					     @if(isset($Post->Comments)) 
			             <a class="mr-3"><span class="ti-comments mr-2"></span>{{ count($Post->Comments) }} Commentaires</a>
			             @else
			             <a class="mr-3"><span class="ti-comments mr-2"></span> 0 Commentaires</a>
			             @endif
						 <a href="{!! url('Posts') !!}/{!! $Post->slug !!}"> <span class="ti-eye mr-2"></span> Montre plus</a>
						</div>
						<!-- ===============================  Home Post ======================================== -->
					</div>
				</div>
                @endforeach
			</div>
		</div>
	</section>
	<!--================ End Home Blog Area =================-->
<!-- ============================================================= Content end   ============================================================= -->
@endsection