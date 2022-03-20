@extends('admin.admin_master')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">

                <div class="card-body">
                    <h6 class="card-title">Change Password</h6>
                    <form method="post" action="{{ route('password.update')}}">
                        @csrf

                                          

                        <div class="mb-3">
                            <label for="exampleInputEmail3" class="form-label" request >Current Password</label>
                            <input name="oldpassword" type="password" class="form-control" id="current_password" value="" placeholder="Enter Old Password">
                            @error('oldpassword')
                                <span class="text-danger">{{ $message }}</span>
                                
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputText1" class="form-label">New Password</label>
                            <input name="password" type="password" class="form-control" id="password" value="" placeholder="Enter Password">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                                
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputText1" class="form-label">Confirm Password</label>
                            <input name="password_confirmation" type="password" class="form-control" id="password_confirmation" value="" placeholder="Enter Confirm Password">
                            @error('password_confirmation')
                                <span class="text-danger">{{ $message }}</span>
                                
                            @enderror
                        </div>

                       

                                            
                       
                        <button class="btn btn-primary" type="submit">Update</button>
                    </form>
                </div>
                
            </div>
        </div>
    </div>

</div>


<script type="text/javascript">
    $(document).ready(function(){
        $('#profileimage').change(funciton(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src', e.target.result);
            }

            reader.readAsDataURL(e.target.files['0']);
        });

    });
</script>
    
@endsection