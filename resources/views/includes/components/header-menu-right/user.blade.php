<div class="dropdown">
  <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
    <div class="btn btn-icon w-auto btn-clean d-flex align-items-center btn-lg px-2">
      <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
      <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">{{ Auth::User()->name }}</span>
      <span class="symbol symbol-35 symbol-light-success">
        @if (!empty(Auth::User()->photo_profile)) <div class="symbol-label" style="background-image: url(/cache/photo_profile/{{ Auth::User()->photo_profile }})"></div>
        @else <div class="symbol-label" style="background-image:url('/assets/backend/media/users/blank.png')"></div>
        @endif
      </span>
    </div>
  </div>

  <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
    <form>
      <div class="d-flex flex-column pt-6 bgi-size-cover bgi-no-repeat rounded-top" style="background-image: url(/assets/backend/media/misc/bg-1.jpg)">
        <div class="text-center">
        <div class="symbol symbol-60 symbol-circle symbol-xl-90">
          @if (!empty(Auth::User()->photo_profile)) <div class="symbol-label" style="background-image: url(/cache/photo_profile/{{ Auth::User()->photo_profile }})"></div>
          @else <div class="symbol-label" style="background-image:url('/assets/backend/media/users/blank.png')"></div>
          @endif
          <i class="symbol-badge symbol-badge-bottom bg-success"></i>
        </div>
      </div>
        <span class="text-center rounded-top mb-5 mt-5">
          <span class="text-white font-weight-bold">{{ Auth::User()->name }}</span><br>
          <span class="text-muted text-center">{{ Auth::User()->accesses->name }}</span><br>
        </span>
      </div>

      <div class="tab-content">
        <div class="tab-pane active show p-8" id="topbar_notifications_notifications" role="tabpanel">
          <div class="text-center">
          <a href="/dashboard/logout" onclick="return confirm('Are you sure?')" class="btn btn-light-primary font-weight-bold text-center"> Logout </a>
        </div>
        </div>
      </div>
    </form>
  </div>
</div>


<div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
  <!--begin::Header-->
  <div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
    <h3 class="font-weight-bold m-0">User Profile
      <small class="text-muted font-size-sm ml-2"></small></h3>
      <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
        <i class="ki ki-close icon-xs text-muted"></i>
      </a>
    </div>

    <!--begin::Content-->
    <div class="offcanvas-content pr-5 mr-n5">
      <center>
        <div class="symbol symbol-60 symbol-circle symbol-xl-90">
          <div class="symbol-label" style="background-image:url('/assets/backend/media/users/blank.png')"></div>
          <i class="symbol-badge symbol-badge-bottom bg-success"></i>
        </div><br>
        <a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">{{ Auth::User()->name }}</a>
        <div class="text-muted mt-1">{{ Auth::User()->accesses->name }}</div>
      </center>
      <div class="d-flex align-items-center mt-5">

        <div class="d-flex flex-column">
          <a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">{{ Auth::User()->name }}</a>
          <div class="text-muted mt-1">{{ Auth::User()->accesses->name }}</div>
          <div class="navi mt-2">
            <a href="#" class="navi-item">
              <span class="navi-link p-0 pb-2">
                <span class="navi-icon mr-1">
                  <span class="svg-icon svg-icon-lg svg-icon-primary">
                    <!--begin::Svg Icon | path:/assets/backend/media/svg/icons/Communication/Mail-notification.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24" />
                        <path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000" />
                        <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
                      </g>
                    </svg>
                    <!--end::Svg Icon-->
                  </span>
                </span>
                <span class="navi-text text-muted text-hover-primary"> {{ Auth::User()->email }} </span>
              </span>
            </a>
            <a href="#" class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">Sign Out</a>
          </div>
        </div>
      </div>
      <!--end::Header-->
      <!--begin::Separator-->
      <div class="separator separator-dashed mt-8 mb-5"></div>
      <!--end::Separator-->
      <!--begin::Nav-->

        <!--end::Nav-->
      </div>
      <!--end::Content-->
    </div>
