<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
  <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
    <ul class="menu-nav">

      <!-- DASHBOARD -->
      <li class="menu-item {{ (request()->is('dashboard')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
        <a href="/dashboard" class="menu-link">
          <span class="menu-icon">
            <i class="menu-icon fa fa-desktop"></i>
          </span>
          <span class="menu-text"> Dashboard </span>
        </a>
      </li>

      @include('includes.sidebar-item')

      @if (access('Administrator'))
      <li class="menu-section">
        <h4 class="menu-text"> Extensions </h4>
        <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
      </li>

      <li class="menu-item {{ (request()->is('dashboard/dummies*')) ? 'menu-item-active' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
        <a href="/dashboard/dummies" class="menu-link">
          <span class="menu-icon"><i class="menu-icon fa fa-file"></i></span>
          <span class="menu-text"> Dummies </span>
        </a>
      </li>

      <li class="menu-item {{ (request()->is('dashboard/file-manager*')) ? 'menu-item-active' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
        <a href="/dashboard/file-manager" class="menu-link">
          <span class="menu-icon"><i class="menu-icon fa fa-file"></i></span>
          <span class="menu-text"> File Manager </span>
        </a>
      </li>

      <li class="menu-item menu-item-submenu {{ (request()->is('dashboard/management*')) ? 'menu-item-active menu-item-open' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
        <a href="javascript:;" class="menu-link menu-toggle">
          <span class="menu-icon">
            <i class="menu-icon fas fa-shield-alt"></i>
          </span>
          <span class="menu-text"> Managements </span>
          <i class="menu-arrow"></i>
        </a>
        <div class="menu-submenu">
          <i class="menu-arrow"></i>
          <ul class="menu-subnav">
            <li class="menu-item {{ (request()->is('dashboard/management/accesses*')) ? 'menu-item-active' : '' }}">
              <a href="/dashboard/management/accesses" class="menu-link">
                <i class="menu-bullet menu-bullet-dot">
                  <span></span>
                </i>
                <span class="menu-text"> Accesses </span>
              </a>
            </li>
            <li class="menu-item {{ (request()->is('dashboard/management/users*')) ? 'menu-item-active' : '' }}">
              <a href="/dashboard/management/users" class="menu-link">
                <i class="menu-bullet menu-bullet-dot">
                  <span></span>
                </i>
                <span class="menu-text"> Users</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      @endif

      <li class="menu-section">
        <h4 class="menu-text"> Settings </h4>
        <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
      </li>

      <li class="menu-item {{ (request()->is('dashboard/profile*')) ? 'menu-item-active' : '' }}" aria-haspopup="true" data-menu-toggle="hover">
        <a href="/dashboard/profile" class="menu-link">
          <span class="menu-icon"><i class="menu-icon fa fa-user"></i></span>
          <span class="menu-text"> Profile </span>
        </a>
      </li>
      <li class="menu-item" aria-haspopup="true">
        <a href="/dashboard/logout" class="menu-link" onclick="return confirm('Are you sure?')">
          <span class="menu-icon">
            <i class="menu-icon fa fa-sign-out-alt"></i>
          </span>
          <span class="menu-text"> Logout </span>
        </a>
      </li>

    </ul>
  </div>
</div>
