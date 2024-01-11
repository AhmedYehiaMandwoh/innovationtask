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
                            <h2 class="content-header-title float-start mb-0">{{ __('create') }}</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">{{ __('home') }}</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">{{ __('categories') }}</a>
                                    </li>
                                    <li class="breadcrumb-item active">{{ __('create') }}
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
                <div class="card p-2">
                    <form method="POST" action="{{ route('categories.store', app()->getLocale()) }}"
                        onsubmit="onSubmitInsert()" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">{{ __('title') }}</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    name="title" id="title" value="{{ old('title') }}">
                                @if (!$errors->has('title'))
                                    <span class="invalid-feedback d-none" role="alert">
                                        <strong>{{ __('filedrequired') }}</strong>
                                    </span>
                                @endif
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ __('filedrequired') }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">{{ __('title_ar') }}</label>
                                <input type="text" dir="rtl"
                                    class="form-control @error('title_ar') is-invalid @enderror" name="title_ar"
                                    id="title_ar" value="{{ old('title_ar') }}">
                                @if (!$errors->has('title_ar'))
                                    <span dir="rtl" class="invalid-feedback d-none" role="alert">
                                        <strong>{{ __('filedrequired') }}</strong>
                                    </span>
                                @endif
                                @error('title_ar')
                                    <span dir="rtl" class="invalid-feedback" role="alert">
                                        <strong>{{ __('filedrequired') }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="image_label">{{__('Image')}}</label>
                                <div class="input-group">
                                    <input type="text" id="image_label" class="form-control" name="image"
                                        aria-label="Image" aria-describedby="button-image">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button"
                                            id="button-image">{{__('Select')}}</button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleInputEmail1">{{ __('alt') }}</label>
                                <input type="text" class="form-control @error('alt') is-invalid @enderror"
                                    name="alt" id="alt" value="{{ old('alt') }}">
                                @if (!$errors->has('alt'))
                                    <span class="invalid-feedback d-none" role="alert">
                                        <strong>{{ __('filedrequired') }}</strong>
                                    </span>
                                @endif
                                @error('alt')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ __('filedrequired') }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleInputEmail1">{{ __('alt_ar') }}</label>
                                <input type="text" dir="rtl"
                                    class="form-control @error('alt_ar') is-invalid @enderror" name="alt_ar"
                                    id="alt_ar" value="{{ old('alt_ar') }}">
                                @if (!$errors->has('alt_ar'))
                                    <span dir="rtl" class="invalid-feedback d-none" role="alert">
                                        <strong>{{ __('filedrequired') }}</strong>
                                    </span>
                                @endif
                                @error('alt_ar')
                                    <span dir="rtl" class="invalid-feedback" role="alert">
                                        <strong>{{ __('filedrequired') }}</strong>
                                    </span>
                                @enderror
                            </div>



                        </div>
                        <div class="modal-footer">
                            <a href="{{route('categories.index', app()->getLocale())}}" class="btn btn-warning"
                                data-dismiss="modal">{{ __('Back') }}</a>
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
