@extends('frontend.layouts.indexwithoutslider')

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
                <div class="col-md-6">
                    @if (app()->getLocale() == "ar")
                        {!! $about->about_bisan_ar !!}
                    @else
                    {!! $about->about_bisan !!}

                    @endif
                </div>
                <div class="col-md-6">
                    <img src="{{asset($about->image)}}" alt="{{__('wkalet_bisan')}}" width="100%">
                </div>
            </div>
        </div>
    </div>
@endsection
