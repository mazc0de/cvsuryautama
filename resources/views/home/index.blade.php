<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, maximum-scale=1">
  <title>CV. Surya Utama</title>
  <link rel="icon" href="{{asset('assets/home/img/icon-perusahaan.png')}}" type="image/png">
  <link href="{{asset('assets/home/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('assets/home/css/style.css')}}" rel="stylesheet" type="text/css">
  <!-- <link href="{{asset('assets/home/css/font-awesome.css')}}" rel="stylesheet" type="text/css"> -->
  <link href="{{ asset('assets/css/@fortawesome/fontawesome-free/css/all.css') }}" rel="stylesheet" type="text/css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300&display=swap" rel="stylesheet">
  <link href="{{asset('assets/home/css/animate.css')}}" rel="stylesheet" type="text/css">

</head>

<body>

  <!--Header_section-->
  <header id="header_wrapper" style="background-color: #ff9f0d; ">
    <div class="container">
      <div class="header_box">
        <div class="logo"><a href="#hero_section" class="scroll-link"><img src="{{asset('assets/home/img/icon-perusahaan.png')}}" alt="logo" style="width: 70px;"></a></div>
        <nav class="navbar navbar-inverse" role="navigation">
          <div class="navbar-header">
            <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          <div id="main-nav" class="collapse navbar-collapse navStyle">
            <ul class="nav navbar-nav navbar-light" id="mainNav">
              <li class="active"><a href="#hero_section" class="scroll-link">Home</a></li>
              <li><a href="#aboutUs" class="scroll-link">About</a></li>
              <li><a href="#service" class="scroll-link">Register</a></li>
              <li><a href="#Portfolio" class="scroll-link">Dokumentasi</a></li>
              <li><a href="#clients" class="scroll-link">Clients</a></li>
              <li><a href="#team" class="scroll-link">Team</a></li>
              <li><a href="#contact" class="scroll-link">Contact</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>
  <!--Header_section-->
  <!--Hero_Section-->
  <section id="hero_section" style="background-image:url({{asset('assets/home/img/header.svg')}}); background-size: cover; ">
    <div class="hero_wrapper">
      <div class="container">
        <div class="hero_section">
          <div class="row">
            <div class="col-lg-6">
              <div class="top_left_cont zoomIn wow animated">
                <h2><strong>CV. Surya Utama <br></strong> Service of Parking System</h2>
                <p>Pengelolaan Parkir Manual?
                  <br> Itulah yang sering terdengar dari ucapan para pengguna parkir. Karena itu, CV. Surya Utama hadir untuk menjawab semua permasalahan yang ada.
                </p>
                <a href="#service" class="read_more2">Get Started</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Hero_Section-->

  <!--Aboutus-->
  <section id="aboutUs">
    <div class="inner_wrapper">
      <div class="container">
        <h2>About Us</h2>
        <div class="inner_section">
          <div class="row">
            <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-right"><img src="{{asset('assets/home/img/parkir.png')}}" class="delay-03s animated wow zoomIn" alt=""></div>
            <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-left">
              <div class=" delay-01s animated fadeInDown wow animated">
                <h3>Home of Parking System</h3>
                <p><br> Modern teknologi, pengelolaan yang berkelanjutan dan konsisten, SDM yang berkualitas, dan masih banyak lagi.
                  <br><br> CV. Surya Utama adalah perusahaan penyedia layanan jasa manajemen parkir, yang telah memiliki rekam jejak panjang dalam bidang perparkiran di Indonesia. Kami berkomitmen untuk memberikan pelayanan yang terukur dan memuaskan kepada anda sebagai User Company, serta akan senantiasa terus menerus melakukan update sistem teknologi parkir terkini demi terciptanya kepuasan Client dan Customer kami.
                  <br><br> CV. Surya Utama bekerja sama dengan pihak-pihak terkait untuk dapat menjawab tantangan permasalahan parkir di Indonesia di era Globalisasi sekarang ini.
                </p>
              </div>
              <div class="work_bottom">
                <span>Want to know more..</span> <a href="#contact" class="contact_btn" style="border-color: #ff9f0d;color:#ff9f0d">Contact Us</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Aboutus-->

  <!--Service-->
  <section id="service">
    <div class="container">
      <h2>Service</h2>
      <div class="service_wrapper">
        <div class="row">
          <div class="col-lg-4">
            <div class="service_block">
              <div class="service_icon delay-03s animated wow  zoomIn" style="border-color: #ff9f0d;"> <span><i class="fa fa-edit" style="color: #ff9f0d;"></i></span> </div>
              <h3 class="animated fadeInUp wow">Registration</h3>
              <p class="animated fadeInDown wow">Pihak Client mendaftar pada form yang tercantum didalam website CV. Surya Utama</p>
            </div>
          </div>
          <div class="col-lg-4 borderLeft">
            <div class="service_block">
              <div class="service_icon icon2  delay-03s animated wow zoomIn" style="border-color: #ff9f0d;"> <span><i class="fa fa-check" style="color: #ff9f0d;"></i></span> </div>
              <h3 class="animated fadeInUp wow">Verification</h3>
              <p class="animated fadeInDown wow">Setelah data terkirim, pihak CV. Surya Utama akan meninjau spesifik data Client</p>
            </div>
          </div>
          <div class="col-lg-4 borderLeft">
            <div class="service_block">
              <div class="service_icon icon3  delay-03s animated wow zoomIn" style="border-color: #ff9f0d;"> <span><i class="fa fa-user" style="color: #ff9f0d;"></i></span> </div>
              <h3 class="animated fadeInUp wow">Survey</h3>
              <p class="animated fadeInDown wow">Pihak CV. Surya Utama akan menghubungi Client dan melakukan survey lokasi</p>
            </div>
          </div>
        </div>
        <div class="row borderTop">
          <div class="col-lg-4 mrgTop">
            <div class="service_block">
              <div class="service_icon delay-03s animated wow zoomIn" style="border-color: #ff9f0d;"> <span><i class="fab fa-dropbox" style="color: #ff9f0d;"></i></span> </div>
              <h3 class="animated fadeInUp wow">Contract</h3>
              <p class="animated fadeInDown wow">Jika terjadi suatu kesepakatan bersama, maka akan diadakannya proses tanda tangan kontrak oleh kedua belah pihak</p>
            </div>
          </div>
          <div class="col-lg-4 borderLeft mrgTop">
            <div class="service_block">
              <div class="service_icon icon2  delay-03s animated wow zoomIn" style="border-color: #ff9f0d;"> <span><i class="fab fa-slack-hash" style="color: #ff9f0d;"></i></span> </div>
              <h3 class="animated fadeInUp wow">Construction</h3>
              <p class="animated fadeInDown wow">Pihak CV. Surya Utama mulai membangun sistem di lokasi yang sudah ditentukan</p>
            </div>
          </div>
          <div class="col-lg-4 borderLeft mrgTop">
            <div class="service_block">
              <div class="service_icon icon3  delay-03s animated wow zoomIn" style="border-color: #ff9f0d;"> <span><i class="fa fa-users" style="color: #ff9f0d;"></i></span> </div>
              <h3 class="animated fadeInUp wow">Finishing</h3>
              <p class="animated fadeInDown wow">Recruitment Sumber Daya Manusia dan pelatihan sistem sebelum mulai beroperasi</p>
            </div>
          </div>
        </div>
        <div class="inner_section">
          <h2>Registration</h2>
          <div class="service_wrapper">
            <form action="{{ route('home')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="col-lg-6 wow fadeInLeft delay-06s">
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" placeholder="Nama" name="nama" value="{{ old('nama')}}">
                    @error('nama')
                        <div class="mt-2 text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="col-lg-6 wow fadeInLeft delay-06s">
                  <div class="form-group">
                    <label for="Instansi">Instansi</label>
                    <input type="text" class="form-control" placeholder="Instansi" name="instansi" value="{{ old('instansi')}}">
                    @error('instansi')
                        <div class="mt-2 text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 wow fadeInLeft delay-06s">
                  <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="text" class="form-control" placeholder="Email" name="email" value="{{ old('email')}}">
                    @error('email')
                        <div class="mt-2 text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="col-lg-6 wow fadeInLeft delay-06s">
                  <div class="form-group">
                    <label for="Alamat">Alamat</label>
                    <input type="text" class="form-control" placeholder="Alamat" name="alamat" value="{{ old('alamat')}}">
                    @error('alamat')
                        <div class="mt-2 text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 wow fadeInLeft delay-06s">
                  <div class="form-group">
                    <label for="HP">No. HP</label>
                    <input type="text" class="form-control" placeholder="No. HP" name="no_hp" value="{{ old('no_hp')}}">
                    @error('no_hp')
                        <div class="mt-2 text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="col-lg-6 wow fadeInLeft delay-06s">
                  <div class="form-group">
                    <label for="Luas">Luas Lahan (m<sup>2</sup>)</label>
                    <input type="text" class="form-control" placeholder="Luas Lahan" name="luas_lahan" value="{{ old('luas_lahan')}}">
                    @error('luas_lahan')
                        <div class="mt-2 text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 wow fadeInLeft delay-06s">
                  <div class="form-group">
                    <label for="Keterangan">Keterangan</label>
                    <textarea class="form-control" id="Keterangan" name="keterangan" rows="3"></textarea>
                    @error('keterangan')
                      <div class="mt-2 text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 wow fadeInLeft delay-06s">
                  <div class="form-group">
                    <label for="gambar">Foto</label>
                    <div class="input-group control-group increment" >
                      <input type="file" name="photos[]" class="form-control">
                       <div class="input-group-btn"> 
                        <button class="btn btn-success btn-sm ml-1" type="button"><i class="fas fa-plus"></i> Add</button>
                      </div>
                    </div>
                    <div class="clone hide">
                      <div class="control-group input-group" style="margin-top:10px">
                        <input type="file" name="photos[]" class="form-control">
                        <div class="input-group-btn"> 
                          <button class="btn btn-danger btn-sm ml-1" type="button"><i class="fas fa-trash"></i></i> Remove</button>
                        </div>
                      </div>
                    </div>
                    @error('photos')
                      <div class="mt-2 text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 wow fadeInLeft delay-06s">
                  <button type="submit" class="btn btn-warning">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Service-->

  <!-- Portfolio -->
  <section id="Portfolio" class="page_section">
    <h2>Dokumentasi</h2>
    <div class="portfolio container">
      <div class="isotope fadeInLeft animated wow" style="position: relative; overflow: hidden; height: 480px;" id="portfolio_wrapper">
        <div class="row">
          <div class="col-md-3">
            <div class="portfolio_img"> <img src="{{asset('assets/home/img/dokumentasi-1.png')}}" alt="Portfolio 1"> </div>
          </div>
          <div class="col-md-3">
            <div class="portfolio_img"> <img src="{{asset('assets/home/img/dokumentasi-1.png')}}" alt="Portfolio 1"> </div>
          </div>
          <div class="col-md-3">
            <div class="portfolio_img"> <img src="{{asset('assets/home/img/dokumentasi-2.png')}}" alt="Portfolio 1"> </div>
          </div>
          <div class="col-md-3">
            <div class="portfolio_img"> <img src="{{asset('assets/home/img/dokumentasi-2.png')}}" alt="Portfolio 1"> </div>
          </div>
        </div>
        <div class="row" style="margin-top: 30px;">
          <div class="col-md-3">
            <div class="portfolio_img"> <img src="{{asset('assets/home/img/dokumentasi-3.png')}}" alt="Portfolio 1"> </div>
          </div>
          <div class="col-md-3">
            <div class="portfolio_img"> <img src="{{asset('assets/home/img/dokumentasi-3.png')}}" alt="Portfolio 1"> </div>
          </div>
          <div class="col-md-3">
            <div class="portfolio_img"> <img src="{{asset('assets/home/img/dokumentasi-1.png')}}" alt="Portfolio 1"> </div>
          </div>
          <div class="col-md-3">
            <div class="portfolio_img"> <img src="{{asset('assets/home/img/dokumentasi-1.png')}}" alt="Portfolio 1"> </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/Portfolio -->

  <section class="page_section" id="clients">
    <!--page_section-->
    <h2>Clients</h2>
    <!--page_section-->
    <div class="client_logos" style="background-color: #ff9f0d; ">
      <!--client_logos-->
      <div class="container">
        <ul class="fadeInRight animated wow">
          <li><a href="javascript:void(0)"><img src="{{asset('assets/home/img/logo_rsba.png')}}" alt=""></a></li>
          <li><a href="javascript:void(0)"><img src="{{asset('assets/home/img/logo_rsba.png')}}" alt=""></a></li>
          <li><a href="javascript:void(0)"><img src="{{asset('assets/home/img/logo_rsba.png')}}" alt=""></a></li>
        </ul>
      </div>
    </div>
  </section>
  <!--client_logos-->

  <section class="page_section team" id="team">
    <!--main-section team-start-->
    <div class="container">
      <h2>Team</h2>
      <h6>Struktur Organisasi Perusahaan</h6>
      <div class="team_section clearfix">
        <div class="team_area">
          <div class="team_box wow fadeInDown delay-03s">
            <img src="{{asset('assets/home/img/team_pic1.jpg')}}" alt="">
          </div>
          <h3 class="wow fadeInDown delay-03s">Sulistiyono</h3>
          <span class="wow fadeInDown delay-03s">Direktur Utama</span>
        </div>
        <div class="team_area">
          <div class="team_box  wow fadeInDown delay-06s">
            <img src="{{asset('assets/home/img/team_pic2.jpg')}}" alt="">
          </div>
          <h3 class="wow fadeInDown delay-06s">Arifin Yekti</h3>
          <span class="wow fadeInDown delay-06s">Supervisor</span>

        </div>
        <div class="team_area">
          <div class="team_box wow fadeInDown delay-09s">
            <img src="{{asset('assets/home/img/team_pic3.jpg')}}" alt="">
          </div>
          <h3 class="wow fadeInDown delay-09s">Mugi Handayani</h3>
          <span class="wow fadeInDown delay-09s">Public Relation</span>
        </div>
      </div>
    </div>
  </section>
  <!--/Team-->
  <!--Footer-->
  <footer class="footer_wrapper" id="contact">
    <div class="container">
      <section class="page_section contact" id="contact">
        <div class="contact_section">
          <h2>Contact Us</h2>
          <div class="row">
            <div class="col-lg-4">
            </div>
            <div class="col-lg-4">
            </div>
            <div class="col-lg-4">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 wow fadeInLeft">
            <div class="contact_info">
              <div class="detail">
                <h4>Address</h4>
                <p>Jl. Kanalsari Barat VI/no.3, Semarang</p>
              </div>
              <div class="detail">
                <h4>call Center</h4>
                <p>+62 8122 8972 28</p>
              </div>
              <div class="detail">
                <h4>Email</h4>
                <p>sulistiyonokanalsari@gmail.com</p>
              </div>
            </div>
            <ul class="social_links">
              <li class="twitter animated bounceIn wow delay-02s"><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
              <li class="facebook animated bounceIn wow delay-03s"><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
              <li class="pinterest animated bounceIn wow delay-04s"><a href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
              <li class="gplus animated bounceIn wow delay-05s"><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
            </ul>
          </div>
          <div class="col-lg-8 wow fadeInLeft delay-06s">
          <form action="/contact" method="POST">
            @csrf
              <input class="input-text" type="text" name="name" placeholder="Your Name *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
              @error('name')
                <div class="mt-2 text-danger">{{ $message }}</div>
              @enderror
              <input class="input-text" type="text" name="email" placeholder="Your E-mail *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
              @error('email')
                <div class="mt-2 text-danger">{{ $message }}</div>
              @enderror
              <textarea class="input-text text-area" name="message" placeholder="Your Message *" cols="0" rows="0" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;"></textarea>
              @error('message')
                <div class="mt-2 text-danger">{{ $message }}</div>
              @enderror
              <button type="submit" class="input-btn" style="background-color: #ff9f0d;">Send Message</button>
          </form>
          </div>
        </div>
      </section>
    </div>
    <div class="container">
      <div class="footer_bottom"><span>Copyright © 2021 - CV. Surya Utama</span> </div>
    </div>
  </footer>
  @include('sweetalert::alert')

  <script type="text/javascript" src="{{asset('assets/home/js/jquery-1.11.0.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/home/js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/home/js/jquery-scrolltofixed.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/home/js/jquery.nav.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/home/js/jquery.easing.1.3.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/home/js/jquery.isotope.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/home/js/wow.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/home/js/custom.js')}}"></script>

  <script type="text/javascript">
    $(document).ready(function() {

      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });

    });
  </script>

</body>

</html>