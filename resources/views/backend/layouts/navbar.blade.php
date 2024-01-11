<!-- BEGIN: Header-->
<nav
    class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">
                <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon"
                            data-feather="menu"></i></a></li>
            </ul>
            <ul class="nav navbar-nav bookmark-icons">
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="javascript:;"
                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="Email"><i class="ficon"
                            data-feather="mail"></i></a></li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="javascript:;" data-bs-toggle="tooltip"
                        data-bs-placement="bottom" title="Chat"><i class="ficon"
                            data-feather="message-square"></i></a></li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="javascript:;"
                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="Calendar"><i class="ficon"
                            data-feather="calendar"></i></a></li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="javascript:;" data-bs-toggle="tooltip"
                        data-bs-placement="bottom" title="Todo"><i class="ficon" data-feather="check-square"></i></a>
                </li>
            </ul>
          
        </div>
        <ul class="nav navbar-nav align-items-center ms-auto">
            <li class="nav-item dropdown dropdown-language">
                <a class="nav-link dropdown-toggle" id="dropdown-flag" href="#" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span
                        class="selected-language">English</span></a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-flag">
                    @foreach (\DB::table('languages')->pluck('sign') as $locale)
                        <a class="dropdown-item"
                            href="{{ route(Route::currentRouteName(),array_merge(request()->route()->parameters(),['locale' => $locale])) }}"><i
                                @if ($locale == 'ar') class="flag-icon  flag-icon-sa"
                           @else
                           class="flag-icon  flag-icon-us" @endif></i>
                            {{ strtoupper($locale) }}</a>
                    @endforeach

                </div>
            </li>
           
            <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link"
                    id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder">{{auth()->guard('admin')->user()->name }}</span><span
                            class="user-status">{{auth()->guard('admin')->user()->email }}</span></div><span class="avatar"><img class="round bg-white"
                            src="{{asset('theme-back/app-assets/images/icons/logo.png')}}" alt="avatar"
                            height="40" width="40" ><span class="avatar-status-online"></span></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                    {{-- <a class="dropdown-item"
                        href="javascript:;"><i class="me-50" data-feather="user"></i> Profile</a> --}}
                        <a
                        class="dropdown-item" href="{{route('adminLogout')}}"><i class="me-50"
                            data-feather="power"></i> {{__('logout')}}</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
