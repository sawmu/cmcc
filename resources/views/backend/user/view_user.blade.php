@extends('admin.admin_master')

@section('content')

<div class="page-content">

    {{-- <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Users</a></li>
            <li class="breadcrumb-item active" aria-current="page">All</li>
        </ol>
    </nav> --}}
    
    <div class="elora-left">
        <a href="{{ route("user.add") }}" class="btn btn-primary">Add User</a>
    </div>
   

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Users List</h6>
                    
                    <div class="table-responsive">
                        
                    <table id="dataTableExample" class="table">
                        <thead>
                       
                        <tr>
                            <th width="10%">SL</th>
                            <th>Role</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th width="15%">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($allData as $key => $user)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $user->usertype }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <a href="{{ route('user.edit',$user->id) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ route('user.delete',$user->id) }}" id="delete" class="btn btn-danger">Delete</a>
                            </td>
                          
                        </tr>
                                
                        @endforeach
                       
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
    
@endsection