@extends('english.layout.main')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
	 <!--================ start banner Area =================-->
	 <style type="text/css">
		.banner-area{background:url('{{ asset(Setting()->HomePicture) }}') no-repeat;background-size:cover}
	</style>
	<!--================ Start top-section Area =================-->
	<section class="banner-area relative">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row align-items-center banner-content">
				<div class="col-lg-5">
					<h1 class="text-white">Tous les Postes</h1>
					<!-- =============================== Setting BASE ======================================== -->
					<p>{!! Setting()->content_blog_en !!}</p>
				</div>
			</div>
		</div>
	</section>
	<!--================ End banner Area =================-->
	<!--================Blog Area =================-->
	<section class="blog_area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb-5 mb-lg-0">
					<div class="blog_left_sidebar">
						<!-- =============================== Posts ======================================== -->
						@foreach($Posts as $Post)
						<article class="blog_item">
							<div class="blog_item_img">
								<!-- =============================== Posts ======================================== -->
								<img class="card-img rounded-0" src="{!! asset($Post->image) !!}" alt="{!! substr($Post->Title_en, 0, 190) !!}">
								<a href="{!! url('Posts') !!}/{!! $Post->slug !!}" class="blog_item_date">
									<!-- =============================== Posts ======================================== -->
									<h3>{{ date('j', strtotime($Post->created_at)) }}</h3>
									<!-- =============================== Posts ======================================== -->
									<p>{{ date('M', strtotime($Post->created_at)) }}</p>
									<!-- =============================== Posts ======================================== -->
								</a>
							</div>
							<div class="blog_details">
								<!-- =============================== Posts ======================================== -->
								<a class="d-inline-block" href="{!! url('Posts') !!}/{!! $Post->slug !!}">
									<h2>{!! substr($Post->Title_en, 0, 190) !!}</h2>
								</a>
								<!-- =============================== Posts ======================================== -->
								<p>{!! substr($Post->body_en, 0, 190) !!}</p>
								<ul class="blog-info-link">
									<!-- =============================== Posts ======================================== -->
									@if(isset($Post->Category->title))
									<li><a><i class="icon-material-outline-assignment"></i> {{ $Post->Category->title }}</a></li>
									@else
									<li><a><i class="icon-material-outline-assignment"></i> No Category</a></li>
									@endif
									<!-- =============================== Comments Posts ======================================== -->
									 @if(isset($Post->Comments)) 
									 <li><a><i class="fa fa-comment-o"></i> {{ count($Post->Comments) }} Commentaires</a></li>
									 @else
									 <li><a><i class="fa fa-comment-o"></i> 0 Commentaires</a></li>
									 @endif
									<!-- =============================== Comments Posts ======================================== -->
								</ul>
							</div>
						</article>
						@endforeach
						<!-- ===============================  Posts ======================================== -->
						{!! $Posts->links() !!}
						<!-- ===============================  Posts ======================================== -->
					</div>
				</div>
				<div class="col-lg-4">
					<div class="blog_right_sidebar">
					  <aside class="single_sidebar_widget popular_post_widget">
						<h3 class="widget_title">Post récent</h3>
						@foreach($RentPosts as $RentPost)
						<div class="media post_item">
						  <!-- Appliquer la classe img-fluid pour rendre l'image réactive -->
						  <img class="img-fluid" src="{!! asset($RentPost->image) !!}" alt="post">
						  <div class="media-body">
							<a href="{!! url('Posts') !!}/{!! $RentPost->slug !!}">
							  <h3>{!! substr($RentPost->Title_en, 0, 190) !!}</h3>
							</a>
							<p>{{ date('M j, Y', strtotime($RentPost->created_at)) }}</p>
						  </div>
						</div>
						@endforeach
					  </aside>
					</div>
				</div>  
			</div>
		</div>
	</section>
	<!--================Blog Area =================-->
<!-- ============================================================= Content end   ============================================================= -->
@endsection