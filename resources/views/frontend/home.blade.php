@extends('frontend.layouts.index')
<link rel="stylesheet" href="https://vjs.zencdn.net/8.3.0/video-js.css">
@section('head_end')
    @foreach ($faqs as $faq)
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "FAQPage",
          "mainEntity": [
                {
                    "@type": "Question",
                    "name": "{{app()->getLocale() == "ar" ? $faq->title_ar : $faq->title}}",
                    "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "<p>{{app()->getLocale() == "ar" ? $faq->description_ar : $faq->description}}</p>"
                    }
                },
            
            ]
        }
        </script>
    @endforeach
    @foreach ($banners as $item)
        <script type="application/ld+json">
        {
          "@context":"https://schema.org",
          "@type":"ItemList",
          "itemListElement":[
            {
              "@type":"ListItem",
              "position":{{$item->id ?? ''}},
              "image": "{{asset($item->image)}}",
              "url":"{{ route('home', app()->getLocale()) }}"
            },
            
          ]
        }
    </script>
    @endforeach
@endsection
@section('content')
    <div class="section section-3 ">
        <div class="container">
            <div class="row align-items-center justify-content-between  mb-5 rtl-direction ">
                <div class="col-lg-5" data-aos="fade-up">
                    <h2 class="heading mb-3">{{ __('bestOffers') }}</h2>
                    <p>{{ __('offersText') }}</p>
                </div>
                <div class="col-lg-5 rtl-direction-left" data-aos="fade-up" data-aos-delay="100">
                    <div id="destination-controls">
                        <span class="prev me-3" data-controls="prev">
                            <svg width="64" height="36" viewBox="0 0 48 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M47.5 16L3.5 16" stroke="black" stroke-width="2" />
                                <path d="M17.25 1.11246L2 16L17.25 30.8875" stroke="black" stroke-width="2" />
                            </svg>
                        </span>
                        <span class="next" data-controls="next">
                            <svg width="64" height="36" viewBox="0 0 64 36" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <line x1="-8.74228e-08" y1="18" x2="61" y2="18" stroke="black"
                                    stroke-width="2" />
                                <path d="M45.25 34.8875L62.5 18L45.25 1.1125" stroke="black" stroke-width="2" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">
                    <div class="destination-slider-wrap">
                        <div class="destination-slider ">

                            @foreach ($offers as $item)
                                <div class="destination ">
                                    <div class="img-holder">

                                        <a
                                            href="@if (app()->getLocale() == 'ar') {{ route('offersingle', [app()->getLocale(), $item->slug_ar, $item->uuid]) }}@else{{ route('offersingle', [app()->getLocale(), $item->slug, $item->uuid]) }} @endif ">

                                            <img src="{{ asset($item->image) }}" class="img-fluid"
                                                @if (app()->getLocale() == 'ar') alt="{{ $item->alt_ar ?? '' }}"  @else alt="{{ $item->alt ?? '' }}" @endif>
                                        </a>

                                    </div>

                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section bg-light ">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mb-5 mb-lg-0 me-auto testimonial-wrap text-rtl-right" data-aos="fade-up"
                    data-aos-delay="0">
                    <span class="subheading">{{ __('happyClient') }}</span>
                    <h2 class="heading mb-5">{{ __('clientReview') }}</h2>
                    <div class="wide-slider-testimonial-wrap">
                        <div class="wide-slider-testimonial">
                            <div class="item">
                                <blockquote class="block-testimonial">

                                    <img src="{{ asset('/theme-front/images/c2.webp') }}" alt="client review image one"
                                        width="100%">
                                </blockquote>
                            </div>

                            <div class="item">
                                <blockquote class="block-testimonial">
                                    <img src="{{ asset('/theme-front/images/c3.webp') }}" alt="client review image two"
                                        width="100%">

                                </blockquote>
                            </div>
                            <div class="item">
                                <blockquote class="block-testimonial">
                                    <img src="{{ asset('/theme-front/images/c4.webp') }}" alt="client review image three"
                                        width="100%">

                                </blockquote>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0 text-rtl-right" data-aos="fade-up" data-aos-delay="100">
                    <span class="subheading">{{ __('faqs') }}</span>
                    <h2 class="heading mb-5">{{ __('faqsquestions') }}</h2>

                    <div class="custom-accordion" id="headingOne{{ $item->id }}">
                        @foreach ($faqs as $item)
                            <div class="accordion-item">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                        data-target="#collapseTwo{{ $item->id }}" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        @if (app()->getLocale() == 'ar')
                                            {{ $item->title_ar ?? '' }}
                                        @else
                                            {{ $item->title ?? '' }}
                                        @endif
                                    </button>
                                </h2>
                                <div id="collapseTwo{{ $item->id }}" class="collapse"
                                    aria-labelledby="headingTwo{{ $item->id }}" data-bs-parent="#accordion_1">
                                    <div class="accordion-body">
                                        @if (app()->getLocale() == 'ar')
                                            {{ $item->description_ar ?? '' }}
                                        @else
                                            {{ $item->description ?? '' }}
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section text-rtl-right">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-delay="0">
                    <span class="subheading">{{ __('Images') }}</span>
                    <h2 class="heading mb-5">{{ __('wkalt_bisan') }}</h2>
                </div>
            </div>
            <div class="row align-items-stretch">
                <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="media-entry">
                        <a href="{{ asset('/theme-front/images/1.webp') }}" target="_blank"
                            title="bisan travel image one">
                            <img src="{{ asset('/theme-front/images/1.webp') }}" alt="bisan travel image one"
                                class="img-fluid">
                        </a>
                        <a href="{{ asset('/theme-front/images/2.webp') }}" target="_blank" style="margin-top: 10px;"
                            title="bisan travel image two">
                            <img src="{{ asset('/theme-front/images/2.webp') }}" alt="bisan travel image two"
                                class="img-fluid">
                        </a>

                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="media-entry">

                        <a href="{{ asset('/theme-front/images/3.webp') }}" target="_blank" style="margin-top: 10px;"
                            title="bisan travel image three">
                            <img src="{{ asset('/theme-front/images/3.webp') }}" alt="bisan travel image three"
                                class="img-fluid">
                        </a>

                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="media-entry">
                        <a href="{{ asset('/theme-front/images/5.webp') }}" target="_blank"
                            title="bisan travel image four">
                            <img src="{{ asset('/theme-front/images/5.webp') }}" alt="bisan travel image four"
                                class="img-fluid">
                        </a>
                        <a href="{{ asset('/theme-front/images/7.webp') }}" target="_blank" style="margin-top: 10px;"
                            title="bisan travel image five">
                            <img src="{{ asset('/theme-front/images/7.webp') }}" alt="bisan travel image five"
                                class="img-fluid">
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section rtl-direction">
        <div class="container">
            <div class="row">
                <div class="col-md-12" data-aos="fade-up" data-aos-delay="0">
                    <span class="subheading">{{ __('videos') }}</span>
                    <h2 class="heading mb-5">{{ __('clients_review') }}</h2>
                </div>
            </div>
            <div class="row">

                <div class="col-md-6">
                    <video id="my-video" class="video-js" controls preload="auto" width="640" height="264"
                        poster="{{ asset('/videos/one-img.jpg') }}" data-setup="{}">
                        <source src="/videos/one.mp4" type="video/mp4" />
                        <source src="/videos/one.webm" type="video/webm" />

                    </video>
                </div>
                <div class="col-md-6">

                    <video id="my-video" class="video-js" controls preload="auto" width="640" height="264"
                        poster="{{ asset('/videos/two-img.jpg') }}" data-setup="{}">
                        <source src="/videos/two.mp4" type="video/mp4" />
                        <source src="/videos/two.webm" type="video/webm" />

                </div>
                <div class="col-md-6">
                    </video>
                    <video id="my-video" class="video-js mt-3" controls preload="auto" width="640" height="264"
                        poster="{{ asset('/videos/three-img.jpg') }}" data-setup="{}">
                        <source src="/videos/three.mp4" type="video/mp4" />
                        <source src="/videos/three.webm" type="video/webm" />

                    </video>
                </div>
                <div class="col-md-6">
                    </video>
                    <video id="my-video" class="video-js mt-3" controls preload="auto" width="640" height="264"
                        poster="{{ asset('/videos/four-img.jpg') }}" data-setup="{}">
                        <source src="/videos/four.mp4" type="video/mp4" />
                        <source src="/videos/four.webm" type="video/webm" />

                    </video>
                </div>
                <div class="col-md-6">
                    </video>
                    <video id="my-video" class="video-js mt-3" controls preload="auto" width="640" height="264"
                        poster="{{ asset('/videos/five-img.jpg') }}" data-setup="{}">
                        <source src="/videos/five.mp4" type="video/mp4" />
                        <source src="/videos/five.webm" type="video/webm" />

                    </video>
                </div>
                <div class="col-md-6">
                    </video>
                    <video id="my-video" class="video-js mt-3" controls preload="auto" width="640" height="264"
                        poster="{{ asset('/videos/six-img.jpg') }}" data-setup="{}">
                        <source src="/videos/six.mp4" type="video/mp4" />
                        <source src="/videos/six.webm" type="video/webm" />

                    </video>
                </div>
            </div>

        </div>
    </div>
    <div class="section rtl-direction">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-delay="0">
                    <span class="subheading">{{ __('wkalt_bisan') }}</span>
                    <h2 class="heading mb-5">{{ __('bisan_air') }}</h2>
                </div>
            </div>
            <div class="row align-items-stretch">
                @foreach ($airlines as $item)
                    <div class="col-6 col-sm-6 col-md-3 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="image-airline">
                            <img src="{{ asset($item->image) }}" class="img-fluid"
                                @if (app()->getLocale() == 'ar') alt="{{ $item->alt_ar ?? '' }}"  @else alt="{{ $item->alt ?? '' }}" @endif>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection
@section('scripts')
    <script src="https://vjs.zencdn.net/8.3.0/video.min.js"></script>
@endsection
