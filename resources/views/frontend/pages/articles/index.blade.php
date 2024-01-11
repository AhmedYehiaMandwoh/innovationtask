@extends('frontend.layouts.indexwithoutslider')
@section('head_end')
    @foreach ($articles as $article)
        <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "NewsArticle",
      "headline": "{{app()->getLocale() == "ar" ? $article->title_ar : $article->title}}",
      "image": [
        "{{asset($article->image)}}",
       ],
      "datePublished": "{{$article->created_at ?? ''}}",
      "dateModified": "{{$article->created_at ?? ''}}",
      "author": [{
          "@type": "Person",
          "name": "{{app()->getLocale() == "ar" ? $article->slug_ar : $article->slug}}",
          "url": "{{ route('articles', app()->getLocale()) }}"
        }]
    }
    </script>
    @endforeach
@endsection
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
                <div class="col-md-3 col-lg-3 mb-4">
                    <div class="bg-mode shadow rounded-3 overflow-hidden p-4">
                        <h3 class="filters">{{ __('Filters') }}</h3><br>
                        <div class="form-group">
                            <input type="text" class="mysearch" placeholder="{{ __('Search') }}"
                                @isset($_GET['search'])
                        value="{{ $_GET['search'] }}"
                        @endisset
                                id="search">
                        </div>

                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading mt-3" role="tab" id="headingOne">
                                    <b class="panel-title d-flex justify-content-between align-items-center">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                            aria-expanded="true" aria-controls="collapseOne">
                                            {{ __('Alphabet') }}
                                        </a>


                                    </b>

                                </div>
                                <div id="collapseOnedd" class="panel-collapse collapse in show" role="tabpanel"
                                    aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <div class="form-check mt-3">
                                            <input class="form-check-input"
                                                @isset($_GET['Alphabet_ASC'])
                                            checked
                                            @endisset
                                                value="Alphabet_ASC" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                {{ __('From A to Z') }}
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input"
                                                @isset($_GET['Alphabet_DESC'])
                                        checked
                                        @endisset
                                                value="Alphabet_DESC" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault2">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                {{ __('From Z to A') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel-heading mt-3" role="tab" id="headingThree">
                                    <b class="panel-title d-flex justify-content-between align-items-center">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"
                                            aria-expanded="true" aria-controls="collapseThree">
                                            {{ __('Date') }}
                                        </a>


                                    </b>

                                </div>
                                <div id="collapseThreedd" class="panel-collapse collapse in show" role="tabpanel"
                                    aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <div class="form-check mt-3">
                                            <input class="form-check-input" type="radio"
                                                @isset($_GET['date_desc'])
                                        checked
                                        @endisset
                                                name="date_desc" value="date_desc" id="date_desc">
                                            <label class="form-check-label" for="date_desc">
                                                {{ __('Date Desc') }}
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio"
                                                @isset($_GET['date_asc'])
                                            checked
                                            @endisset
                                                name="date_desc" value="date_asc" id="date_asc">
                                            <label class="form-check-label" for="date_asc">
                                                {{ __('Date Asc') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>

                        <div class="mt-3 d-flex">
                            <button class="btn btn-primary mx-1 mt-4 mybtn" onclick="filter()">{{ __('Filter') }}</button>
                            <button class="btn btn-warning mt-4  mybtn"
                                onclick="defualtfilter()">{{ __('Default') }}</button>
                        </div>

                    </div>
                </div>
                <div class="col-md-9 col-lg-9">
                    <div class="row ">
                        @foreach ($articles as $article)
                            <div class="col-md-4 mb-4">
                                <section class="cards">
                                    <article class="card-box card--1">
                                        <div class="card__img"></div>
                                        <a href="{{ route('articlesingle', [app()->getLocale(), $article->slug, $article->uuid]) }}"
                                            class="card_link">
                                            <div class="card__img--hover"
                                                style="background-image: url({{ asset($article->image) }})"></div>
                                        </a>
                                        <div class="card__info">
                                            <a
                                                href="{{ route('articlesingle', [app()->getLocale(), $article->slug, $article->uuid]) }}"><span
                                                    class="card__category"> {{ $article->created_at->format('M d Y') }}
                                                </span></a>
                                            <a
                                                href="{{ route('articlesingle', [app()->getLocale(), $article->slug, $article->uuid]) }}">
                                                <h3 class="card__title">
                                                    @if (app()->getLocale() == 'ar')
                                                        {{ $article->title_ar ?? '' }}
                                                    @else
                                                        {{ $article->title ?? '' }}
                                                    @endif
                                                </h3>
                                            </a>
                                            <span class="card__by">
                                                <a href="{{ route('articlesingle', [app()->getLocale(), $article->slug, $article->uuid]) }}"
                                                    class="card__author" title="author">
                                                    @if (app()->getLocale() == 'ar')
                                                        {{ $article->country->name_ar ?? '' }} -
                                                        {{ $article->city->name_ar ?? '' }}
                                                    @else
                                                        {{ $article->country->name_en ?? '' }} -
                                                        {{ $article->city->name_en ?? '' }}
                                                    @endif
                                                </a></span>
                                        </div>
                                    </article>

                                </section>
                            </div>
                        @endforeach


                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            {!!$articles->links()!!}
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
