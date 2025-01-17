@extends('english.layout.main')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
<!--================ Start top-section Area =================-->
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5c6996ef6095508f"></script>
<!-- ===============================  Post image ======================================== -->
<style type="text/css">
    .banner-area{background:url('{{ asset($Post->image) }}') no-repeat;background-size:cover}
</style>
    <section class="banner-area relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row align-items-center banner-content">
                <div class="col-lg-8">
                    <!-- ===============================  Post ======================================== -->
                    <h1 class="text-white">{!! $Post->Title_en !!}</h1>
                    <!-- ===============================  Post  ======================================== -->
                </div>
            </div>
        </div>
    </section>
    <!--================ End top-section Area =================-->
  <!--================Blog Area =================-->
  <section class="blog_area single-post-area section-gap">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 posts-list">
          <div class="single-post">
            <div class="feature-img">
              <!-- ===============================  Post  ======================================== -->
              <img class="img-fluid" src="{{ asset($Post->image) }}" alt="">
            </div>
            <div class="blog_details">
              <!-- ===============================  Post  ======================================== -->
              <h2>{!! $Post->Title_en !!}</h2>
              <ul class="blog-info-link mt-3 mb-4">
                <!-- ===============================  Post  ======================================== -->
                @if(isset($Post->Category->title))
                <li><a><i class="icon-material-outline-assignment"></i> {{ $Post->Category->title }}</a></li>
                @else
                <li><a><i class="icon-material-outline-assignment"></i> No Category</a></li>
                @endif
                @if(isset($Comments)) 
                 <li><a><i class="fa fa-comment-o"></i> {{ count($Comments) }} Commentaires</a></li>
                 @else
                 <li><a><i class="fa fa-comment-o"></i> 0 Commentaires</a></li>
                 @endif
                <!-- ===============================  Post  ======================================== -->
              </ul>
              <p class="excert">
                <!-- ===============================  Post  ======================================== -->
                {!! $Post->body_en !!}
                <!-- ===============================  Post  ======================================== -->
              </p>
            </div>
          </div>
          <div class="navigation-top">
            <div class="d-sm-flex justify-content-between">
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox"></div>
            </div>
          </div>
          <div class="comments-area">
            <!-- ===============================  Post  ======================================== -->
            @if(isset($Comments)) 
             <h4>{{ count($Comments) }} Commentaires</h4>
             @else
             <h4>0 Commentaires</h4>
             @endif
             <!-- ===============================  Post  ======================================== -->
              <!-- =========================================== Post Comments ============================ -->
              @foreach($Comments as $comment)
              <div class="comment-list">
              <div class="single-comment justify-content-between d-flex">
                <div class="user justify-content-between d-flex">
                  <div class="thumb">
                    <!-- ===============================  Post  ======================================== -->
                    <img src="{{ asset($comment->User->avatar) }}" alt="">
                  </div>
                  <div class="desc">
                    <p class="comment">
                      <!-- ===============================  Post  ======================================== -->
                      {{ $comment->Comment }}
                    </p>
                    <div class="d-flex justify-content-between">
                      <div class="d-flex align-items-center">
                        <h5>
                          <!-- ===============================  Post  ======================================== -->
                          <a>{{ $comment->User->name }}</a>
                        </h5>
                        <!-- ===============================  Post  ======================================== -->
                        <p class="date">{{ date('M j, Y', strtotime($comment->created_at)) }} </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </div>
              @endforeach
              <!-- =========================================== Post Comments ============================ -->
          </div>
          <div class="comment-form">
            <!--   ================  Bed Messagge ================  -->
        @if(session('Messagge'))
        <div class="alert alert-success" role="alert">
          Toutes nos félicitations. Votre commentaire a été envoyé avec succès
        </div>
        @endif
        <!--   ================  Messagge ================  -->
            <h4>Laisser une réponse</h4>
            <form class="form-contact comment_form" method="post" action="{{ route('Comments.store')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <input type="text" name="Post_id" hidden="" value="{!! $Post->id !!}">
                    <textarea class="form-control w-100" name="Comment" cols="30" rows="9" placeholder="Écrire un commentaire"></textarea>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <button type="submit" class="button button-contactForm primary-btn">Envoyer</button>
              </div>
            </form>
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