@extends('asso.layouts.main')

@section('dashboardcontent')
<!-- ====================== links Posts Content Start store =============================================== -->
<div class="main-content-container container-fluid px-4">
    <!-- Page Header -->
    <!-- ====================== links Posts Content Start store =============================================== -->
    <div class="page-header row no-gutters py-4">
      <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Blog posts</span>
        <h3 class="page-title"><i class=" icon-feather-file-text"></i> Add Post</h3>
      </div>
    </div>
    <!-- ====================== links Posts Content Start store =============================================== -->
    <!-- End Page Header -->
    <div class="row">
      <div class="col-lg-9 col-md-12">
        <!-- Add New Post Form -->
        <div class="card card-small mb-3">
          <div class="card-body">
              <!-- ====================== links Posts Content Start store =============================================== -->
              <form class="add-new-post" action="{{ route('assodashboardPosts.update',$Post->slug) }}" method="POST"  role="form" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <!-- ====================== links Posts Content Start store =============================================== -->
              <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Post Title" name="Title_en" value="{{ $Post->Title_en }}">
              <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Post Slug" name="slug" value="{{ $Post->slug }}">
              <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Post Seo Title" name="seo_title" value="{{ $Post->seo_title }}">
              <!-- ====================== links Posts Content Start store =============================================== -->
              <div class="form-control form-control-lg mb-3">
                <label for="displayEmail">Author Post</label>
                <select class="custom-select" name="author_id">
                  <!-- ====================== links Posts Content Start store =============================================== -->
                @if(isset($Post->User->name))
                 <option value="{{ $Post->author_id }}" selected="">{{ $Post->User->name }}</option>
                @else
                <!-- ====================== links Posts Content Start store =============================================== -->
                 <option value="1" selected="">NO User</option>
                @endif
                <!-- ====================== links Posts Content Start store =============================================== -->
                @if($Users !== NULL)
                @foreach($Users as $User)
                  <option value="{{ $User->id }}">{{ $User->name }}</option>
                @endforeach
                @else
                 <option value="1" selected="">NO User</option>
                @endif
                </select>
                <!-- ====================== links Posts Content Start store =============================================== -->
              </div>
              <!-- ====================== links Posts Content Start store =============================================== -->
              <div class="form-control form-control-lg mb-3">
                <label for="Category">Category Post</label>
                <select class="custom-select" name="category_id">
                 @if(isset($Post->Category->title))
                 <option  value="{{ $Post->category_id }}" selected="">{{ $Post->Category->title }}</option>
                 @else
                 <option value="1" selected="">NO Category</option>
                 @endif
                 @if($Categores !== NULL)
                 @foreach($Categores as $Category)
                    <option value="{{ $Category->id }}">{{ $Category->title }}</option>
                  @endforeach
                  @else
                  <option value="1" selected="">NO Category</option>
                  @endif
                </select>
                <!-- ====================== links Posts Content Start store =============================================== -->
              </div>
               <textarea value="{{ $Post->body_en }}" class="form-control form-control-lg mb-3" type="text" name="body_en" rows="15">{{ $Post->body_en }}</textarea>
              <div class="row mt-3">
            </div>
          </div>
        </div>
        <!-- / Add New Post Form -->
      </div>
      <!-- ====================== links Posts Content Start store =============================================== -->
      <div class="col-lg-3 col-md-12">
        <!-- Post Overview -->
        <div class='card card-small mb-3'>
          <div class="card-header border-bottom">
            <h6 class="m-0">Actions</h6>
          </div>
          <div class='card-body p-0'>
            <ul class="list-group list-group-flush">
              <li class="list-group-item p-3">
                <span class="d-flex mb-2">
                  <i class="icon-line-awesome-flag mr-1"></i>
                  <strong class="mr-1">Statut:</strong> Brouillon
                </span>
                <span class="d-flex mb-2">
                  <i class="icon-material-outline-visibility mr-1"></i>
                  <strong class="mr-1">Visibilité:</strong>
                  <strong class="text-success">Public</strong>
                </span>
                <span class="d-flex mb-2">
                  <i class="icon-line-awesome-calendar mr-1"></i>
                  <strong class="mr-1">Calendrier:</strong> Maintenant
                </span>
                <span class="d-flex">
                  <i class="icon-line-awesome-bullseye mr-1"></i>
                  <strong class="mr-1">Lisibilité:</strong>
                  <strong class="text-warning">Ok</strong>
                </span>
              </li>
              <li class="list-group-item d-flex px-3">
                <button class="btn btn-sm btn-outline-accent">
                  <i class="icon-material-outline-description"></i> Postes</button>
                  <button class="btn btn-sm btn-accent ml-auto" type="submit">
                    <i class="icon-feather-file-plus"></i> Publier</button>
                  </li>
                </ul>
              </div>
            </div>
            <!-- ====================== links Posts Content Start store =============================================== -->
            <!-- / Post Overview -->
            <!-- Post Overview -->
            <div class='card card-small mb-3'>
              <div class="card-header border-bottom">
                <h6 class="m-0"><i class="icon-line-awesome-image"></i>Publier une image</h6>
              </div>
              <div class='card-body p-0'>
                <ul class="list-group list-group-flush">
                  <div class="edit-post-details__avatar m-auto">
                    <img src="{!! asset($Post->image) !!}" alt="Post image">
                    <label class="edit-post-details__avatar__change">
                      <i class="material-icons   icon-material-outline-add-a-photo mr-1"></i>
                      <input type="file" name="image" hidden="" value="{{ $Post->image }}">
                    </label>
                  </div>
                </ul>
                </form>
              </div>
              <!-- ====================== links Posts Content Start store =============================================== -->
            </div>
            <!-- / Post Overview -->
          </div>
        </div>
      </div>
<!-- ===================================================== links Posts Content Start store =============================================== -->
@endsection
