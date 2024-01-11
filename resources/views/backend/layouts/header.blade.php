<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
        content="Fezo admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Fezo admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="apple-touch-icon" href="/theme-back/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="/theme-back/app-assets/images/ico/favicon.png">
    <link rel="stylesheet" href="/theme-front/assets/css/line-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
    integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    @if (app()->getLocale() == 'ar')
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&display=swap"
            rel="stylesheet">
        <style>
            body,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            p,
            span,
            strong,
            a,
            b,
            nav,
            li,
            ul,
            table,
            tr,
            td,
            th {
                font-family: 'Cairo', sans-serif !important;
            }

            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }

            /* Firefox */
            input[type=number] {
                -moz-appearance: textfield;
            }

            body {
                font-family: 'Cairo', sans-serif !important;
                font-weight: 500 !important;

            }

            a,
            p,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            span,
            strong,
            ul,
            li,
            pre,
            input,
            select,
            label {
                font-family: 'Cairo', sans-serif !important;


            }

            .custom-file-label::after {
                content: "{{ __('lang.Browse') }}" !important;
            }

            #overlay {
                position: absolute;
                top: 0px;
                display: flex;
                flex-direction: row;
                left: 0px;
                width: 100%;
                height: 100%;
                background: rgb(255, 255, 255);
                opacity: 1;
                z-index: 9999999999;
            }

            #overlay .fa {
                margin: auto
            }
        </style>
        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="/theme-back/app-assets/vendors/css/vendors-rtl.min.css">
        <link rel="stylesheet" type="text/css"
            href="/theme-back/app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css">
        <link rel="stylesheet" type="text/css"
            href="/theme-back/app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css">
        <link rel="stylesheet" type="text/css"
            href="/theme-back/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css">
        <link rel="stylesheet" type="text/css" href="/theme-back/app-assets/vendors/css/charts/apexcharts.css">
        <link rel="stylesheet" type="text/css" href="/theme-back/app-assets/vendors/css/extensions/toastr.min.css">
        <!-- END: Vendor CSS-->

        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="/theme-back/app-assets/css-rtl/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/theme-back/app-assets/css-rtl/bootstrap-extended.min.css">
        <link rel="stylesheet" type="text/css" href="/theme-back/app-assets/css-rtl/colors.min.css">
        <link rel="stylesheet" type="text/css" href="/theme-back/app-assets/css-rtl/components.min.css">
        <link rel="stylesheet" type="text/css" href="/theme-back/app-assets/css-rtl/themes/dark-layout.min.css">
        <link rel="stylesheet" type="text/css" href="/theme-back/app-assets/css-rtl/themes/bordered-layout.min.css">
        <link rel="stylesheet" type="text/css" href="/theme-back/app-assets/css-rtl/themes/semi-dark-layout.min.css">

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css"
            href="/theme-back/app-assets/css-rtl/core/menu/menu-types/vertical-menu.min.css">
        <link rel="stylesheet" type="text/css" href="/theme-back/app-assets/css-rtl/pages/dashboard-ecommerce.min.css">
        <link rel="stylesheet" type="text/css" href="/theme-back/app-assets/css-rtl/plugins/charts/chart-apex.min.css">
        <link rel="stylesheet" type="text/css"
            href="/theme-back/app-assets/css-rtl/plugins/extensions/ext-component-toastr.min.css">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="/theme-back/app-assets/css-rtl/custom-rtl.min.css">
        <link rel="stylesheet" type="text/css" href="/theme-back/assets/css/style-rtl.css">
        <!-- END: Custom CSS-->
    @else
        <!-- BEGIN: Vendor CSS-->
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
            rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="/theme-back/app-assets/vendors/css/vendors.min.css">
        <link rel="stylesheet" type="text/css"
            href="/theme-back/app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css">
        <link rel="stylesheet" type="text/css"
            href="/theme-back/app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css">
        <link rel="stylesheet" type="text/css"
            href="/theme-back/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css">
        <link rel="stylesheet" type="text/css" href="/theme-back/app-assets/vendors/css/charts/apexcharts.css">
        <link rel="stylesheet" type="text/css" href="/theme-back/app-assets/vendors/css/extensions/toastr.min.css">
        <!-- END: Vendor CSS-->

        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="/theme-back/app-assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/theme-back/app-assets/css/bootstrap-extended.min.css">
        <link rel="stylesheet" type="text/css" href="/theme-back/app-assets/css/colors.min.css">
        <link rel="stylesheet" type="text/css" href="/theme-back/app-assets/css/components.min.css">
        <link rel="stylesheet" type="text/css" href="/theme-back/app-assets/css/themes/dark-layout.min.css">
        <link rel="stylesheet" type="text/css" href="/theme-back/app-assets/css/themes/bordered-layout.min.css">
        <link rel="stylesheet" type="text/css" href="/theme-back/app-assets/css/themes/semi-dark-layout.min.css">

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css"
            href="/theme-back/app-assets/css/core/menu/menu-types/vertical-menu.min.css">
        <link rel="stylesheet" type="text/css" href="/theme-back/app-assets/css/pages/dashboard-ecommerce.min.css">
        <link rel="stylesheet" type="text/css" href="/theme-back/app-assets/css/plugins/charts/chart-apex.min.css">
        <link rel="stylesheet" type="text/css"
            href="/theme-back/app-assets/css/plugins/extensions/ext-component-toastr.min.css">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="/theme-back/assets/css/style.css">
        
        <!-- END: Custom CSS-->
        @endif
        <style>
            .form-group {
                margin-top: 10px
            }
        </style>
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('theme-back/app-assets/jquery.tagsinput-revisited.css') }}" />
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static " data-open="click"
    data-menu="vertical-menu-modern" data-col="">
