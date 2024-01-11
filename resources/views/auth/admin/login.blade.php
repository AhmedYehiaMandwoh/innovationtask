
<!DOCTYPE html>
<!--
Template Name: Vuexy - Vuejs, HTML & Laravel Admin Dashboard Template
Author: PixInvent
Website: http://www.pixinvent.com/
Contact: hello@pixinvent.com
Follow: www.twitter.com/pixinvents
Like: www.facebook.com/pixinvents
Purchase: https://1.envato.market/vuexy_admin
Renew Support: https://1.envato.market/vuexy_admin
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.

-->
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Login Bisan</title>
    <link rel="shortcut icon" type="image/x-icon" href="/theme-back/app-assets/images/ico/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="/theme-back/app-assets/vendors/css/vendors.min.css">
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
    <link rel="stylesheet" type="text/css" href="/theme-back/app-assets/css/core/menu/menu-types/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="/theme-back/app-assets/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href="/theme-back/app-assets/css/pages/authentication.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/theme-back/assets/css/style.css">
    <!-- END: Custom CSS-->

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><div class="auth-wrapper auth-basic px-2">
  <div class="auth-inner my-2">
    <!-- Login basic -->
    <div class="card mb-0">
      <div class="card-body">
        <span class="d-flex justify-content-center mb-1">
            <img src="/theme-front/images/logo.png" width="200" srcset="">
            </span>


        <form class="auth-login-form mt-2" action="{{ route('adminLoginPost') }}" method="post">
            {!! csrf_field() !!}
           
            @if(\Session::get('error'))
            <div class="demo-spacing-0">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <div class="alert-body">
                    {{ \Session::get('error') }}
                  </div>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              </div>
            @endif
          
          <div class="mb-1">
            <label for="login-email" class="form-label">{{__('email')}}</label>
            
            <input
              type="text"
              class="form-control"
              id="login-email"
              name="email"
              placeholder="john@example.com"
              aria-describedby="login-email"
              tabindex="1"
              autofocus required
            />
            @if ($errors->has('email'))
            <span class="help-block font-red-mint">
                <small class="text-danger">{{ $errors->first('email') }}</small>
            </span>
            @endif
          </div>

          <div class="mb-1">
            <div class="d-flex justify-content-between">
              <label class="form-label" for="login-password">Password</label>
              <a href="#">
                <small>Forgot Password?</small>
              </a>
            </div>
            <div class="input-group input-group-merge form-password-toggle">
              <input
                type="password"
                class="form-control form-control-merge"
                id="login-password"
                name="password"
                required
                tabindex="2"
                placeholder="{{__('password')}}"
                aria-describedby="login-password"
              />
              @if ($errors->has('password'))
            <span class="help-block font-red-mint">
                <small class="text-danger">{{ $errors->first('password') }}</small>

            </span>
            @endif
              <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
            </div>
          </div>
          {{-- <div class="mb-1">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="remember-me" tabindex="3" />
              <label class="form-check-label" for="remember-me"> Remember Me </label>
            </div>
          </div> --}}
          <button class="btn btn-primary w-100" tabindex="4" type="submit">{{__('login')}}</button>
        </form>

       
      </div>
    </div>
    <!-- /Login basic -->
  </div>
</div>

        </div>
      </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="/theme-back/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="/theme-back/app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="/theme-back/app-assets/js/core/app-menu.min.js"></script>
    <script src="/theme-back/app-assets/js/core/app.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="/theme-back/app-assets/js/scripts/pages/auth-login.js"></script>
    <!-- END: Page JS-->

    <script>
      $(window).on('load',  function(){
        if (feather) {
          feather.replace({ width: 14, height: 14 });
        }
      })
    </script>
  </body>
  <!-- END: Body-->
</html>