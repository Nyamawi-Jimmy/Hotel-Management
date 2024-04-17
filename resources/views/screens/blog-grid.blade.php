<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Plot Management</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
    <link href="{{ asset('style/style.css') }}" rel="stylesheet">

</head>

<body>

  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
      <div class="title-box-d">
          <h3 class="title-d">Search Property</h3>
      </div>
      <span class="close-box-collapse right-boxed ion-ios-close"></span>
      <div class="box-collapse-wrap form">
          <form class="form-a">
              <div class="row">
                  <div class="col-md-12 mb-2">
                      <div class="form-group">
                          <label for="Type">Keyword</label>
                          <input type="text" class="form-control form-control-lg form-control-a" placeholder="Keyword">
                      </div>
                  </div>
                  <div class="col-md-6 mb-2">
                      <div class="form-group">
                          <label for="Type">Type</label>
                          <select class="form-control form-control-lg form-control-a" id="Type">
                              <option>All Type</option>
                              <option>For Rent</option>
                              <option>For Sale</option>
                              <option>Open House</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-6 mb-2">
                      <div class="form-group">
                          <label for="city">City</label>
                          <select class="form-control form-control-lg form-control-a" id="city">
                              <option>All City</option>
                              <option>Nairobi</option>
                              <option>Kilifi</option>
                              <option>Mombasa</option>
                              <option>Nakuru</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-6 mb-2">
                      <div class="form-group">
                          <label for="bedrooms">Bedrooms</label>
                          <select class="form-control form-control-lg form-control-a" id="bedrooms">
                              <option>Any</option>
                              <option>01</option>
                              <option>02</option>
                              <option>03</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-6 mb-2">
                      <div class="form-group">
                          <label for="garages">Garages</label>
                          <select class="form-control form-control-lg form-control-a" id="garages">
                              <option>Any</option>
                              <option>01</option>
                              <option>02</option>
                              <option>03</option>
                              <option>04</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-6 mb-2">
                      <div class="form-group">
                          <label for="bathrooms">Bathrooms</label>
                          <select class="form-control form-control-lg form-control-a" id="bathrooms">
                              <option>Any</option>
                              <option>01</option>
                              <option>02</option>
                              <option>03</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-6 mb-2">
                      <div class="form-group">
                          <label for="price">Min Price</label>
                          <select class="form-control form-control-lg form-control-a" id="price">
                              <option>Unlimite</option>
                              <option>10,000</option>
                              <option>30,000</option>
                              <option>20,000</option>
                              <option>45,000</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-12">
                      <button type="submit" class="btn btn-b">Search Property</button>
                  </div>
              </div>
          </form>
      </div>
  </div>
  <!--/ Form Search End /-->

  <!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="{{ route('home') }}">Plot<span class="color-b">Management</span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item">
              <a class="nav-link " href="{{ route('about') }}">About</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{ route('property') }}">Property</a>
          </li>
          <li class="nav-item">
              <a class="nav-link active" href="{{ route('blog-grid') }}">Blog</a>
          </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Pages
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href={{asset("property-single")}}>Property Single</a>
                </div>
            </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
          </li>
        </ul>
      </div>
      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Our Amazing Posts</h1>
            <span class="color-text-a">Grid News</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{ route('home') }}">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                News Grid
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ News Grid Star /-->
  <section class="news-grid grid">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src="img/post-1.jpg" alt="" class="img-b img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                  <a href="#" class="category-b">Travel</a>
                </div>
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href="#">Travel is comming
                      <br> new</a>
                  </h2>
                </div>
                <div class="card-date">
                  <span class="date-b">18 Sep. 2023</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src="img/post-2.jpg" alt="" class="img-b img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                  <a href="#" class="category-b">Travel</a>
                </div>
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href="#">Travel is comming
                      <br> new</a>
                  </h2>
                </div>
                <div class="card-date">
                  <span class="date-b">18 Dec. 2023</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src="img/post-3.jpg" alt="" class="img-b img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                  <a href="#" class="category-b">Travel</a>
                </div>
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href="#">Travel is comming
                      <br> new</a>
                  </h2>
                </div>
                <div class="card-date">
                  <span class="date-b">18 Oct. 2023</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src="img/post-4.jpg" alt="" class="img-b img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                  <a href="#" class="category-b">Travel</a>
                </div>
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href=href="#">Travel is comming
                      <br> new</a>
                  </h2>
                </div>
                <div class="card-date">
                  <span class="date-b">18 Jan. 2024</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src="img/post-5.jpg" alt="" class="img-b img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                  <a href="#" class="category-b">Travel</a>
                </div>
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href="#">Travel is comming
                      <br> new</a>
                  </h2>
                </div>
                <div class="card-date">
                  <span class="date-b">16 Oct. 2023</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src="img/post-6.jpg" alt="" class="img-b img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                  <a href="#" class="category-b">Travel</a>
                </div>
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href=href="#">Travel is comming
                      <br> new</a>
                  </h2>
                </div>
                <div class="card-date">
                  <span class="date-b">4 Sep. 2023</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <nav class="pagination-a">
            <ul class="pagination justify-content-end">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">
                  <span class="ion-ios-arrow-back"></span>
                </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">3</a>
              </li>
              <li class="page-item next">
                <a class="page-link" href="#">
                  <span class="ion-ios-arrow-forward"></span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ News Grid End /-->

  <!--/ footer Star /-->
  <section class="section-footer">
      <div class="container">
          <div class="row">
              <div class="col-sm-12 col-md-10">
                  <div class="widget-a">
                      <div class="w-header-a">
                          <h3 class="w-title-a text-brand">Plot Management</h3>
                      </div>
                      <div class="w-body-a">
                          <p class="w-text-a color-text-a">
                              Plot management involves the systematic administration and oversight of land parcels, often referred to as plots, to maximize their value, utility, and potential.
                              This process typically includes a range of tasks and responsibilities aimed at optimizing the use, development, and maintenance of land for various purposes
                          </p>
                      </div>
                      <div class="w-footer-a">
                          <ul class="list-unstyled">
                              <li class="color-a">
                                  <span class="color-text-a">Phone .</span> nyamawijimmy@example.com</li>
                              <li class="color-a">
                                  <span class="color-text-a">Email .</span> +254 718845069</li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <footer>
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <nav class="nav-footer">
                      <ul class="list-inline">
                          <li class="list-inline-item">
                              <a href="{{ route('home') }}">Home</a>
                          </li>
                          <li class="list-inline-item">
                              <a href="{{ route('about') }}">About</a>
                          </li>
                          <li class="list-inline-item">
                              <a href="{{ route('property') }}">Property</a>
                          </li>
                          <li class="list-inline-item">
                              <a href="{{ route('blog-grid') }}">Blog</a>
                          </li>
                          <li class="list-inline-item">
                              <a href="{{ route('contact') }}">Contact</a>
                          </li>
                      </ul>
                  </nav>
                  <div class="socials-a">
                      <ul class="list-inline">
                          <li class="list-inline-item">
                              <a href="https://github.com/Nyamawi-Jimmy?tab=repositories">
                                  <i class="fa fa-github" aria-hidden="true"></i>
                              </a>
                          </li>
                          <li class="list-inline-item">
                              <a href="https://twitter.com/JimmyNyamawi?t=YnBhjv4_hX-ANnDp-E2tzQ&s=08                                                                                         ">
                                  <i class="fa fa-twitter" aria-hidden="true"></i>
                              </a>
                          </li>
                          <li class="list-inline-item">
                              <a href="https://instagram.com/_gamboagency_?utm_source=qr&igshid=ZGUzMzM3NWJiOQ%3D%3D">
                                  <i class="fa fa-instagram" aria-hidden="true"></i>
                              </a>
                          </li>
                          <li class="list-inline-item">
                              <a href="https://www.linkedin.com/in/jimmy-nyamawi-9aaa73218">
                                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                              </a>
                          </li>
                      </ul>
                  </div>
                  <div class="copyright-footer">
                      <p class="copyright color-text-a">
                          &copy; Copyright
                          <span class="color-a">PlotManagement</span> All Rights Reserved.
                      </p>
                  </div>
                  <div class="credits">
                      Designed by <a href="https://bootstrapmade.com/">GamboAgency</a>
                  </div>
              </div>
          </div>
      </div>
  </footer>
  <!--/ Footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src={{asset("lib/jquery/jquery.min.js")}}></script>
  <script src={{asset("lib/jquery/jquery-migrate.min.js")}}></script>
  <script src={{asset("lib/popper/popper.min.js")}}></script>
  <script src={{asset("lib/bootstrap/js/bootstrap.min.js")}}></script>
  <script src={{asset("lib/easing/easing.min.js")}}></script>
  <script src={{asset("lib/owlcarousel/owl.carousel.min.js")}}></script>
  <script src={{asset("lib/scrollreveal/scrollreveal.min.js")}}></script>
  <!-- Contact Form JavaScript File -->
  <script src={{asset("contactform/contactform.js")}}></script>

  <!-- Template Main Javascript File -->
  <script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
