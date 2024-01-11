<div class="swiper">
    
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        
        @forelse ($banners as $item)
            
        <div class="swiper-slide">
            <div class="hero rtl-direction" style="
            background-image: url({{asset($item->image)}});
            background-size: cover;
            background-repeat: no-repeat;
            background-position: top;
            ">
                <div class="container overlay">
                    <div class="row align-items-center">

                        <div class="col-lg-12">
                            <h1 class="heading " data-aos="fade-up">
                                @if (app()->getLocale() == "ar")
                                    {{$item->title_ar ?? ''}}
                                @else
                                    {{$item->title ?? ''}}

                                @endif
                            </h1>
                            {{-- <div data-aos="fade-up" class="mt-5">
                                <a href="javascript:;" class="play-button align-items-center d-flex glightbox2">
                                    <span class="icon-button">
                                        <span class="icon-play"></span>
                                    </span>
                                    <span class="caption me-3">
                                        {{__('watchVideo')}}
                                    </span>
                                </a>
                            </div> --}}
                        </div>
                        <div class="photo-info">
                            <div class="d-flex align-items-center" data-aos="fade-right" data-aos-delay="200">
                                <span class="icon-room"></span> <span><span class="">
                                        {{__('ourlocation')}}

                                    </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @empty
            
        <div class="swiper-slide">
            <div class="hero rtl-direction" style="
            background-image: url({{asset('/theme-front/images/su2.jpg')}});
            background-size: cover;
            background-repeat: no-repeat;
            background-position: inherit;
            ">
                <div class="container overlay">
                    <div class="row align-items-center">

                        <div class="col-lg-12">
                            <h1 class="heading " data-aos="fade-up">اهلا بك فى السعودية
                            </h1>
                            <div data-aos="fade-up" class="mt-5">
                                <a href="javascript:;" class="play-button align-items-center d-flex glightbox2">
                                    <span class="icon-button">
                                        <span class="icon-play"></span>
                                    </span>
                                    <span class="caption me-3">شاهد الفيديو</span>
                                </a>
                            </div>
                        </div>
                        <div class="photo-info">
                            <div class="d-flex align-items-center" data-aos="fade-right" data-aos-delay="200">
                                <span class="icon-room"></span> <span><span class="">
                                        العنوان: 7325 طريق الملك عبدالعزيز ، 2203 ، التغيرة ، بريدة 52361

                                    </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforelse
      

    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
</div>