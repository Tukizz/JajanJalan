<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Detail</title>

	<link rel="icon" type="image/png" href="images/jajanjalanlogo.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,600" async defer>
    <link rel="stylesheet" href="/css/app.css" async defer>
    <link rel="stylesheet" href="/css/venobox.css" async defer>
    <link rel="stylesheet" href="/css/animate.min.css" async defer>
    <link rel="stylesheet" href="/css/font-awesome.min.css" async defer>
    <link rel="stylesheet" href="/css/merlin.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/modal.css">
</head>
<body>
  <div id="navbar-top">
      <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
          <div class="container">
            <div class="row">
                <div class="col-md-12 navbar-height">
                 @if(Route::current()->getName() == 'surabaya.show')
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand nav-external" href="/surabaya">JajanJalan</a>
                  </div>

                <div class="collapse navbar-collapse">
                  <div class="col-md-2">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                          <i class="fa fa-location-arrow" aria-hidden="true"></i> Surabaya
                          <span class="caret"></span>
                        </button>

                        <ul class="dropdown-menu">
                          <li><a href="/">Bandung</a></li>
                          <li><a href="/jakarta">Jakarta</a></li>
                        </ul>
                    </div>
                  </div>

                <div class="row">
                  <div class="col-md-6">
                <form action="/surabaya/search" method="get">
                    <div class="search">
                          <div id="keywords_container" class="col-md-9 pr0">
                            <div id="keywords_pretext">
                                <div class="k-pre-2 w100" style="display:inline-block;">
                                  <span class="search-bar-icon mr5">
                                      <i class="fa fa-search" aria-hidden="true"></i>
                                  </span>
                                  <input type="text" name="keyword" id="keywords_input" class="discover-search" placeholder="Cari restoran, daerah, jenis masakan atau nama makanan..." required>
                                </div>
                            </div>
                          </div>

                          <div class="flex-shrink-0 plr0i">
                            <button id="search_button" class="btn btn-cyan cari" type="submit">Cari</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    @elseif(Route::current()->getName() == 'jakarta.show')
                    <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand nav-external" href="/jakarta">JajanJalan</a>
                  </div>
                    <div class="collapse navbar-collapse">
                  <div class="col-md-2">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                          <i class="fa fa-location-arrow" aria-hidden="true"></i> Jakarta
                          <span class="caret"></span>
                        </button>

                        <ul class="dropdown-menu">
                          <li><a href="/">Bandung</a></li>
                          <li><a href="/surabaya">Surabaya</a></li>
                        </ul>
                    </div>
                  </div>

                <div class="row">
                  <div class="col-md-6">
                <form action="/jakarta/search" method="get">
                    <div class="search">
                          <div id="keywords_container" class="col-md-9 pr0">
                            <div id="keywords_pretext">
                                <div class="k-pre-2 w100" style="display:inline-block;">
                                  <span class="search-bar-icon mr5">
                                      <i class="fa fa-search" aria-hidden="true"></i>
                                  </span>
                                  <input type="text" name="keyword" id="keywords_input" class="discover-search" placeholder="Cari restoran, daerah, jenis masakan atau nama makanan..." required>
                                </div>
                            </div>
                          </div>

                          <div class="flex-shrink-0 plr0i">
                            <button id="search_button" class="btn btn-cyan cari" type="submit">Cari</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    @elseif(Route::current()->getName() == 'bandung.show')
                    <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand nav-external" href="/">JajanJalan</a>
                  </div>
                    <div class="collapse navbar-collapse">
                  <div class="col-md-2">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                          <i class="fa fa-location-arrow" aria-hidden="true"></i> Bandung
                          <span class="caret"></span>
                        </button>

                        <ul class="dropdown-menu">
                          <li><a href="/jakarta">Jakarta</a></li>
                          <li><a href="/surabaya">Surabaya</a></li>
                        </ul>
                    </div>
                  </div>

                <div class="row">
                  <div class="col-md-6">
                <form action="/search" method="get">
                    <div class="search">
                          <div id="keywords_container" class="col-md-9 pr0">
                            <div id="keywords_pretext">
                                <div class="k-pre-2 w100" style="display:inline-block;">
                                  <span class="search-bar-icon mr5">
                                      <i class="fa fa-search" aria-hidden="true"></i>
                                  </span>
                                  <input type="text" name="keyword" id="keywords_input" class="discover-search" placeholder="Cari restoran, daerah, jenis masakan atau nama makanan..." required>
                                </div>
                            </div>
                          </div>

                          <div class="flex-shrink-0 plr0i">
                            <button id="search_button" class="btn btn-cyan cari" type="submit">Cari</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    @endif
                    <ul class="nav navbar-nav navbar-right" style="padding-top:10px;">
                    @if (Auth::guest())
                    <a href="#" class="btn btn-black" data-toggle="modal" data-target="#myModal">Masuk</a>
                      <a href="#" class="btn btn-black" data-toggle="modal" data-target="#myModal2">Create An Account</a>
                  @else
                        
                    @foreach (Auth::user()->role as $role)
                    @if($role->id == '2')
                      <a href="#" class=" btn btn-black" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                      @if (Auth::user()->picture)
                            <img src="\images\user\{{Auth::user()->picture}}" alt="" height="20px" width="20px" style="border-radius:50%;">
                      @else
                            <img src="\images\default.jpg" alt="" height="20px" width="20px" style="border-radius:50%;">
                    @endif
                        Profile <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="/user/{{Auth::user()->userId}}" class="btn">Profile</a></li>
                          <li><a href="/owner/company" class="btn">Manage Your Product</a></li>
                          <li><a href="{{ route('logout') }}" class="btn"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                      </a>
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                      </form>
                                  </ul>
                                    @elseif($role->id == '1')
                                      <a href="#" class=" btn btn-black" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    @if (Auth::user()->picture)
                                <img src="\images\user\{{Auth::user()->picture}}" alt="" height="20px" width="20px" style="border-radius:50%;">
                          @else
                                <img src="\images\default.jpg" alt="" height="20px" width="20px" style="border-radius:50%;">
                          @endif
                            Profile </a>

                            <ul class="dropdown-menu">
                            <li><a href="/user/{{Auth::user()->userId}}" class="btn">Profile</a></li>
                              <li><a href="{{ route('logout') }}" class="btn btn-black"
                                                  onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                                Logout
                                          </a>
                                        </li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                          {{ csrf_field() }}
                                        </form>
                                      </ul>
                                    @endif
                        @endforeach
                      @endif
                  </div>
                </div> <!-- -->
                </div>
              </div>
          </div>
        </nav>
    </div>

    <div id="myModal" class="modal fade" role="dialog">
  		<div class="modal-dialog">
    <!-- Modal content-->
    		<div class="modal-content">
      			<div class="modal-header">
        			<button type="button" class="close" data-dismiss="modal">&times;</button>
        			<h3 class="modal-title"><b>JajanJalan Login!</b></h3>
      			</div>
      		<div class="modal-body">
            	<form method="POST" action="{{ route('login') }}">
            		{{ csrf_field() }}
              		<fieldset> 
                		<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}"> 
                			<h4><b>Email JajanJalan</b></h4>                     
                  			<input class="form-control" placeholder="E-mail" name="email" type="text" required>
                  		@if ($errors->has('email'))
                            <span class="help-block">
                            	<strong>{{ $errors->first('email') }}</strong>
       	                    </span>
                   		@endif
                  		</div>

              			<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                			<h4><b>Password</b></h4>
                			<input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                 		@if ($errors->has('password'))
                    		<span class="help-block">
                    			<strong>{{ $errors->first('password') }}</strong>
                        	</span>
                 		@endif
              			</div>

              			<div class="checkbox">
                  			<a class="btn btn-link" href="{{ route('password.request') }}">
                     			Forgot Your Password?
                    		</a>
                		</div>

              			<input class="btn btn-lg btn-mas btn-block" type="submit" value="Masuk"><br>
              				<p align="center" id="privacy">Dengan melanjutkan laman ini, Anda setuju dengan <a href="#"><u>Syarat dan Ketentuan</u></a>,<a href="#"> <u>Kebijakan Cookie</u></a>, <a href="#"><u>Kebijakan Privasi dan</u></a> <a href="#"><u>Kebijakan Konten</u></a> JajanJalan. </p>
            		</fieldset>
              	</form>
      		</div>
    		</div>
  		</div>
	</div>

	<div id="myModal2" class="modal fade" role="dialog">
  		<div class="modal-dialog">
    <!-- Modal content-->
    		<div class="modal-content">
      			<div class="modal-header">
        			<button type="button" class="close" data-dismiss="modal">&times;</button>
        			<h3 class="modal-title"><b>JajanJalan Register!</b></h3>
      			</div>
      		<div class="modal-body">
            	<form accept-charset="UTF-8"  method="POST" action="{{ route('register') }}">
            		{{ csrf_field() }}
              		<fieldset>
                		<div class="form-group{{ $errors->has('userId') ? ' has-error' : '' }}">
                			<h4><b>Username</b></h4>
                			<input class="form-control" placeholder="Username" name="userId" type="text" value="{{ old('userId') }}" required autofocus>
                		@if ($errors->has('userId'))
                            <span class="help-block">
                            	<strong>{{ $errors->first('userId') }}</strong>
                            </span>
                        @endif
              			</div>

                		<div class="form-group{{ $errors->has('userName') ? ' has-error' : '' }}">
                			<h4><b>Nama Lengkap</b></h4>
                  			<input class="form-control" placeholder="Nama Lengkap" name="userName" type="text" value="{{ old('userName') }}" required autofocus>
                  		@if ($errors->has('userName'))
                            <span class="help-block">
                            	<strong>{{ $errors->first('userName') }}</strong>
                            </span>
                  		@endif
                		</div>

              			<div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                			<h4><b>Alamat</b></h4>
                			<input class="form-control" placeholder="Alamat"  name="address" value="{{ old('address') }}" required autofocus type="text">
                		@if ($errors->has('address'))
                            <span class="help-block">
                            	<strong>{{ $errors->first('address') }}</strong>
                            </span>
                		@endif
              			</div>

              			<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                			<h4><b>Alamat Email</b></h4>
                			<input class="form-control" placeholder="Alamat Email" name="email" type="email" value="{{ old('email') }}" required>
                		@if ($errors->has('email'))
                            <span class="help-block">
                            	<strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
              			</div>

              			<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                			<h4><b>Password</b></h4>
                			<input class="form-control" placeholder="Password" name="password" type="password" value="" required>
                		@if ($errors->has('password'))
                            <span class="help-block">
                            	<strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
              			</div>

              			<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                			<h4><b>Confirm Password</b></h4>
                			<input class="form-control" placeholder="Password" name="password_confirmation" type="password" value="" required>
              			</div>

              			<input class="btn btn-lg btn-mas btn-block" type="submit" value="REGISTER"><br>
              			<p align="center" id="privacy">Dengan melanjutkan laman ini, Anda setuju dengan <a href="#"><u>Syarat dan Ketentuan</u></a>,<a href="#"> <u>Kebijakan Cookie</u></a>, <a href="#"><u>Kebijakan Privasi dan</u></a> <a href="#"><u>Kebijakan Konten</u></a> JajanJalan. </p>
            		</fieldset>
              	</form>
      		</div>
    		</div>
  		</div>
	</div>

	<section id="services" class="page">
  <div class="row">
         <div class="container-full-bg">
          @if ($branch->branchPicture)
                <img src="/images/branch/{{$branch->branchPicture}}" alt="User Image"><br>
              @else
                <img src="{{URL::asset('images/no-image.png')}}" alt=""><br>
              @endif
            <div class="container">
              <center><div class="caption">
        <h2><b>{{$branch->branchName}}</b></h2>
        <h4><p>{{$branch->branchAddress}} - {{$branch->category->categoryType}}</p></h4>
              </div></center>
              </div>
            </div>
          </div>
      </div>
        <div class="content">

