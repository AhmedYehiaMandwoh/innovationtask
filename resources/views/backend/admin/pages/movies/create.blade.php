@extends('backend.layouts.index')
@error('category_id')
    <style>
        .select2-container--default .select2-selection--single {
            border: 1px solid #f00 !important;
        }
    </style>
@enderror
@error('details_ar')
    <style>
        #details_ar .note-frame {
            border: 1px solid #f00 !important;
        }
    </style>
@enderror
@error('details')
    <style>
        #details .note-frame {
            border: 1px solid #f00 !important;
        }
    </style>
@enderror
@error('meta_tag')
    <style>
        .tagsinput {
            border: 1px solid #f00 !important;
        }
    </style>
@enderror
@error('meta_tag_ar')
    <style>
        .tagsinput {
            border: 1px solid #f00 !important;
        }
    </style>
@enderror
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
                            <h2 class="content-header-title float-start mb-0">{{ __('edit') }}</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">{{ __('home') }}</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">{{ __('movies') }}</a>
                                    </li>
                                    <li class="breadcrumb-item active">{{ __('edit') }}
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
                    <form method="POST" action="{{ route('movies.store', app()->getLocale()) }}"
                        onsubmit="onSubmitInsert()" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">{{ __('categories') }}</label>
                                <select name="cat_id" id="cat_id"
                                    class="form-control select2 @error('cat_id') is-invalid @enderror">
                                    <option value="">{{ __('choose') }}</option>
                                    @forelse (categories() as $item)
                                        @if (app()->getLocale() == 'ar')
                                            <option value="{{ $item->id }}">{{ $item->title_ar }}</option>
                                        @else
                                            <option value="{{ $item->id }}">{{ $item->title }}</option>
                                        @endif

                                    @empty

                                        <option value="">no data</option>
                                    @endforelse
                                </select>
                                @if (!$errors->has('cat_id'))
                                    <span class="invalid-feedback d-none" role="alert">
                                        <strong>{{ __('filedrequired') }}</strong>
                                    </span>
                                @endif
                                @error('cat_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ __('filedrequired') }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">{{ __('slug') }}</label>
                                <input type="text" class="form-control @error('slug') is-invalid @enderror"
                                    name="slug" id="slug" value="{{ old('slug') }}">
                                @if (!$errors->has('slug'))
                                    <span class="invalid-feedback d-none" role="alert">
                                        <strong>{{ __('filedrequired') }}</strong>
                                    </span>
                                @endif
                                @error('slug')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ __('filedrequired') }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">{{ __('slug_ar') }}</label>
                                <input type="text" dir="rtl"
                                    class="form-control @error('slug_ar') is-invalid @enderror" name="slug_ar"
                                    id="slug_ar" value="{{ old('slug_ar') }}">
                                @if (!$errors->has('slug_ar'))
                                    <span dir="rtl" class="invalid-feedback d-none" role="alert">
                                        <strong>{{ __('filedrequired') }}</strong>
                                    </span>
                                @endif
                                @error('slug_ar')
                                    <span dir="rtl" class="invalid-feedback" role="alert">
                                        <strong>{{ __('filedrequired') }}</strong>
                                    </span>
                                @enderror
                            </div>
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
                                <div>
                                    <label>{{ __('tags') }}</label>
                                    <input id="tagss" name="meta_tag"
                                        class="form-control @error('meta_tag') is-invalid @enderror" type="text"
                                        value="{{ old('meta_tag') }}">
                                    @if (!$errors->has('meta_tag'))
                                        <span class="invalid-feedback d-none" role="alert">
                                            <strong>{{ __('filedrequired') }}</strong>
                                        </span>
                                    @endif
                                    @error('meta_tag')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ __('filedrequired') }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label>{{ __('tags_ar') }}</label>
                                <div dir="rtl">
                                    <input id="tagss_ar" name="meta_tag_ar"
                                        class="form-control @error('meta_tag_ar') is-invalid @enderror" type="text"
                                        value="{{ old('meta_tag_ar') }}">
                                    @if (!$errors->has('meta_tag_ar'))
                                        <span class="invalid-feedback d-none" role="alert">
                                            <strong>{{ __('filedrequired') }}</strong>
                                        </span>
                                    @endif
                                    @error('meta_tag_ar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ __('filedrequired') }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div>
                                    <label>{{ __('keywords') }}</label>
                                    <input id="keywords" name="keywords"
                                        class="form-control @error('keywords') is-invalid @enderror" type="text"
                                        value="{{ old('keywords') }}">
                                    @if (!$errors->has('keywords'))
                                        <span class="invalid-feedback d-none" role="alert">
                                            <strong>{{ __('filedrequired') }}</strong>
                                        </span>
                                    @endif
                                    @error('keywords')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ __('filedrequired') }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label>{{ __('keywords_ar') }}</label>
                                <div dir="rtl">
                                    <input id="keywords_ar" name="keywords_ar"
                                        class="form-control @error('keywords_ar') is-invalid @enderror" type="text"
                                        value="{{ old('keywords_ar') }}">
                                    @if (!$errors->has('keywords_ar'))
                                        <span class="invalid-feedback d-none" role="alert">
                                            <strong>{{ __('filedrequired') }}</strong>
                                        </span>
                                    @endif
                                    @error('keywords_ar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ __('filedrequired') }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">{{ __('video_link') }}</label>
                                <input type="text" class="form-control @error('video_link') is-invalid @enderror"
                                    name="video_link" id="video_link" value="{{ old('video_link') }}">
                                @if (!$errors->has('video_link'))
                                    <span class="invalid-feedback d-none" role="alert">
                                        <strong>{{ __('filedrequired') }}</strong>
                                    </span>
                                @endif
                                @error('video_link')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ __('filedrequired') }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="descriptin">{{ __('meta_description') }}</label>
                                <textarea class="form-control meta_description @error('meta_description') is-invalid @enderror "
                                    name="meta_description" id="meta_description">{{ old('meta_description') }}</textarea>
                                @if (!$errors->has('meta_description'))
                                    <span class="invalid-feedback d-none" role="alert">
                                        <strong>{{ __('filedrequired') }}</strong>
                                    </span>
                                @endif
                                @error('meta_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ __('filedrequired') }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="descriptin">{{ __('meta_description_ar') }}</label>
                                <textarea dir="rtl" class="form-control meta_description_ar @error('meta_description_ar') is-invalid @enderror "
                                    name="meta_description_ar" id="meta_description_ar">{{ old('meta_description_ar') }}</textarea>
                                @if (!$errors->has('meta_description_ar'))
                                    <span dir="rtl" class="invalid-feedback d-none" role="alert">
                                        <strong>{{ __('filedrequired') }}</strong>
                                    </span>
                                @endif
                                @error('meta_description_ar')
                                    <span dir="rtl"class="invalid-feedback" role="alert">
                                        <strong>{{ __('filedrequired') }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="">
                                    {{ __('description') }}</label>
                                <div class="text-editor" >
                                    <textarea id="description" class="description @error('description') is-invalid @enderror" name="description">{{ old('description') }}</textarea>
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
                            <div class="form-group">
                                <label for="">
                                    {{ __('description_ar') }}</label>
                                <div class="text-editor" >
                                    <textarea id="description_ar" class="description_ar @error('description_ar') is-invalid @enderror" name="description_ar">{{ old('description_ar') }}</textarea>
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
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="image_label">Image</label>
                                    <div class="input-group">
                                        <input type="text" id="image_label" class="form-control" name="image"
                                            aria-label="Image" aria-describedby="button-image">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button"
                                                id="button-image">Select</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer ">
                            <a href="{{route('movies.index', app()->getLocale())}}" class="btn btn-warning" >{{ __('Back') }}</a>
                            <button type="submit" class="btn btn-primary" id="submint">{{ __('Save') }}</button>
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
        function getsubids() {
            $.ajax({
                type: "get",
                dataType: 'json',
                url: '{{ route('movies.mycity', app()->getLocale()) }}?id=' + $("#country_id").val(),
                success: function(data) {
                    console.log(data);
                    var x = `<option value="" disabled>{{ __('choose') }}</option>`;
                    data.forEach(element => {
                        console.log(element);
                        if (langPhp == "ar") {

                            x += `<option value="${element.id}">${element.name_ar}</option>`;
                        } else {

                            x += `<option value="${element.id}">${element.name_en}</option>`;
                        }
                    });
                    $("#city_id").html(x);
                    $("#city_id").prop("disabled", false);


                },
                error: function(err) {
                    console.log(err);
                }
            });
        }
        $(function() {

            $('#tagss').tagsInput();
            $('#tagss_ar').tagsInput();
            $('#keywords').tagsInput();
            $('#keywords_ar').tagsInput();

        });


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
