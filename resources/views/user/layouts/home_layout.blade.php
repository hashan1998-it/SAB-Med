<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SabMed - Medical Center of Sabaragmuwa Unviverity of Sri Lanka</title>
    <link rel="stylesheet" href="/assets/css/maicons.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/vendor/owl-carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="/assets/vendor/animate/animate.css">
    <link rel="stylesheet" href="/assets/css/theme.css">
</head>

<body>
    @include('sweetalert::alert')
    @include('user.components.navbar')


    @yield('content')


    <div class="bg-light">
        @include('user.components.information')
        @include('user.components.doctors')
    </div>
    </div>
    </div>



    <script src="/assets/js/jquery-3.5.1.min.js"></script>

    <script src="/assets/js/bootstrap.bundle.min.js"></script>

    <script src="/assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="/assets/vendor/wow/wow.min.js"></script>

    <script src="/assets/js/theme.js"></script>

</body>

</html>
