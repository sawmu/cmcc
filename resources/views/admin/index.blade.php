@extends('admin.admin_master')

@section('content')
    
      <!-- Chat-launcher -->
      <div class="chat-launcher"></div>
      <div class="chat-wrapper">
          <div class="card">
              <div class="header">
                  <ul class="list-unstyled team-info margin-0">
                      <li class="m-r-15">
                          <h2>Design Team</h2>
                      </li>
                      <li>
                          <img src="assets/images/xs/avatar2.jpg" alt="Avatar">
                      </li>
                      <li>
                          <img src="assets/images/xs/avatar3.jpg" alt="Avatar">
                      </li>
                      <li>
                          <img src="assets/images/xs/avatar4.jpg" alt="Avatar">
                      </li>
                      <li>
                          <img src="assets/images/xs/avatar6.jpg" alt="Avatar">
                      </li>
                      <li>
                          <a href="javascript:void(0);" title="Add Member"><i class="zmdi zmdi-plus-circle"></i></a>
                      </li>
                  </ul>
              </div>
              <div class="body">
                  <div class="chat-widget">
                      <ul class="chat-scroll-list clearfix">
                          <li class="left float-left">
                              <img src="assets/images/xs/avatar3.jpg" class="rounded-circle" alt="">
                              <div class="chat-info">
                                  <a class="name" href="#">Alexander</a>
                                  <span class="datetime">6:12</span>
                                  <span class="message">Hello, John </span>
                              </div>
                          </li>
                          <li class="right">
                              <div class="chat-info"><span class="datetime">6:15</span> <span class="message">Hi, Alexander<br> How are you!</span> </div>
                          </li>
                          <li class="right">
                              <div class="chat-info"><span class="datetime">6:16</span> <span class="message">There are many variations of passages of Lorem Ipsum available</span> </div>
                          </li>
                          <li class="left float-left"> <img src="assets/images/xs/avatar2.jpg" class="rounded-circle" alt="">
                              <div class="chat-info"> <a class="name" href="#">Elizabeth</a> <span class="datetime">6:25</span> <span class="message">Hi, Alexander,<br> John <br> What are you doing?</span> </div>
                          </li>
                          <li class="left float-left"> <img src="assets/images/xs/avatar1.jpg" class="rounded-circle" alt="">
                              <div class="chat-info"> <a class="name" href="#">Michael</a> <span class="datetime">6:28</span> <span class="message">I would love to join the team.</span> </div>
                          </li>
                          <li class="right">
                              <div class="chat-info"><span class="datetime">7:02</span> <span class="message">Hello, <br>Michael</span> </div>
                          </li>
                      </ul>
                  </div>
                  <div class="input-group p-t-15">
                      <input type="text" class="form-control" placeholder="Enter text here...">
                      <span class="input-group-addon">
                      <i class="zmdi zmdi-mail-send"></i>
                  </span>
                  </div>
              </div>
          </div>
      </div>
  
 
          <div class="block-header">
              <div class="row">
                  <div class="col-lg-7 col-md-6 col-sm-12">
                      <h2>Dashboard
                          <small class="text-muted">Welcome to Compass</small>
                      </h2>
                  </div>
                  <div class="col-lg-5 col-md-6 col-sm-12">
                      <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">
                      <i class="zmdi zmdi-plus"></i>
                  </button>
                      <ul class="breadcrumb float-md-right">
                          <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Compass</a></li>
                          <li class="breadcrumb-item active">Dashboard 1</li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="container-fluid">
              <div class="card widget_2">
                  <ul class="row clearfix list-unstyled m-b-0">
                      <li class="col-lg-3 col-md-6 col-sm-12">
                          <div class="body">
                              <div class="row">
                                  <div class="col-7">
                                      <h5 class="m-t-0">Traffic</h5>
                                      <p class="text-small">4% higher than last month</p>
                                  </div>
                                  <div class="col-5 text-right">
                                      <h2 class="">20</h2>
                                      <small class="info">of 1Tb</small>
                                  </div>
                                  <div class="col-12">
                                      <div class="progress m-t-20">
                                          <div class="progress-bar l-amber" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li class="col-lg-3 col-md-6 col-sm-12">
                          <div class="body">
                              <div class="row">
                                  <div class="col-7">
                                      <h5 class="m-t-0">Sales</h5>
                                      <p class="text-small">6% higher than last month</p>
                                  </div>
                                  <div class="col-5 text-right">
                                      <h2 class="">12%</h2>
                                      <small class="info">of 100</small>
                                  </div>
                                  <div class="col-12">
                                      <div class="progress m-t-20">
                                          <div class="progress-bar l-blue" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100" style="width: 38%;"></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li class="col-lg-3 col-md-6 col-sm-12">
                          <div class="body">
                              <div class="row">
                                  <div class="col-7">
                                      <h5 class="m-t-0">Email</h5>
                                      <p class="text-small">Total Registered email</p>
                                  </div>
                                  <div class="col-5 text-right">
                                      <h2 class="">39</h2>
                                      <small class="info">of 100</small>
                                  </div>
                                  <div class="col-12">
                                      <div class="progress m-t-20">
                                          <div class="progress-bar l-parpl" role="progressbar" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100" style="width: 39%;"></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li class="col-lg-3 col-md-6 col-sm-12">
                          <div class="body">
                              <div class="row">
                                  <div class="col-7">
                                      <h5 class="m-t-0">Domians</h5>
                                      <p class="text-small">Total registered Domain</p>
                                  </div>
                                  <div class="col-5 text-right">
                                      <h2 class="">8</h2>
                                      <small class="info">of 10</small>
                                  </div>
                                  <div class="col-12">
                                      <div class="progress m-t-20">
                                          <div class="progress-bar l-turquoise" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%;"></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>
                  </ul>
              </div>
              <div class="row clearfix">
                  <div class="col-lg-12">
                      <div class="card">
                          <div class="header">
                              <h2><strong>Sales</strong> Report</h2>
                              <ul class="header-dropdown">
                                  <li class="dropdown">
                                      <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                      <ul class="dropdown-menu dropdown-menu-right slideUp float-right">
                                          <li><a href="javascript:void(0);">Edit</a></li>
                                          <li><a href="javascript:void(0);">Delete</a></li>
                                          <li><a href="javascript:void(0);">Report</a></li>
                                      </ul>
                                  </li>
                                  <li class="remove">
                                      <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                  </li>
                              </ul>
                          </div>
                          <div class="body">
                              <div class="row text-center">
                                  <div class="col-sm-3 col-6">
                                      <h4 class="m-t-0">$ 106 <i class="zmdi zmdi-trending-up col-green"></i></h4>
                                      <p class="text-muted"> Today's Sales</p>
                                  </div>
                                  <div class="col-sm-3 col-6">
                                      <h4 class="m-t-0">$ 907 <i class="zmdi zmdi-trending-down col-red"></i></h4>
                                      <p class="text-muted">This Week's Sales</p>
                                  </div>
                                  <div class="col-sm-3 col-6">
                                      <h4 class="m-t-0">$ 4210 <i class="zmdi zmdi-trending-up col-green"></i></h4>
                                      <p class="text-muted">This Month's Sales</p>
                                  </div>
                                  <div class="col-sm-3 col-6">
                                      <h4 class="m-t-0">$ 67,000 <i class="zmdi zmdi-trending-up col-green"></i></h4>
                                      <p class="text-muted">This Year's Sales</p>
                                  </div>
                              </div>
                              <div id="area_chart" class="graph"></div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row clearfix">
                  <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                      <div class="card tasks_report">
                          <div class="body">
                              <input type="text" class="knob dial1" value="66" data-width="90" data-height="90" data-thickness="0.1" data-fgColor="#666" readonly>
                              <h6 class="m-t-20">Satisfaction Rate</h6>
                              <p class="displayblock m-b-0">47% Average <i class="zmdi zmdi-trending-up"></i></p>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                      <div class="card tasks_report">
                          <div class="body">
                              <input type="text" class="knob dial2" value="26" data-width="90" data-height="90" data-thickness="0.1" data-fgColor="#7b69ec" readonly>
                              <h6 class="m-t-20">Project Panding</h6>
                              <p class="displayblock m-b-0">13% Average <i class="zmdi zmdi-trending-down"></i></p>
  
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                      <div class="card tasks_report">
                          <div class="body">
                              <input type="text" class="knob dial3" value="76" data-width="90" data-height="90" data-thickness="0.1" data-fgColor="#f9bd53" readonly>
                              <h6 class="m-t-20">Productivity Goal</h6>
                              <p class="displayblock m-b-0">75% Average <i class="zmdi zmdi-trending-up"></i></p>
  
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                      <div class="card tasks_report">
                          <div class="body">
                              <input type="text" class="knob dial4" value="88" data-width="90" data-height="90" data-thickness="0.1" data-fgColor="#00adef" readonly>
                              <h6 class="m-t-20">Total Revenue</h6>
                              <p class="displayblock m-b-0">54% Average <i class="zmdi zmdi-trending-up"></i></p>
  
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row clearfix">
                  <div class="col-md-12 col-lg-8">
                      <div class="card visitors-map">
                          <div class="header">
                              <h2><strong>Visitors</strong> Statistics</h2>
                              <ul class="header-dropdown">
                                  <li class="dropdown">
                                      <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                      <ul class="dropdown-menu dropdown-menu-right slideUp">
                                          <li><a href="javascript:void(0);">Action</a></li>
                                          <li><a href="javascript:void(0);">Another action</a></li>
                                          <li><a href="javascript:void(0);">Something else</a></li>
                                      </ul>
                                  </li>
                                  <li class="remove">
                                      <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                  </li>
                              </ul>
                          </div>
                          <div class="body">
                              <div id="world-map-markers" class="jvector-map m-b-5"></div>
                              <div class="row clearfix">
                                  <div class="col-lg-4 col-sm-6">
                                      <div class="progress-container m-b-20">
                                          <span class="progress-badge">visitor from america</span>
                                          <div class="progress">
                                              <div class="progress-bar l-turquoise" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                                  <span class="progress-value">86%</span>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-4 col-sm-6">
                                      <div class="progress-container m-b-20">
                                          <span class="progress-badge">visitor from Canada</span>
                                          <div class="progress">
                                              <div class="progress-bar l-coral" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                                  <span class="progress-value">86%</span>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-4 col-sm-6">
                                      <div class="progress-container m-b-20">
                                          <span class="progress-badge">visitor from asia</span>
                                          <div class="progress">
                                              <div class="progress-bar l-blue" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                                  <span class="progress-value">86%</span>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-4 col-sm-6">
                                      <div class="progress-container m-b-20">
                                          <span class="progress-badge">visitor from america</span>
                                          <div class="progress">
                                              <div class="progress-bar l-salmon" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                                  <span class="progress-value">86%</span>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-4 col-sm-6">
                                      <div class="progress-container m-b-20">
                                          <span class="progress-badge">visitor from Canada</span>
                                          <div class="progress">
                                              <div class="progress-bar l-parpl" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                                  <span class="progress-value">86%</span>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-4 col-sm-6">
                                      <div class="progress-container m-b-20">
                                          <span class="progress-badge">visitor from asia</span>
                                          <div class="progress">
                                              <div class="progress-bar l-amber" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                                  <span class="progress-value">86%</span>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-12">
                      <div class="card">
                          <div class="header">
                              <h2><strong>Browser</strong> Usage</h2>
                              <ul class="header-dropdown">
                                  <li class="dropdown">
                                      <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                      <ul class="dropdown-menu dropdown-menu-right">
                                          <li><a href="javascript:void(0);">Action</a></li>
                                          <li><a href="javascript:void(0);">Another action</a></li>
                                          <li><a href="javascript:void(0);">Something else</a></li>
                                      </ul>
                                  </li>
                                  <li class="remove">
                                      <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                  </li>
                              </ul>
                          </div>
                          <div class="body">
                              <div id="donut_chart" class="dashboard-donut-chart"></div>
                              <table class="table m-t-15 m-b-0">
                                  <tbody>
                                      <tr>
                                          <td>Chrome</td>
                                          <td>6985</td>
                                          <td><i class="zmdi zmdi-caret-up text-success"></i></td>
                                      </tr>
                                      <tr>
                                          <td>Other</td>
                                          <td>2697</td>
                                          <td><i class="zmdi zmdi-caret-up text-success"></i></td>
                                      </tr>
                                      <tr>
                                          <td>Safari</td>
                                          <td>3597</td>
                                          <td><i class="zmdi zmdi-caret-down text-danger"></i></td>
                                      </tr>
                                      <tr>
                                          <td>Firefox</td>
                                          <td>2145</td>
                                          <td><i class="zmdi zmdi-caret-up text-success"></i></td>
                                      </tr>
                                      <tr>
                                          <td>Opera</td>
                                          <td>1854</td>
                                          <td><i class="zmdi zmdi-caret-down text-danger"></i></td>
                                      </tr>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row clearfix">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="card project_list">
                          <div class="header">
                              <h2><strong>Products</strong> List</h2>
                              <ul class="header-dropdown">
                                  <li class="dropdown">
                                      <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                      <ul class="dropdown-menu dropdown-menu-right">
                                          <li><a href="javascript:void(0);">Action</a></li>
                                          <li><a href="javascript:void(0);">Another action</a></li>
                                          <li><a href="javascript:void(0);">Something else</a></li>
                                      </ul>
                                  </li>
                                  <li class="remove">
                                      <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                  </li>
                              </ul>
                          </div>
                          <div class="body">
                              <div class="table-responsive">
                                  <table class="table table-hover">
                                      <thead>
                                          <tr>
                                              <th style="width:50px;">Assigned</th>
                                              <th></th>
                                              <th>Name</th>
                                              <th class="hidden-md-down">Team</th>
                                              <th class="hidden-md-down" width="150px">Status</th>
                                              <th>Priority</th>
                                              <th>Due Date</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>
                                                  <img class="rounded avatar" src="assets/images/xs/avatar1.jpg" alt="">
                                              </td>
                                              <td>
                                                  <a class="single-user-name" href="#">Jonathan Deo</a><br>
                                                  <small>Project Lead</small>
                                              </td>
                                              <td>
                                                  <strong>eCommerce Website</strong><br>
                                                  <small>Cost: $215</small>
                                              </td>
                                              <td class="hidden-md-down">
                                                  <ul class="list-unstyled team-info margin-0">
                                                      <li>
                                                          <img src="assets/images/xs/avatar2.jpg" alt="Avatar">
                                                      </li>
                                                      <li>
                                                          <img src="assets/images/xs/avatar3.jpg" alt="Avatar">
                                                      </li>
                                                      <li>
                                                          <img src="assets/images/xs/avatar4.jpg" alt="Avatar">
                                                      </li>
                                                      <li>
                                                          <img src="assets/images/xs/avatar6.jpg" alt="Avatar">
                                                      </li>
                                                  </ul>
                                              </td>
                                              <td class="hidden-md-down">
                                                  <div class="progress">
                                                      <div class="progress-bar l-blue" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                                                  </div>
                                              </td>
                                              <td><span class="badge badge-info">Medium</span></td>
                                              <td>25 Dec 2017</td>
                                          </tr>
                                          <tr>
                                              <td>
                                                  <img class="rounded avatar" src="assets/images/xs/avatar2.jpg" alt="">
                                              </td>
                                              <td>
                                                  <a class="single-user-name" href="#">Jannie Dvis</a><br>
                                                  <small>Design Lead</small>
                                              </td>
                                              <td>
                                                  <strong>One Page Landing</strong><br>
                                                  <small>Cost: $100</small>
                                              </td>
                                              <td class="hidden-md-down">
                                                  <ul class="list-unstyled team-info margin-0">
                                                      <li>
                                                          <img src="assets/images/xs/avatar5.jpg" alt="Avatar">
                                                      </li>
                                                      <li>
                                                          <img src="assets/images/xs/avatar6.jpg" alt="Avatar">
                                                      </li>
                                                  </ul>
                                              </td>
                                              <td class="hidden-md-down">
                                                  <div class="progress">
                                                      <div class="progress-bar l-green" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>
                                                  </div>
                                              </td>
                                              <td><span class="badge badge-success">High</span></td>
                                              <td>21 Dec 2017</td>
                                          </tr>
                                          <tr>
                                              <td>
                                                  <img class="rounded avatar" src="assets/images/xs/avatar10.jpg" alt="">
                                              </td>
                                              <td>
                                                  <a class="single-user-name" href="#">Petere Husen</a><br>
                                                  <small>Swift Developer</small>
                                              </td>
                                              <td>
                                                  <strong>iOS Game</strong><br>
                                                  <small>Cost: $890</small>
  
                                              </td>
                                              <td class="hidden-md-down">
                                                  <ul class="list-unstyled team-info margin-0">
                                                      <li>
                                                          <img src="assets/images/xs/avatar7.jpg" alt="Avatar">
                                                      </li>
                                                      <li>
                                                          <img src="assets/images/xs/avatar8.jpg" alt="Avatar">
                                                      </li>
                                                      <li>
                                                          <img src="assets/images/xs/avatar9.jpg" alt="Avatar">
                                                      </li>
                                                      <li>
                                                          <img src="assets/images/xs/avatar2.jpg" alt="Avatar">
                                                      </li>
                                                      <li>
                                                          <img src="assets/images/xs/avatar3.jpg" alt="Avatar">
                                                      </li>
                                                  </ul>
                                              </td>
                                              <td class="hidden-md-down">
                                                  <div class="progress">
                                                      <div class="progress-bar l-blue" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;"></div>
                                                  </div>
                                              </td>
                                              <td><span class="badge badge-info">Medium</span></td>
                                              <td>26 Dec 2017</td>
                                          </tr>
                                          <tr>
                                              <td>
                                                  <img class="rounded avatar" src="assets/images/xs/avatar4.jpg" alt="">
                                              </td>
                                              <td>
                                                  <a class="single-user-name" href="#">John Deo</a><br>
                                                  <small>UI UX Lead</small>
                                              </td>
                                              <td>
                                                  <strong>Digital Marketing</strong><br>
                                                  <small>Cost: $350</small>
                                              </td>
                                              <td class="hidden-md-down">
                                                  <ul class="list-unstyled team-info margin-0">
                                                      <li>
                                                          <img src="assets/images/xs/avatar2.jpg" alt="Avatar">
                                                      </li>
                                                      <li>
                                                          <img src="assets/images/xs/avatar3.jpg" alt="Avatar">
                                                      </li>
                                                      <li>
                                                          <img src="assets/images/xs/avatar6.jpg" alt="Avatar">
                                                      </li>
                                                  </ul>
                                              </td>
                                              <td class="hidden-md-down">
                                                  <div class="progress">
                                                      <div class="progress-bar l-amber" role="progressbar" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100" style="width: 28%;"></div>
                                                  </div>
                                              </td>
                                              <td><span class="badge badge-warning">Panding</span></td>
                                              <td>12 Jan 2018</td>
                                          </tr>
                                          <tr>
                                              <td>
                                                  <img class="rounded avatar" src="assets/images/xs/avatar5.jpg" alt="">
                                              </td>
                                              <td>
                                                  <a class="single-user-name" href="#">Emma Welson</a><br>
                                                  <small>Angular Developer</small>
                                              </td>
                                              <td>
                                                  <strong>Hospital Admin</strong><br>
                                                  <small>Hire: $45 Per Hour</small>
                                              </td>
                                              <td class="hidden-md-down">
                                                  <ul class="list-unstyled team-info  margin-0">
                                                      <li>
                                                          <img src="assets/images/xs/avatar8.jpg" alt="Avatar">
                                                      </li>
                                                      <li>
                                                          <img src="assets/images/xs/avatar3.jpg" alt="Avatar">
                                                      </li>
                                                      <li>
                                                          <img src="assets/images/xs/avatar4.jpg" alt="Avatar">
                                                      </li>
                                                      <li>
                                                          <img src="assets/images/xs/avatar6.jpg" alt="Avatar">
                                                      </li>
                                                      <li>
                                                          <img src="assets/images/xs/avatar1.jpg" alt="Avatar">
                                                      </li>
                                                      <li>
                                                          <img src="assets/images/xs/avatar2.jpg" alt="Avatar">
                                                      </li>
                                                  </ul>
                                              </td>
                                              <td class="hidden-md-down">
                                                  <div class="progress">
                                                      <div class="progress-bar l-coral" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                                                  </div>
                                              </td>
                                              <td><span class="badge badge-primary">Low</span></td>
                                              <td>20 Jan 2018</td>
                                          </tr>
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row clearfix">
                  <div class="col-lg-4 col-md-12">
                      <div class="card weather2">
                          <div class="city-selected body l-salmon">
                              <div class="row">
                                  <div class="info col-7">
                                      <div class="city"><span>City:</span> New York</div>
                                      <div class="night">Day - 12:07 PM</div>
                                      <div class="temp">
                                          <h2>34°</h2>
                                      </div>
                                  </div>
                                  <div class="icon col-5">
                                      <img src="assets/images/weather/summer.svg" alt="">
                                  </div>
                              </div>
                          </div>
                          <table class="table table-striped m-b-0">
                              <tbody>
                                  <tr>
                                      <td>Wind</td>
                                      <td class="font-medium">ESE 17 mph</td>
                                  </tr>
                                  <tr>
                                      <td>Humidity</td>
                                      <td class="font-medium">72%</td>
                                  </tr>
                                  <tr>
                                      <td>Pressure</td>
                                      <td class="font-medium">25.56 in</td>
                                  </tr>
                                  <tr>
                                      <td>Cloud Cover</td>
                                      <td class="font-medium">80%</td>
                                  </tr>
                                  <tr>
                                      <td>Ceiling</td>
                                      <td class="font-medium">25280 ft</td>
                                  </tr>
                              </tbody>
                          </table>
                          <div class="carousel slide" data-ride="carousel">
                              <div class="carousel-inner" role="listbox">
                                  <div class="carousel-item text-center active">
                                      <div class="col-12">
                                          <ul class="row days-list list-unstyled">
                                              <li class="day col-4">
                                                  <p>Monday</p>
                                                  <img src="assets/images/weather/rain.svg" alt="">
                                              </li>
                                              <li class="day col-4">
                                                  <p>Tuesday</p>
                                                  <img src="assets/images/weather/cloudy.svg" alt="">
                                              </li>
                                              <li class="day col-4">
                                                  <p>Wednesday</p>
                                                  <img src="assets/images/weather/wind.svg" alt="">
                                              </li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div class="carousel-item text-center">
                                      <div class="col-12">
                                          <ul class="row days-list list-unstyled">
                                              <li class="day col-4">
                                                  <p>Thursday</p>
                                                  <img src="assets/images/weather/sky.svg" alt="">
                                              </li>
                                              <li class="day col-4">
                                                  <p>Friday</p>
                                                  <img src="assets/images/weather/cloudy.svg" alt="">
                                              </li>
                                              <li class="day col-4">
                                                  <p>Saturday</p>
                                                  <img src="assets/images/weather/summer.svg" alt="">
                                              </li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-8 col-md-12">
                      <div class="row clearfix">
                          <div class="col-lg-12">
                              <div class="card">
                                  <ul class="row profile_state list-unstyled">
                                      <li class="col-lg-3 col-md-3 col-6">
                                          <div class="body">
                                              <i class="zmdi zmdi-eye col-amber"></i>
                                              <h4>2,365</h4>
                                              <span>Post View</span>
                                          </div>
                                      </li>
                                      <li class="col-lg-3 col-md-3 col-6">
                                          <div class="body">
                                              <i class="zmdi zmdi-thumb-up col-blue"></i>
                                              <h4>365</h4>
                                              <span>Likes</span>
                                          </div>
                                      </li>
                                      <li class="col-lg-3 col-md-3 col-6">
                                          <div class="body">
                                              <i class="zmdi zmdi-comment-text col-red"></i>
                                              <h4>65</h4>
                                              <span>Comments</span>
                                          </div>
                                      </li>
                                      <li class="col-lg-3 col-md-3 col-6">
                                          <div class="body">
                                              <i class="zmdi zmdi-account text-success"></i>
                                              <h4>2,055</h4>
                                              <span>Profile Views</span>
                                          </div>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                          <div class="col-lg-6 col-md-6">
                              <div class="card activities">
                                  <div class="header">
                                      <h2><strong>Activities</strong> <small>Recent user Activities</small></h2>
                                  </div>
                                  <div class="body">
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
                                          <li>
                                              <a href="javascript:void(0)">
                                                  <i class="zmdi zmdi-account-box-phone bg-green"></i>
                                                  <div class="info">
                                                      <h4>Add New Contact</h4>
                                                      <small>Will be Dec 23th</small>
                                                  </div>
                                              </a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-6 col-md-6">
                              <div class="card">
                                  <div class="header">
                                      <h2><strong>Sales</strong> Overview</h2>
                                      <ul class="header-dropdown">
                                          <li class="dropdown">
                                              <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                              <ul class="dropdown-menu dropdown-menu-right slideUp float-right">
                                                  <li><a href="javascript:void(0);">Edit</a></li>
                                                  <li><a href="javascript:void(0);">Delete</a></li>
                                                  <li><a href="javascript:void(0);">Report</a></li>
                                              </ul>
                                          </li>
                                          <li class="remove">
                                              <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                          </li>
                                      </ul>
                                  </div>
                                  <div class="body">
                                      <div id="m_area_chart2" style="height: 290px"></div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
   


@endsection