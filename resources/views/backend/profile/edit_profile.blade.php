@extends('admin.admin_master')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">

                <div class="card-body">
                    <h6 class="card-title">Manage Profile</h6>
                    <form method="post" action="{{ route('profile.store')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <img id="showImage" src="{{(!empty($user->image))? url('upload/user_images/'.$user->image):url('upload/no_image.png')}}" alt="Profile Image" style="width: 100px;">
                         </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail3" class="form-label">Profile Image</label>
                            <input name="image" type="file" class="form-control" id="profileimage">
                        </div>
                                          
                    
                        <div class="mb-3">
                            <label for="exampleInputText1" class="form-label">Name</label>
                            <input name="name" type="text" class="form-control" id="exampleInputText1" value="{{ $editData->name }}" placeholder="Enter Name">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail3" class="form-label">Email</label>
                            <input name="email" type="email" class="form-control" id="exampleInputEmail3" value="{{ $editData->email }}" placeholder="Enter Email">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail3" class="form-label">Mobile</label>
                            <input name="mobile" type="text" class="form-control" id="exampleInputEmail3" value="{{ $editData->mobile }}" placeholder="Enter Mobile">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail3" class="form-label">Address</label>
                            <input name="address" type="text" class="form-control" id="exampleInputEmail3" value="{{ $editData->address }}" placeholder="Enter Address">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlSelect1" class="form-label">Select Gender</label>
                            <select name="gender" class="form-select" id="exampleFormControlSelect1">
                                <option selected="" disabled="">Select Gender</option>
                                <option value="Male" {{ ($editData->gender == "Male" ? "selected" : "") }}>Male</option>
                                <option value="Female" {{ ($editData->gender == "Female" ? "selected" : "") }}>Female</option>
                            </select>
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