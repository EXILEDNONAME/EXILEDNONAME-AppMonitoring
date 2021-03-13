<div class="dropdown">
  <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
    <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1">
      @if ( app()->getLocale() == 'en' )
      <img class="h-20px w-20px rounded-sm" src="/assets/backend/media/svg/flags/226-united-states.svg" alt="" />
      @else
      <img class="h-20px w-20px rounded-sm" src="/assets/backend/media/svg/flags/004-indonesia.svg" alt="" />
      @endif
    </div>
  </div>
  <div class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right">
    <ul class="navi navi-hover py-4">
      <li class="navi-item">
        <a href="{{ route('localization.switch', 'en') }}" class="navi-link {{ app()->getLocale() == 'en' ? 'active' : '' }}">
          <span class="symbol symbol-20 mr-3">
            <img src="/assets/backend/media/svg/flags/226-united-states.svg" alt="" />
          </span>
          <span class="navi-text">English</span>
        </a>
      </li>
      <li class="navi-item">
        <a href="{{ route('localization.switch', 'id') }}" class="navi-link {{ app()->getLocale() == 'id' ? 'active' : '' }}">
          <span class="symbol symbol-20 mr-3">
            <img src="/assets/backend/media/svg/flags/004-indonesia.svg" alt="" />
          </span>
          <span class="navi-text"> Bahasa </span>
        </a>
      </li>
    </ul>
  </div>
</div>
