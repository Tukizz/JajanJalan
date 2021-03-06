<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Search</title>

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
                 @if(Route::current()->getName() == 'surabaya.search')
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
                    @elseif(Route::current()->getName() == 'jakarta.search')
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
                    @elseif(Route::current()->getName() == 'bandung.search')
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
           									Profile	</a>

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

<!-- MODAL -->
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

<!-- MODAL -->
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
    	   <div class="container-full-bg" style="background-image:url('/images/steak.jpg');">
            <div class="container">
  				    <div class="jumbotron" style="padding-top:90px;"><br><br><br><br><br><br><br><br><br>
  				    </div>
            </div>
		      </div>
      </div>

    <div class="container">
      <div class="content text-center">
        <div class="heading">
          <h2><b>Your search result</b></h2>
          <div class="border"></div>
          <p>Jelajahi daftar terpilih untuk restoran, kafe, dan bar terbaik di dan di sekitar Bandung, berdasarkan tren </p>
        </div>
          <div class="row">
          @foreach ($branch as $data2)
            <div class="col-lg-4 service">
              <div class="ui fluid card">
                <a href="branch/{{$data2->branchId}}">
                  <div class="row">
                    <div class="col-md-5">
                      <div class="collection-box-bg" title="Terpopuler Minggu Ini">
                      @if ($data2->branchPicture)
                        <img src="\images\branch\{{$data2->branchPicture}}">
                      @else
                        <img src="\images\no-image.png" alt="">
                      @endif
                      </div>
                    </div>
                  <div class="col-md-6 desk">
                    <b style="font-size:19px;"> <a href="branch/{{$data2->branchId}}"> {{$data2->branchName}}</a></b>
                    <p>Restoran terpopuler di kota minggu ini</p>
                  </div>
                  </div>
                </a>
              </div>
            </div>
            @endforeach
              </div>

            </div>
            </div>

    </section>
<center>
{{$branch->appends(Request::only('keyword'))->links()}}
</center>
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
	$('.carousel').carousel('pause');
</script>

</body>
</html>


    


	


<!-- <h1>Restoran</h1> 
<hr>
@foreach ($branch as $data2)
<a href="/branch/{{$data2->branchId}}"> {{$data2->branchName}}</a><br><br>
@if ($data2->branchPicture)
   <img src="\images\branch\{{$data2->branchPicture}}" alt="" height="120px" width="120px" style="border-radius:50%;"><br><br>
@else
   <img src="\images\no-image.png" alt="" height="120px" width="120px" style="border-radius:50%;"><br><br>
@endif
{{$data2->branchAddress}} <br>
{{$data2->branchPointRules}} <br>
{{$data2->branchContactName}} - {{$data2->branchContactNo}} <br>
{{$data2->branchVenue}} <br>
{{$data2->category->categoryType}} <br>
{{$data2->branchTradingHours}} <br>
{{$data2->branchNews}} <br>
<hr>

 @endforeach-->