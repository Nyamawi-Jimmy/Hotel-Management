<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Plot Management</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href={{asset("img/favicon.png")}} rel="icon">
  <link href={{asset("img/apple-touch-icon.png")}} rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href={{asset("lib/bootstrap/css/bootstrap.min.css")}} rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href={{asset("lib/font-awesome/css/font-awesome.min.css")}} rel="stylesheet">
  <link href={{asset("lib/animate/animate.min.css" )}}rel="stylesheet">
  <link href={{asset("lib/ionicons/css/ionicons.min.css")}} rel="stylesheet">
  <link href={{asset("lib/owlcarousel/assets1/owl.carousel.min.css")}} rel="stylesheet">

  <!-- Main Stylesheet File -->
    <link href="{{ asset('style/style.css') }}" rel="stylesheet" type="text/css">

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
              <a class="nav-link" href="{{ route('about') }}">About</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{ route('property') }}">Property</a>
          </li>
          <li class="nav-item">
              <a class="nav-link " href="{{ route('blog-grid') }}">Blog</a>
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
              <a class="nav-link active" href="{{ route('contact') }}">Contact</a>
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
            <h1 class="title-single">Contact US</h1>
            <span class="color-text-a"> We're eager to assist you in finding your ideal rental property or answering any questions you might have.
                Our team is here to ensure your rental experience is smooth, informative, and tailored to your unique needs.
                Reach out to us through the following contact channels and take the first step towards securing your new home.</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{ route('home') }}">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Contact
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Contact Star /-->
  <section class="contact">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-map box">
            <div id="map" class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15947.913536341576!2d36.89155780834387!3d-0.4193302048893756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f4fcf130161a1%3A0xffa4644dab1651c6!2sDedan%20Kimathi%20University%20of%20Technology!5e0!3m2!1sen!2ske!4v1629145954371!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
        </div>
        <div class="col-sm-12 section-t8">
          <div class="row">
            <div class="col-md-7">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <form class="form-a" method="post" action="{{ route('message') }}">
                    @csrf <!-- Include the CSRF token -->

                    <div class="row">
                        <div class="col-md-12 mb-1">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg form-control-a" id="inputName" name="name"
                                       placeholder="Name *" required>
                            </div>
                        </div>
                        <div class="col-md-12 mb-1">
                            <div class="form-group">
                                <input type="email" class="form-control form-control-lg form-control-a" id="inputEmail1" name="email"
                                       placeholder="Email *" required>
                            </div>
                        </div>
                        <div class="col-md-12 mb-1">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg form-control-a" id="inputSubject" name="subject"
                                       placeholder="Subject *" required>
                            </div>
                        </div>
                        <div class="col-md-12 mb-1">
                            <div class="form-group">
                <textarea id="textMessage" class="form-control" placeholder="Comment *" name="message" cols="45"
                          rows="8" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-a">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-5 section-md-t3">
              <div class="icon-box section-b2">
                <div class="icon-box-icon">
                  <span class="ion-ios-paper-plane"></span>
                </div>
                <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                    <h4 class="icon-title">Say Hello</h4>
                  </div>
                  <div class="icon-box-content">
                    <p class="mb-1">Email.
                      <span class="color-a">nyamawijimmy@gmail.com</span>
                    </p>
                    <p class="mb-1">Phone.
                      <span class="color-a">+254 718 845069</span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="icon-box section-b2">
                <div class="icon-box-icon">
                  <span class="ion-ios-pin"></span>
                </div>
                <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                    <h4 class="icon-title">Find us in</h4>
                  </div>
                  <div class="icon-box-content">
                    <p class="mb-1">
                      Nyeri, Malindi,
                      <br> Chuka.
                    </p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Contact End /-->

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
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                 aria-haspopup="true" aria-expanded="false">
                                  Pages
                              </a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href={{asset("property-single")}}>Property Single</a>
                              </div>
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
