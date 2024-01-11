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
            <div class="row services-section">
                <div class="col-md-12 mb-5">
                    <h3 class="vision-title" style="font-weight:700">{{ __('services') }}</h3>

                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 text-center aos-init aos-animate">
                    <div class="services">
                        <div class="icon"></div>
                        <div class="text">
                            <i class="fas fa-plane"></i>
                        </div>
                        <div class="info">
                            <h3>{{ __('Issuance_ticket') }}</h3>
                            <p>{{ __('Issuance_ticket_text') }}</p>
                        </div>
                    </div>

                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 text-center aos-init aos-animate">
                    <div class="services">
                        <div class="icon"></div>
                        <div class="text">
                            <i class="fas fa-hotel"></i>
                        </div>
                        <div class="info">
                            <h3>{{ __('Hotel_reservations') }}</h3>
                            <p>{{ __('Hotel_reservations_text') }}</p>
                        </div>
                    </div>

                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 text-center aos-init aos-animate">
                    <div class="services">
                        <div class="icon"></div>
                        <div class="text">
                            <i class="fas fa-car"></i>
                        </div>
                        <div class="info">
                            <h3>{{ __('car_reservations') }}</h3>
                            <p>{{ __('car_reservations_text') }}</p>
                        </div>
                    </div>

                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 text-center aos-init aos-animate">
                    <div class="services">
                        <div class="icon"></div>
                        <div class="text">
                            <i class="fas fa-file"></i>
                        </div>
                        <div class="info">
                            <h3>{{ __('issue_reservations') }}</h3>
                            <p>{{ __('issue_reservations_text') }}</p>
                        </div>
                    </div>

                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 text-center aos-init aos-animate">
                    <div class="services">
                        <div class="icon"></div>
                        <div class="text">
                            <i class="fas fa-address-card"></i>
                        </div>
                        <div class="info">
                            <h3>{{ __('k_reservations') }}</h3>
                            <p>{{ __('k_reservations_text') }}</p>
                        </div>
                    </div>

                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 text-center aos-init aos-animate">
                    <div class="services">
                        <div class="icon"></div>
                        <div class="text">
                            <i class="fas fa-hospital"></i>
                        </div>
                        <div class="info">
                            <h3>{{ __('isurance_reservations') }}</h3>
                            <p>{{ __('isurance_reservations_text') }}</p>
                        </div>
                    </div>

                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 text-center aos-init aos-animate">
                    <div class="services">
                        <div class="icon"></div>
                        <div class="text">
                            <i class="fas fa-ship"></i>
                        </div>
                        <div class="info">
                            <h3>{{ __('ship_reservations') }}</h3>
                            <p>{{ __('ship_reservations_text') }}</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
