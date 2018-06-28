<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('am17101', 'am17101') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style>
.img{
  width: 20px;
}

</style>
<body>

  <center>
    <div id="app">
        @include('inc.topbar')

        <div class="container">
            @include('inc.messages')
            @yield('content')
        </div>
    </div>
<p>  Vēlies sazināties ar lapas administratoru? Reģistrējies, ja to vēl neesi izdarījis! Ja esi, tad ielogojies!</p>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
    <footer id="footer" class="text-center">
<p>Copyright 2018 &copy; Agneta Meiksane</p>
 </footer>
</center>
</body>
</html>
