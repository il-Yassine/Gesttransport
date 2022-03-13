<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="fronts/images/favicon.png" type="image/x-icon">

  <title>Gesttransport</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="fronts/css/bootstrap.css" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="fronts/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="fronts/css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <div class="hero_bg_box">
      <div class="img-box">
        <img src="fronts/images/hero-bg.jpg" alt="">
      </div>
    </div>

    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid">
          <div class="contact_link-container">
            <a href="" class="contact_link1">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>

              </span>
            </a>
            <a href="" class="contact_link2">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call : +01 1234567890
              </span>
            </a>
            <a href="" class="contact_link3">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                demo@gmail.com
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="index.html">
              <span>
                Gesttransport
              </span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""></span>
            </button>

            <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}"> connexion </a>
                </li>
                <li class="nav-item">
                  {{--  <a class="nav-link" href="about.html"> About</a>  --}}
                </li>
                <li class="nav-item">
                  {{--  <a class="nav-link" href="countries.html"> Countries </a>  --}}
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">Inscription</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section ">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-md-9 col-lg-7">
                  <div class="detail-box">
                    <h1>
                       <br>
                      Gestions des transports
                    </h1>
                    <p>
                      Nous Assurons la sécurité de nos clients depuis la réservation
                    </p>
                    <div class="btn-box">
                      {{--  <a href="" class="btn-1"> Read more </a>  --}}
                      <a href="" class="btn-2">Voir plus</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container">
              <div class="row">
                <div class="col-md-9 col-lg-7">
                  <div class="detail-box">
                    <h1>
                      Nos produits <br>
                        Les différentes bus
                    </h1>
                    <p>
                      Nous Assurons la sécurité de nos clients depuis la réservation
                    </p>
                    <div class="btn-box">
                      {{--  <a href="" class="btn-1">  </a>  --}}
                      <a href="" class="btn-2">Voir plus</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container">
              <div class="row">
                <div class="col-md-9 col-lg-7">
                  <div class="detail-box">
                    <h1>
                      Nos produits <br>
                      Les différentes bus
                    </h1>
                    <p>
                      Nous Assurons la sécurité de nos clients depuis la réservation
                    </p>
                    <div class="btn-box">
                      {{--  <a href="" class="btn-1"> Read more </a>  --}}
                      <a href="" class="btn-2">Voir plus</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container idicator_container">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our services
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="box ">
            <div class="img-box">
              <img src="fronts/images/s1.png" alt="">
            </div>
            <div class="detail-box">
              <h6>
                Business Visa
              </h6>
              <p>
                Minima consequatur architecto eaque assumenda ipsam itaque quia eum in doloribus debitis impedit ut minus tenetur corrupti excepturi ullam.
              </p>
              <a href="">
                Voir plus
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box ">
            <div class="img-box">
              <img src="fronts/images/s2.png" alt="">
            </div>
            <div class="detail-box">
              <h6>
                Work Visa
              </h6>
              <p>
                Minima consequatur architecto eaque assumenda ipsam itaque quia eum in doloribus debitis impedit ut minus tenetur corrupti excepturi ullam.
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box ">
            <div class="img-box">
              <img src="fronts/images/s3.png" alt="">
            </div>
            <div class="detail-box">
              <h6>
                Tourist Visa
              </h6>
              <p>
                Minima consequatur architecto eaque assumenda ipsam itaque quia eum in doloribus debitis impedit ut minus tenetur corrupti excepturi ullam.
              </p>
              <a href="">
                Voir plus
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box ">
            <div class="img-box">
              <img src="fronts/images/s4.png" alt="">
            </div>
            <div class="detail-box">
              <h6>
                Student Visa
              </h6>
              <p>
                Minima consequatur architecto eaque assumenda ipsam itaque quia eum in doloribus debitis impedit ut minus tenetur corrupti excepturi ullam.
              </p>
              <a href="">
                Voir plus
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end service section -->

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 px-0">
          <div class="img_container">
            <div class="img-box">
              <img src="fronts/images/about-img.jpg" alt="" />
            </div>
          </div>
        </div>
        <div class="col-lg-6 px-0">
          <div class="detail-box">
            <div class="heading_container ">
              <h2>
                Who Are We?
              </h2>
            </div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
              in reprehenderit in voluptate velit
            </p>
            <div class="btn-box">
              <a href="">
                Voir plus
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- country section -->

  <section class="country_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Choisir une ville
        </h2>
        <p>
          Selectionner une ville
        </p>
      </div>
      <div class="row">
        <div class="col-md-4">
          <a href="" class="box">
            <img src="fronts/images/c1.jpg" alt="">
            <div class="detail-box">
              <h3>
                France
              </h3>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="" class="box">
            <img src="fronts/images/c2.jpg" alt="">
            <div class="detail-box">
              <h3>
                Canada
              </h3>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="" class="box">
            <img src="fronts/images/c3.jpg" alt="">
            <div class="detail-box">
              <h3>
                United States
              </h3>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="" class="box">
            <img src="fronts/images/c4.jpg" alt="">
            <div class="detail-box">
              <h3>
                New Zealand
              </h3>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="" class="box">
            <img src="fronts/images/c5.jpg" alt="">
            <div class="detail-box">
              <h3>
                Australia
              </h3>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="" class="box">
            <img src="fronts/images/c6.jpg" alt="">
            <div class="detail-box">
              <h3>
                Spain
              </h3>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end country section -->

  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="contact_bg_box">
      <img src="fronts/images/contact-bg.jpg" alt="">
    </div>
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Contact Us
        </h2>
      </div>
      <div class="row">
        <div class="col-md-9 mx-auto">
          <div class="form_container">
            <form>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" placeholder="First Name" />
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" placeholder="Last Name" />
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="email" class="form-control" placeholder="Email" />
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" placeholder="Phone Number" />
                </div>
              </div>
              <div class="form-group ">
                <input type="text" class="message-box" placeholder="Message" />
              </div>
              <div class="btn-box">
                <button type="submit">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

  <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          What Says Our Client
        </h2>
      </div>
      <div class="client_container">
        <div class="carousel-wrap ">
          <div class="owl-carousel">
            <div class="item">
              <div class="box">
                <div class="img-box">
                  <img src="fronts/images/client-1.jpg" alt="" class="img-1">
                </div>
                <div class="detail-box">
                  <h5>
                    Mark Evans
                  </h5>
                  <h6>
                    Magna
                  </h6>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="box">
                <div class="img-box">
                  <img src="fronts/images/client-2.jpg" alt="" class="img-1">
                </div>
                <div class="detail-box">
                  <h5>
                    Anthony White
                  </h5>
                  <h6>
                    Magna
                  </h6>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="box">
                <div class="img-box">
                  <img src="fronts/images/client-1.jpg" alt="" class="img-1">
                </div>
                <div class="detail-box">
                  <h5>
                    Mark Evans
                  </h5>
                  <h6>
                    Magna
                  </h6>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="box">
                <div class="img-box">
                  <img src="fronts/images/client-2.jpg" alt="" class="img-1">
                </div>
                <div class="detail-box">
                  <h5>
                    Anthony White
                  </h5>
                  <h6>
                    Magna
                  </h6>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->


  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_logo">
            <a class="navbar-brand" href="index.html">
              <span>
                Viseas
              </span>
            </a>
            <p>
              Dolor sit amet, consectetur magna aliqua. Ut enim ad minim veniam, quisdotempor incididunt r
            </p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_links">
            <h5>
              Useful Link
            </h5>
            <ul>
              <li>
                <a href="">
                  Dolor sit amet, consectetur
                </a>
              </li>
              <li>
                <a href="">
                  Magna aliqua. Ut enim ad
                </a>
              </li>
              <li>
                <a href="">
                  Minim veniam
                </a>
              </li>
              <li>
                <a href="">
                  Quisdotempor incididunt r
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_info">
            <h5>
              Contact Us
            </h5>
          </div>
          <div class="info_contact">
            <a href="" class="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Lorem ipsum dolor sit amet,
              </span>
            </a>
            <a href="" class="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call : +01 1234567890
              </span>
            </a>
            <a href="" class="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                demo@gmail.com
              </span>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_form ">
            <h5>
              Newsletter
            </h5>
            <form action="#">
              <input type="email" placeholder="Enter your email">
              <button>
                Subscribe
              </button>
            </form>
            <div class="social_box">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-youtube" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->




  <!-- footer section -->
  <footer class="container-fluid footer_section">
    <p>
      &copy; <span id="displayYear"></span> All Rights Reserved By
      <a href="https://html.design/">Free Html Templates</a>
    </p>
  </footer>
  <!-- footer section -->

  <script src="fronts/js/jquery-3.4.1.min.js"></script>
  <script src="fronts/js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="fronts/https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="fronts/js/custom.js"></script>

</body>

</html>
