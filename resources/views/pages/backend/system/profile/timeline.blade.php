@extends('layouts.pages.profile', ['page' => 'profile'])
@push('title', $data->name )

@push('content-body')
<div class="d-flex flex-row">

  @include('pages.backend.system.profile.profile-menu')

  <div class="flex-row-fluid ml-lg-8">
    <div class="row">
      <div class="col-lg-12">
        <div class="card card-custom card-stretch gutter-b">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="symbol symbol-40 symbol-circle mr-5">
                <div class="symbol-label" style="background-image:url('/assets/backend/media/users/blank.png')"></div>
              </div>
              <span class="text-muted font-weight-bold font-size-lg">What’s on your mind, {{ Auth::User()->name }}?</span>
            </div>

            <form id="kt_forms_widget_2_form" class="pt-10 ql-quil ql-quil-plain">
              <div id="kt_forms_widget_2_editor" class="ql-container ql-snow">
                <div class="ql-editor ql-blank" data-gramm="false" contenteditable="true" data-placeholder="Type message...">
                  <p><br></p>
                </div>
                <div class="ql-clipboard" contenteditable="true" tabindex="-1"></div>
                <div class="ql-tooltip ql-hidden">
                  <a class="ql-preview" rel="noopener noreferrer" target="_blank" href="about:blank"></a>
                  <input type="text" data-formula="e=mc^2" data-link="https://quilljs.com" data-video="Embed URL">
                  <a class="ql-action"></a>
                  <a class="ql-remove"></a>
                </div>
              </div>
              <div class="border-top my-5"></div>
              <div id="kt_forms_widget_2_editor_toolbar" class="ql-toolbar d-flex align-items-center justify-content-between ql-snow">
                <div class="mr-2">
                  <span class="ql-formats">
                    <button class="ql-bold" type="button"><svg viewBox="0 0 18 18"> <path class="ql-stroke" d="M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z"></path> <path class="ql-stroke" d="M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z"></path> </svg></button>
                    <button class="ql-italic" type="button"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="7" x2="13" y1="4" y2="4"></line> <line class="ql-stroke" x1="5" x2="11" y1="14" y2="14"></line> <line class="ql-stroke" x1="8" x2="10" y1="14" y2="4"></line> </svg></button>
                    <button class="ql-underline" type="button"><svg viewBox="0 0 18 18"> <path class="ql-stroke" d="M5,3V9a4.012,4.012,0,0,0,4,4H9a4.012,4.012,0,0,0,4-4V3"></path> <rect class="ql-fill" height="1" rx="0.5" ry="0.5" width="12" x="3" y="15"></rect> </svg></button>
                    <button class="ql-strike" type="button"><svg viewBox="0 0 18 18"> <line class="ql-stroke ql-thin" x1="15.5" x2="2.5" y1="8.5" y2="9.5"></line> <path class="ql-fill" d="M9.007,8C6.542,7.791,6,7.519,6,6.5,6,5.792,7.283,5,9,5c1.571,0,2.765.679,2.969,1.309a1,1,0,0,0,1.9-.617C13.356,4.106,11.354,3,9,3,6.2,3,4,4.538,4,6.5a3.2,3.2,0,0,0,.5,1.843Z"></path> <path class="ql-fill" d="M8.984,10C11.457,10.208,12,10.479,12,11.5c0,0.708-1.283,1.5-3,1.5-1.571,0-2.765-.679-2.969-1.309a1,1,0,1,0-1.9.617C4.644,13.894,6.646,15,9,15c2.8,0,5-1.538,5-3.5a3.2,3.2,0,0,0-.5-1.843Z"></path> </svg></button>
                    <button class="ql-image" type="button"><svg viewBox="0 0 18 18"> <rect class="ql-stroke" height="10" width="12" x="3" y="4"></rect> <circle class="ql-fill" cx="6" cy="7" r="1"></circle> <polyline class="ql-even ql-fill" points="5 12 5 11 7 9 8 10 11 7 13 9 13 12 5 12"></polyline> </svg></button>
                    <button class="ql-link" type="button"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="7" x2="11" y1="7" y2="11"></line> <path class="ql-even ql-stroke" d="M8.9,4.577a3.476,3.476,0,0,1,.36,4.679A3.476,3.476,0,0,1,4.577,8.9C3.185,7.5,2.035,6.4,4.217,4.217S7.5,3.185,8.9,4.577Z"></path> <path class="ql-even ql-stroke" d="M13.423,9.1a3.476,3.476,0,0,0-4.679-.36,3.476,3.476,0,0,0,.36,4.679c1.392,1.392,2.5,2.542,4.679.36S14.815,10.5,13.423,9.1Z"></path> </svg></button>
                    <button class="ql-clean" type="button"><svg class="" viewBox="0 0 18 18"> <line class="ql-stroke" x1="5" x2="13" y1="3" y2="3"></line> <line class="ql-stroke" x1="6" x2="9.35" y1="12" y2="3"></line> <line class="ql-stroke" x1="11" x2="15" y1="11" y2="15"></line> <line class="ql-stroke" x1="15" x2="11" y1="11" y2="15"></line> <rect class="ql-fill" height="1" rx="0.5" ry="0.5" width="7" x="2" y="14"></rect> </svg></button>
                  </span>
                </div>
                <div class="">
                  <span class="btn btn-icon btn-sm btn-hover-icon-primary">
                    <a href="javascript:;" onclick="return alert('Maintenance!')">
                    <i class="fab fa-telegram-plane"></i>
                  </a>
                  </span>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="card card-custom gutter-b">
      <div class="card-header border-0 py-5">
        <h3 class="card-title align-items-start flex-column">
          <span class="card-label font-weight-bolder text-dark"> Timeline </span>
          <span class="text-muted mt-3 font-weight-bold font-size-sm">Highlight Posts</span>
        </h3>
        <div class="card-toolbar">
          <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
            <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="ki ki-bold-more-hor"></i>
            </a>
            <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
              <ul class="navi navi-hover">
                <li class="navi-header font-weight-bold py-4">
                  <span class="font-size-lg"> Choose </span>
                  <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="card-body py-0">
        <!--  -->
      </div>
    </div>
  </div>
</div>
@endpush

@push('js')
<script src="/assets/backend/js/pages/custom/profile/profile.js?v=7.0.5"></script>
<script src="/assets/backend/js/pages/widgets.js?v=7.0.5"></script>
@endpush
