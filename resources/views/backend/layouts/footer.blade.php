<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">
    <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">
        {{__('Copyrights')}}    
    </span><span class="float-md-end d-none d-md-block"></span></p>
</footer>
<button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script src="{{ asset('theme-back/app-assets/vendors/js/vendors.min.js') }}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
@if (request()->routeIs('dashboard.index'))
    <script src="/theme-back/app-assets/vendors/js/charts/apexcharts.min.js"></script>
@endif
<script src="/theme-back/app-assets/vendors/js/extensions/toastr.min.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="/theme-back/app-assets/js/core/app-menu.min.js"></script>
<script src="/theme-back/app-assets/js/core/app.min.js"></script>
<script src="/theme-back/app-assets/js/scripts/customizer.min.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
@if (request()->routeIs('dashboard.index'))
    <script src="{{ asset('/theme-back/app-assets/js/scripts/pages/dashboard-ecommerce.min.js') }}"></script>
@endif
<!-- END: Page JS-->
<script src="{{ asset('theme-back/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('theme-back/app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('theme-back/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('theme-back/app-assets/vendors/js/tables/datatable/responsive.bootstrap5.js') }}"></script>
<script src="{{ asset('theme-back/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ asset('theme-back/app-assets/jquery.tagsinput-revisited.js') }}"></script>
<script src="{{ asset('theme-back/app-assets/summer.js') }}"></script>
<script src="{{ asset('theme-back/app-assets/jquery.tagsinput-revisited.js') }}"></script>

<link rel="stylesheet" href="{{ asset('theme-back/app-assets/select2.min.css') }}" />
<link rel="stylesheet" href="{{ asset('theme-back/app-assets/select2.min.js') }}" />

<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
<script src="https://cdn.ckeditor.com/4.21.0/full/ckeditor.js"></script>

<style>
    .select2-container--default .select2-selection--single .select2-selection__arrow {
        display: none !important
    }
</style>
@yield('scripts')



<script>
    var langPhp = {!! json_encode(app()->getLocale()) !!};

    $(document).ready(function() {
        $('.select2').select2();

        $('.summernote').summernote({
            callbacks: {
                onChange: function(contents, $editable) {

                    if ($(this).hasClass('detailsEN')) {
                        $(this).removeClass('is-invalid');

                        $('#details .note-frame').attr("style",
                            "border:1px solid #00000033 !important")
                    }
                    if ($(this).hasClass('detailsAR')) {
                        $(this).removeClass('is-invalid');

                        $('#details_ar .note-frame').attr("style",
                            "border:1px solid #00000033 !important")
                    }

                    if (contents.length == 0) {
                        if ($(this).hasClass('detailsEN')) {
                            $(this).addClass('is-invalid');

                            $('#details .note-frame').attr("style",
                                "border:1px solid #f00 !important")
                        }
                        if ($(this).hasClass('detailsAR')) {
                            $(this).addClass('is-invalid');

                            $('#details_ar .note-frame').attr("style",
                                "border:1px solid #f00 !important")
                        }

                    } else {
                        if ($(this).hasClass('detailsEN')) {
                            $(this).addClass('is-valid');

                            $('#details .note-frame').attr("style",
                                "border:1px solid #080 !important")
                        }
                        if ($(this).hasClass('detailsAR')) {
                            $(this).addClass('is-valid');

                            $('#details_ar .note-frame').attr("style",
                                "border:1px solid #080 !important")
                        }

                    }
                    // $('#details_ar .note-frame').style("border:1px solid #ddd !important")
                }
            },
            height: 200,
            placeholder: 'Start typing your text...',
            toolbar: [
                // ['style', ['style']],
                ['style', ['bold', 'italic', 'underline', 'clear']],
                // ['fontname', ['fontname']],
                ['fontsize', ['fontsize']],
                // ['color', ['color']],
                ['para', ['ul', 'ol']],
                ['insert', ['ltr', 'rtl']],
                ['insert', ['link', 'picture', 'video', 'hr']],
                ['view', ['fullscreen']],
                ['insert', ['table']],

            ]

        });
        $('input').keyup(function() {
            if ($(this).val() == '' || $(this).val() == null) {
                $(this).addClass('is-invalid');
                $(this).next('span').removeClass('d-none');

            } else {

                $(this).addClass('is-valid');
                $(this).removeClass('is-invalid');
            }
        });
        $('select').click(function() {
            if ($(this).val() == '' || $(this).val() == null) {
                $(this).addClass('is-invalid');
                $(this).next('span').removeClass('d-none');

            } else {

                $(this).addClass('is-valid');
                $(this).removeClass('is-invalid');
            }
        });
        $('textarea').keyup(function() {
            if ($(this).val() == '' || $(this).val() == null) {
                $(this).addClass('is-invalid');
                $(this).next('span').removeClass('d-none');

            } else {

                $(this).addClass('is-valid');
                $(this).removeClass('is-invalid');
            }
        });
    });

    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })

    CKEDITOR.replace('description');
    CKEDITOR.replace('description_ar');


  
</script>

{{-- @if (\Session::has('success'))
    <script>
        toastr.success(`{{ \Session::get('success') }}`);
    </script>
@endif
@if (\Session::has('danger'))
    <script>
        toastr.error(`{{ \Session::get('danger') }}`);
    </script>
@endif --}}
</body>
<!-- END: Body-->

</html>
