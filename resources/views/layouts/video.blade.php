<!DOCTYPE html>

<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<style>

body{


    background: url("video/627965480.mp4");
    background-attachment: fixed;
    background-size: cover;
}

#myVideo {
    position: fixed;
    right: 0;
    bottom: 0;
    min-width: 100%; 
    min-height: 100%;

    z-index: -100;
    transition: 1s opacity;
}





</style>

    

     <script src="{{ asset('js/app.js') }}"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">

   @yield('body')

    <video autoplay muted loop id="myVideo">
  <source src="video/627965480.mp4" type="video/mp4">
  </video>
</div>
   
</body>

</html>