<div id="exTab1" class="container">	
<ul  class="nav nav-pills">
			<li class="active" id="menu">
        <a  href="#1a" data-toggle="tab">Sekilas</a>
			</li>
			<li id="menu"><a href="#2a" data-toggle="tab">Menu</a>
			</li>
</ul><br>
			<div class="tab-content clearfix">
			  <div class="tab-pane active" id="1a">
          			<div class="col-md-12">
          				<div class="col-md-4">
          					<h4><b>Telepon</b> <br>{{$branch->branchContactNo}}</h4>
          					<p><h4><b>Category</b></h4><h4>{{$branch->category->categoryType}}</h4></p>
          				</div>
          				<div class="col-md-4">
          					<p><h4><b>Jam Buka</b></h4><h4>{{$branch->branchTradingHours}}</h4></p>
          					<p><h4><b>Alamat</b></h4><h4>{{$branch->branchAddress}}</h4></p>
          				</div>
          				<div class="col-md-4">
          					<p><h4><b>Tipe Masakan</b></h4><h4>{{$branch->branchPointRules}}</h4></p>
          				</div>
          			</div>
			</div>

				<div class="tab-pane" id="2a">
  <div class="row portfolio menu-hidangan">
@foreach ($brand as $data)
@if($branch->branchId == $data->branchIdFK)
    <div class="col-sm-6 col-md-3">
      <div class="">
      @if ($data->brandPicture)
      <a href="#gardenImage" data-id="/images/brand/{{$data->brandPicture}}" data-id2="/images/brand/{{$data->brandPicture2}}" data-id3="/images/brand/{{$data->brandPicture3}}" data-id4="/images/brand/{{$data->brandPicture4}}" data-id5="/images/brand/{{$data->brandPicture5}}" class="openImageDialog" data-toggle="modal">
        <img src="/images/brand/{{$data->brandPicture}}" height="210px" width="210px" style="border-radius:5px;">
        </a>
        @else
        <img class="img-circle" src="{{URL::asset('images/default.jpg')}}" alt="">
      @endif
        
      </div>
    </div>

  <!-- Modal -->
  <div class="modal fade" id="gardenImage" tabindex="-1" role="dialog" aria-labelledby="gardenImageLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="width:800px; margin-left:-160px;">
            <div class="modal-body">
              <center>
                @if ($data->brandPicture)
                  <img id="myImage" src="" alt="" height="210px" width="210px" style="margin:20px 10px 0px 0px; border-radius:5px;">
                @endif
                @if ($data->brandPicture2)
                  <img id="myImage2" src="" alt="" height="210px" width="210px" style="margin:20px 10px 0px 0px; border-radius:5px;">
                @endif
                @if ($data->brandPicture3)
                  <img id="myImage3" src="" alt="" height="210px" width="210px" style="margin:20px 10px 0px 0px; border-radius:5px;">
                @endif
                @if ($data->brandPicture4)
                  <img id="myImage4" src="" alt="" height="210px" width="210px" style="margin:20px 10px 0px 0px; border-radius:5px;">
                @endif
                @if ($data->brandPicture5)
                  <img id="myImage5" src="" alt="" height="210px" width="210px" style="margin:20px 10px 0px 0px; border-radius:5px;">
                @endif
                </center>
                <h4><b>Nama Hidangan : </b></h4><h5>{{$data->brandName}}</h5>
                <h4><b>Notes : </b></h4><h5>{{$data->brandPointRules}}</h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger center-block" data-dismiss="modal">close</button>
            </div>
        </div>
    </div>
