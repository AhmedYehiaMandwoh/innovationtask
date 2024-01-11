<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
            <span class="icofont-close js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>
<nav class="site-nav">
    <div class="container">
        <div class="site-navigation">
            
            <a title="{{__('wkalt_bisan')}}" href="{{route('home', app()->getLocale())}}" class="logo m-0 @if(app()->getLocale()=="ar") float-start @else float-end @endif">
                <img src="{{ asset('/theme-front/images/logo.webp') }}" width="200" alt="{{__('wkalt_bisan')}}">
            </a>
            <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu ltr-dir
            @if(app()->getLocale()=="ar") float-right @else float-center @endif">
                {{-- <li class="has-children">
                    <a href="#">Dropdown</a>
                    <ul class="dropdown">
                        <li><a href="#">Menu One</a></li>
                        <li class="has-children">
                            <a href="#">Menu Two</a>
                            <ul class="dropdown">
                                <li><a href="#">Sub Menu One</a></li>
                                <li><a href="#">Sub Menu Two</a></li>
                                <li><a href="#">Sub Menu Three</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Menu Three</a></li>
                    </ul>
                </li>  --}}
                <li class="has-children">

                    <a href="#" title="{{__('language')}}">
                        @if (app()->getLocale()== 'ar')
                            <img src="{{ asset('theme-front/images/icons/su.svg') }}" class="icon-image" alt="{{__('su')}}"
                                >
                        @else
                            <img src="{{ asset('theme-front/images/icons/um.svg') }}" class="icon-image" alt="{{__('um')}}"
                                >
                        @endif
                    </a>
                    <ul class="dropdown">
                        <li>
                            @if (app()->getLocale() == 'ar')
                                <a title="{{__('um')}}"
                                    href="{{ route(Route::currentRouteName(),array_merge(request()->route()->parameters(),['language' => 'en'])) }}">
                                    <img src="{{ asset('theme-front/images/icons/um.svg') }}" class="icon-image" 
                                    alt="{{__('um')}}" > EN
                                </a>
                            @else
                                <a title="{{__('su')}}"
                                    href="{{ route(Route::currentRouteName(),array_merge(request()->route()->parameters(),['language' => 'ar'])) }}">
                                    <img src="{{ asset('theme-front/images/icons/su.svg') }}" class="icon-image"
                                    alt="{{__('su')}}" > AR
                                </a>
                            @endif


                        </li>
                    </ul>
                </li>
                <li><a title="{{__('services')}}" href="{{route('services', app()->getLocale())}}">{{ __('services') }}</a></li>
                <li><a title="{{__('about_bisan')}}" href="{{route('about', app()->getLocale())}}">{{ __('about_bisan') }}</a></li>
                <li><a title="{{__('Articles')}}" href="{{ route('articles', app()->getLocale()) }}">{{ __('Articles') }}</a></li>
                <li><a title="{{__('offers')}}" href="{{ route('offers', app()->getLocale()) }}">{{ __('offers') }}</a></li>
                <li class="active"><a title="{{__('home')}}" href="{{ route('home', app()->getLocale()) }}">{{ __('home') }}</a></li>

            </ul>
           
            <a href="#" title="burger"
                class="
                @if(app()->getLocale()=="ar") burger ms-auto float-end @else burger ms-auto float-start @endif site-menu-toggle js-menu-toggle d-inline-block d-lg-none light"
                data-toggle="collapse" data-target="#main-navbar">
                <span></span>
            </a>
        </div>
    </div>
</nav>
