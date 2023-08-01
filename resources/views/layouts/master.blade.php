<!DOCTYPE html>
<html lang="fr">
  <head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DOMOTIKLUX | K-SPA</title>
    @include('partials.css') 
  </head>
  <body>
    @include('partials.header')
    @yield('content')

    @include('partials.footer')
    <a href="#" class="back-to-top">
    	<i class="lni-arrow-up"></i>
    </a>
    @include('partials.js')
  </body>
</html>