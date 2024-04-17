

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

    <!-- DateTimePicker CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <!-- =======================================================
      Theme Name: EstateAgency
      Theme URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
      Author: BootstrapMade.com
      License: https://bootstrapmade.com/license/
    ======================================================= -->
</head>

<body>

<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title mt-5">Add Booking</h3>
                </div>
            </div>
        </div>
        <form action="{{ route('form/booking/save') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-12">
                    <div class="row formtype">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="usr1" name="name" value="{{ old('name') }}">

                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Name</label>
                                <select class="form-control @error('name') is-invalid @enderror" id="sel1" name="name" value="{{ old('name') }}">
                                    <option selected disabled> --Select Name-- </option>
                                    @foreach ($user as $users )
                                        <option value="{{ $users->name }}">{{ $users->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Room Type</label>
                                <select class="form-control @error('room_type') is-invalid @enderror" id="sel2" name="room_type">
                                    <option selected disabled> --Select Room Type-- </option>
                                    @foreach ($data as $items )
                                        <option value="{{ $items->room_name }}">{{ $items->room_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Total Members</label>
                                <input type="number" class="form-control @error('total_numbers') is-invalid @enderror"name="total_numbers" value="{{ old('total_numbers') }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Date</label>
                                <div class="cal-icon">
                                    <input type="text" class="form-control datetimepicker @error('date') is-invalid @enderror"name="date" value="{{ old('date') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Time</label>
                                <div class="time-icon">
                                    <input type="text" class="form-control @error('time') is-invalid @enderror" id="datetimepicker3" name="time" value="{{ old('time') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Arrival Date</label>
                                <div class="cal-icon">
                                    <input type="text" class="form-control datepicker" name="depature_date" value="{{ old('depature_date') }}">                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Leaving Date</label>
                                <div class="cal-icon">
                                    <input type="text" class="form-control datepicker" name="depature_date" value="{{ old('depature_date') }}">                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" class="form-control @error('phone_number') is-invalid @enderror" id="usr1" name="phone_number" value="{{ old('phone_number') }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>File Upload</label>
                                <div class="custom-file mb-3">
                                    <input type="file" class="custom-file-input @error('fileupload') is-invalid @enderror" id="customFile" name="fileupload" value="{{ old('fileupload') }}">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary buttonedit1">Create Booking</button>
        </form>
        </form>
    </div>
</div>

<!--/ Carousel end /-->

<!--/ footer Star /-->
<section class="section-footer">
    <div class="container">
        <!-- Footer content -->
    </div>
</section>
<footer>
    <div class="container">
        <!-- Footer content -->
    </div>
</footer>
<!--/ Footer End /-->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<div id="preloader"></div>

<!-- JavaScript Libraries -->
<script src={{asset("lib/jquery/jquery.min.js")}}></script>
<script src={{asset("lib/bootstrap/js/bootstrap.min.js")}}></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<!-- Template Main Javascript File -->
<script src="{{ asset('js/main.js') }}"></script>

<script>
    $(document).ready(function(){
        $(".datepicker").flatpickr({
            dateFormat: "Y-m-d"
        });
    });
</script>

</body>
</html>
