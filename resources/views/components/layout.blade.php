
@props(['bodyClass'])
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets1') }}/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('assets1') }}/img/favicon.png">
    <title>
        Plot Management
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('assets1') }}/css/nucleo-icons.css" rel="stylesheet" />
    <link href="{{ asset('assets1') }}/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('assets1') }}/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
</head>
<body class="{{ $bodyClass }}">

{{ $slot }}

<script src="{{ asset('assets1') }}/js/custom/page.js"></script>
<script src="{{ asset('assets1') }}/js/core/popper.min.js"></script>
<script src="{{ asset('assets1') }}/js/core/bootstrap.min.js"></script>
<script src="{{ asset('assets1') }}/js/plugins/perfect-scrollbar.min.js"></script>
<script src="{{ asset('assets1') }}/js/plugins/smooth-scrollbar.min.js"></script>
@stack('js')
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }

</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('assets1') }}/js/material-dashboard.min.js?v=3.0.0"></script>
</body>
</html>
