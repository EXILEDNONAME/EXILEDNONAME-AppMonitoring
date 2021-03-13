@extends('layouts.pages.profile', ['page' => 'profile'])
@push('title', $data->name )

@push('content-body')
<div class="d-flex flex-row">

  @include('pages.backend.system.profile.profile-menu')

  <div class="flex-row-fluid ml-lg-8">
    <div class="row">
      <div class="col-lg-12">
        <div class="card card-custom card-stretch">
          <!--begin::Header-->
          <div class="card-header py-3">
            <div class="card-title align-items-start flex-column">
              <h3 class="card-label font-weight-bolder text-dark">Personal Information</h3>
              <span class="text-muted font-weight-bold font-size-sm mt-1">Update your personal informaiton</span>
            </div>
          </div>

          <form method="POST" action="{{ URL::current() }}/../{{ $data->id }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
            {{ method_field('PATCH') }}
            {{ csrf_field() }}

            <div class="card-body">
              <input class="form-control" name="created_by" type="hidden" value="1">
              <div class="kt-section__body">

                <div class="form-group row">
                  <label class="col-lg-3 col-form-label"> Username </label>
                  <div class="col-lg-9">
                    <input class="form-control" required="required" name="username" type="text" value="{{ Auth::User()->username }}">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-lg-3 col-form-label"> Name </label>
                  <div class="col-lg-9">
                    <input class="form-control" required="required" name="name" type="text" value="{{ Auth::User()->name }}">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-lg-3 col-form-label"> Email </label>
                  <div class="col-lg-9">
                    <input class="form-control" required="required" name="email" type="text" value="{{ Auth::User()->email }}">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-lg-3 col-form-label"> Phone </label>
                  <div class="col-lg-9">
                    <input class="form-control" required="required" name="phone" type="text" value="{{ Auth::User()->phone }}">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-lg-3 col-form-label"> Photo </label>
                  <div class="col-lg-9">
                    <div class="image-input image-input-outline" id="kt_profile_avatar" style="background-image: url(/assets/backend/media/users/blank.png)">

                      @if (!empty(Auth::User()->photo_profile)) <div class="image-input-wrapper" style="background-image: url(/cache/photo_profile/{{ Auth::User()->photo_profile }})"></div>
                      @else <div class="image-input-wrapper" style="background-image: url(/assets/backend/media/users/blank.png)"></div>
                      @endif

                      <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                        <i class="fa fa-pen icon-sm text-muted"></i>
                        <input type="file" name="photo_profile" accept=".png, .jpg, .jpeg">
                        <input type="hidden" name="profile_avatar_remove">
                      </label>
                      <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="Cancel avatar">
                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                      </span>
                    </div>
                  </div>
                </div>

                <button type="submit" class="btn btn-primary mr-2">Save Changes</button>

              </div>
            </form>
          </div>
        </form>
      </div>
    </div>
  </div>

</div>
</div>
@endpush

@push('js')
<script src="/assets/backend/js/pages/custom/profile/profile.js?v=7.0.5"></script>
<script src="/assets/backend/js/pages/widgets.js?v=7.0.5"></script>
@endpush
