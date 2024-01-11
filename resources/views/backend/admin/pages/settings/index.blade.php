@extends('backend.layouts.index')

@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">{{ __('About Bisan') }}</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">{{ __('dashboard') }}</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">{{ __('settings') }}</a>
                                    </li>
                                    <li class="breadcrumb-item active">{{ __('About Bisan') }}
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="row">
                    <form method="POST" action="{{ route('settings.store', app()->getLocale()) }}"
                        onsubmit="onSubmitInsert()" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md mb-4 mb-md-2">
                            <small class="text-light fw-semibold">{{ __('About Bisan') }}</small>
                            <div class="accordion mt-3" id="accordionExample">
                                <div class="card accordion-item active">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button type="button" class="accordion-button" data-bs-toggle="collapse"
                                            data-bs-target="#accordionOne" aria-expanded="true"
                                            aria-controls="accordionOne">
                                            {{ __('description') }}
                                        </button>
                                    </h2>

                                    <div id="accordionOne" class="accordion-collapse collapse show"
                                        data-bs-parent="#accordionExample" style="">
                                        <div class="accordion-body">
                                            <div class="form-group">
                                                <label for="">
                                                    {{ __('description') }}</label>
                                                <div class="text-editor">
                                                    <textarea id="description" class="description @error('description') is-invalid @enderror" name="description">{{ $settings->about_bisan ?? '' }}</textarea>
                                                    @if (!$errors->has('description'))
                                                        <span class="invalid-feedback d-none" role="alert">
                                                            <strong>{{ __('lang.filedrequired') }}</strong>
                                                        </span>
                                                    @endif
                                                    @error('description')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ __('lang.filedrequired') }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#accordionTwo" aria-expanded="false"
                                            aria-controls="accordionTwo">
                                            {{ __('description_ar') }}

                                        </button>
                                    </h2>
                                    <div id="accordionTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionExample" style="">
                                        <div class="accordion-body">
                                            <div class="form-group">
                                                <label for="">
                                                    {{ __('description_ar') }}</label>
                                                <div class="text-editor">
                                                    <textarea id="description_ar" class="description_ar @error('description_ar') is-invalid @enderror"
                                                        name="description_ar">{{ $settings->about_bisan_ar ?? '' }}</textarea>
                                                    @if (!$errors->has('description_ar'))
                                                        <span class="invalid-feedback d-none" role="alert">
                                                            <strong>{{ __('lang.filedrequired') }}</strong>
                                                        </span>
                                                    @endif
                                                    @error('description_ar')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ __('lang.filedrequired') }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#accordionThree" aria-expanded="false"
                                            aria-controls="accordionThree">
                                            {{ __('image') }}
                                        </button>
                                    </h2>
                                    <div id="accordionThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample" style="">
                                        <div class="accordion-body">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="image_label">Image</label>
                                                    <div class="input-group">
                                                        <input type="text" id="image_label" class="form-control"
                                                            name="image" value="{{ $settings->image ?? '' }}"
                                                            aria-label="Image" aria-describedby="button-image">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-outline-secondary" type="button"
                                                                id="button-image">Select</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" id="submint">{{ __('submit') }}</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection

@section('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            document.getElementById('button-image').addEventListener('click', (event) => {
                event.preventDefault();

                window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
            });
        });

        // set file link
        function fmSetLink($url) {
            document.getElementById('image_label').value = $url;
        }
    </script>
@endsection
