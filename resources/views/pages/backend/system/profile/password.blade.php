@extends('layouts.pages.profile', ['page' => 'profile'])
@push('title', $data->name )

@push('content-body')
<div class="d-flex flex-row">

  @include('pages.backend.system.profile.profile-menu')

  <div class="flex-row-fluid ml-lg-8">
    <div class="row">

      <div class="col-lg-12">
        @if (session('error'))
        <div class="alert alert-danger"> {{ session('error') }} </div>
        @endif
        @if (session('success'))
        <div class="alert alert-success"> {{ session('success') }} </div>
        @endif

        <div class="card card-custom card-stretch">
          <!--begin::Header-->
          <div class="card-header py-3">
            <div class="card-title align-items-start flex-column">
              <h3 class="card-label font-weight-bolder text-dark"> Change Password </h3>
              <span class="text-muted font-weight-bold font-size-sm mt-1">Update your personal password</span>
            </div>
            <div class="card-toolbar"></div>
          </div>

          <form method="POST" action="{{ URL::current() }}/../change-password" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="card-body">
              <input class="form-control" name="created_by" type="hidden" value="1">
              <div class="kt-section__body">

                <div class="form-group row">
                  <label class="col-lg-3 col-form-label"> Current Password </label>
                  <div class="col-lg-9">
                    <input id="current-password" type="password" class="{{ $errors->has('current-password') ? 'form-control is-invalid' : 'form-control' }}" name="current-password" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-lg-3 col-form-label"> New Password </label>
                  <div class="col-lg-9">
                    <input id="new-password" type="password" class="{{ $errors->has('new-password') ? 'form-control is-invalid' : 'form-control' }}" name="new-password" required>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-lg-3 col-form-label"> Confirm New Password </label>
                  <div class="col-lg-9">
                    <input id="new-password-confirm" type="password" class="{{ $errors->has('new-password-confirm') ? 'form-control is-invalid' : 'form-control' }}" name="new-password-confirm" required>
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
