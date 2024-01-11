<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>{{ __('bisan_travel') }}</title>
    <meta name="keywords" content="بيسان لحجوزات الطيران ,بيسان لحجوزات الفنادق ,بيسان ,استخراج تأشيرات ,عروض ,عروض سياحية وكالة بيسان للسفر ,وكالة بيسان للسفروالسياحة ,وكالة بيسان,سفر ,رحلات ,سياحة , السعودية">
    <meta name="author" content="John Doe">
    <meta name="description"
        content="وكالة بيسان للسفروالسياحة 
        وكالة بيسان للسفر
        وكالة بيسان
		عروض
		عروض سياحية 
		سياحة 
		السياحه فى السعودية
		السعودية
		سفر
		تأشيرات
		استخراج تأشيرات
        بيسان لحجوزات الفنادق
        بيسان لحجوزات الطيران
		">


<meta property="og:title" content="{{__('bisan_travel_more')}}" />
<meta property="og:description" content="<p>وكالة بيسان للسفروالسياحة
    عروض
    عروض سياحية
    سياحة
    السياحه فى السعودية
    السعودية
    سفر
    بيسان لحجوزات الفنادق
    بيسان لحجوزات الطيران
    تأشيرات
    استخراج تأشيرات</p>" />
<meta property="og:url" content="https://bisan.com.sa/ar/"/>
<meta property="og:image" content="{{asset('/theme-front/images/logo.webp')}}"/>
<meta property="og:site_name" content="وكالة بيسان للسفروالسياحة"/>
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="وكالة بيسان للسفروالسياحة">
<meta name="twitter:title" content="وكالة بيسان للسفروالسياحة">
<meta name="twitter:description" content="<p>وكالة بيسان للسفروالسياحة
    عروض
    عروض سياحية
    سياحة
    السياحه فى السعودية
    السعودية
    سفر
    بيسان لحجوزات الفنادق
    بيسان لحجوزات الطيران
    بيسان لحجوزات الفنادق
    بيسان لحجوزات الطيران
    تأشيرات
    استخراج تأشيرات</p>">
<meta name="twitter:image" content="{{asset('/theme-front/images/logo.webp')}}">
<link rel="image_src" href="{{asset('/theme-front/images/logo.webp')}}" />

    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900;1000&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/theme-front/css/bootstrap.min.css">
    <link rel="stylesheet" href="/theme-front/fonts/icomoon/style.css">
    <link rel="stylesheet" href="/theme-front/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="/theme-front/css/tiny-slider.css">
    <link rel="stylesheet" href="/theme-front/css/aos.css">
    <link rel="stylesheet" href="/theme-front/css/flatpickr.min.css">
    <link rel="stylesheet" href="/theme-front/css/glightbox.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" type="image/x-icon" href="/theme-back/app-assets/images/ico/favicon.png">
    <style>
        .vjs-poster img {
            object-fit: cover !important;
            box-shadow: 0px 2px 12px 0px #c6c6c6 !important
        }
    </style>

    @if (app()->getLocale() == 'ar')
        <link rel="stylesheet" href="/theme-front/css/style-rtl.css">
    @else
        <link rel="stylesheet" href="/theme-front/css/style.css">
    @endif


    @yield('head_end')

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TZ63HSG');</script>
    <!-- End Google Tag Manager -->
</head>


<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TZ63HSG"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div id="wa-widget-send-button">
        <div class="whats-one">2</div>
        <a target="_blank" href="https://api.whatsapp.com/send?phone=966552938888&text={{ __('details') }}">
            
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32"
            class="wa-messenger-svg-whatsapp wh-svg-icon">
            <path
                d=" M19.11 17.205c-.372 0-1.088 1.39-1.518 1.39a.63.63 0 0 1-.315-.1c-.802-.402-1.504-.817-2.163-1.447-.545-.516-1.146-1.29-1.46-1.963a.426.426 0 0 1-.073-.215c0-.33.99-.945.99-1.49 0-.143-.73-2.09-.832-2.335-.143-.372-.214-.487-.6-.487-.187 0-.36-.043-.53-.043-.302 0-.53.115-.746.315-.688.645-1.032 1.318-1.06 2.264v.114c-.015.99.472 1.977 1.017 2.78 1.23 1.82 2.506 3.41 4.554 4.34.616.287 2.035.888 2.722.888.817 0 2.15-.515 2.478-1.318.13-.33.244-.73.244-1.088 0-.058 0-.144-.03-.215-.1-.172-2.434-1.39-2.678-1.39zm-2.908 7.593c-1.747 0-3.48-.53-4.942-1.49L7.793 24.41l1.132-3.337a8.955 8.955 0 0 1-1.72-5.272c0-4.955 4.04-8.995 8.997-8.995S25.2 10.845 25.2 15.8c0 4.958-4.04 8.998-8.998 8.998zm0-19.798c-5.96 0-10.8 4.842-10.8 10.8 0 1.964.53 3.898 1.546 5.574L5 27.176l5.974-1.92a10.807 10.807 0 0 0 16.03-9.455c0-5.958-4.842-10.8-10.802-10.8z"
                fill-rule="evenodd"></path>
        </svg>
        
        
        </a>

   
 
     <div class="pipe">|</div> <div class="whats-one">1</div>  
     <a target="_blank" href="https://api.whatsapp.com/send?phone=966530575111&text={{ __('details') }}">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32"
            class="wa-messenger-svg-whatsapp wh-svg-icon">
            <path
                d=" M19.11 17.205c-.372 0-1.088 1.39-1.518 1.39a.63.63 0 0 1-.315-.1c-.802-.402-1.504-.817-2.163-1.447-.545-.516-1.146-1.29-1.46-1.963a.426.426 0 0 1-.073-.215c0-.33.99-.945.99-1.49 0-.143-.73-2.09-.832-2.335-.143-.372-.214-.487-.6-.487-.187 0-.36-.043-.53-.043-.302 0-.53.115-.746.315-.688.645-1.032 1.318-1.06 2.264v.114c-.015.99.472 1.977 1.017 2.78 1.23 1.82 2.506 3.41 4.554 4.34.616.287 2.035.888 2.722.888.817 0 2.15-.515 2.478-1.318.13-.33.244-.73.244-1.088 0-.058 0-.144-.03-.215-.1-.172-2.434-1.39-2.678-1.39zm-2.908 7.593c-1.747 0-3.48-.53-4.942-1.49L7.793 24.41l1.132-3.337a8.955 8.955 0 0 1-1.72-5.272c0-4.955 4.04-8.995 8.997-8.995S25.2 10.845 25.2 15.8c0 4.958-4.04 8.998-8.998 8.998zm0-19.798c-5.96 0-10.8 4.842-10.8 10.8 0 1.964.53 3.898 1.546 5.574L5 27.176l5.974-1.92a10.807 10.807 0 0 0 16.03-9.455c0-5.958-4.842-10.8-10.802-10.8z"
                fill-rule="evenodd"></path>
        </svg>
    
    </a>

  
        <div style="color: white; font-size: 18px">
            <a target="_blank" href="https://api.whatsapp.com/send?phone=966530575111&text={{ __('details') }}">{{ __('contact_us') }}</a>
        </div>
    </div>
