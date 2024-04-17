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
    <link href="{{ asset('style/style.css') }}" rel="stylesheet" type="text/css">

  <!-- =======================================================
    Theme Name: EstateAgency
    Theme URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
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
            <a class="nav-link active" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('about') }}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('property') }}">Property</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('blog-grid') }}">Blog</a>
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

  <!--/ Carousel Star /-->
  <div class="intro intro-carousel">
    <div id="carousel" class="owl-carousel owl-theme">
      <div class="carousel-item-a intro-item bg-image" style="background-image: url({{ asset('img/slide-1.jpg') }})">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Malindi, Kilifi</p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">Tsavo </span>Road
                      <br> House</h1>
                    <p class="intro-subtitle intro-price">
                      <a href="{{ route('form/booking/add') }}"><span class="price-a">rent |  12,000</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url({{ asset('img/slide-2.jpg') }})">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Mombasa, Mombasa
                    <h1 class="intro-title mb-4">
                      <span class="color-b">Sin </span> Bird
                      <br> House</h1>
                    <p class="intro-subtitle intro-price">
                      <a href="{{ route('form/booking/add') }}"><span class="price-a">rent | 8,000</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url({{ asset('img/slide-3.jpg') }})">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Kilifi, Kilifi
                    <h1 class="intro-title mb-4">
                      <span class="color-b">Pwani </span> Road
                      <br> House</h1>
                    <p class="intro-subtitle intro-price">
                      <a href="{{ route('form/booking/add') }}"><span class="price-a">rent |  12,000</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Carousel end /-->

  <!--/ Services Star /-->
  <section class="section-services section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Our Services</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <span class="fa fa-gamepad"></span>
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c">Booking System</h2>
              </div>
            </div>
            <div class="card-body-c">
              <p class="content-c">
                  The Booking System service is designed to empower users with the capability to effortlessly reserve plots or houses based on their preferences.
                  Whether it's for residential or commercial purposes, the service enables users to secure their desired property for a specific timeframe.
                  This feature simplifies the process of property selection and ensures that users have peace of mind knowing that their chosen property will be available when they need it.
              </p>
            </div>

          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <span class="fa fa-usd"></span>
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c">Payment Intergration</h2>
              </div>
            </div>
            <div class="card-body-c">
              <p class="content-c">
                  The Payment Integration service is designed to streamline the financial aspect of your plot management system, allowing users to effortlessly complete their rental transactions online.
                  This service is responsible for connecting your platform with external payment gateways and processing providers to enable safe and reliable payment processing.
                  The primary objectives of the Payment Integration service include:
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <span class="fa fa-home"></span>
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c">House Listings</h2>
              </div>
            </div>
            <div class="card-body-c">
              <p class="content-c">
                  The "Plot/House Listings" service offered by your application involves providing users with a comprehensive list of available plots or houses for rent.
                  This service is designed to facilitate users in their search for suitable accommodations by presenting them with detailed information and allowing them to refine their options according to their preferences.
                  Here's a breakdown of how this service works:
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Services End /-->

  <!--/ Property Star /-->
  <section class="section-property section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Latest Properties</h2>
            </div>
            <div class="title-link">
              <a href="{{ route('property') }}">All Property
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div id="property-carousel" class="owl-carousel owl-theme">
        <div class="carousel-item-b">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src={{asset("img/property-6.jpg")}} alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="{{ route('form/booking/add') }}" >Tsavo Road
                      <br /> House</a>
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a">rent | 12,000</span>
                  </div>
                  <a href="{{ route('property-single') }}"class="link-a">Click here to view
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Area</h4>
                      <span>340m
                        <sup>2</sup>
                      </span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Beds</h4>
                      <span>2</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Baths</h4>
                      <span>4</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Garages</h4>
                      <span>1</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item-b">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src={{asset("img/property-3.jpg")}} alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="{{ route('form/booking/add') }}">Kilifi Road
                      <br /> House</a>
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a">rent |  12,000</span>
                  </div>
                  <a href="{{ route('property-single') }}" class="link-a">Click here to view
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Area</h4>
                      <span>340m
                        <sup>2</sup>
                      </span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Beds</h4>
                      <span>2</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Baths</h4>
                      <span>4</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Garages</h4>
                      <span>1</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item-b">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src={{asset("img/property-7.jpg")}} alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="{{ route('form/booking/add') }}">Mombasa Road
                      <br /> House</a>
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a">rent |  24,000</span>
                  </div>
                  <a href="{{ route('property-single') }}" class="link-a">Click here to view
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Area</h4>
                      <span>340m
                        <sup>2</sup>
                      </span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Beds</h4>
                      <span>2</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Baths</h4>
                      <span>4</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Garages</h4>
                      <span>1</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item-b">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src={{asset("img/property-8.jpg")}} alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="{{ route('form/booking/add') }}">Lamu Road
                      <br /> House</a>
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a">rent |  25,000</span>
                  </div>
                  <a href="{{ route('property-single') }}" class="link-a">Click here to view
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Area</h4>
                      <span>340m
                        <sup>2</sup>
                      </span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Beds</h4>
                      <span>2</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Baths</h4>
                      <span>4</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Garages</h4>
                      <span>1</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Property End /-->

  <!--/ News Star /-->
  <section class="section-news section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Latest News</h2>
            </div>
            <div class="title-link">
              <a href="{{ route('blog-grid') }}">All News
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div id="new-carousel" class="owl-carousel owl-theme">
        <div class="carousel-item-c">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src={{asset("img/post-2.jpg")}} alt="" class="img-b img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                  <a href="#" class="category-b">House</a>
                </div>
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href="{{ route('property') }}">House is comming
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
        <div class="carousel-item-c">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src={{asset("img/post-5.jpg")}} alt="" class="img-b img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                  <a href="#" class="category-b">Travel</a>
                </div>
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href="{{ route('property') }}">Travel is comming
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
        <div class="carousel-item-c">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src={{asset("img/post-7.jpg")}} alt="" class="img-b img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                  <a href="#" class="category-b">Park</a>
                </div>
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href="{{ route('property') }}">Park is comming
                      <br> new</a>
                  </h2>
                </div>
                <div class="card-date">
                  <span class="date-b">14 Nov. 2023</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item-c">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src={{asset("img/post-3.jpg")}} alt="" class="img-b img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                  <a href="#" class="category-b">Travel</a>
                </div>
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href="{{ route('property') }}">Travel is comming
                      <br> new</a>
                  </h2>
                </div>
                <div class="card-date">
                  <span class="date-b">12 Jan. 2024</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ News End /-->

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
