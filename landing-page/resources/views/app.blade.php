<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Niagahoster - Landing Page</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset("assets/dist/css/bootstrap.min.css") }}" rel="stylesheet">
    <link href="{{ asset("assets/plugins/fontawesome-5.15.1/css/fontawesome.min.css") }}" rel="stylesheet">
    <link href="{{ asset("assets/plugins/fontawesome-5.15.1/css/brands.min.css") }}" rel="stylesheet">
    <link href="{{ asset("assets/plugins/fontawesome-5.15.1/css/solid.min.css") }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset("assets/dist/css/style.css") }}" rel="stylesheet">
</head>
<body>

    @include('partials.navbar')

    @yield('content')

    @include('partials.footer')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="{{ asset("assets/js/vendor/jquery.slim.min.js") }}"><\/script>')</script>
    <script src="{{ asset("assets/dist/js/bootstrap.bundle.min.js") }}"></script>
</html>
