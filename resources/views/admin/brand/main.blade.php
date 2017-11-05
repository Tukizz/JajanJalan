<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Restoran Zomato Indonesia</title>
</head>
<body>
	<!-- CSS List-->
  <link rel="icon" type="image/png" href="images/jajanjalanlogo.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,600" async defer>
    <link rel="stylesheet" href="/css/app.css" async defer>
    <link rel="stylesheet" href="/css/venobox.css" async defer>
    <link rel="stylesheet" href="/css/animate.min.css" async defer>
    <link rel="stylesheet" href="/css/font-awesome.min.css" async defer>
	<link rel="stylesheet" href="/css/merlin.css">
	<link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/modal.css">


    <section id="home" class="page">
    <div class="hitam">
      <div class="container">
      <div class="login">
      <a href="#" class="btn btn-blue" data-toggle="modal" data-target="#myModal">Masuk</a>

<a href="#" class="btn btn-blue" data-toggle="modal" data-target="#myModal2">Create An Account</a>
      </div>
        <div class="content cover text-center">
          <div class="row">
            <div class="col-lg-12">
              <img class="logozomato" src="images/jajanjalanlogo.png" alt=""><br>

              <h2>Temukan restoran, kafe, dan bar terbaik di Indonesia. </h2>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>

        <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title"><b>Zomato Login!</b></h3>
      </div>
      <div class="modal-body">
            <form method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
              <fieldset>
                
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}"> 
                <h4><b>Email Zomato</b></h4>                     
                  <input class="form-control" placeholder="E-mail" name="email" type="text" required>
                  @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                   @endif
                  </div>
              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <h4><b>Password</b></h4>
                <input id="password" type="password" class="form-control" name="password" required>
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
              <p align="center" id="privacy">Dengan melanjutkan laman ini, Anda setuju dengan <a href="#"><u>Syarat dan Ketentuan</u></a>,<a href="#"> <u>Kebijakan Cookie</u></a>, <a href="#"><u>Kebijakan Privasi dan</u></a> <a href="#"><u>Kebijakan Konten</u></a> Zomato. </p>
            </fieldset>
              </form>
      </div>
    </div>

  </div>
</div>
        <!-- Modal -->
<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title"><b>Zomato Register!</b></h3>
      </div>
      <div class="modal-body">
            <form accept-charset="UTF-8" role="form">
              <fieldset>
                <div class="form-group">
                <h4><b>Nama Lengkap</b></h4>
                  <input class="form-control" placeholder="Nama Lengkap" name="email" type="text" required>
              </div>
              <div class="form-group">
                <h4><b>Alamat Email</b></h4>
                <input class="form-control" placeholder="Alamat Email" name="password" type="password" value="" required>
              </div>
              <div class="form-group">
                <h4><b>Password</b></h4>
                <input class="form-control" placeholder="Password" name="password" type="password" value="" required>
              </div>

              <input class="btn btn-lg btn-mas btn-block" type="submit" value="Masuk"><br>
              <p align="center" id="privacy">Dengan melanjutkan laman ini, Anda setuju dengan <a href="#"><u>Syarat dan Ketentuan</u></a>,<a href="#"> <u>Kebijakan Cookie</u></a>, <a href="#"><u>Kebijakan Privasi dan</u></a> <a href="#"><u>Kebijakan Konten</u></a> Zomato. </p>
            </fieldset>
              </form>
      </div>
    </div>

  </div>
