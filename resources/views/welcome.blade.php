<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Sumon Rahman">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Selamat datang di InfoMasjid.</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="{{asset('appy/images/apple-touch-icon.png')}}">
    <link rel="shortcut icon" type="image/ico" href="{{asset('appy/images/favicon.ico')}}" />
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="{{asset('appy/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('appy/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('appy/css/linearicons.css')}}">
    <link rel="stylesheet" href="{{asset('appy/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('appy/css/animate.css')}}">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="{{asset('appy/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('appy/style.css')}}">
    <link rel="stylesheet" href="{{asset('appy/css/responsive.css')}}">
    <script src="{{asset('appy/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    <!--[if lt IE 9]>
        <script src="{{asset('appy///oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
        <script src="{{asset('appy///oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target=".mainmenu-area">
    <!-- Preloader-content -->
    <div class="preloader">
       <span class="lnr lnr-hourglass"></span>
    </div>
    <!-- MainMenu-Area -->
    <nav class="mainmenu-area" data-spy="affix" data-offset-top="200">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary_menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="{{asset('appy/images/logo.png')}}" alt="Logo"></a>
            </div>
            <div class="collapse navbar-collapse" id="primary_menu">
                <ul class="nav navbar-nav mainmenu">
                    <li class="active"><a href="#home_page">Beranda</a></li>
                    <li><a href="#about_page">Tentang InfoMasjid</a></li>
                    <li><a href="#features_page">Fitur</a></li>
                    <li><a href="#gallery_page">Galeri</a></li>
                    <li><a href="#questions_page">FAQ</a></li>
                    <li><a href="#contact_page">Hubungi Kami</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- MainMenu-Area-End -->
    <!-- Home-Area -->
    <header class="home-area overlay" id="home_page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 hidden-sm col-md-5">
                    <figure class="mobile-image wow fadeInUp" data-wow-delay="0.2s">
                        <img src="{{asset('img/screen1.jpeg')}}" alt="">
                    </figure>
                </div>
                <div class="col-xs-12 col-md-7">
                    <div class="space-80 hidden-xs"></div>
                    <h1 class="wow fadeInUp" data-wow-delay="0.4s">Beramal untuk Masjid dari Smartphone Anda</h1>
                    <div class="space-20"></div>
                    <div class="desc wow fadeInUp" data-wow-delay="0.6s">
                        <p>Segera download dan install aplikasi infomasjid di smartphone anda ! hadir saat ini beramal untuk masjid di ujung jari anda. Dapatkan juga beberapa fitur menarik dari aplikasi info masjid.</p>
                    </div>
                    <div class="space-20"></div>
                    <a href="https://play.google.com/store/apps/details?id=com.riausoftwarehouse.infomasjid
