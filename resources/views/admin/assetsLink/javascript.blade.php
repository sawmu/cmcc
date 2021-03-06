	<!-- Jquery Core Js --> 
<script src="{{ asset('backend/assets/bundles/libscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) --> 
<script src="{{ asset('backend/assets/bundles/vendorscripts.bundle.js') }}"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="{{ asset('backend/assets/bundles/morrisscripts.bundle.js') }}"></script><!-- Morris Plugin Js -->
<script src="{{ asset('backend/assets/bundles/jvectormap.bundle.js') }}"></script> <!-- JVectorMap Plugin Js -->
<script src="{{ asset('backend/assets/bundles/knob.bundle.js') }}"></script> <!-- Jquery Knob Plugin Js -->
<script src="{{ asset('backend/assets/bundles/sparkline.bundle.js') }}"></script> <!-- Sparkline Plugin Js -->

<script src="{{ asset('backend/assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('backend/assets/js/pages/index.js') }}"></script>
	

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Jquery DataTable Plugin Js --> 
<script src="{{ asset('backend/assets/bundles/datatablescripts.bundle.js')}}"></script>
<script src="{{ asset('backend/assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('backend/assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset('backend/assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js')}}"></script>
<script src="{{ asset('backend/assets/plugins/jquery-datatable/buttons/buttons.flash.min.js')}}"></script>
<script src="{{ asset('backend/assets/plugins/jquery-datatable/buttons/buttons.html5.min.js')}}"></script>
<script src="{{ asset('backend/assets/plugins/jquery-datatable/buttons/buttons.print.min.js')}}"></script>
<script src="{{ asset('backend/assets/js/pages/tables/jquery-datatable.js')}}"></script>

<!-- Moment Plugin Js --> 
<script src="{{ asset('backend/assets/plugins/momentjs/moment.js')}}"></script> 

<!-- Bootstrap Material Datetime Picker Plugin Js --> 
<script src="{{ asset('backend/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script> 

<!-- Jquery Knob Plugin Js -->
<script src="{{ asset('assets/bundles/knob.bundle.js') }}"></script>

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