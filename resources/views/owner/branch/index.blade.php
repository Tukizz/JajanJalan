<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Owner Menu</title>
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

    <!-- Logo -->
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
          <!-- Messages: style can be found in dropdown.less-->
           
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><i class="fa fa-user-circle" aria-hidden="true"></i> {{ Auth::user()->userName }}</span>

            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
          @if (Auth::user()->picture)
                  <img src="\images\user\{{Auth::user()->picture}}" class="img-circle" alt="User Image"><br>
          @else
                  <img src="\images\default.jpg" class="img-circle" alt="User Image"><br>
          @endif
                <p>
                  {{ Auth::user()->userName }} - Owner
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="/user/{{Auth::user()->userId}}" class="btn btn-default btn-flat">Profile</a>
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
          <!-- Control Sidebar Toggle Button -->
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
          @if (Auth::user()->picture)
                  <img src="\images\user\{{Auth::user()->picture}}" class="img-circle" alt="User Image"><br>
          @else
                  <img src="\images\default.jpg" class="img-circle" alt="User Image"><br>
          @endif
        </div>
        <div class="pull-left info">
          <a href="\user\{{Auth::user()->userId}}"><h5>{{ Auth::user()->userName }}</h5></a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="/owner/branch/search" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="keyword" class="form-control" placeholder="Search Branch Name..." required>
          <span class="input-group-btn">
              <button type="submit" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="/owner/company"><i class="fa fa-building"></i> <span>Company</span>
        
              </a></li>
        <li class="active">
          <a href="/owner/branch"><i class="fa fa-cutlery"></i> <span>Branch</span>
          <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span></a>
        </li>
        <li class="">
          <a href="/owner/brand">
            <i class="fa fa-lemon-o"></i> <span>Brand</span>
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
        <a href="/owner/branch/unowned">List unowned Branch</a>
        <small><a href="/owner/branch/create">Input Branch</a></small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

    <div class="row">
    @foreach ($branch as $data)
        <div class="col-md-6">
          <!-- Box Comment -->
          <div class="box box-default">
            <div class="box-header with-border">
              <div class="user-block">
               @if ($data->branchPicture)
                <img class="img-circle" src="/images/branch/{{$data->branchPicture}}" alt="User Image">
              @else
                <img class="img-circle" src="{{URL::asset('images/no-image.png')}}" alt="">
              @endif
                
                <span class="username"><a href="#">{{$data->branchName}}</a> -
                @if($data->companyIdFK == !null)
                <a href="/owner/company/search?keyword={{$data->company->companyName}}">{{$data->company->companyName}}</a>
                @else
                <a href="">No Company</a>
                @endif
                </span>
                <span class="description">{{$data->branchAddress}} - {{$data->branchVenue}}</span>
              </div>
              <!-- /.user-block -->

              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <p><b>Phone : </b>{{$data->branchContactNo}} - {{$data->branchContactName}}</p>
              <p><b>Category : </b>{{$data->category->categoryType}}</p>
              <p><b>Tipe Masakan : </b>{{$data->branchPointRules}}</p>
              <p><b>Open - Till : </b>{{$data->branchTradingHours}}</p>
              <p><b>News : </b>{{$data->branchNews}}</p>
              @if ($data->branchEnteredById == null)

                <form action="/owner/branch/{{$data->branchId}}" method="POST" enctype="multipart/form-data" onSubmit="if(!confirm('Are you sure want to claim this?')){return false;}">
                    <fieldset>
                            <input type="hidden" name="branchName" value="{{$data->branchName}}">
                            <input type="hidden" name="branchAddress" value="{{$data->branchAddress}}">
                            <input type="hidden" name="branchContactName" value="{{$data->branchContactName}}">
                            <input type="hidden" name="branchContactNo" value="{{$data->branchContactNo}}">
                            <input type="hidden" name="branchVenue" value="{{$data->branchVenue}}">
                            <input type="hidden" name="branchCategory" value="{{$data->branchCategory}}">
                            <input type="hidden" name="branchTradingHours" value="{{$data->branchTradingHours}}">
                            <input type="hidden" name="branchNews" value="{{$data->branchNews}}">
                            <input type="hidden" name="branchPointRules" value="{{$data->branchPointRules}}">
                            <input type="hidden" name="companyIdFK" value="{{$data->companyIdFK}}">
                            <input type="hidden" name="branchEnteredById" value="{{ Auth::user()->userId }}">

                    </fieldset>
                    
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="_method" value="put">
                    <i class="fa fa-share"></i><input class="btn btn-default btn-xs" type="submit" value="Claim">
                    </form>
              @else
                     <a href="/owner/branch/{{$data->branchId}}/edit" type="button" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i> Edit</a>
              @endif
             
              <span class="pull-right text-muted">
              @if($data->branchEnteredById == !null)
              {{$data->user->userName}}
              @else
              No Owner
              @endif - {{$data->created_at}}</span>
            </div>
            <!-- /.box-footer -->
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <!-- /.col -->
        <!-- /.col -->

        @endforeach
      </div>
      <center>
      {{$branch->appends(Request::only('keyword'))->links()}}
      </center>
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

  <!-- Control Sidebar -->
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











