@extends('admin.admin_master')

@section('content')

<div class="page-content">
    
  

    <div class="ccol-12 grid-margin">
        
        <div class="card member-card">
          
            <div class="header l-cyan">
                <h4 class="m-t-10">{{ $user->name }}</h4>
            </div>
            <div class="member-img">
                <a href="#" class="">
                <img src="{{(!empty($user->image))? url('upload/user_images/'.$user->image):url('upload/no_image.png')}}" class="rounded-circle" alt="profile-image">
                </a>
            </div>
            <div class="body">
                <div class="col-12">
                    <ul class="social-links list-unstyled">
                        <li><a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                        <li><a title="twitter" href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                        <li><a title="instagram" href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                    </ul>
                    <p class="text-muted">{{ $user->address }}</p>
                   
                  
                </div>
                <hr>
                <div class="row">
                    <div class="col-3">
                        <small> Role </small>
                        <h5>{{ $user->usertype }}</h5>
                        
                    </div>
                    <div class="col-3">
                      <small> Email </small>
                      <h5>{{ $user->email }}</h5>
                    </div>
                    <div class="col-3">
                      <small> Mobile </small>
                      <h5>{{ $user->mobile }}</h5>
                    </div>   
                    <div class="col-3">
           
                        <a class="btn btn-primary btn-icon-text" href="{{ route('profile.edit')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit btn-icon-prepend"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg> Edit profile
                        </a>
                      
                      </div>                         
                </div>
               
            </div>
        </div>
       
    </div>

    

</div>
    
@endsection