</div>
  
@endif
@endforeach    
  </div>
				</div>
			</div>
  </div>


<br><br>
  
@if (!Auth::guest())
<div class="container thumbnail">
	<div class="container">
		<div class="row">
		<div class="col-sm-12">
			<h3>Tulis Ulasan</h3>
		</div><!-- /col-sm-12 -->
	</div><!-- /row -->

	<div class="row">
		<div class="col-sm-1">
			<div class="thumbnail">
        @if (Auth::user()->picture)
              <img src="\images\user\{{Auth::user()->picture}}" class="img-responsive user-photo" alt="" height="100px" width="100px">
        @else
              <img src="\images\default.jpg" alt="" class="img-responsive user-photo" height="80px" width="80px">
        @endif
			</div><!-- /thumbnail -->
		</div><!-- /col-sm-1 -->
      
    {{Form::open(['route' => ['review.store',$branch->branchId], 'method' => 'POST']) }}
		<div class="col-sm-5">
			<div class="panel panel-default">
				<div class="panel-heading">
					<strong>{{ Auth::user()->userName }}</strong> <span class="text-muted"></span>
				</div>
				<div class="panel-body">
					<textarea class="form-control" id="" cols="10" rows="2" placeholder="Minimal 5 Karakter" name="reviewDescription"></textarea>
					<br>
					<input type="hidden" name="reviewById" value="{{ Auth::user()->userId }}">
            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 						<button type="submit" class="btn btn-success">Submit</button>
				</div><!-- /panel-body -->
			</div><!-- /panel panel-default -->
		</div><!-- /col-sm-5 -->

    {{ Form::close() }}

	</div><!-- /row -->
	</div>
