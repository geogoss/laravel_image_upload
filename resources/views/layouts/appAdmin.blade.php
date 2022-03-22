<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}} ">
    <link rel="stylesheet" href="{{asset('css/test.css')}} ">
    <title>Document</title>
</head>
<body>

    @include('partials.navbarAdmin')
    <a class="btn btn-dark" href="/">Return Back</a>

    @yield('contentAdmin')
    <p class="text-center display-3">Page Admin</p>

    <script src="{{asset('js/app.js')}} "></script>
</body>
</html>