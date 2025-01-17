@extends('asso.layouts.main')

@section('dashboardcontent')
<!-- ================================ links Events Content Start ========================================================================= -->
<div class="main-content-container container-fluid px-4" id="editor">
  <!-- Page Header -->
  <div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
      <span class="text-uppercase page-subtitle">Crowdsourcing</span>
      <h3 class="page-title"><i class="icon-line-awesome-tags"></i> Add Crowdsourcing</h3>
    </div>
  </div>
  <!-- ================================ links Events Content Start ========================================================================= -->
  <!-- End Page Header -->
  <div class="row">
    <div class="col-lg-9 col-md-12">
      <!-- Add New Post Form -->
      <div class="card card-small mb-3">
        <div id="form-container" class="card-body">
          <!-- ================================ links Events Content Start ========================================================================= -->
          <form action="{{ route('assodashboardEvents.store') }}" method="POST"  role="form" enctype="multipart/form-data" class="add-new-post">
            @csrf
            <!-- ================================ links Events Content Start ========================================================================= -->
            <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Title" name="Title_en">
            <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Slug" name="slug">
            <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Days" name="Days">
            <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Hours" name="Hours">
            <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Minutes" name="Minutes">
            <input class="form-control form-control-lg mb-3" type="text" placeholder="Your Address" name="Address">
            <input class="form-control form-control-lg mb-3" type="text" placeholder="Your FinishTime" name="FinishTime">
            <input class="form-control form-control-lg mb-3" type="text" placeholder="Your StartTime" name="StartTime">
            <!-- ================================ links Events Content Start ========================================================================= -->
            <textarea class="form-control form-control-lg mb-3" type="text" name="Content_en" rows="10"></textarea>
            <!-- ================================ links Events Content Start ========================================================================= -->
            <div class="row mt-3">
            </div>
          </div>
        </div>
        <!-- / Add New Post Form -->
      </div>
      <!-- ================================ links Events Content Start ========================================================================= -->
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
              <a class="btn btn-sm btn-outline-accent" href="{{ route('assodashboardEvents.index') }}"><i class="icon-line-awesome-tags"></i> Crowdsourcing</a>
                  <button class="btn btn-sm btn-accent ml-auto" type="submit">
                    <i class="icon-feather-file-plus"></i> Publier</button>
                  </li>
                </ul>
              </div>
            </div>
            <!-- ================================ links Events Content Start ========================================================================= -->
            <!-- / Post Overview -->
            <!-- Post Overview -->
            <div class='card card-small mb-3'>
              <div class="card-header border-bottom">
                <h6 class="m-0"><i class="icon-line-awesome-image"></i> Crowdsourcing Image</h6>
              </div>
              <div class='card-body p-0'>
                <ul class="list-group list-group-flush">
                  <div class="edit-post-details__avatar m-auto">
                    <img src="{{ asset('dashboardassets/images/content-management/cover.png') }}" alt="Event Avatar">
                    <label class="edit-post-details__avatar__change">
                      <i class="material-icons   icon-material-outline-add-a-photo mr-1"></i>
                      <input type="file" name="image" hidden="">
                    </label>
                  </div>
                </ul>
              </form>
            </div>
            <!-- ================================ links Events Content Start ========================================================================= -->
          </div>
          <!-- / Post Overview -->
        </div>
      </div>
    </div>
    <!-- ================================ links Events Content Start ========================================================================= -->
    @endsection
