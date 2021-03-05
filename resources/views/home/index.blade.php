<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>

    <title>Hello, world!</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #F5350C;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{asset('assets\img\Icon-Perusahaan.png')}}" height="50" alt="" loading="lazy">
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
      </nav>
      <!-- End Navbar -->

      <!-- Corousel -->
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/img/Corousel.svg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/img/Banner.svg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="/img/Corousel.svg" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- End Corousel -->
      
      <!-- About -->
      <div class="container">
        <div class="row">
            <div class="col-sm">
              <h1><b>Home of Parking System</b></h1><br>

              <p>Pengelolaan Parkir Manual? Hal itulah yang sering terdengar dari ucapan para pengguna parkir. Karena itu, CV. Surya Utama hadir untuk menjawab semua permasalahan yang ada. Modern teknologi, pengelolaan yang berkelanjutan dan konsisten, SDM yang berkualitas, dan masih banyak lagi. <br> CV. Surya Utama adalah perusahaan penyedia layanan jasa manajemen parkir, yang telah memiliki rekam jejak panjang dalam bidang perparkiran di Indonesia. Kami berkomitmen untuk memberikan pelayanan yang terukur dan memuaskan kepada anda sebagai User Company, serta akan senantiasa terus menerus melakukan update sistem teknologi parkir terkini demi terciptanya kepuasan Client dan Customer kami. <br>CV. Surya Utama bekerja sama dengan pihak-pihak terkait untuk dapat menjawab tantangan permasalahan parkir di Indonesia di era Globalisasi sekarang ini.</p>
            </div>
            <div class="col-sm">
                <img src="{{asset('assets\img\Parkir.png')}}" class="rounded float-right" alt="..." height="500">
            </div>
        </div>
      </div>
      <!-- End About -->
      
      <!-- Register -->
      <div class="container">
          <h3 class="text-center">Daftar & Kerja Sama</h3>
          <h1 class="text-center"><b> Proses Bekerja Sama</b></h1>
          <!-- Card -->
          <div class="row">
            <div class="col sm-2">
              <div class="card" style="background-color:#FF7600; color: white; ">
                <img src="{{asset('assets\img\Registration.svg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Registration</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
            <div class="col sm-2">
              <div class="card" style="background-color:#FF7600; color: white; ">
                <img src="{{asset('assets\img\Verification.svg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Verification</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
            <div class="col sm-2">
              <div class="card" style="background-color:#FF7600; color: white; ">
                <img src="{{asset('assets\img\Survey.svg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Survey</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
            <div class="col sm-2">
              <div class="card" style="background-color:#FF7600; color: white; ">
                <img src="{{asset('assets\img\Contract.svg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Contract</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
            <div class="col sm-2">
              <div class="card" style="background-color:#FF7600; color: white;">
                <img src="{{asset('assets\img\Construction.svg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Construction</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
          </div>
          <!-- End Card -->
            <h1 class="text-center"><b> Registrasi</b></h1>
            <form>
                <div class="row">
                    <div class="col-sm">
                        <div class="form-group">
                          <label for="exampleInputNama">Nama</label>
                          <input type="text" class="form-control" id="exampleInputNama" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                          <label for="exampleInputInstansi">Instansi</label>
                          <input type="text" class="form-control" id="exampleInputInstansi">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                          <label for="exampleInputAlamat">Alamat</label>
                          <input type="text" class="form-control" id="exampleInputAlamat">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <div class="form-group">
                          <label for="exampleInputHP">No. HP</label>
                          <input type="text" class="form-control" id="exampleInputHP">
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                          <label for="exampleInputLuas">Luas Lahan</label>
                          <input type="text" class="form-control" id="exampleInputLuas">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputKeterangan">Keterangan</label>
                  <input type="text" class="form-control" id="exampleInputKeterangan">
                </div>
                
                <button type="submit" class="btn btn-warning text-center">Submit</button>
            </form>
      </div>
      <!-- End Register -->

      <!-- Team -->
      <h1 class="text-center"><b> Our Team</b></h1>
      <div class="container">
          <div class="row text-center">
              <div class="col-sm">
                    <img src="{{asset('assets\img\avatar-1.svg')}}" alt="" width="250">
                    <h4>Oriega Allan</h4>
                    <h5>CEO</h5>
              </div>
              <div class="col-sm">
                    <img src="{{asset('assets\img\avatar-2.svg')}}" alt="" width="250">
                    <h4>M Ni'am</h4>
                    <h5>CO - Founder</h5>
              </div>
          </div>
          <div class="row text-center">
              <div class="col-sm">
                    <img src="{{asset('assets\img\avatar-3.svg')}}" alt="" width="250">
                    <h4>Daffa</h4>
                    <h5>CTO</h5>
              </div>
              <div class="col-sm">
                    <img src="{{asset('assets\img\avatar-4.svg')}}" alt="" width="250">
                    <h4>Heru M</h4>
                    <h5>CO - Founder</h5>
              </div>
          </div>
      </div>
      <!-- End Team -->

      <!-- Footer -->
      <div class="card">
        <!--<div class="card-header text-center">
          Featured
        </div>-->
        <div class="card-body text-light" style="background-color: #F5350C;">
          <div class="container">
              <h5 class="card-title text-center">About Us</h5>
            <form>
              <div class="form-group">
                <label class="text-left" for="exampleFormControlInput1">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
              </div>
              <div class="form-group">
                <label for="exampleFormControlPesan">Pesan</label>
                <input type="text" class="form-control" id="exampleFormControlPesan" placeholder="Your Pesan">
              </div>
              <div class=" text-center">
                  <button class="btn btn-outline-light">Submit</button>
              </div>
            </form>
          </div>
        </div>
        <div class="card-footer text-muted text-center">
          Copyright
        </div>
      </div>
      <!-- End Footer -->
      
      

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> -->

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>