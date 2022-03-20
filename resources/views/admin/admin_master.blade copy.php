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
 
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->

	<!-- core:css -->
	<link rel="stylesheet" href=" {{ asset('backend/assets/vendors/core/core.css')}}">
	<!-- endinject -->

	<!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('backend/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
	<!-- End plugin css for this page -->

	<!-- inject:css -->
	<link rel="stylesheet" href="{{ asset('backend/assets/fonts/feather-font/css/iconfont.css')}}">
	<link rel="stylesheet" href="{{ asset('backend/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
	<!-- endinject -->

  <!-- Layout styles -->  
	<link rel="stylesheet" href="{{ asset('backend/assets/css/demo1/style.css')}}">
  <!-- End layout styles -->
	<!-- Plugin css for this page -->
	<link rel="stylesheet" href="{{ asset('backend/assets/vendors/sweetalert2/sweetalert2.min.css')}}">
	<!-- End plugin css for this page -->


	<!-- Plugin css for Data Table -->
  <link rel="stylesheet" href="{{ asset('backend/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
	<!-- End plugin css for Data Table -->
	


	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>





  <link rel="shortcut icon" href="{{ url('backend/favicon.png')}}" />
</head>
<body>
	<div class="main-wrapper">

		@include('admin.body.sidebar')
	
		<div class="page-wrapper">
					
			@include('admin.body.header')

			@yield('content')

			@include('admin.body.footer')
		
		</div>
	</div>

	<!-- core:js -->
	<script src="{{ asset('backend/assets/vendors/core/core.js')}}"></script>
	<script src="{{ asset('backend/assets/vendors/core/perfect-scrollbar.min.js.map')}}"></script>
	<!-- endinject -->

	<!-- Plugin js for this page -->
  <script src="{{ asset('backend/assets/vendors/chartjs/Chart.min.js')}}"></script>
  <script src="{{ asset('backend/assets/vendors/jquery.flot/jquery.flot.js')}}"></script>
  <script src="{{ asset('backend/assets/vendors/jquery.flot/jquery.flot.resize.js')}}"></script>
  <script src="{{ asset('backend/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{ asset('backend/assets/vendors/apexcharts/apexcharts.min.js')}}"></script>
	<!-- End plugin js for this page -->

	<!-- inject:js -->
	<script src="{{ asset('backend/assets/vendors/feather-icons/feather.min.js')}}"></script>
	<script src="{{ asset('backend/assets/js/template.js')}}"></script>
	<!-- endinject -->

	<!-- Custom js for this page -->
  <script src="{{ asset('backend/assets/js/dashboard-light.js')}}"></script>
  <script src="{{ asset('backend/assets/js/datepicker.js')}}"></script>
	<!-- End custom js for this page -->

	<!-- Plugin js for Data Table -->
  <script src="{{ asset('backend/assets/vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{ asset('backend/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
	<!-- End plugin js for Data Table -->

	<!-- Custom js for Data Table-->
  <script src="{{ asset('backend/assets/js/data-table.js')}}"></script>
	<!-- End custom js for Data Table -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<!-- Plugin js for this page -->
<script src="{{ asset('backend/assets/vendors/sweetalert2/sweetalert2.min.js')}}"></script>
<script src="{{ asset('backend/assets/js/jquery-ajax.js') }}"></script>
<!-- End plugin js for this page -->



<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<script type="text/javascript">
	$(function(){
		$(document).on('click','#delete',function(e){
			e.preventDefault(); // dont reload the page
			var link = $(this).attr('href');
			Swal.fire({
			title: 'Are you sure?',
			text: "Delete This Data!",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes, delete it!'
			}).then((result) => {
			if (result.isConfirmed) {
				window.location.href = link;
				Swal.fire(
				'Deleted!',
				'Your file has been deleted.',
				'success'
				)
			}
			})
		});
	});
</script>
<script src="{{ asset('backend/assets/js/sweet-alert.js')}}"></script>
<!-- End custom js for this page -->
<script>
  @if(Session::has('success'))
  var type = "{{ Session::get('alert-type', 'info') }}"
  switch(type){
	case 'info':
		toastr.info("{{ Session::get('success') }}");
	break;

	case 'warning':
		toastr.warning("{{ Session::get('success') }}");
	break;

	case 'success':
		toastr.success("{{ Session::get('success') }}");
	break;

	case 'error':
		toastr.error("{{ Session::get('success') }}");
	break;
  }
	
  @endif
</script>



</body>
</html>    