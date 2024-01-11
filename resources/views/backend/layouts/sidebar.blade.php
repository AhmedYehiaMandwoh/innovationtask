 <!-- END: Header-->


 <!-- BEGIN: Main Menu-->
 <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
     <div class="navbar-header">
         <ul class="nav navbar-nav flex-row">
             <li class="nav-item me-auto"><a class="navbar-brand"
                     href="{{route('dashboard.index', app()->getLocale())}}">
                     <span class="brand-logo">
                        <img src="/theme-back/app-assets/images/icons/logo.png" alt="" srcset="">

                        </span>
                        <h2 class="brand-text mb-0">Movies APP</h2>
                 </a></li>
             <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i
                         class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i
                         class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc"
                         data-ticon="disc"></i></a></li>
         </ul>
     </div>
     <div class="shadow-bottom"></div>
     <div class="main-menu-content">
         <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
             {{-- <li class=" nav-item"><a class="d-flex align-items-center" href="index.html"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Dashboards</span><span class="badge badge-light-warning rounded-pill ms-auto me-1">2</span></a>
              <ul class="menu-content">
                <li><a class="d-flex align-items-center" href="dashboard-analytics.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">Analytics</span></a>
                </li>
                <li class="active"><a class="d-flex align-items-center" href="dashboard-ecommerce.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">eCommerce</span></a>
                </li>
              </ul>
            </li> --}}
          
          
            
             <li class="nav-item  @if (request()->routeIs('users.index') || request()->routeIs('users.create')) open @endif">
                 <a class="d-flex align-items-center" href="javascript:;">
                     <i data-feather="users"></i><span class="menu-title text-truncate"
                         data-i18n="Dashboards">{{ __('users') }}</span></a>
                 <ul class="menu-content">
                     <li class="@if (request()->routeIs('users.index') || request()->routeIs('users.create')) active @endif nav-item">
                         <a class="d-flex align-items-center"
                             href="{{ route('users.index', app()->getLocale()) }}"><i data-feather="circle"></i>
                             <span class="menu-item text-truncate" data-i18n="Analytics">{{ __('users') }}</span></a>
                     </li>
                 </ul>
             </li>
             <li class="nav-item  @if (request()->routeIs('movies.index') || request()->routeIs('movies.create')) open @endif">
                 <a class="d-flex align-items-center" href="javascript:;">
                     <i data-feather="video"></i><span class="menu-title text-truncate"
                         data-i18n="Dashboards">{{ __('movies') }}</span></a>
                 <ul class="menu-content">
                     <li class="@if (request()->routeIs('categories.index') || request()->routeIs('categories.create')) active @endif nav-item">
                         <a class="d-flex align-items-center"
                             href="{{ route('categories.index', app()->getLocale()) }}"><i data-feather="circle"></i>
                             <span class="menu-item text-truncate" data-i18n="Analytics">{{ __('categories') }}</span></a>
                     </li>
                     <li class="@if (request()->routeIs('movies.index') || request()->routeIs('movies.create')) active @endif nav-item">
                         <a class="d-flex align-items-center"
                             href="{{ route('movies.index', app()->getLocale()) }}"><i data-feather="circle"></i>
                             <span class="menu-item text-truncate" data-i18n="Analytics">{{ __('movies') }}</span></a>
                     </li>

                 </ul>
             </li>
             
             <li class="@if (request()->routeIs('file-manager')) active @endif nav-item">
                 <a class="d-flex align-items-center" href="{{ route('file-manager') }}"><i data-feather="folder"></i>
                     <span class="menu-title text-truncate" data-i18n="Email">{{ __('file-manager') }}</span></a>
             </li>
         </ul>
     </div>
 </div>
