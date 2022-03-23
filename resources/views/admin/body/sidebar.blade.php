<!-- partial:partials/_sidebar.html -->
@php
    $prefix = Request::route()->getPrefix();
    $route = Route::current()->getName();
@endphp


  <!-- Left Sidebar -->
  <aside id="leftsidebar" class="sidebar">
      <div class="menu">
          <ul class="list">
              <li>
                  <div class="user-info">
                      <div class="image">
                          <a href="/"><img src="{{(!empty($user->image))? url('upload/user_images/'.$user->image):url('upload/no_image.png')}}" alt="User"></a>
                      </div>
                      <div class="detail">
                          <h4>{{ Auth::user()->name }}</h4>
                          <small>{{ Auth::user()->usertype}}</small>
                      </div>
                      <a href="events.html" title="Events"><i class="zmdi zmdi-calendar"></i></a>
                      <a href="mail-inbox.html" title="Inbox"><i class="zmdi zmdi-email"></i></a>
                      <a href="{{ route('profile.view')}}" title="Contact List"><i class="zmdi zmdi-account-box-phone"></i></a>
                      <a href="chat.html" title="Chat App"><i class="zmdi zmdi-comments"></i></a>
                      <a href="{{ route('admin.logout')}}" title="Sign out"><i class="zmdi zmdi-power"></i></a>
                  </div>
              </li>
              <li class="header">MAIN</li>
              <li class="{{ ($prefix == '/dashboard')?'active open':'' }}"> <a href="{{ route('dashboard') }}" ><i class="zmdi zmdi-home"></i><span>Dashboard</span></a>
                
              </li>

              {{-- User Management  --}}
              <li class="{{ ($prefix == '/users')?'active open':'' }}"> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>Manage User</span> </a>
                  <ul class="ml-menu">
                      <li class="{{ (request()->segment(1) == 'users' && request()->segment(2) == 'view' ) ? 'active' : '' }}">
                        <a href="{{ route('user.view') }}">View User</a>
                      </li>
                      <li class="{{ (request()->segment(1) == 'users' && request()->segment(2) == 'add' ) ? 'active' : '' }}">
                        <a href="{{ route('user.add') }}">Add User</a>
                      </li>
                  </ul>
              </li>

                 {{-- Manage Profile  --}}
              <li class="{{ ($prefix == '/profile')?'active open':'' }}"> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-assignment-account"></i><span>Manage Profile</span> </a>
                <ul class="ml-menu">
                  <li class="{{ (request()->segment(1) == 'profile' && request()->segment(2) == 'view' ) ? 'active' : '' }}">
                    <a href="{{ route('profile.view') }}">View Profile</a>
                  </li>
                  <li class="{{ (request()->segment(1) == 'profile' && request()->segment(2) == 'password' ) ? 'active' : '' }}">
                    <a href="{{ route('password.view') }}">Change Password</a>
                  </li>
              </ul>
              </li>
           
          
              <li class="header">Extra</li>
              <li>
                  <div class="progress-container progress-primary m-t-10">
                      <span class="progress-badge">Traffic this Month</span>
                      <div class="progress">
                          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="width: 67%;">
                              <span class="progress-value">67%</span>
                          </div>
                      </div>
                  </div>
                  <div class="progress-container progress-info">
                      <span class="progress-badge">Server Load</span>
                      <div class="progress">
                          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                              <span class="progress-value">86%</span>
                          </div>
                      </div>
                  </div>
              </li>
          </ul>
      </div>
  </aside>

  <!-- Right Sidebar -->
  <aside id="rightsidebar" class="right-sidebar">
      <ul class="nav nav-tabs">
          <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#setting"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>
          <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#chat"><i class="zmdi zmdi-comments"></i></a></li>
          <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#activity">Activity</a></li>
      </ul>
      <div class="tab-content">
          <div class="tab-pane active slideRight" id="setting">
              <div class="slim_scroll">
                  <div class="card">
                      <h6>Skins</h6>
                      <ul class="choose-skin list-unstyled">
                          <li data-theme="purple">
                              <div class="purple"></div>
                          </li>
                          <li data-theme="blue">
                              <div class="blue"></div>
                          </li>
                          <li data-theme="cyan" class="active">
                              <div class="cyan"></div>
                          </li>
                          <li data-theme="green">
                              <div class="green"></div>
                          </li>
                          <li data-theme="orange">
                              <div class="orange"></div>
                          </li>
                          <li data-theme="blush">
                              <div class="blush"></div>
                          </li>
                      </ul>
                  </div>
                  <div class="card">
                      <h6>Left Menu</h6>
                      <ul class="list-unstyled theme-light-dark">
                          <li>
                              <div class="t-light btn btn-default btn-simple btn-round">Light</div>
                          </li>
                          <li>
                              <div class="t-dark btn btn-default btn-round">Dark</div>
                          </li>
                      </ul>
                  </div>
                  <div class="card">
                      <h6>General Settings</h6>
                      <ul class="setting-list list-unstyled">
                          <li>
                              <div class="checkbox">
                                  <input id="checkbox1" type="checkbox">
                                  <label for="checkbox1">Report Panel Usage</label>
                              </div>
                          </li>
                          <li>
                              <div class="checkbox">
                                  <input id="checkbox2" type="checkbox" checked="">
                                  <label for="checkbox2">Email Redirect</label>
                              </div>
                          </li>
                          <li>
                              <div class="checkbox">
                                  <input id="checkbox3" type="checkbox" checked="">
                                  <label for="checkbox3">Notifications</label>
                              </div>
                          </li>
                          <li>
                              <div class="checkbox">
                                  <input id="checkbox4" type="checkbox" checked="">
                                  <label for="checkbox4">Auto Updates</label>
                              </div>
                          </li>
                      </ul>
                  </div>
                  <div class="card">
                      <h6>Account Settings</h6>
                      <ul class="setting-list list-unstyled">
                          <li>
                              <div class="checkbox">
                                  <input id="checkbox5" type="checkbox" checked="">
                                  <label for="checkbox5">Offline</label>
                              </div>
                          </li>
                          <li>
                              <div class="checkbox">
                                  <input id="checkbox6" type="checkbox" checked="">
                                  <label for="checkbox6">Location Permission</label>
                              </div>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="tab-pane right_chat pullUp" id="chat">
              <div class="slim_scroll">
                  <div class="card">
                      <div class="search">
                          <div class="input-group">
                              <input type="text" class="form-control" placeholder="Search...">
                              <span class="input-group-addon">
                              <i class="zmdi zmdi-search"></i>
                          </span>
                          </div>
                      </div>
                  </div>
                  <div class="card">
                      <h6>Recent</h6>
                      <ul class="list-unstyled">
                          <li class="online">
                              <a href="javascript:void(0);">
                                  <div class="media">
                                      <img class="media-object " src="assets/images/xs/avatar4.jpg" alt="">
                                      <div class="media-body">
                                          <span class="name">Sophia</span>
                                          <span class="message">There are many variations of passages of Lorem Ipsum available</span>
                                          <span class="badge badge-outline status"></span>
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li class="online">
                              <a href="javascript:void(0);">
                                  <div class="media">
                                      <img class="media-object " src="assets/images/xs/avatar5.jpg" alt="">
                                      <div class="media-body">
                                          <span class="name">Grayson</span>
                                          <span class="message">All the Lorem Ipsum generators on the</span>
                                          <span class="badge badge-outline status"></span>
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li class="offline">
                              <a href="javascript:void(0);">
                                  <div class="media">
                                      <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
                                      <div class="media-body">
                                          <span class="name">Isabella</span>
                                          <span class="message">Contrary to popular belief, Lorem Ipsum</span>
                                          <span class="badge badge-outline status"></span>
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li class="me">
                              <a href="javascript:void(0);">
                                  <div class="media">
                                      <img class="media-object " src="assets/images/xs/avatar1.jpg" alt="">
                                      <div class="media-body">
                                          <span class="name">John</span>
                                          <span class="message">It is a long established fact that a reader</span>
                                          <span class="badge badge-outline status"></span>
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li class="online">
                              <a href="javascript:void(0);">
                                  <div class="media">
                                      <img class="media-object " src="assets/images/xs/avatar3.jpg" alt="">
                                      <div class="media-body">
                                          <span class="name">Alexander</span>
                                          <span class="message">Richard McClintock, a Latin professor</span>
                                          <span class="badge badge-outline status"></span>
                                      </div>
                                  </div>
                              </a>
                          </li>
                      </ul>
                  </div>
                  <div class="card">
                      <h6>Contacts</h6>
                      <ul class="list-unstyled">
                          <li class="offline inlineblock">
                              <a href="javascript:void(0);">
                                  <div class="media">
                                      <img class="media-object " src="assets/images/xs/avatar10.jpg" alt="">
                                      <div class="media-body">
                                          <span class="badge badge-outline status"></span>
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li class="offline inlineblock">
                              <a href="javascript:void(0);">
                                  <div class="media">
                                      <img class="media-object " src="assets/images/xs/avatar6.jpg" alt="">
                                      <div class="media-body">
                                          <span class="badge badge-outline status"></span>
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li class="offline inlineblock">
                              <a href="javascript:void(0);">
                                  <div class="media">
                                      <img class="media-object " src="assets/images/xs/avatar7.jpg" alt="">
                                      <div class="media-body">
                                          <span class="badge badge-outline status"></span>
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li class="offline inlineblock">
                              <a href="javascript:void(0);">
                                  <div class="media">
                                      <img class="media-object " src="assets/images/xs/avatar8.jpg" alt="">
                                      <div class="media-body">
                                          <span class="badge badge-outline status"></span>
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li class="offline inlineblock">
                              <a href="javascript:void(0);">
                                  <div class="media">
                                      <img class="media-object " src="assets/images/xs/avatar9.jpg" alt="">
                                      <div class="media-body">
                                          <span class="badge badge-outline status"></span>
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li class="online inlineblock">
                              <a href="javascript:void(0);">
                                  <div class="media">
                                      <img class="media-object " src="assets/images/xs/avatar5.jpg" alt="">
                                      <div class="media-body">
                                          <span class="badge badge-outline status"></span>
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li class="offline inlineblock">
                              <a href="javascript:void(0);">
                                  <div class="media">
                                      <img class="media-object " src="assets/images/xs/avatar4.jpg" alt="">
                                      <div class="media-body">
                                          <span class="badge badge-outline status"></span>
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li class="offline inlineblock">
                              <a href="javascript:void(0);">
                                  <div class="media">
                                      <img class="media-object " src="assets/images/xs/avatar3.jpg" alt="">
                                      <div class="media-body">
                                          <span class="badge badge-outline status"></span>
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li class="online inlineblock">
                              <a href="javascript:void(0);">
                                  <div class="media">
                                      <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
                                      <div class="media-body">
                                          <span class="badge badge-outline status"></span>
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li class="offline inlineblock">
                              <a href="javascript:void(0);">
                                  <div class="media">
                                      <img class="media-object " src="assets/images/xs/avatar1.jpg" alt="">
                                      <div class="media-body">
                                          <span class="badge badge-outline status"></span>
                                      </div>
                                  </div>
                              </a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="tab-pane slideRight" id="activity">
              <div class="slim_scroll">
                  <div class="card">
                      <h6>Recent Activity</h6>
                      <ul class="list-unstyled activity">
                          <li>
                              <a href="javascript:void(0)">
                                  <i class="zmdi zmdi-cake bg-blue"></i>
                                  <div class="info">
                                      <h4>Admin Birthday</h4>
                                      <small>Will be Dec 21th</small>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="javascript:void(0)">
                                  <i class="zmdi zmdi-file-text bg-red"></i>
                                  <div class="info">
                                      <h4>Code Change</h4>
                                      <small>Will be Dec 22th</small>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="javascript:void(0)">
                                  <i class="zmdi zmdi-account-box-phone bg-green"></i>
                                  <div class="info">
                                      <h4>Add New Contact</h4>
                                      <small>Will be Dec 23th</small>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="javascript:void(0)">
                                  <i class="zmdi zmdi-email bg-amber"></i>
                                  <div class="info">
                                      <h4>New Email</h4>
                                      <small>Will be July 28th</small>
                                  </div>
                              </a>
                          </li>
                      </ul>
                  </div>
                  <div class="card">
                      <h6>Project Status</h6>
                      <div class="progress-container progress-primary">
                          <span class="progress-badge">eCommerce Website</span>
                          <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                  <span class="progress-value">86%</span>
                              </div>
                          </div>
                          <ul class="list-unstyled team-info">
                              <li class="m-r-15"><small>Team</small></li>
                              <li>
                                  <img src="assets/images/xs/avatar2.jpg" alt="Avatar">
                              </li>
                              <li>
                                  <img src="assets/images/xs/avatar3.jpg" alt="Avatar">
                              </li>
                              <li>
                                  <img src="assets/images/xs/avatar4.jpg" alt="Avatar">
                              </li>
                          </ul>
                      </div>
                      <div class="progress-container">
                          <span class="progress-badge">iOS Game Dev</span>
                          <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                                  <span class="progress-value">45%</span>
                              </div>
                          </div>
                          <ul class="list-unstyled team-info">
                              <li class="m-r-15"><small>Team</small></li>
                              <li>
                                  <img src="assets/images/xs/avatar10.jpg" alt="Avatar">
                              </li>
                              <li>
                                  <img src="assets/images/xs/avatar9.jpg" alt="Avatar">
                              </li>
                              <li>
                                  <img src="assets/images/xs/avatar8.jpg" alt="Avatar">
                              </li>
                              <li>
                                  <img src="assets/images/xs/avatar7.jpg" alt="Avatar">
                              </li>
                              <li>
                                  <img src="assets/images/xs/avatar6.jpg" alt="Avatar">
                              </li>
                          </ul>
                      </div>
                      <div class="progress-container progress-warning">
                          <span class="progress-badge">Home Development</span>
                          <div class="progress">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100" style="width: 29%;">
                                  <span class="progress-value">29%</span>
                              </div>
                          </div>
                          <ul class="list-unstyled team-info">
                              <li class="m-r-15"><small>Team</small></li>
                              <li>
                                  <img src="assets/images/xs/avatar5.jpg" alt="Avatar">
                              </li>
                              <li>
                                  <img src="assets/images/xs/avatar2.jpg" alt="Avatar">
                              </li>
                              <li>
                                  <img src="assets/images/xs/avatar7.jpg" alt="Avatar">
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </aside>