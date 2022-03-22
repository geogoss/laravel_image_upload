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

    @include('partials.navbarClient')
    <a class="btn btn-dark" href="/admin">Go Admin</a>

    @yield('content')
    <p class="text-center display-3">Bienvenue sur notre site</p>

    <script src="{{asset('js/app.js')}} "></script>
</body>
</html>