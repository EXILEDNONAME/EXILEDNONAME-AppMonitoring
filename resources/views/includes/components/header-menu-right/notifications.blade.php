<div class="dropdown">
  <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
    <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1 pulse pulse-primary">
      <span class="svg-icon svg-icon-primary svg-icon-2x">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <path d="M17,12 L18.5,12 C19.3284271,12 20,12.6715729 20,13.5 C20,14.3284271 19.3284271,15 18.5,15 L5.5,15 C4.67157288,15 4,14.3284271 4,13.5 C4,12.6715729 4.67157288,12 5.5,12 L7,12 L7.5582739,6.97553494 C7.80974924,4.71225688 9.72279394,3 12,3 C14.2772061,3 16.1902508,4.71225688 16.4417261,6.97553494 L17,12 Z" fill="#000000"/>
            <rect fill="#000000" opacity="0.3" x="10" y="16" width="4" height="4" rx="2"/>
          </g>
        </svg>
      </span>
      <span class="pulse-ring"></span>
    </div>
  </div>

  <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
    <form>
      <div class="d-flex flex-column pt-12 bgi-size-cover bgi-no-repeat rounded-top" style="background-image: url(/assets/backend/media/misc/bg-1.jpg)">
        <h4 class="d-flex flex-center rounded-top">
          <span class="text-white"> Notifications </span>
        </h4>
        <ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-3x nav-tabs-line-transparent-white nav-tabs-line-active-border-success mt-3 px-8" role="tablist">
          <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#topbar_notifications_notifications">Alerts (0)</a></li>
          <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#topbar_notifications_events">Events</a></li>
        </ul>
      </div>

      <div class="tab-content">

        <div class="tab-pane active show p-8" id="topbar_notifications_notifications" role="tabpanel">
          <div class="scroll pr-7 mr-n7" data-scroll="true" data-height="300" data-mobile-height="200">

            <div class="d-flex align-items-center mb-6">
              <div class="symbol symbol-light-primary mr-5">
                <i class="flaticon2-psd text-success"></i>
              </div>
              <div class="d-flex flex-column font-weight-bold">
                <span class="text-dark mb-1 font-size-sm">
                  Title
                </span>
                <span class="text-muted"> 23 hours ago </span>
              </div>
            </div>

          </div>
          <div class="d-flex flex-center pt-7">
            <a href="#" class="btn btn-light-primary font-weight-bold text-center">See All</a>
          </div>
        </div>

        <div class="tab-pane p-8" id="topbar_notifications_events" role="tabpanel">
          <div class="scroll pr-7 mr-n7" data-scroll="true" data-height="300" data-mobile-height="200">
            <div class="d-flex align-items-center mb-6">
              <div class="symbol symbol-40 symbol-light-primary mr-5">
                <span class="symbol-label">
                  <i class="fas fa-envelope-open-text"></i>
                </span>
              </div>
              <div class="d-flex flex-column font-weight-bold">
                <span class="text-dark mb-1 font-size-lg">
                  Notification Title
                </span>
                <span class="text-muted"> Notification Message </span>
              </div>
            </div>
          </div>
          <div class="d-flex flex-center pt-7">
            <a href="#" class="btn btn-light-primary font-weight-bold text-center">See All</a>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
