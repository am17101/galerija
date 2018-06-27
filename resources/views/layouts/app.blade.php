<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>am17101</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.css">
  </head>
  <body>
     @include('inc.topbar')
     <br>
    <div class="row">
       @include('inc.messages')
      @yield('content')
    </div>
    <footer id="footer" class="text-center">
<p>Copyright 2018 &copy; Agneta Meiksane</p>
    </footer>
  </body>
</html>
