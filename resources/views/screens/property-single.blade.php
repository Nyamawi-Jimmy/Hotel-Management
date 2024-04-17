<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Plot Management</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
    <script src="https://code.jquery.com/jquery-3.7.0.slim.min.js"
            integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

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
        <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none"
                data-toggle="collapse"
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
                    <a class="nav-link" href="{{ route('blog-grid') }}">Blog</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Pages
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item active" href="{{ route('property-single') }}">Property Single</a>

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
                    <h1 class="title-single">Tsavo Road House</h1>
                    <span class="color-text-a">Malindi ,Kilifi</span>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('property') }}">Properties</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            304 Blaster Up
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!--/ Intro Single End /-->

<!--/ Property Single Star /-->
<section class="property-single nav-arrow-b">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
                    <div class="carousel-item-b">
                        <img src="img/slide-2.jpg" alt="">
                    </div>
                    <div class="carousel-item-b">
                        <img src="img/slide-3.jpg" alt="">
                    </div>
                    <div class="carousel-item-b">
                        <img src="img/slide-1.jpg" alt="">
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-md-5 col-lg-4">
                        <div class="property-price d-flex justify-content-center foo">
                            <div class="card-header-c d-flex">
                                <div class="card-box-ico">
                                </div>
                                <div class="card-title-c align-self-center">
                                    <h5 class="title-c">15,000</h5>
                                </div>
                            </div>
                        </div>
                        <div class="property-summary">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="title-box-d section-t4">
                                        <h3 class="title-d">Quick Summary</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="summary-list">
                                <ul class="list">
                                    <li class="d-flex justify-content-between">
                                        <strong>Property ID:</strong>
                                        <span>1134</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <strong>Location:</strong>
                                        <span>KIlifi, Malindi</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <strong>Property Type:</strong>
                                        <span>House</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <strong>Status:</strong>
                                        <span>Sale</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <strong>Area:</strong>
                                        <span>40Km
                      </span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <strong>Beds:</strong>
                                        <span>4</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <strong>Baths:</strong>
                                        <span>2</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <strong>Garage:</strong>
                                        <span>1</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-7 section-md-t3">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="title-box-d">
                                    <h3 class="title-d">Property Description</h3>
                                </div>
                            </div>
                        </div>
                        <div class="property-description">
                            <p class="description color-text-a">
                                Discover the epitome of comfort and style in this immaculate 3-bedroom, 2.5-bathroom
                                house nestled in the heart of a serene and friendly neighborhood.
                                With its contemporary design, thoughtful amenities, and prime location, this house
                                offers an unparalleled living experience that caters to both relaxation and convenience.
                            </p>
                            <p class="description color-text-a no-margin">
                                Step into the bright and airy living space adorned with large windows that bathe the
                                interior in natural light.
                                The open-concept layout seamlessly connects the living room, dining area, and gourmet
                                kitchen, creating an ideal environment for gatherings and everyday living.
                                The fully equipped kitchen boasts sleek stainless steel appliances, granite countertops,
                                and ample cabinetry for all your culinary needs.
                                Whether you're hosting a dinner party or preparing a quiet meal, this space is designed
                                to inspire your inner chef.
                            </p>
                        </div>
                        <div class="row section-t3">
                            <div class="col-sm-12">
                                <div class="title-box-d">
                                    <h3 class="title-d">Amenities</h3>
                                </div>
                            </div>
                        </div>
                        <div class="amenities-list color-text-a">
                            <ul class="list-a no-margin">
                                <li>Balcony</li>
                                <li>Outdoor Kitchen</li>
                                <li>Cable Tv</li>
                                <li>Deck</li>
                                <li>Tennis Courts</li>
                                <li>Internet</li>
                                <li>Parking</li>
                                <li>Sun Room</li>
                                <li>Concrete Flooring</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10 offset-md-1">
                <ul class="nav nav-pills-a nav-pills mb-3 section-t3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-video-tab" data-toggle="pill" href="#pills-video"
                           role="tab"
                           aria-controls="pills-video" aria-selected="true">Video</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-plans-tab" data-toggle="pill" href="#pills-plans" role="tab"
                           aria-controls="pills-plans"
                           aria-selected="false">Floor Plans</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-map-tab" data-toggle="pill" href="#pills-map" role="tab"
                           aria-controls="pills-map"
                           aria-selected="false">Ubication</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-video" role="tabpanel"
                         aria-labelledby="pills-video-tab">
                        <iframe src="https://player.vimeo.com/video/73221098" width="100%" height="460" frameborder="0"
                                webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                    <div class="tab-pane fade" id="pills-plans" role="tabpanel" aria-labelledby="pills-plans-tab">
                        <img src="img/plan2.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="tab-pane fade" id="pills-map" role="tabpanel" aria-labelledby="pills-map-tab">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.015396012736!2d36.82194661426428!3d-1.2920658960007845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f14dc98acbc37%3A0x27ee6f5b55c76f2c!2sNairobi%2C%20Kenya!5e0!3m2!1sen!2sus!4v1628639026355!5m2!1sen!2sus"
                            width="100%" height="460" frameborder="0" style="border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0"></iframe>

                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row section-t3">
                    <div class="col-sm-12">
                        <div class="title-box-d">
                            <h3 class="title-d">Contact Agent</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <img src="img/me.jpeg" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="property-agent">
                            <h4 class="title-agent">Nyamawi Jimmy</h4>
                            <p class="color-text-a">
                                Our Rental Agent is well-versed in the local real estate market, armed with insights
                                into neighborhoods, rental trends, and property availability.
                                Their dedication to understanding your preferences and needs ensures that they curate a
                                tailored list of options that align with your lifestyle and aspirations..
                            </p>
                            <ul class="list-unstyled">
                                <li class="d-flex justify-content-between">
                                    <strong>Phone:</strong>
                                    <span class="color-text-a">(+254) 718845069</span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <strong>Email:</strong>
                                    <span class="color-text-a">nyamawijimmy@@gmail.com</span>
                                </li>
                            </ul>
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
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="property-contact">
                            <form id="commentForm" class="form-a">
                                <div class="row">
                                    <div class="col-md-12 mb-1">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-lg form-control-a"
                                                   id="inputName" name="name"
                                                   placeholder="Name *" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-1">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-lg form-control-a"
                                                   id="inputEmail1" name="email"
                                                   placeholder="Email *" required>
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

                            <script>
                                $(document).ready(function () {
                                    $('#commentForm').on('submit', function (event) {
                                        event.preventDefault();

                                        let name = $('input[name="name"]').val();
                                        let email = $('input[name="email"]').val();
                                        let message = $('textarea[name="message"]').val();
                                        let csrfToken = $('meta[name="csrf-token"]').attr('content');

                                        $.ajax({
                                            url: '{{ route('comment') }}',
                                            method: 'POST',
                                            headers: {
                                                'X-CSRF-TOKEN': csrfToken
                                            },
                                            data: {
                                                name: name,
                                                email: email,
                                                message: message
                                            },
                                            success: function (response) {
                                                Swal.fire({
                                                    icon: 'success',
                                                    title: 'Server response',
                                                    text: response.response
                                                })

                                                $('input[name="name"]').val('');
                                                $('input[name="email"]').val('');
                                                $('textarea[name="message"]').val('');
                                            },
                                            error: function (xhr, status, error) {
                                                console.log(error);
                                                Swal.fire({
                                                    icon: 'error',
                                                    title: 'Server response',
                                                    text: error.response
                                                })
                                            }
                                        });
                                    });
                                });
                            </script>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Property Single End /-->

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
                            Plot management involves the systematic administration and oversight of land parcels, often
                            referred to as plots, to maximize their value, utility, and potential.
                            This process typically includes a range of tasks and responsibilities aimed at optimizing
                            the use, development, and maintenance of land for various purposes
                        </p>
                    </div>
                    <div class="w-footer-a">
                        <ul class="list-unstyled">
                            <li class="color-a">
                                <span class="color-text-a">Phone .</span> nyamawijimmy@example.com
                            </li>
                            <li class="color-a">
                                <span class="color-text-a">Email .</span> +254 718845069
                            </li>
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
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/jquery/jquery-migrate.min.js"></script>
<script src="lib/popper/popper.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/scrollreveal/scrollreveal.min.js"></script>
<!-- Contact Form JavaScript File -->
<script src="contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
