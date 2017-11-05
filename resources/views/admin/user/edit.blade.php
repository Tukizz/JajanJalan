<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Menu</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">

  <link rel="stylesheet" href="{{ URL::asset('css/AdminLTE.min.css') }}">

  <link rel="stylesheet" href="{{ URL::asset('css/skin-blue.min.css') }}">

  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <script src="https://use.fontawesome.com/75341ac20c.js"></script>
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <a href="/" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Jajan</b>Jalan</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><i class="fa fa-user-circle" aria-hidden="true"></i> {{ Auth::user()->adminName }}</span>

            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                  <img src="\images\default.jpg" class="img-circle" alt="User Image"><br>
                <p>
                  {{ Auth::user()->adminName }} - Admin
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="{{ route('logout') }}" class="btn btn-default btn-flat" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Sign out</a>


                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
                </div>
              </li>
            </ul>
          </li>

        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
                  <img src="\images\default.jpg" class="img-circle" alt="User Image"><br>
        </div>
        <div class="pull-left info">
          <a href=""><h5>{{ Auth::user()->adminName }}</h5></a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="/admin/userlist/search" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="keyword" class="form-control" placeholder="Search User ID & User Name..." required>
          <span class="input-group-btn">
              <button type="submit" name="submit" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="">
          <a href="/admin/company"><i class="fa fa-building"></i> <span>Company</span>

          </a>
        </li>
        <li>
          <a href="/admin/branch">
            <i class="fa fa-cutlery"></i> <span>Branch</span></a>
        </li>
        <li class="">
          <a href="/admin/brand">
            <i class="fa fa-lemon-o"></i> <span>Brand</span>
          </a>
        </li>
        <li class="active">
          <a href="/admin/userlist">
            <i class="fa fa-user"></i> <span>List User</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
          </a>

        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit User
        <small><a href="/admin/userlist" data-toggle="modal" data-target="#myModal2">Back</a></small>
      </h1>
    </section>
<!-- MODAL -->
    <!-- Main content -->
    <section class="content container-fluid">


      <div class="row">
   

<div class="container">
	<div class="row">
	<div class="col-xs-6 col-md-4"></div>
  		<div class="col-xs-6 col-md-4">
    		<div style="margin-top: 20px;" class="thumbnail">
      			<div class="caption">
        			<h3>Profile User</h3>
        			<form action="/admin/userlist/{{$user->userId}}" method="POST" enctype="multipart/form-data">
        			<fieldset>
    					<div class="form-group">
      						<label>User Id</label>
      						<input class="form-control" type="text" name="userId" placeholder="User Id" value="{{$user->userId}}">
    					</div>
    					<div class="form-group">
      						<label>Name</label>
      						<input class="form-control" type="text" name="userName" placeholder="Nama" value="{{$user->userName}}">
    					</div>
    					<div class="form-group">
      						<label>Address</label>
      						<input class="form-control" type="text" name="address" placeholder="Nama" value="{{$user->address}}">
    					</div>
    					<div class="form-group">
      						<label>E-Mail</label>
      						<input class="form-control" type="email" name="email" placeholder="Nama" value="{{$user->email}}">
    					</div>
    					<div class="form-group">
<?php 
	$roleselected = $role->user_userId;
  $roleselected2 = $role->role_id;
?>
      						<label>Type User</label>
      						<select class="form-control" name="role_id" id="">
								<option value="1">Normal User
								</option>
								<option value="2">Owner Restaurant
								</option>
							</select>
    					</div>

    					<div class="form-group">
      						<label>Profile Picture</label><br>
							@if ($user->picture)
    							<img src="\images\user\{{$user->picture}}" alt="" height="120px" width="120px" style="border-radius:50%;"><br>
							@else
    							<img src="\images\default.jpg" alt="" height="120px" width="120px" style="border-radius:50%;"><br>
							@endif
      						<input class="form-control" type="file" name="picture">
    					</div>

    					<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                		<h4><b>Password</b></h4>
                		<input class="form-control" placeholder="Password" name="password" type="password" required oninvalid="this.setCustomValidity('Please Verify The Password')" oninput="setCustomValidity('')">
                		@if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
              			</div>
              			<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                			<h4><b>Confirm Password</b></h4>
                			<input class="form-control" placeholder="Password" name="password_confirmation" type="password" required oninvalid="this.setCustomValidity('Please Verify The Password')" oninput="setCustomValidity('')">
              			</div>

  					</fieldset>
  					
  					<input type="hidden" name="_token" value="{{csrf_token()}}">
  					<input type="hidden" name="_method" value="put">
					<input class="btn btn-primary" type="submit" value="Submit">
        			</form>
      			</div>
    		</div>
  		</div>
  		<div class="col-xs-6 col-md-4"></div>
	</div>
</div>
      </div>
<hr>




    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>© Powered By<a href="http://karismatech.com/"> Karismatech </a>2017</strong> .
  </footer>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="{{ URL::asset('js/jquery-3.1.1.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ URL::asset('js/app.js') }}"></script>
<!-- ownerLTE App -->
<script src="{{ URL::asset('js/Adminlte.min.js') }}"></script>

</body>
</html>
