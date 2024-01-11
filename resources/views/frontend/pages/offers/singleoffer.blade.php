@extends('frontend.layouts.indexwithoutslider')
@section('head_end')
@endsection
{{-- meta_tag
keywords
keywords_ar
meta_tag_ar
meta_description
meta_description_ar --}}
@php
    $tagss = [];
    if ($offer->meta_tag !== null) {
        if (app()->getLocale() == 'ar') {
            $tagss = explode(',', $offer->meta_tag_ar);
        } else {
            $tagss = explode(',', $offer->meta_tag);
        }
    }
@endphp
@section('content')
    <div class="section-article rtl-direction">
        <div class="waveWrapper waveAnimation">

            <div class="waveWrapperInner bgBottom">
                <div class="wave waveBottom"
                    style="background-image: url('http://front-end-noobs.com/jecko/img/wave-bot.png')"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-4 mb-4">
                    <div class="bg-mode shadow rounded-3 overflow-hidden p-4">
                        <h3 class="widget-title">{{ __('search') }}</h3>
                        <div class="form-group">
                            <input type="text" class="mysearch" placeholder="{{ __('Search') }}"
                                @isset($_GET['search'])
                        value="{{ $_GET['search'] }}"
                        @endisset
                                id="search">
                        </div>

                        <div class="widget widget-recent-post">
                            <!-- Recent Course -->
                            <h3 class="widget-title">{{ __('recent_offers') }}</h3>
                            <ul>
                                @foreach ($recent_offers as $item)
                                    <li>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="{{ asset($item->image) }}" width="80"
                                                    alt="@if (app()->getLocale() == 'ar') {{ $item->title_ar ?? '' }} @else {{ $item->title ?? '' }} @endif">
                                            </div>
                                            <div class="media-body align-self-center">
                                                <!-- course details link -->
                                                <h5 class="title"><a
                                                        href="{{ route('offersingle', [app()->getLocale(), $item->slug, $item->uuid]) }}">
                                                        @if (app()->getLocale() == 'ar')
                                                            {{ $item->title_ar ?? '' }}
                                                        @else
                                                            {{ $item->title ?? '' }}
                                                        @endif
                                                    </a>
                                                </h5>
                                                <div class="post-info">{{ $item->created_at->format('M d Y') }}</div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach


                            </ul>
                        </div>
                        @if ($tagss !== [])
                            <div class="widget widget_tags mb-0">
                                <!-- Tags list -->
                                <h4 class="widget-title">{{ __('tags') }}</h4>
                                <div class="tagcloud">
                                    @foreach ($tagss as $item)
                                        <a href="javascript:;">{{ $item }}</a>
                                    @endforeach

                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-md-9 col-lg-8">
                    <div class="row bg-mode shadow rounded-3 overflow-hidden p-4 article-details">
                        <div class="col-md12">
                            <img src="{{ asset($offer->image) }}" width="100%"
                                alt="@if (app()->getLocale() == 'ar') {{ $offer->title_ar ?? '' }} @else {{ $offer->title ?? '' }} @endif">
                            @if (app()->getLocale() == 'ar')
                                <h2 class="heading-details">{{ $offer->title_ar ?? '' }}</h2>
                            @else
                                <h2 class="heading-details">{{ $offer->title ?? '' }}</h2>
                            @endif
                            <span class="span-details">{{ $offer->created_at->format('M d Y') }}</span>

                            @if (app()->getLocale() == 'ar')
                                {!! $offer->description_ar ?? '' !!}
                            @else
                                {!! $offer->description ?? '' !!}
                            @endif
                        </div>
                        <div class="col-md-12 mb-2">
                            <h3 class="heading-details-offer">{{__('raslana')}}</h3>
                        </div>
                        <div class="col-md-6">
                            <a class="ralana" style="color: #333;font-weight: 700;" target="_blank" href="https://api.whatsapp.com/send?phone=966552938888&text={{ __('details') }}">
                                <img src="{{asset('theme-front/images/whatsapp.webp')}}" alt="whatsapp" width="30">
                                <p>+966552938888</p>
                            </a>
                        </div>
                       
                    </div>
                
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    <script>
        function filter() {
            let filterlink = '';
            $('input:checked').each(function() {
                if ($(this).attr('value') != '') {
                    if (filterlink == '') {
                        filterlink +=
                            '{{ route('articles', app()->getLocale()) }}' +
                            '?' + $(this).attr('value') + '=' + $(this).attr('value');
                    } else {
                        filterlink += '&' + $(this).attr('value') + '=' + $(this).attr('value');
                    }
                }

            });
            if ($("#search").val() != '') {
                if (filterlink == '') {
                    filterlink += '{{ route('articles', app()->getLocale()) }}' + '?search=' + $(
                        "#search").val();
                } else {
                    filterlink += '&search=' + $("#search").val();
                }
            }
            if ($("#min").val() != '') {
                if (filterlink == '') {
                    filterlink += '{{ route('articles', app()->getLocale()) }}' + '?min=' + $(
                        "#min").val();
                } else {
                    filterlink += '&min=' + $("#min").val();
                }
            }
            if ($("#max").val() != '') {
                if (filterlink == '') {
                    filterlink += '{{ route('articles', app()->getLocale()) }}' + '?max=' + $(
                        "#max").val();
                } else {
                    filterlink += '&max=' + $("#max").val();
                }
            }
            // console.log(filterlink);
            window.location.replace(filterlink);

        }

        function defualtfilter() {
            window.location.replace('{{ route('articles', app()->getLocale()) }}');

        }
        // append parameters to pagination links
        function addToPagination() {
            // add to attributes in pagination links
            $('ul.pagination li a').each(function() {
                let url = $(this).attr('href');
                let queryString = '?' + url.split('?')[1]; // "?page=1234...."

                let urlParams = new URLSearchParams(queryString);
                let page = urlParams.get('page'); // value of 'page' parameter

                let fullUrl = '{{ route('articles', app()->getLocale()) }}?page=' + page +
                    '&search=' +
                    '{{ request()->input('search') }}';

                //   $(".attribute-input").each(function() {
                //     if ($(this).is(':checked')) {
                //       fullUrl += '&'+encodeURI($(this).attr('name'))+'='+encodeURI($(this).val());
                //     }
                //   });

                if ($("#Lowest").val() != '') {
                    fullUrl += '&Lowest=' + encodeURI($("#Lowest").val());
                }

                $(this).attr('href', fullUrl);
            });
        }
    </script>
@endsection
