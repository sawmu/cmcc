@extends('admin.admin_master')

@section('content')

<div class="page-content">

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">

                <div class="card-body">
                    <h6 class="card-title">Add User</h6>
                    <form method="post" action="{{ route('user.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlSelect1" class="form-label">Select User Type</label>
                            <select name="usertype" class="form-select" id="exampleFormControlSelect1">
                                <option selected="" disabled="">Select User Type</option>
                                <option value="Admin">Admin</option>
                                <option value="User">User</option>
                               
                            </select> 
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputText1" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputText1" placeholder="Enter Name">
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail3"  placeholder="Enter Email">
                        </div>
                      
                        <div class="mb-3">
                            <label  class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword3" placeholder="Enter Password">
                        </div>
                       
                       
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
                
            </div>
        </div>
    </div>

</div>
    
@endsection