<div class="flex-row-auto offcanvas-mobile w-300px w-xl-350px" id="kt_profile_aside">
  <div class="card card-custom">
    <div class="card-body pt-15">

      <div class="text-center">
        <div class="symbol symbol-60 symbol-circle symbol-xl-90">
          @if (!empty(Auth::User()->photo_profile)) <div class="symbol-label" style="background-image: url(/cache/photo_profile/{{ Auth::User()->photo_profile }})"></div>
          @else <div class="symbol-label" style="background-image:url('/assets/backend/media/users/blank.png')"></div>
          @endif
          <i class="symbol-badge symbol-badge-bottom bg-success"></i>
        </div>
        <h3 class="font-weight-bold"> {{ Auth::User()->name }} </h3>
        <div class="text-muted"> {{ Auth::User()->accesses->name }} </div>
      </div>

      <hr>
      <a href="{{ URL::current() }}/../timeline" class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 text-center btn-block {{ (request()->is('dashboard/profile/timeline')) ? 'active' : '' }}"> Timeline </a>
      <a href="{{ URL::current() }}/../personal-information" class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 text-center btn-block {{ (request()->is('dashboard/profile/personal-information')) ? 'active' : '' }}"> Personal Information </a>
      <a href="{{ URL::current() }}/../password" class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 text-center btn-block {{ (request()->is('dashboard/profile/password')) ? 'active' : '' }}"> Change Password </a>
    </div>
  </div>
</div>
