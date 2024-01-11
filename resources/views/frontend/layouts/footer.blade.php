 <!-- javascript resouces and libs -->
 <div class="site-footer rtl-direction">
    <div class="container">
        <div class="row text-rtl-right">
            <div class="col-lg-4">
                <div class="widget">
                    <h3>{{ __('about_bisan') }}<span class="text-primary">.</span></h3>
                    <p>{{__('bisan_info')}}</p>
                </div>
            </div>
           <div class="col-lg-1"></div>
            <div class="col-lg-2 @if(app()->getLocale() == "ar") ml-auto @else mr-auto @endif">
                <div class="widget">
                    <h3>{{__('links')}}</h3>
                    <ul class="list-unstyled links">
                        <li><a href="{{ route('home', app()->getLocale()) }}">{{ __('home') }}</a></li>
                        <li><a title="{{__('services')}}" href="{{route('services', app()->getLocale())}}">{{ __('services') }}</a></li>
                        <li><a title="{{__('about_bisan')}}" href="{{route('about', app()->getLocale())}}">{{ __('about_bisan') }}</a></li>
                        <li><a title="{{__('Articles')}}" href="{{ route('articles', app()->getLocale()) }}">{{ __('Articles') }}</a></li>
                        <li><a title="{{__('offers')}}" href="{{ route('offers', app()->getLocale()) }}">{{ __('offers') }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 @if(app()->getLocale() == "ar") ml-auto @else mr-auto @endif">
                <div class="widget">
                    <h3>{{__('social')}}</h3>
                    <ul class="list-unstyled social">
                        <li><a href="https://www.instagram.com/bisan_travel/" target="_blank"><span class="icon-instagram"></span></a></li>
                        <li><a target="_blank" href="https://story.snapchat.com/u/bisan_travel/TucQ4MsmQ8mv49CynVk39AAAAa29hZG1jbnpuAYFRpghFAYFRpgYyAAAAAA?share_id=QTJGNTA3RkQtMTlFRC00RDgwLTk5OEUtNTJDQkNFMjJBOUU0&locale=ar_SA@calendar=gregorian;numbers=latn&sid=0a6c219d14f4405cb67df16ac002b9f6"><span class="icon-snapchat"></span></a></li>
                        <li><a target="_blank" href="https://api.whatsapp.com/message/UJBMDJDUPICIC1?autoload=1&app_absent=0"><span class="icon-whatsapp"></span></a></li>
                    </ul>
                </div>

            </div>
            <div class="col-lg-3">
                <div class="widget">
                    <h3>{{__('contact_us')}}</h3>
                    <address>{{__('ourlocation')}}</address>
                    <ul class="list-unstyled links mb-4">
                        <li><a href="tel://+966920007999" dir="ltr">+966 9200 07 999</a></li>
                        <li><a href="tel://+966920007999" dir="ltr">+966 55 29 38888</a></li>
                        <li><a href="javascript:;">info@bisan.com.sa</a></li>

                    </ul>
                </div>
            </div>
            
        </div>
        <div class="row ">
            <div class="col-12 text-center">
                <p>{{__('Copyrights')}} </p>
            </div>
        </div>
    </div>
</div>

<div id="overlayer"></div>
<div class="loader">
    <div class="spinner-border text-primary" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>
 <script src="/theme-front/js/jquery-3.6.4.min.js"></script>
 <script src="/theme-front/js/bootstrap.bundle.min.js"></script>
 <script src="/theme-front/js/tiny-slider.js"></script>
 <script src="/theme-front/js/aos.js"></script>
 <script src="/theme-front/js/navbar.js"></script>
 <script src="/theme-front/js/counter.js"></script>
 <script src="/theme-front/js/flatpickr.js"></script>
 <script src="/theme-front/js/glightbox.min.js"></script>
 <script src="/theme-front/js/custom.js"></script>
 @yield('scripts')
 <script>
    const swiper = new Swiper('.swiper', {
        // Optional parameters
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });
</script>


    </body>
    </html>