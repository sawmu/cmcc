<!-- core:js -->
<script src="{{ asset('backend/assets/vendors/core/core.js')}}"></script>
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
<!-- End plugin js for this page -->


<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript">
    $(function(){
    $(document).on('click','#delete',function(e){
        e.preventDefault(); // dont reload the page
        var link = $(this).attr('href');
        Swal.fire({
        title: 'Are you sure?',
        text: "Delete This User Data!",
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