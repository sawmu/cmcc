@extends('admin.admin_master')

@section('content')

<div class="page-content">

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">

                <div class="card-body">
                    <h6 class="card-title">Edit User</h6>
                    <form method="post" action="{{ route('user.update', $editData->id) }}">
                        @csrf
                        <div class="mb-3">
                            <select name="usertype" class="form-control show-tick" id="exampleFormControlSelect1">
                                <option selected="" disabled="">Select User Type</option>
                                <option value="Admin" {{ ($editData->usertype == "Admin" ? "selected" : "") }}>Admin</option>
                                <option value="User" {{ ($editData->usertype == "User" ? "selected" : "") }}>User</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputText1" class="form-label">Name</label>
                            <input name="name" type="text" class="form-control" id="exampleInputText1" value="{{ $editData->name }}" placeholder="Enter Name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail3" class="form-label">Email Input</label>
                            <input name="email" type="email" class="form-control" id="exampleInputEmail3" value="{{ $editData->email }}" placeholder="Enter Email">
                        </div>
                      
                        {{-- <div class="mb-3">
                            <label for="exampleInputPassword3" class="form-label">Password Input</label>
                            <input type="password" class="form-control" name=" {{ $editData->password }}" id="exampleInputPassword3" placeholder="Enter Password">
                        </div> --}}
                       
                       
                        <button class="btn btn-primary" type="submit">Update</button>
                    </form>
                </div>
                
            </div>
        </div>
    </div>

</div>
    
@endsection