</div>
    <div id="navbar-top">
      <nav class="navbar navbar-default navbar-static" role="navigation">
        <div class="container">
        <div class="row">
          <div class="col-md-12 navbar-height">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand nav-external" href="#home">Zomato</a>
          </div>

          <div class="collapse navbar-collapse">
				<div class="col-md-2">
 				<div class="dropdown">
  				<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-location-arrow" aria-hidden="true"></i> Pilih Lokasi

  				<span class="caret"></span></button>
  				<ul class="dropdown-menu">
    				<li><a href="#">Bandung</a></li>
    				<li><a href="#">Jakarta</a></li>
    				<li><a href="#">Surabaya</a></li>
  				</ul>
				</div>
				</div>
        <div class="row">
        <div class="col-md-6">


	<div class="search">
        <form action="/search" method="get">

          <div id="keywords_container" class="col-md-9 pr0">
            <div id="keywords_pretext">
              <div class="k-pre-2 w100" style="display:inline-block;">
                <span class="search-bar-icon mr5">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </span>

                <input type="text" name="keyword" id="keywords_input" class="discover-search" placeholder="Cari restoran, daerah, jenis masakan atau nama makanan...">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
              </div>
            </div>
          </div>
          <div class="flex-shrink-0 plr0i">
            <button id="search_button" class="btn btn-cyan cari" type="submit">Cari
          </div>

        </form>
          </div>
          </div>
          </div>
        </div>
		<!-- <form class="navbar-form" role="search">
    <div class="input-group add-on">
      <input class="form-control" placeholder="Tipe Hidangan" name="srch-term" id="srch-term" type="text">
      <div class="input-group-btn">
        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
      </div>
    </div>
  </form> -->
            </div>
            </div>
        </div>
      </nav>
    </div>
    <section id="services" class="page">
      <div class="container">
        <div class="content text-center">
          <div class="heading">
            <h2><b>Koleksi</b></h2>
            <div class="border"></div>
            <p>Jelajahi daftar terpilih untuk restoran, kafe, dan bar terbaik di dan di sekitar Bandung, berdasarkan tren </p>
          </div>
          <div class="row">
            <div class="col-lg-4 service animated hiding" data-animation="fadeInUp" data-delay="300">
				<div class="ui fluid card">
					<a href="#">
						<div class="row">
							<div class="col-md-5">
								<div class="collection-box-bg" title="Terpopuler Minggu Ini">
									<img src="images/steak.jpg" alt="">
								</div>
							</div>
							<div class="col-md-6 desk">
								<b style="font-size:19px;">Steak Food</b>
								<p>Restoran terpopuler di kota minggu ini</p>
							</div>
						</div>
					</a>
            </div>
            </div>
            <div class="col-lg-4 service animated hiding" data-animation="fadeInUp" data-delay="600">
				<div class="ui fluid card">
					<a href="#">
						<div class="row">
							<div class="col-md-5">
								<div class="collection-box-bg" title="Terpopuler Minggu Ini">
									<img src="images/res1.jpg" alt="">
								</div>
							</div>
							<div class="col-md-6 desk">
								<b style="font-size:19px;">Romantik</b>
								<p>Tempat terbaik untuk makan dengan suasana romantis</p>
							</div>
						</div>
					</a>
            </div>
            </div>
            <div class="col-lg-4 service animated hiding" data-animation="fadeInUp" data-delay="900">
				<div class="ui fluid card">
					<a href="#">
						<div class="row">
							<div class="col-md-5">
								<div class="collection-box-bg" title="Terpopuler Minggu Ini">
									<img src="images/res2.jpg" alt="">
								</div>
							</div>
							<div class="col-md-6 desk">
								<b style="font-size:19px;">Hilltop Restaurants</b>
								<p>The best places to enjoy a meal with a beautiful view of the mountain</p>
							</div>
						</div>
					</a>
            </div>
            </div>
            <div class="col-lg-4 service animated hiding" data-animation="fadeInUp" data-delay="1200">
        <div class="ui fluid card">
          <a href="#">
            <div class="row">
              <div class="col-md-5">
                <div class="collection-box-bg" title="Terpopuler Minggu Ini">
                  <img src="images/res3.jpg" alt="">
                </div>
              </div>
              <div class="col-md-6 desk">
                <b style="font-size:19px;">Authentic Sunda</b>
                <p>The best places to enjoy a meal with a beautiful view of the mountain</p>
              </div>
            </div>
          </a>
            </div>
            </div>
            <div class="col-lg-4 service animated hiding" data-animation="fadeInUp" data-delay="1500">
        <div class="ui fluid card">
          <a href="#">
            <div class="row">
              <div class="col-md-5">
                <div class="collection-box-bg" title="Terpopuler Minggu Ini">
                  <img src="images/res4.jpg" alt="">
                </div>
              </div>
              <div class="col-md-6 desk">
                <b style="font-size:19px;">Kopi Shop</b>
                <p>The best places to enjoy a meal with a beautiful view of the mountain</p>
              </div>
            </div>
          </a>
            </div>
            </div>
            <div class="col-lg-4 service animated hiding" data-animation="fadeInUp" data-delay="1800">
        <div class="ui fluid card">
          <a href="#">
            <div class="row">
              <div class="col-md-5">
                <div class="collection-box-bg" title="Terpopuler Minggu Ini">
                  <img src="images/sushi.jpg" alt="">
                </div>
              </div>
              <div class="col-md-6 desk">
                <b style="font-size:19px;">Japan Restaurants</b>
                <p>The best places to enjoy a meal with a beautiful view of the mountain</p>
              </div>
            </div>
          </a>
            </div>
            </div>
            <div class="col-lg-4 service animated hiding" data-animation="fadeInUp" data-delay="2100">
        <div class="ui fluid card">
          <a href="#">
            <div class="row">
              <div class="col-md-5">
                <div class="collection-box-bg" title="Terpopuler Minggu Ini">
                  <img src="images/berry.jpg" alt="">
                </div>
              </div>
              <div class="col-md-6 desk">
                <b style="font-size:19px;">Makan Hemat</b>
                <p>The best places to enjoy a meal with a beautiful view of the mountain</p>
              </div>
            </div>
          </a>
            </div>
            </div>
            <div class="col-lg-4 service animated hiding" data-animation="fadeInUp" data-delay="2400">
        <div class="ui fluid card">
          <a href="#">
            <div class="row">
              <div class="col-md-5">
                <div class="collection-box-bg" title="Terpopuler Minggu Ini">
                  <img src="images/ice.jpg" alt="">
                </div>
              </div>
              <div class="col-md-6 desk">
                <b style="font-size:19px;">Frozen Delight</b>
                <p>The best places to enjoy a meal with a beautiful view of the mountain</p>
              </div>
            </div>
          </a>
            </div>
            </div>
            <div class="col-lg-4 service animated hiding" data-animation="fadeInUp" data-delay="2700">
        <div class="ui fluid card">
          <a href="#">
            <div class="row">
              <div class="col-md-5">
                <div class="collection-box-bg" title="Terpopuler Minggu Ini">
                  <img src="images/street.jpg" alt="">
                </div>
              </div>
              <div class="col-md-6 desk">
                <b style="font-size:19px;">Street Food</b>
                <p>The best places to enjoy a meal with a beautiful view of the mountain</p>
              </div>
            </div>
          </a>
            </div>
            </div>
    </section>
        <section id="work" class="page">
      <div class="container">
        <div class="content text-center">
          <div class="heading">
            <h2><b>Pencarian Cepat</b></h2>
            <div class="border"></div>
            <p>Temukan restoran berdasarkan tipe masakan </p>
          </div>
        <div class="row">
          <div class="col-md-12 cepat">
            <div class="col-md-2" id="pencarian">
              <a href="#" class="category">
                <img src="images/pencariancepat/sarapan.png" style="height: 48px; width: 48px; display: inline-block;">
                <p>Sarapan</p>
              </a>
            </div>
            <div class="col-md-2" id="pencarian">
              <a href="#" class="category">
                <img src="images/pencariancepat/makansiang.png" style="height: 48px; width: 48px; display: inline-block;">
                <p>Makan Siang</p>
              </a>
            </div>
            <div class="col-md-2" id="pencarian">
              <a href="#" class="category">
                <img src="images/pencariancepat/category_10.png" style="height: 48px; width: 48px; display: inline-block;">
                <p>Makan Malam</p>
              </a>
            </div>
            <div class="col-md-2" id="pencarian">
              <a href="#" class="category">
                <img src="images/pencariancepat/kafe.png" style="height: 48px; width: 48px; display: inline-block;">
                <p>Kafe dan Deli</p>
              </a>
            </div>
            <div class="col-md-2" id="pencarian">
              <a href="#" class="category">
                <img src="images/pencariancepat/pesanantar.png" style="height: 48px; width: 48px; display: inline-block;">
                <p>Restoran Pesan Antar</p>
              </a>
            </div>
            <div class="col-md-2" id="pencarian">
              <a href="#" class="category">
                <img src="images/pencariancepat/bar.png" style="height: 48px; width: 48px; display: inline-block;">
                <p>Bar dan Nightlife</p>
              </a>
            </div>
            <div class="col-md-2" id="pencarian">
              <a href="#" class="category">
                <img src="images/pencariancepat/dessert.png" style="height: 48px; width: 48px; display: inline-block;">
                <p>Dessert & Cakes</p>
              </a>
            </div>
            <div class="col-md-2" id="pencarian">
              <a href="#" class="category">
                <img src="images/pencariancepat/foodcourt.png" style="height: 48px; width: 48px; display: inline-block;">
                <p>Food Court</p>
              </a>
            </div>
          </div>
        </div>
        </div>
      </div>
    </section>
    <section id="work" class="page">
      <div class="container">
        <div class="content text-center">
          <div class="heading">
            <h2><b>Daerah populer di dan di sekitar Bandung </b></h2>
            <div class="border"></div>
            <p>Jelajahi restoran, bar, dan kafe melalui lokalitas </p>
          </div>
        <div class="row">
          <div class="col-md-12 cepat pop">
              <a href="#" class="col-md-4 popdar">
                Riau
                <span class="grey-text">(102 tempat)</span>
              </a>
              <a href="#" class="col-md-4 popdar">
                Lengkong
                <span class="grey-text">(102 tempat)</span>
              </a>
              <a href="#" class="col-md-4 popdar">
                Dago
                <span class="grey-text">(102 tempat)</span>
              </a>
              <a href="#" class="col-md-4 popdar">
                Dago Pakar
                <span class="grey-text">(102 tempat)</span>
              </a>
              <a href="#" class="col-md-4 popdar">
                Sukajadi
                <span class="grey-text">(102 tempat)</span>
              </a>
              <a href="#" class="col-md-4 popdar">
                Buahbatu
                <span class="grey-text">(102 tempat)</span>
              </a>
              <a href="#" class="col-md-4 popdar">
                SumurBandung
                <span class="grey-text">(102 tempat)</span>
              </a>
              <a href="#" class="col-md-4 popdar">
                Cikutra
                <span class="grey-text">(102 tempat)</span>
              </a>
              <a href="#" class="col-md-4 popdar">
                Ciumbuleut
                <span class="grey-text">(102 tempat)</span>
              </a>
              <a href="#" class="col-md-4 popdar">
                Persan Bajuri
                <span class="grey-text">(102 tempat)</span>
              </a>
              <a href="#" class="col-md-4 popdar">
                Lembang
                <span class="grey-text">(102 tempat)</span>
              </a>
              <a href="#" class="col-md-4 popdar">
                Bandung Wetan
                <span class="grey-text">(102 tempat)</span>
              </a>
              <a href="#" class="col-md-4 popdar">
                Pasteur
                <span class="grey-text">(102 tempat)</span>
              </a>
              <a href="#" class="col-md-4 popdar">
                Cicendo
                <span class="grey-text">(102 tempat)</span>
              </a>
              <a href="#" class="col-md-4 popdar">
                Gegerkalong
                <span class="grey-text">(102 tempat)</span>
              </a>
              <a href="#" class="col-md-4 popdar">
                Pungkur
                <span class="grey-text">(102 tempat)</span>
              </a>
              <a href="#" class="col-md-4 popdar">
                Braga
                <span class="grey-text">(102 tempat)</span>
              </a>
              <a href="#" class="col-md-4 popdar">
                Cihampelas
                <span class="grey-text">(102 tempat)</span>
              </a>
              <a href="#" class="col-md-4 popdar">
                Surapati
                <span class="grey-text">(102 tempat)</span>
              </a>
              <a href="#" class="col-md-4 popdar">
                Cicendo
                <span class="grey-text">(102 tempat)</span>
              </a>
              <a href="#" class="col-md-4 popdar">
                Andir
                <span class="grey-text">(102 tempat)</span>
              </a>
              <a href="#" class="col-md-4 popdar">
                Pasir Koja
                <span class="grey-text">(102 tempat)</span>
              </a>
              <a href="#" class="col-md-4 popdar">
                Kiaracondong
                <span class="grey-text">(102 tempat)</span>
              </a>
              <a href="#" class="col-md-4 popdar">
                Pasirkaliki
                <span class="grey-text">(102 tempat)</span>
              </a>
              <a href="#" class="col-md-4 popdar">
                Bandung Kulon
                <span class="grey-text">(102 tempat)</span>
              </a>
              <a href="#" class="col-md-4 popdar">
                Sarijadi
                <span class="grey-text">(102 tempat)</span>
              </a>
              <a href="#" class="col-md-4 popdar">
                Ujungberung
                <span class="grey-text">(102 tempat)</span>
              </a>
              <a href="#" class="col-md-4 popdar">
                Cibiru
                <span class="grey-text">(102 tempat)</span>
              </a>
              <a href="#" class="col-md-4 popdar">
                Margacinta
                <span class="grey-text">(102 tempat)</span>
              </a>
              <a href="#" class="col-md-4 popdar">
                Astanaanyar
                <span class="grey-text">(102 tempat)</span>
              </a>
          </div>
        </div>
        </div>
      </div>
    </section>
	<!-- Javascript List -->
	   <script src="/js/jquery.min.js"></script>
    <script src="/js/app.js"></script>
    <script src="/js/isotope.pkgd.min.js"></script>
    <script src="/js/imagesloaded.min.js"></script>
    <script src="/js/jquery.scrollTo.min.js"></script>
    <script src="/js/jquery.nav.min.js"></script>
    <script src="/js/jquery.appear.min.js"></script>
    <script src="/js/venobox.min.js"></script>
    <script src="/js/merlin.js"></script>
</body>
</html>


<!-- @foreach ($brand as $data)

	<a href="/admin/brand/{{$data->brandId}}">{{$data->brandId}}</a><br>
	{{$data->brandName}}<br>
	{{$data->brandWebsite}}<br>
	<img src="\images\brand\{{$data->brandPicture}}" alt="" height="250px" width="250px">
	<br>
	{{$data->brandPointRules}}<br>
	{{$data->company->companyName}}<br>
	{{$data->user->userName}}<br>
	{{$data->created_at}}<br>
		<hr>
@endforeach -->