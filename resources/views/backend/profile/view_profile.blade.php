@extends('admin.admin_master')

@section('content')

<div class="page-content">
    
    <div class="row">
        <div class="col-12 grid-margin">
          <div class="card">
            <div class="position-relative">
              <figure class="overflow-hidden mb-0 d-flex justify-content-center">
                <img src="{{ url('backend/profile-bg.png')}}" class="rounded-top" alt="profile cover">
              </figure>
              <div class="d-flex justify-content-between align-items-center position-absolute top-90 w-100 px-2 px-md-4 mt-n4">
                <div>
                  <img class="wd-70 rounded-circle" src="{{(!empty($user->image))? url('upload/user_images/'.$user->image):url('upload/no_image.png')}}" alt="profile">
                
                  <span class="h4 ms-3 text-dark"> {{ $user->name }}</span>
                </div>
                <div class="d-none d-md-block">
           
                    <a class="btn btn-primary btn-icon-text" href="{{ route('profile.edit')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit btn-icon-prepend"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg> Edit profile
                    </a>
                 
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-center p-3 rounded-bottom">
              <ul class="d-flex align-items-center m-0 p-0">
                <li class="d-flex align-items-center active">
                  <i class="link-icon padding-r"  data-feather="mail"></i>
                  <a class="pt-1px d-none d-md-block text-body" href="#">{{ $user->email }}</a>
                </li>
                <li class="ms-3 ps-3 border-start d-flex align-items-center">
                  <i class="link-icon padding-r"  data-feather="user"></i>
                  <a class="pt-1px d-none d-md-block text-body" href="#">{{ $user->usertype }}</a>
                </li>
                <li class="ms-3 ps-3 border-start d-flex align-items-center">
                  <i class="link-icon padding-r"  data-feather="phone-call"></i>
                  <a class="pt-1px d-none d-md-block text-body" href="#">{{ $user->mobile }}</a>
                </li>
                <li class="ms-3 ps-3 border-start d-flex align-items-center">
                  <i class="link-icon padding-r"  data-feather="map-pin"></i>
                  <a class="pt-1px d-none d-md-block text-body" href="#">{{ $user->address }}</a>

                </li>
                <li class="ms-3 ps-3 border-start d-flex align-items-center">
                  <i class="link-icon padding-r"  data-feather="heart"></i>
                  <a class="pt-1px d-none d-md-block text-body" href="#">{{ $user->gender }}</a>

                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

</div>
    
@endsection