</div><!-- /container -->
  @endif

   

<div class="container thumbnail" id="comments">
	<div class="container">
		<h1>Ulasan</h1>
	</div>
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"/>
<div class="container">
 @foreach($branch->review as $comment)
  <div class="well">
      <div class="media">
      	<a class="pull-left" href="#">
        @if ($comment->user->picture)
                <img class="media-object img-circle" src="/images/user/{{$comment->user->picture}}" height="80px" width="80px">
              @else
                <img class="img-circle" src="{{URL::asset('images/default.jpg')}}" alt="" height="80px" width="80px"><br>
         @endif
  		</a>
  		<div class="media-body">
    		<h3 class="media-heading"><b>{{$comment->user->userName}}</b>
        @if(!Auth::guest())
          @if (Auth::user()->userId == $comment->reviewById)

          <form action="/review/{{$comment->reviewId}}" method="post" onSubmit="if(!confirm('Are you sure want to delete this?')){return false;}">
              <input type="hidden" name="_method" value="delete">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <button type="submit" class="btn btn-default btn-xs btn-danger" value="Delete"><i class="fa fa-times"></i>Delete</button>
              </form>
          @endif
        @endif
        
        </h3>
          <h4>{{$comment->reviewDescription}}</h4>
          
       </div>
    </div>
  </div>
  @endforeach

	</div>
