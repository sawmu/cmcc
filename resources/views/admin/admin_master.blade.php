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

	<title>EloraCMS - Dashboard</title>
	@include('admin.assetsLink.css')

</head>
<body class="theme-cyan">
    <!-- Page Loader -->
    {{-- <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img class="zmdi-hc-spin" src="{{ asset('backend/favicon.png')}}" width="48" height="48" alt="Compass"></div>
            <p>Please wait...</p>
        </div>
    </div> --}}
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>


	@include('admin.body.header')
	@include('admin.body.sidebar')
	<section class="content">
		<div class="view-user-table">
			@yield('content')
		</div>
		
	</section>

	@include('admin.body.footer')

  
	@include('admin.assetsLink.javascript')
</body>



</html>    