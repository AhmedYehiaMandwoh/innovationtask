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
                                    <li class="breadcrumb-item"><a href="#">{{ __('users') }}</a>
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
                    <form method="POST" action="{{ route('users.store', app()->getLocale()) }}"
                        onsubmit="onSubmitInsert()" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">{{ __('name') }}</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" id="name" value="{{ old('name') }}">
                                @if (!$errors->has('name'))
                                    <span class="invalid-feedback d-none" role="alert">
                                        <strong>{{ __('filedrequired') }}</strong>
                                    </span>
                                @endif
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ __('filedrequired') }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">{{ __('email') }}</label>
                                <input type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    id="email" value="{{ old('email') }}">
                                @if (!$errors->has('email'))
                                    <span dir="rtl" class="invalid-feedback d-none" role="alert">
                                        <strong>{{ __('filedrequired') }}</strong>
                                    </span>
                                @endif
                                @error('email')
                                    <span dir="rtl" class="invalid-feedback" role="alert">
                                        <strong>{{ __('filedrequired') }}</strong>
                                    </span>
                                @enderror
                            </div>
                    
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">{{ __('password') }}</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password" id="password" value="{{ old('password') }}">
                                @if (!$errors->has('password'))
                                    <span class="invalid-feedback d-none" role="alert">
                                        <strong>{{ __('filedrequired') }}</strong>
                                    </span>
                                @endif
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ __('filedrequired') }}</strong>
                                    </span>
                                @enderror
                            </div>
                       


                        </div>
                        <div class="modal-footer">
                            <a href="{{route('users.index', app()->getLocale())}}" class="btn btn-warning"
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