" class="bttn-white wow fadeInUp" data-wow-delay="0.8s"><i class="lnr lnr-download"></i>Download App</a>
                </div>
            </div>
        </div>
    </header>
    <!-- Home-Area-End -->
    <!-- About-Area -->
    <section class="section-padding" id="about_page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-10 col-md-offset-1">
                    <div class="page-title text-center">
                        <img src="{{asset('appy/images/about-logo.png')}}" alt="About Logo">
                        <div class="space-20"></div>
                        <h5 class="title">Tentang Kami</h5>
                        <div class="space-30"></div>
                        <h3 class="blue-color">Info Masjid Hadir dari Umat dan Untuk Umat </h3>
                        <div class="space-20"></div>
                        <p>Teknologi smartphone semakin berkembang, sehingga aplikasi-aplikasi yang dijalankan diatas smartphone juga begitu banyak di develop oleh pengembang. Kegiatan sehari-sehari juga tidak terlepas melibatkan perangkat smartphone dan aplikasinya sehingga membuat masyarakat menjadi tergantung dengan teknologi seperti ini. Bagaimana untuk menjawab kebutuhan masjid dan umat sehingga memudahkan terwujud, diperlukan suatu aplikasi yang dapat menjembatani kebutuhan masjid dan umat.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About-Area-End -->
    <!-- Progress-Area -->
    {{-- <section class="progress-area gray-bg" id="progress_page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="page-title section-padding">
                        <h5 class="title wow fadeInUp" data-wow-delay="0.2s">Our Progress</h5>
                        <div class="space-10"></div>
                        <h3 class="dark-color wow fadeInUp" data-wow-delay="0.4s">Grat Application Ever</h3>
                        <div class="space-20"></div>
                        <div class="desc wow fadeInUp" data-wow-delay="0.6s">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiing elit, sed do eiusmod tempor incididunt ut labore et laborused sed do eiusmod tempor incididunt ut labore et laborused.</p>
                        </div>
                        <div class="space-50"></div>
                        <a href="#" class="bttn-default wow fadeInUp" data-wow-delay="0.8s">Learn More</a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <figure class="mobile-image">
                        <img src="{{asset('appy/images/progress-phone.png')}}" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!-- Progress-Area-End -->
    <!-- Video-Area -->
    <section class="video-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="video-photo">
                        <img src="{{asset('appy/images/video-image.jpg')}}" alt="">
                        <a href="https://www.youtube.com/watch?v=ScrDhTsX0EQ" class="popup video-button">
                            <img src="{{asset('appy/images/play-button.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-5 col-md-offset-1">
                    <div class="space-60 hidden visible-xs"></div>
                    <div class="page-title">
                        <h5 class="title wow fadeInUp" data-wow-delay="0.2s">VIDEO FEATURES</h5>
                        <div class="space-10"></div>
                        <h3 class="dark-color wow fadeInUp" data-wow-delay="0.4s">Grat Application Ever</h3>
                        <div class="space-20"></div>
                        <div class="desc wow fadeInUp" data-wow-delay="0.6s">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiing elit, sed do eiusmod tempor incididunt ut labore et laborused sed do eiusmod tempor incididunt ut labore et laborused.</p>
                        </div>
                        <div class="space-50"></div>
                        <a href="#" class="bttn-default wow fadeInUp" data-wow-delay="0.8s">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Video-Area-End -->
    <!-- Feature-Area -->
    {{-- <section class="feature-area section-padding-top" id="features_page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="page-title text-center">
                        <h5 class="title">Features</h5>
                        <div class="space-10"></div>
                        <h3>Pwoerful Features As Always</h3>
                        <div class="space-60"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="service-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box-icon">
                            <i class="lnr lnr-rocket"></i>
                        </div>
                        <h4>Fast &amp; Powerful</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="space-60"></div>
                    <div class="service-box wow fadeInUp" data-wow-delay="0.4s">
                        <div class="box-icon">
                            <i class="lnr lnr-paperclip"></i>
                        </div>
                        <h4>Easily Editable</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="space-60"></div>
                    <div class="service-box wow fadeInUp" data-wow-delay="0.6s">
                        <div class="box-icon">
                            <i class="lnr lnr-cloud-download"></i>
                        </div>
                        <h4>Cloud Storage</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="space-60"></div>
                </div>
                <div class="hidden-xs hidden-sm col-md-4">
                    <figure class="mobile-image">
                        <img src="{{asset('appy/images/feature-image.png')}}" alt="Feature Photo">
                    </figure>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="service-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box-icon">
                            <i class="lnr lnr-clock"></i>
                        </div>
                        <h4>Easy Notifications</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="space-60"></div>
                    <div class="service-box wow fadeInUp" data-wow-delay="0.4s">
                        <div class="box-icon">
                            <i class="lnr lnr-laptop-phone"></i>
                        </div>
                        <h4>Fully Responsive</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="space-60"></div>
                    <div class="service-box wow fadeInUp" data-wow-delay="0.6s">
                        <div class="box-icon">
                            <i class="lnr lnr-cog"></i>
                        </div>
                        <h4>Editable Layout</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="space-60"></div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Feature-Area-End -->
    <!-- Testimonial-Area -->
    <section class="testimonial-area" id="testimonial_page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title text-center">
                        <h5 class="title">Testimonials</h5>
                        <h3 class="dark-color">Our Client Loves US</h3>
                        <div class="space-60"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="team-slide">
                        <div class="team-box">
                            <div class="team-image">
                                <img src="{{asset('appy/images/team-1.png')}}" alt="">
                            </div>
                            <h4>Ashekur Rahman</h4>
                            <h6 class="position">Art Dirrector</h6>
                            <p>Lorem ipsum dolor sit amet, conseg sed do eiusmod temput laborelaborus ed sed do eiusmod tempo.</p>
                        </div>
                        <div class="team-box">
                            <div class="team-image">
                                <img src="{{asset('appy/images/team-2.jpg')}}" alt="">
                            </div>
                            <h4>Ashekur Rahman</h4>
                            <h6 class="position">Art Dirrector</h6>
                            <p>Lorem ipsum dolor sit amet, conseg sed do eiusmod temput laborelaborus ed sed do eiusmod tempo.</p>
                        </div>
                        <div class="team-box">
                            <div class="team-image">
                                <img src="{{asset('appy/images/team-3.jpg')}}" alt="">
                            </div>
                            <h4>Ashekur Rahman</h4>
                            <h6 class="position">Art Dirrector</h6>
                            <p>Lorem ipsum dolor sit amet, conseg sed do eiusmod temput laborelaborus ed sed do eiusmod tempo.</p>
                        </div>
                        <div class="team-box">
                            <div class="team-image">
                                <img src="{{asset('appy/images/team-1.png')}}" alt="">
                            </div>
                            <h4>Ashekur Rahman</h4>
                            <h6 class="position">Art Dirrector</h6>
                            <p>Lorem ipsum dolor sit amet, conseg sed do eiusmod temput laborelaborus ed sed do eiusmod tempo.</p>
                        </div>
                        <div class="team-box">
                            <div class="team-image">
                                <img src="{{asset('appy/images/team-2.jpg')}}" alt="">
                            </div>
                            <h4>Ashekur Rahman</h4>
                            <h6 class="position">Art Dirrector</h6>
                            <p>Lorem ipsum dolor sit amet, conseg sed do eiusmod temput laborelaborus ed sed do eiusmod tempo.</p>
                        </div>
                        <div class="team-box">
                            <div class="team-image">
                                <img src="{{asset('appy/images/team-3.jpg')}}" alt="">
                            </div>
                            <h4>Ashekur Rahman</h4>
                            <h6 class="position">Art Dirrector</h6>
                            <p>Lorem ipsum dolor sit amet, conseg sed do eiusmod temput laborelaborus ed sed do eiusmod tempo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial-Area-End -->
    <!-- Gallery-Area -->
    <section class="gallery-area section-padding" id="gallery_page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-6 gallery-slider">
                    <div class="gallery-slide">
                        <div class="item"><img src="{{asset('img/screen1.jpeg')}}" alt=""></div>
                        <div class="item"><img src="{{asset('img/screen2.jpeg')}}" alt=""></div>
                        <div class="item"><img src="{{asset('img/screen3.jpeg')}}" alt=""></div>
                        <div class="item"><img src="{{asset('img/screen4.jpeg')}}" alt=""></div>
                        <div class="item"><img src="{{asset('img/screen5.jpeg')}}" alt=""></div>
                        <div class="item"><img src="{{asset('img/screen6.jpeg')}}" alt=""></div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-5 col-lg-3">
                    <div class="page-title">
                        <h5 class="white-color title wow fadeInUp" data-wow-delay="0.2s">Galeri Aplikasi</h5>
                        <div class="space-10"></div>
                        <h3 class="white-color wow fadeInUp" data-wow-delay="0.4s">Screenshot 01</h3>
                    </div>
                    <div class="space-20"></div>
                    <div class="desc wow fadeInUp" data-wow-delay="0.6s">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiing elit, sed do eiusmod tempor incididunt ut labore et laborused sed do eiusmod tempor incididunt ut labore et laborused.</p>
                    </div>
                    <div class="space-50"></div>
                    <a href="#" class="bttn-default wow fadeInUp" data-wow-delay="0.8s">Learn More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery-Area-End -->
    <!-- How-To-Use -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="page-title">
                        <h5 class="title wow fadeInUp" data-wow-delay="0.2s">Fitur-Fitur Aplikasi</h5>
                        <div class="space-10"></div>
                        <h3 class="dark-color wow fadeInUp" data-wow-delay="0.4s">Aour Approach of Design is Prety Simple and Clear</h3>
                    </div>
                    <div class="space-20"></div>
                    <div class="desc wow fadeInUp" data-wow-delay="0.6s">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiing elit, sed do eiusmod tempor incididunt ut labore et laborused sed do eiusmod tempor incididunt ut labore et laborused.</p>
                    </div>
                    <div class="space-50"></div>
                    <a href="#" class="bttn-default wow fadeInUp" data-wow-delay="0.8s">Learn More</a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1">
                    <div class="space-60 hidden visible-xs"></div>
                    <div class="service-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box-icon">
                            <i class="lnr lnr-clock"></i>
                        </div>
                        <h4>Melihat Deskripsi Masjid</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                    </div>
                    <div class="space-50"></div>
                    <div class="service-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box-icon">
                            <i class="lnr lnr-laptop-phone"></i>
                        </div>
                        <h4>Melihat Info Masjid</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                    </div>
                    <div class="space-50"></div>
                    <div class="service-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="box-icon">
                            <i class="lnr lnr-cog"></i>
                        </div>
                        <h4>Melihat Kajian Masjid</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- How-To-Use-End -->
    <!-- Download-Area -->
    <div class="download-area overlay">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 hidden-sm">
                    <figure class="mobile-image">
                        <img src="{{asset('img/download.png')}}" alt="">
                    </figure>
                </div>
                <div class="col-xs-12 col-md-6 section-padding">
                    <h3 class="white-color">Download The App</h3>
                    <div class="space-20"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam possimus eaque magnam eum praesentium unde.</p>
                    <div class="space-60"></div>
                  
                    <a href="https://play.google.com/store/apps/details?id=com.riausoftwarehouse.infomasjid
" class="bttn-white sq"><img src="{{asset('appy/images/play-store-icon.png')}}" alt="Play Store Icon"> Play Store</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Download-Area-End -->
  
    <!--Questions-Area -->
    {{-- <section id="questions_page" class="questions-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title text-center">
                        <h5 class="title">FAQ</h5>
                        <h3 class="dark-color">Frequently Asked Questions</h3>
                        <div class="space-60"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="toggole-boxs">
                        <h3>Faq first question goes here? </h3>
                        <div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>
                        <h3>About freewuent question goes here? </h3>
                        <div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>
                        <h3>Why more question goes here? </h3>
                        <div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>
                        <h3>What question goes here? </h3>
                        <div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="space-20 hidden visible-xs"></div>
                    <div class="toggole-boxs">
                        <h3>Faq second question goes here? </h3>
                        <div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>
                        <h3>Third faq question goes here? </h3>
                        <div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>
                        <h3>Why more question goes here? </h3>
                        <div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>
                        <h3>Seventh frequent question here? </h3>
                        <div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--Questions-Area-End -->
    <!-- Subscribe-Form -->
    <div class="subscribe-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="subscribe-form text-center">
                        <h3 class="blue-color">Subscribe for More Features</h3>
                        <div class="space-20"></div>
                        <form id="mc-form">
                            <input type="email" class="control" placeholder="Enter your email" required="required" id="mc-email">
                            <button class="bttn-white active" type="submit"><span class="lnr lnr-location"></span> Subscribe</button>
                            <label class="mt10" for="mc-email"></label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Subscribe-Form-Area -->
    <!-- Footer-Area -->
    <footer class="footer-area" id="contact_page">
        <div class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-title text-center">
                            <h5 class="title">Contact US</h5>
                            <h3 class="dark-color">Find Us By Bellow Details</h3>
                            <div class="space-60"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="footer-box">
                            <div class="box-icon">
                                <span class="lnr lnr-map-marker"></span>
                            </div>
                            <p>Perumahan Pandau Permai <br /> Jl Mahang Raya Blok C 25 No.6, Pekanbaru</p>
                        </div>
                        <div class="space-30 hidden visible-xs"></div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="footer-box">
                            <div class="box-icon">
                                <span class="lnr lnr-phone-handset"></span>
                            </div>
                            <p>0812-3431-7274</p>
                        </div>
                        <div class="space-30 hidden visible-xs"></div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="footer-box">
                            <div class="box-icon">
                                <span class="lnr lnr-envelope"></span>
                            </div>
                            <p> cs.infomasjid@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-Bootom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-5">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <span>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="lnr lnr-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></span>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <div class="space-30 hidden visible-xs"></div>
                    </div>
                    <div class="col-xs-12 col-md-7">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Features</a></li>
                                <li><a href="#">Pricing</a></li>
                                <li><a href="#">Testimonial</a></li>
                                <li><a href="#">Contacts</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
               <a href="whatsapp://send?phone=6285264612989&text=Assalamu%27alaikum%2C%20perkenalkan%20nama%20saya"><img src="http://infomasjid.my.id/img/Chat-via-whatsapp.png" width="180"></img></a>
        <!-- Footer-Bootom-End -->
    </footer>
    <!-- Footer-Area-End -->
    <!--Vendor-JS-->
    <script src="{{asset('appy/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('appy/js/vendor/jquery-ui.js')}}"></script>
    <script src="{{asset('appy/js/vendor/bootstrap.min.js')}}"></script>
    <!--Plugin-JS-->
    <script src="{{asset('appy/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('appy/js/contact-form.js')}}"></script>
    <script src="{{asset('appy/js/ajaxchimp.js')}}"></script>
    <script src="{{asset('appy/js/scrollUp.min.js')}}"></script>
    <script src="{{asset('appy/js/magnific-popup.min.js')}}"></script>
    <script src="{{asset('appy/js/wow.min.js')}}"></script>
    <!--Main-active-JS-->
    <script src="{{asset('appy/js/main.js')}}"></script>
</body>

</html>
