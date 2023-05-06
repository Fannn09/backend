<!-- @extends('app') -->
<!-- @section('content') -->



<!-- <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table> -->

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>web_rumah_sakit</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="manifest" href="site.webmanifest">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

  <!-- CSS here -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/slicknav.css">
  <link rel="stylesheet" href="assets/css/flaticon.css">
  <link rel="stylesheet" href="assets/css/gijgo.css">
  <link rel="stylesheet" href="assets/css/animate.min.css">
  <link rel="stylesheet" href="assets/css/animated-headline.css">
  <link rel="stylesheet" href="assets/css/magnific-popup.css">
  <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="assets/css/themify-icons.css">
  <link rel="stylesheet" href="assets/css/slick.css">
  <link rel="stylesheet" href="assets/css/nice-select.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <!-- ? Preloader Start -->
  <div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
      <div class="preloader-inner position-relative">
        <div class="preloader-circle"></div>
        <div class="preloader-img pere-text">
          <img src="assets/img/logo/loder.png" alt="">
        </div>
      </div>
    </div>
  </div>
  <!-- Preloader Start -->
  <header>
    <!--? Header Start -->
    <div class="header-area">
      <div class="main-header header-sticky">
        <div class="container-fluid">
          <div class="row align-items-center">
            <!-- Logo -->
            <div class="col-xl-2 col-lg-2 col-md-1">
              <div class="logo">
                <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
              </div>
            </div>
            <div class="col-xl-10 col-lg-10 col-md-10">
              <div class="menu-main d-flex align-items-center justify-content-end">
                <!-- Main-menu -->
                <div class="main-menu f-right d-none d-lg-block">
                  <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="#"><b>Rawat Pasien</b></a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarScroll">
                        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{route('positions.index')}}">Positions</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{route('departements.index')}}">Departements</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{route('users.index')}}">User</a>
                          </li>
                          @if(Auth()->user()->position =="0")
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Link
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li>
                                <hr class="dropdown-divider">
                              </li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                          </li>
                          @endif
                          <li class="nav-item">
                            <a class="nav-link disabled">Link</a>
                          </li>
                        </ul>
                        <form class="d-flex" role="search">
                          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                          <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                      </div>
                    </div>
                  </nav>
                  <div class="container-fluid">
                    <!-- <div class="card">
                      <div class="card-body">
                        <h1 class="crad-title">@yield('title', $title)</h1>
                        @yield('content')
                      </div>
                    </div> -->
                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>

                  </div>
                  <!-- <div class="header-right-btn f-right d-none d-lg-block ml-30">
                    <a href="#" class="btn header-btn">01654.066.456</a>
                  </div> -->
                </div>
              </div>
              <!-- Mobile Menu -->
              <div class="col-12">
                <div class="mobile_menu d-block d-lg-none"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Header End -->
  </header>
  <main>
    <!--? slider Area Start-->
    <div class="slider-area position-relative">
      <div class="slider-active">
        <!-- Single Slider -->
        <div class="single-slider slider-height d-flex align-items-center">
          <div class="container">
            <div class="row">
              <div class="col-xl-7 col-lg-9 col-md-8 col-sm-9">
                <div class="hero__caption">
                  <span>Committed to success</span>
                  <h1 class="cd-headline letters scale">We care about your
                    <strong class="cd-words-wrapper">
                      <b class="is-visible">health</b>
                      <b>sushi</b>
                      <b>steak</b>
                    </strong>
                  </h1>
                  <p data-animation="fadeInLeft" data-delay="0.1s">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi uquip ex ea commodo consequat is aute irure.</p>
                  <a href="#" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.5s">Appointment <i class="ti-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Single Slider -->
        <div class="single-slider slider-height d-flex align-items-center">
          <div class="container">
            <div class="row">
              <div class="col-xl-7 col-lg-9 col-md-8 col-sm-9">
                <div class="hero__caption">
                  <span>Committed to success</span>
                  <h1 class="cd-headline letters scale">We care about your
                    <strong class="cd-words-wrapper">
                      <b class="is-visible">health</b>
                      <b>sushi</b>
                      <b>steak</b>
                    </strong>
                  </h1>
                  <p data-animation="fadeInLeft" data-delay="0.1s">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi uquip ex ea commodo consequat is aute irure.</p>
                  <a href="#" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.5s">Appointment <i class="ti-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- slider Area End-->
    <!--? About Start-->
    <div class="about-area section-padding2">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-10">
            <div class="about-caption mb-50">
              <!-- Section Tittle -->
              <div class="section-tittle section-tittle2 mb-35">
                <span>About Our Company</span>
                <h2>Welcome To Our Hospital</h2>
              </div>
              <p>There arge many variations ohf pacgssages of sorem gpsum ilable, but the majority have suffered alteration in some form, by ected humour, or randomised words whi.</p>
              <div class="about-btn1 mb-30">
                <a href="about.html" class="btn about-btn">Find Doctors .<i class="ti-arrow-right"></i></a>
              </div>
              <div class="about-btn1 mb-30">
                <a href="about.html" class="btn about-btn2">Appointment <i class="ti-arrow-right"></i></a>
              </div>
              <div class="about-btn1 mb-30">
                <a href="about.html" class="btn about-btn2">Emargency 1 <i class="ti-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12">
            <!-- about-img -->
            <div class="about-img ">
              <div class="about-font-img d-none d-lg-block">
                <img src="assets/img/gallery/about2.png" alt="">
              </div>
              <div class="about-back-img ">
                <img src="assets/img/gallery/about1.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About  End-->
    <!--? department_area_start  -->
    <div class="department_area section-padding2">
      <div class="container">
        <!-- Section Tittle -->
        <div class="row">
          <div class="col-lg-12">
            <div class="section-tittle text-center mb-100">
              <span>Our Departments</span>
              <h2>Our Medical Services</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="depart_ment_tab mb-30">
              <!-- Tabs Buttons -->
              <ul class="nav" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                    <i class="flaticon-teeth"></i>
                    <h4>Dentistry</h4>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                    <i class="flaticon-cardiovascular"></i>
                    <h4>Cardiology</h4>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
                    <i class="flaticon-ear"></i>
                    <h4>ENT Specialists</h4>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="Astrology-tab" data-toggle="tab" href="#Astrology" role="tab" aria-controls="contact" aria-selected="false">
                    <i class="flaticon-bone"></i>
                    <h4>Astrology</h4>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="Neuroanatomy-tab" data-toggle="tab" href="#Neuroanatomy" role="tab" aria-controls="contact" aria-selected="false">
                    <i class="flaticon-lung"></i>
                    <h4>Neuroanatomy</h4>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="Blood-tab" data-toggle="tab" href="#Blood" role="tab" aria-controls="contact" aria-selected="false">
                    <i class="flaticon-cell"></i>
                    <h4>Blood Screening</h4>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="dept_main_info white-bg">
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <!-- single_content  -->
              <div class="row align-items-center no-gutters">
                <div class="col-lg-7">
                  <div class="dept_info">
                    <h3>Dentist with surgical mask holding <br> scaler near patient</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                    <a href="#" class="dep-btn">Appointment<i class="ti-arrow-right"></i></a>
                  </div>
                </div>
                <div class="col-lg-5">
                  <div class="dept_thumb">
                    <img src="assets/img/gallery/department_man.png" alt="">
                  </div>
                </div>
              </div>
              <!-- single_content  -->
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <!-- single_content  -->
              <div class="row align-items-center no-gutters">
                <div class="col-lg-7">
                  <div class="dept_info">
                    <h3>Dentist with surgical mask holding <br> scaler near patient</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                    <a href="#" class="dep-btn">Appointment<i class="ti-arrow-right"></i></a>
                  </div>
                </div>
                <div class="col-lg-5">
                  <div class="dept_thumb">
                    <img src="assets/img/gallery/department_man.png" alt="">
                  </div>
                </div>
              </div>
              <!-- single_content  -->
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
              <!-- single_content  -->
              <div class="row align-items-center no-gutters">
                <div class="col-lg-7">
                  <div class="dept_info">
                    <h3>Dentist with surgical mask holding <br> scaler near patient</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                    <a href="#" class="dep-btn">Appointment<i class="ti-arrow-right"></i></a>
                  </div>
                </div>
                <div class="col-lg-5">
                  <div class="dept_thumb">
                    <img src="assets/img/gallery/department_man.png" alt="">
                  </div>
                </div>
              </div>
              <!-- single_content  -->
            </div>
            <div class="tab-pane fade" id="Astrology" role="tabpanel" aria-labelledby="Astrology-tab">
              <!-- single_content  -->
              <div class="row align-items-center no-gutters">
                <div class="col-lg-7">
                  <div class="dept_info">
                    <h3>Dentist with surgical mask holding <br> scaler near patient</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                    <a href="#" class="dep-btn">Appointment<i class="ti-arrow-right"></i></a>
                  </div>
                </div>
                <div class="col-lg-5">
                  <div class="dept_thumb">
                    <img src="assets/img/gallery/department_man.png" alt="">
                  </div>
                </div>
              </div>
              <!-- single_content  -->
            </div>
            <div class="tab-pane fade" id="Neuroanatomy" role="tabpanel" aria-labelledby="Neuroanatomy-tab">
              <!-- single_content  -->
              <div class="row align-items-center no-gutters">
                <div class="col-lg-7">
                  <div class="dept_info">
                    <h3>Dentist with surgical mask holding <br> scaler near patient</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                    <a href="#" class="dep-btn">Appointment<i class="ti-arrow-right"></i></a>
                  </div>
                </div>
                <div class="col-lg-5">
                  <div class="dept_thumb">
                    <img src="assets/img/gallery/department_man.png" alt="">
                  </div>
                </div>
              </div>
              <!-- single_content  -->
            </div>
            <div class="tab-pane fade" id="Blood" role="tabpanel" aria-labelledby="Blood-tab">
              <!-- single_content  -->
              <div class="row align-items-center no-gutters">
                <div class="col-lg-7">
                  <div class="dept_info">
                    <h3>Dentist with surgical mask holding <br> scaler near patient</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                    <a href="#" class="dep-btn">Appointment<i class="ti-arrow-right"></i></a>
                  </div>
                </div>
                <div class="col-lg-5">
                  <div class="dept_thumb">
                    <img src="assets/img/gallery/department_man.png" alt="">
                  </div>
                </div>
              </div>
              <!-- single_content  -->
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- depertment area end  -->
    <!--? Gallery Area Start -->
    <div class="gallery-area section-padding30">
      <div class="container">
        <!-- Section Tittle -->
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <div class="section-tittle text-center mb-100">
              <span>Our Gellary</span>
              <h2>Our Medical Camp</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Left -->
          <div class="col-lg-6">
            <div class="row">
              <div class="col-lg-12">
                <div class="single-gallery mb-30">
                  <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/gallery1.png);"></div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="single-gallery mb-30">
                  <div class="gallery-img small-img" style="background-image: url(assets/img/gallery/gallery2.png);"></div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="single-gallery mb-30">
                  <div class="gallery-img small-img" style="background-image: url(assets/img/gallery/gallery3.png);"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- Right -->
          <div class="col-lg-6">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="single-gallery mb-30">
                  <div class="gallery-img small-img" style="background-image: url(assets/img/gallery/gallery4.png);"></div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="single-gallery mb-30">
                  <div class="gallery-img small-img" style="background-image: url(assets/img/gallery/gallery5.png);"></div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="single-gallery mb-30">
                  <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/gallery6.png);"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Gallery Area End -->
    <!--? All startups Start -->
    <div class="all-starups-area testimonial-area fix">
      <!-- left Contents -->
      <div class="starups">
        <!--? Testimonial Start -->
        <div class="h1-testimonial-active">
          <!-- Single Testimonial -->
          <div class="single-testimonial text-center">
            <!-- Testimonial Content -->
            <div class="testimonial-caption ">
              <div class="testimonial-top-cap">
                <img src="assets/img/gallery/testimonial.png" alt="">
                <p>“I am at an age where I just want to be fit and healthy our bodies are our responsibility! So start caring for your body and it will care for you. Eat clean it will care for yout hard.”</p>
              </div>
              <!-- founder -->
              <div class="testimonial-founder d-flex align-items-center justify-content-center">
                <div class="founder-img">
                  <img src="assets/img/gallery/Homepage_testi.png" alt="">
                </div>
                <div class="founder-text">
                  <span>Margaret Lawson</span>
                  <p>Chif Photographer</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Testimonial End -->
      </div>
      <!--Right Contents  -->
      <div class="starups-img"></div>
    </div>
    <!--All startups End -->
    <!--? Team Start -->
    <div class="team-area section-padding30">
      <div class="container">
        <!-- Section Tittle -->
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <div class="section-tittle text-center mb-100">
              <span>Our Doctors</span>
              <h2>Our Specialist</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- single Tem -->
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
            <div class="single-team mb-30">
              <div class="team-img">
                <img src="assets/img/gallery/team2.png" alt="">
              </div>
              <div class="team-caption">
                <h3><a href="#">Alvin Maxwell</a></h3>
                <span>Creative UI Designer</span>
                <!-- Team social -->
                <div class="team-social">
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fas fa-globe"></i></a>
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-pinterest-p"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
            <div class="single-team mb-30">
              <div class="team-img">
                <img src="assets/img/gallery/team3.png" alt="">
              </div>
              <div class="team-caption">
                <h3><a href="#">Maria Smith</a></h3>
                <span>Agency Manager</span>
                <!-- Team social -->
                <div class="team-social">
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fas fa-globe"></i></a>
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-pinterest-p"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
            <div class="single-team mb-30">
              <div class="team-img">
                <img src="assets/img/gallery/team1.png" alt="">
              </div>
              <div class="team-caption">
                <h3><a href="#">Angela Doe</a></h3>
                <span>Designer</span>
                <!-- Team social -->
                <div class="team-social">
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fas fa-globe"></i></a>
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-pinterest-p"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Team End -->
    <!--? Contact form Start -->
    <div class="contact-form-main">
      <div class="container">
        <div class="row justify-content-end">
          <div class="col-xl-7 col-lg-7">
            <div class="form-wrapper">
              <!--Section Tittle  -->
              <div class="form-tittle">
                <div class="row ">
                  <div class="col-xl-12">
                    <div class="section-tittle section-tittle2">
                      <span>Appointment Apply Form</span>
                      <h2>Appointment Form</h2>
                    </div>
                  </div>
                </div>
              </div>
              <!--End Section Tittle  -->
              <form id="contact-form" action="#" method="POST">
                <div class="row">
                  <div class="col-lg-6 col-md-6">
                    <div class="form-box user-icon mb-30">
                      <input type="text" name="name" placeholder="Name">
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="form-box email-icon mb-30">
                      <input type="text" name="email" placeholder="Phone">
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 mb-30">
                    <div class="select-itms">
                      <select name="select" id="select2">
                        <option value="">Health Law</option>
                        <option value="">saiful islam</option>
                        <option value="">Arafath Miya</option>
                        <option value="">Shakil Miya</option>
                        <option value="">Tamim Sharker</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="form-box subject-icon mb-30">
                      <input type="Email" name="subject" placeholder="Email">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-box message-icon mb-65">
                      <textarea name="message" id="message" placeholder="Message"></textarea>
                    </div>
                    <div class="submit-info">
                      <button class="btn" type="submit">Submit Now <i class="ti-arrow-right"></i> </button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- contact left Img-->
      <div class="from-left d-none d-lg-block">
        <img src="assets/img/gallery/contact_form.png" alt="">
      </div>
    </div>
    <!-- Contact form End -->
    <!--? gallery Products Start -->
    <div class="gallery-area fix">
      <div class="container-fluid p-0">
        <div class="row no-gutters">
          <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="gallery-box">
              <div class="single-gallery">
                <div class="gallery-img " style="background-image: url(assets/img/gallery/gallery1.png);"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="gallery-box">
              <div class="single-gallery">
                <div class="gallery-img " style="background-image: url(assets/img/gallery/gallery2.png);"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="gallery-box">
              <div class="single-gallery">
                <div class="gallery-img " style="background-image: url(assets/img/gallery/gallery3.png);"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="gallery-box">
              <div class="single-gallery">
                <div class="gallery-img " style="background-image: url(assets/img/gallery/gallery4.png);"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="gallery-box">
              <div class="single-gallery">
                <div class="gallery-img " style="background-image: url(assets/img/gallery/gallery5.png);"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="gallery-box">
              <div class="single-gallery">
                <div class="gallery-img " style="background-image: url(assets/img/gallery/gallery6.png);"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- gallery Products End -->
    <!--? Blog start -->
    <div class="home_blog-area section-padding30">
      <div class="container">
        <div class="row justify-content-sm-center">
          <div class="cl-xl-7 col-lg-8 col-md-10">
            <!-- Section Tittle -->
            <div class="section-tittle text-center mb-70">
              <span>Oure recent news</span>
              <h2>OurNews From Blog</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-4 col-lg-4 col-md-6">
            <div class="single-blogs mb-30">
              <div class="blog-img">
                <img src="assets/img/gallery/blog1.png" alt="">
              </div>
              <div class="blogs-cap">
                <div class="date-info">
                  <span>Health</span>
                  <p>Nov 30, 2020</p>
                </div>
                <h4><a href="blog_details.html">Amazing Places To Visit In Summer</a></h4>
                <a href="blog_details.html" class="read-more1">Read more</a>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6">
            <div class="single-blogs mb-30">
              <div class="blog-img">
                <img src="assets/img/gallery/blog2.png" alt="">
              </div>
              <div class="blogs-cap">
                <div class="date-info">
                  <span>Checkup</span>
                  <p>Nov 30, 2020</p>
                </div>
                <h4><a href="blog_details.html">Developing Creativithout Losing Visual</a></h4>
                <a href="blog_details.html" class="read-more1">Read more</a>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6">
            <div class="single-blogs mb-30">
              <div class="blog-img">
                <img src="assets/img/gallery/blog3.png" alt="">
              </div>
              <div class="blogs-cap">
                <div class="date-info">
                  <span>Operation</span>
                  <p>Nov 30, 2020</p>
                </div>
                <h4><a href="blog_details.html">Winter Photography Tips from Glenn</a></h4>
                <a href="blog_details.html" class="read-more1">Read more</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Blog End -->
  </main>
  <footer>
    <!--? Footer Start-->
    <div class="footer-area section-bg" data-background="assets/img/gallery/footer_bg.jpg">
      <div class="container">
        <div class="footer-top footer-padding">
          <div class="row d-flex justify-content-between">
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-8">
              <div class="single-footer-caption mb-50">
                <!-- logo -->
                <div class="footer-logo">
                  <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-5">
              <div class="single-footer-caption mb-50">
                <div class="footer-tittle">
                  <h4>About Us</h4>
                  <div class="footer-pera">
                    <p class="info1">Lorem igpsum doldfor sit amet, adipiscing elit, sed do eiusmod tempor cergelit rgh. </p>
                    <p class="info1">Lorem ipsum dolor sit amet, adipiscing elit.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
              <div class="single-footer-caption mb-50">
                <div class="footer-number mb-50">
                  <h4><span>+564 </span>7885 3222</h4>
                  <p>youremail@gmail.com</p>
                </div>
                <!-- Form -->
                <div class="footer-form">
                  <div id="mc_embed_signup">
                    <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative mail_part" novalidate="true">
                      <input type="email" name="EMAIL" id="newsletter-form-email" placeholder=" Email Address " class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'">
                      <div class="form-icon">
                        <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm">
                          Send
                        </button>
                      </div>
                      <div class="mt-10 info"></div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-bottom">
          <div class="row d-flex justify-content-between align-items-center">
            <div class="col-xl-9 col-lg-8">
              <div class="footer-copy-right">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  Copyright &copy;<script>
                    document.write(new Date().getFullYear());
                  </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4">
              <!-- Footer Social -->
              <div class="footer-social f-right">
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fas fa-globe"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer End-->
  </footer>
  <!-- Scroll Up -->
  <div id="back-top">
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
  </div>

  <!-- JS here -->

  <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
  <!-- Jquery, Popper, Bootstrap -->
  <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
  <script src="./assets/js/popper.min.js"></script>
  <script src="./assets/js/bootstrap.min.js"></script>
  <!-- Jquery Mobile Menu -->
  <script src="./assets/js/jquery.slicknav.min.js"></script>

  <!-- Jquery Slick , Owl-Carousel Plugins -->
  <script src="./assets/js/owl.carousel.min.js"></script>
  <script src="./assets/js/slick.min.js"></script>
  <!-- One Page, Animated-HeadLin -->
  <script src="./assets/js/wow.min.js"></script>
  <script src="./assets/js/animated.headline.js"></script>
  <script src="./assets/js/jquery.magnific-popup.js"></script>

  <!-- Date Picker -->
  <script src="./assets/js/gijgo.min.js"></script>
  <!-- Nice-select, sticky -->
  <script src="./assets/js/jquery.nice-select.min.js"></script>
  <script src="./assets/js/jquery.sticky.js"></script>

  <!-- counter , waypoint -->
  <script src="./assets/js/jquery.counterup.min.js"></script>
  <script src="./assets/js/waypoints.min.js"></script>
  <script src="./assets/js/jquery.countdown.min.js"></script>
  <!-- contact js -->
  <script src="./assets/js/contact.js"></script>
  <script src="./assets/js/jquery.form.js"></script>
  <script src="./assets/js/jquery.validate.min.js"></script>
  <script src="./assets/js/mail-script.js"></script>
  <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

  <!-- Jquery Plugins, main Jquery -->
  <script src="./assets/js/plugins.js"></script>
  <script src="./assets/js/main.js"></script>

</body>