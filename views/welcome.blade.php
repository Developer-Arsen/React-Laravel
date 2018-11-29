<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>Arsen Mkhitaryan</title>
      <!-- links -->
      <link rel="stylesheet" href="{{ asset('css/firstpage.css') }}">
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
      <link href="{{mix('css/app.css')}}" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/bootstrap-slider.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/bootstrap-touch-slider.css') }}" media="all">
      <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
   </head>
   <body>
       
      <div id="body"></div>
      <script src="{{mix('js/app.js')}}" ></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" type="text/javascript"></script>
      <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('js/jquery.maskedinput.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap-slider.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap-touch-slider-min.js') }}"></script>
      <script src="{{ asset('js/jquery.ez-plus.js') }}"></script>
      <script src="{{ asset('js/main-backup.js') }}"></script>
   </body>
</html>