</div>

</div>


              </section>


@extends('layouts.footer')

	<script src="/js/jquery.min.js"></script>
    <script src="/js/app.js"></script>
    <script src="/js/isotope.pkgd.min.js"></script>
    <script src="/js/imagesloaded.min.js"></script>
    <script src="/js/jquery.scrollTo.min.js"></script>
    <script src="/js/jquery.nav.min.js"></script>
    <script src="/js/jquery.appear.min.js"></script>
    <script src="/js/venobox.min.js"></script>
    <script src="/js/merlin.js"></script>
    <script>
    $(document).on("click", ".openImageDialog", function () {
    var myImageId = $(this).data('id');
    var myImageId2 = $(this).data('id2');
    var myImageId3 = $(this).data('id3');
    var myImageId4 = $(this).data('id4');
    var myImageId5 = $(this).data('id5');
    $(".modal-body #myImage").attr("src", myImageId);
    $(".modal-body #myImage2").attr("src", myImageId2);
    $(".modal-body #myImage3").attr("src", myImageId3);
    $(".modal-body #myImage4").attr("src", myImageId4);
    $(".modal-body #myImage5").attr("src", myImageId5);
});

</script>

   <script>
   $(window).load(function() {
  $('.post-module').hover(function() {
    $(this).find('.description').stop().animate({
      height: "toggle",
      opacity: "toggle"
    }, 300);
  });
});
	$('.carousel').carousel('pause');
</script>
</body>
</html>