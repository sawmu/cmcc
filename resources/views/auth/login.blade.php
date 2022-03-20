<!DOCTYPE html>
<!--
Template Name: NobleUI - HTML Bootstrap 5 Admin Dashboard Template
Author: NobleUI
Purchase: https://1.envato.market/nobleui_admin
Website: https://www.nobleui.com
Portfolio: https://themeforest.net/user/nobleui/portfolio
Contact: nobleui123@gmail.com
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
	<meta name="author" content="NobleUI">
	<meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<title>Elora - Dashboard</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->

 
	<!-- core:css -->
	<link rel="stylesheet" href=" {{ asset('backend/assets/vendors/core/core.css')}}">
	<!-- endinject -->

	<!-- Plugin css for this page -->
	<!-- End plugin css for this page -->

	<!-- inject:css -->
	<link rel="stylesheet" href=" {{ asset('backend/assets/fonts/feather-font/css/iconfont.css')}}">
	<link rel="stylesheet" href=" {{ asset('backend/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
	<!-- endinject -->

  <!-- Layout styles -->  
	<link rel="stylesheet" href=" {{ asset('backend/assets/css/demo1/style.css')}}">
  <!-- End layout styles -->

  <link rel="shortcut icon" href=" {{ asset('backend/assets/images/favicon.png')}}" />
</head>
<body>
	<div class="main-wrapper loginBG">
        
		<div class="page-wrapper full-page">
			<div class="page-content d-flex align-items-center justify-content-center loginBG">

				<div class="row w-100 mx-0 auth-page">
					<div class="col-md-8 col-xl-6 mx-auto">
						<div class="card">
							<div class="row">
                <div class="col-md-4 pe-md-0">
                  <div class="login-image">

                  </div>
                </div>
                <div class="col-md-8 ps-md-0">
                  <div class="auth-form-wrapper px-4 py-5">
                    <a href="#" class="noble-ui-logo d-block mb-2">Elora<span>CMS</span></a>
                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row">
                          <div id="email" class="form-group col-md-12 mb-4">
                            <input type="email" class="form-control input-lg" id="email" aria-describedby="emailHelp" placeholder="email" name="email">
                          </div>
        
                          <div class="form-group col-md-12 ">
                            <input type="password" class="form-control input-lg" id="password" placeholder="Password" name="password"> 
                          </div>
        
                          <div class="col-md-12">
                            <div class="d-flex my-2 justify-content-between">
                              {{-- <div class="d-inline-block mr-3">
                                <label class="control control-checkbox">Remember me
                                  <input name="remember" type="checkbox" />
                                  <div class="control-indicator"></div>
                                </label>
                              </div> --}}
        
                              {{-- <p><a class="text-blue" href="{{ route('password.request') }}">Forgot Your Password?</a></p> --}}
                            </div>
        
                            <button type="submit" class="btn btn-lg btn-primary btn-block mb-4">Sign In</button>
        
                            {{-- <p>Don't have an account yet ?
                              <a class="text-blue" href="{{ route('register') }}">Sign Up</a>
                            </p> --}}
                          </div>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

    

	<!-- core:js -->
	<script src=" {{ asset('backend/assets/vendors/core/core.js')}}"></script>
	<!-- endinject -->

	<!-- Plugin js for this page -->
	<!-- End plugin js for this page -->

	<!-- inject:js -->
	<script src=" {{ asset('backend/assets/vendors/feather-icons/feather.min.js')}}"></script>
	<script src=" {{ asset('backend/assets/js/template.js')}}"></script>
	<!-- endinject -->

	<!-- Custom js for this page -->
	<!-- End custom js for this page -->

</body>
</html>
