@extends('dashboard.layouts.main')

@section('dashboardcontent')
<!-- ============================================= links Content Start Setting ============================================= -->
@if ($message = Session::get('Settings'))
<div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
  <i class="icon-material-outline-check mx-2"></i>
  <strong>Success!</strong> {{ $message }}</div>
@endif
<!-- ============================================= links Content Start Setting ============================================= -->
  <div class="main-content-container container-fluid px-4">
    <div class="row">
      <div class="col-lg-12 mx-auto mt-4">
        <!-- Edit User Details Card -->
        <div class="card card-small edit-user-details mb-4">
          <div class="card-header p-0">
            <div class="edit-user-details__bg">
              <!-- ============================================= links Content Start Setting ============================================= -->
              <img src="{{ asset('dashboardassets/images/content-management/3.png') }}" alt="User Details Background Image">
            </div>
          </div>
          <div class="card-body p-0">
            <div class="border-bottom clearfix d-flex">
              <nav>
                <!-- ============================================= links Content Start Setting ============================================= -->
                <div class="nav nav-tabs mt-auto mx-4 pt-2" id="nav-tab" role="tablist" style="border-bottom: 0px solid #d1d4d8;">
                  <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Réglages généraux</a>
                  <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Description</a>
                </div>
                <!-- ============================================= links Content Start Setting ============================================= -->
              </nav>
            </div>
            <!-- ============================================= links Content Start Setting ============================================= -->
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <form class="py-4">
                  <div class="form-row mx-4">
                    <div class="col mb-3">
                      <h6 class="form-text m-0">General</h6>
                      <p class="form-text text-muted m-0">Configurez les détails généraux du site.</p>
                    </div>
                  </div>
                  <div class="form-row mx-4">
                    <div class="col-lg-8">
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="displayEmail">Afficher la langue publiquement</label>
                          <select class="custom-select">
                            <!-- ============================================= links Content Start Setting ============================================= -->
                            <option selected>{{ $Settings->Language }}</option>
                          </select>
                        </div>
                        <!-- ============================================= links Content Start Setting ============================================= -->
                        <div class="form-group col-md-6">
                          <label for="Site Title">Titre du site</label>
                          <input type="text" class="form-control" id="firstName" placeholder="Site Title" value="{{ $Settings->SiteTitle }}">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="lastName">Nom</label>
                          <input type="text" class="form-control" id="lastName" value="{{ $Settings->Name }}">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="userLocation">Localisation</label>
                          <div class="input-group input-group-seamless">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <i class="icon-material-outline-my-location"></i>
                              </div>
                            </div>
                            <input type="text" class="form-control" value="{{ $Settings->Location }}">
                          </div>
                        </div>
                        <!-- ============================================= links Content Start Setting ============================================= -->
                        <div class="form-group col-md-6">
                          <label for="userLocation">Google maps</label>
                          <div class="input-group input-group-seamless">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <i class="icon-material-outline-my-location"></i>
                              </div>
                            </div>
                            <input type="text" class="form-control" value="{{ $Settings->Googlemap }}">
                          </div>
                        </div>                    
                        <!-- ============================================= links Content Start Setting ============================================= -->
                        <div class="form-group col-md-6">
                          <label for="phoneNumber">Numéro de téléphone</label>
                          <div class="input-group input-group-seamless">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <i class="icon-feather-smartphone"></i>
                              </div>
                            </div>
                            <input type="text" class="form-control" id="phoneNumber" value="{{ $Settings->PhoneNumber }}">
                          </div>
                        </div>
                        <!-- ============================================= links Content Start Setting ============================================= -->
                        <div class="form-group col-md-6">
                          <label for="emailAddress">Email</label>
                          <div class="input-group input-group-seamless">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <i class="icon-material-outline-email"></i>
                              </div>
                            </div>
                            <input type="email" class="form-control" id="emailAddress" placeholder="Email@Email.com" value="{{ $Settings->Email }}">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <label for="userProfilePicture" class="text-center w-100 mb-4">Logo Picture</label>
                      <div class="edit-user-details__avatar m-auto">
                        <!-- ============================================= links Content Start Setting ============================================= -->
                        @if(isset(Setting()->LogoPicture))
                        <img src="{!! asset($Settings->LogoPicture) !!}" alt="Logo">
                        @else
                        <img src="{{ asset('dashboardassets/images/logo2.png') }}" alt="Logo">
                        @endif
                        <!-- ============================================= links Content Start Setting ============================================= -->
                      </div>
                    </div>
                  </div>
                  <div class="form-row mx-4">
                    <div class="form-group col-md-6">
                      <label for="userBio">Meta Description</label>
                      <textarea style="min-height: 87px;" id="userBio" name="userBio" class="form-control">{{ $Settings->MetaDescription }}</textarea>
                    </div>
                    <script type="text/javascript">"use strict";jQuery("#userTags").tagsinput();</script>
                    <div class="form-group col-md-6">
                      <label for="userTags">Mots-clés méta</label>
                      <input data-role="tagsinput" id="userTags" name="userTags" value="{{ $Settings->MetaKeyWords }}" class="d-none">
                    </div>
                  </div>
                  <!-- ============================================= links Content Start Setting ============================================= -->
                  <hr>
            
                  <hr>
                  <div class="form-row mx-4">
                    <div class="col mb-3">
                      <h6 class="form-text m-0">Favicon</h6>
                      <p class="form-text text-muted m-0">Configurez votre Favicon avec All Drive.</p>
                    </div>
                  </div>
                  <div class="form-row mx-4">
                    <div class="form-group col-md-4">
                      <label for="socialFacebook">Favicon 32x32</label> <br>
                      <img src="{!! asset($Settings->FaviconOne) !!}" alt="Favicon 32x32">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="socialFacebook">Favicon 96x96</label> <br>
                      <img src="{!! asset($Settings->FaviconTwo) !!}" alt="Favicon 96x96">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="socialFacebook">Favicon 16x16</label> <br>
                      <img src="{!! asset($Settings->FaviconThree) !!}" alt="Favicon 16x16">
                    </div>                
                  </div>
                </form>
              </div>
              <!-- ============================================= links Content Start Setting ============================================= -->
              <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"> <form class="py-4">
                  <div class="form-row mx-4">
                    <div class="col mb-3">
                      <h6 class="form-text m-0">Translation</h6>
                      <p class="form-text text-muted m-0">Configurez les détails du site.</p>
                    </div>
                  </div>
                  <div class="form-row mx-4">
                    <div class="col-lg-12">
                      <div class="form-row">
                     <div class="form-group col-md-4">
                      <!-- ============================================= links Content Start Setting ============================================= -->
                      <label for="about_en">À propos du site</label>
                      <textarea style="min-height: 87px;" class="form-control">{{ $Settings->about_en }}</textarea>
                     </div>

                     <div class="form-group col-md-4">
                      <label for="about_en">Titre du site</label>
                      <textarea style="min-height: 87px;"   class="form-control">{{ $Settings->title_home_en }}</textarea>
                     </div>

                     <div class="form-group col-md-4">
                      <label for="about_en">Site de sous-titre</label>
                      <textarea style="min-height: 87px;" class="form-control">{{ $Settings->sub_title_home_en }}</textarea>
                     </div>
            
                     <!-- ============================================= links Content Start Setting ============================================= -->
                     <div class="form-group col-md-4">
                      <label for="about_en">À propos</label>
                      <textarea style="min-height: 87px;" class="form-control">{{ $Settings->title_about_en }}</textarea>
                     </div>
                   
                    <div class="form-group col-md-4">
                      <label for="about_en">Contenu À propos</label>
                      <textarea style="min-height: 87px;" class="form-control">{{ $Settings->content_about_en }}</textarea>
                     </div>
                     <!-- ============================================= links Content Start Setting ============================================= -->
                    
                     <div class="form-group col-md-4">
                      <label for="about_en">Blog de contenu</label>
                      <textarea style="min-height: 87px;" class="form-control">{{ $Settings->content_blog_en }}</textarea>
                     </div>
                    
                     <div class="form-group col-md-4">
                      <label for="about_en">Fonctionnalité de contenu</label>
                      <textarea style="min-height: 87px;" class="form-control">{{ $Settings->content_feature_en }}</textarea>
                     </div>
                 
                     <div class="form-group col-md-4">
                      <label for="about_en">Contenu deux fonctionnalités</label>
                      <textarea style="min-height: 87px;" class="form-control">{{ $Settings->content_feature_two_en }}</textarea>
                     </div>
                  
                     <div class="form-group col-md-4">
                      <label for="about_en">Contenu trois fonctionnalité</label>
                      <textarea style="min-height: 87px;" class="form-control">{{ $Settings->content_feature_three_en }}</textarea>
                     </div>
                 
                     <!-- ============================================= links Content Start Setting ============================================= -->
                      </div>
                    </div>
                  </div>
                  <hr>
                  <!-- ============================================= links Content Start Setting ============================================= -->
                  <div class="form-row mx-4">
                    <div class="col mb-3">
                      <h6 class="form-text m-0">Image</h6>
                      <p class="form-text text-muted m-0">Configurez votre image avec All Drive.</p>
                    </div>
                  </div>
                  <div class="form-row mx-4">
                    <div class="col-lg-3">
                    <div class="card card-small card-post card-post--1">
                      <div class="card-post__image" style="background-image: url('{!! asset($Settings->HomePicture) !!}');border-radius: 10px">
                        <a class="card-post__category badge badge-pill badge-primary" style="color: #fff">Home Picture</a>
                      </div>
                    </div>
                    </div>
                    <!-- ============================================= links Content Start Setting ============================================= -->
                    <div class="col-lg-3">
                    <div class="card card-small card-post card-post--1">
                      <div class="card-post__image" style="background-image: url('{!! asset($Settings->AboutPicture) !!}');border-radius: 10px">
                        <a class="card-post__category badge badge-pill badge-primary" style="color: #fff">About Picture</a>
                      </div>
                    </div>
                    <!-- ============================================= links Content Start Setting ============================================= -->
                    </div>
                  </div>
                  <!-- ============================================= links Content Start Setting ============================================= -->
          <div class="">
            <a href="{{ url('dashboard/dashboardSettings/1/edit')}}" class="btn btn-sm btn-accent ml-auto d-table mr-3">Edit Settings</a>
          </div>
          <!-- ============================================= links Content Start Setting ============================================= -->
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- End Edit User Details Card -->
      </div>
    </div>
  </div>
  <!-- ============================================= links Content Start Setting ============================================= -->
  @endsection
