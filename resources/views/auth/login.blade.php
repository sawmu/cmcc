<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="EloraCRM.">

    <title>:: EloraCRM ::</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Custom Css --> 
    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/main.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/authentication.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/color_skins.css')}}">

    <link rel="shortcut icon" href="{{ url('backend/favicon.png')}}" />
</head>

<body class="theme-cyan authentication sidebar-collapse">

<div class="page-header">
    <div class="page-header-image" style="background-image:url('backend/bg.jpg')"></div>
    <div class="container">
        <div class="col-md-12 content-center">
            <div class="card-plain">
              @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
              @endif

             

          <form method="POST" action="{{ route('login') }}">
              @csrf
              <div class="header">
              <div class="logo-container">
                  <img src="{{ asset('backend/favicon.png')}}" alt="">
              </div>
              <h5>Log in</h5>
            </div>
            <div class="content">                                                
                <div class="input-group input-lg">
                    <input type="email" class="form-control" name="email" placeholder="Enter User Name">
                    <span class="input-group-addon">
                        <i class="zmdi zmdi-account-circle"></i>
                    </span>
                </div>
                <div class="input-group input-lg">
                    <input type="password" name="password" placeholder="Password" class="form-control" />
                    <span class="input-group-addon">
                        <i class="zmdi zmdi-lock"></i>
                    </span>
                </div>

                <div class="footer text-center">
                  <button type="submit" class="btn btn-lg btn-primary btn-block mb-4">Sign In</button>

                  <h6 class="m-t-20"><a href="{{ route('password.email')}} " class="link">Forgot Password?</a></h6>
              </div>
            </div>
        
          </form>
            </div>
        </div>
    </div>
  
</div>

<!-- Jquery Core Js -->
<script src="{{ asset('backend/assets/bundles/libscripts.bundle.js')}}"></script>
<script src="{{ asset('backend/assets/bundles/vendorscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js -->

<script>
   $(".navbar-toggler").on('click',function() {
    $("html").toggleClass("nav-open");
});
//=============================================================================
$('.form-control').on("focus", function() {
    $(this).parent('.input-group').addClass("input-group-focus");
}).on("blur", function() {
    $(this).parent(".input-group").removeClass("input-group-focus");
});
</script>
</body>
</html>
