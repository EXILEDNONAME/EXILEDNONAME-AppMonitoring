<div id="kt_header" class="header header-fixed">
  <div class="container-fluid d-flex align-items-stretch justify-content-between">

    <!-- HEADER MENU LEFT -->
    <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
      <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
        <ul class="menu-nav">
          <li class="menu-item menu-item-submenu menu-item-rel menu-item-active" data-menu-toggle="click" aria-haspopup="true">
            <a href="javascript:;" class="menu-link menu-toggle">
              <span class="menu-text">Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="menu-submenu menu-submenu-classic menu-submenu-left">
              <ul class="menu-subnav">
                <li class="menu-item" aria-haspopup="true"><a href="javascript:;" class="menu-link"><span class="menu-text"> Menu 1 </span></a></li>
                <li class="menu-item" aria-haspopup="true"><a href="javascript:;" class="menu-link"><span class="menu-text"> Menu 2 </span></a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>

    <!-- HEADER MENU RIGHT -->
    <div class="topbar">
      @include('includes.components.header-menu-right.languages')
      @include('includes.components.header-menu-right.user')
    </div>

  </div>
</div>
