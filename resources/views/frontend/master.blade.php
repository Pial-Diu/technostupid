<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/x-icon" href="/frontend/images/fav.png">

    <title>{{ config('app.name') }} - @yield('title')</title>

    <link rel="stylesheet" href="/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="/frontend/css/unicons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <!-- https://fontawesome.com/v5/search?m=free -->

    <link rel="stylesheet" href="/frontend/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/frontend/css/owl.theme.default.min.css">
    <!-- MAIN STYLE -->
    <link rel="stylesheet" href="/frontend/css/tooplate-style.css">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <link rel="preload" href="http://davidwalsh.name/wp-content/themes/walshbook3/images/sprite.png" />
    @yield('bottom-css')
  </head>
  <body>

  <div class="preload">
<img class="centered" src="/frontend/images/animation_640_l8t8gu3s.gif">
</div>

<div class="content">

    <!-- MENU -->
   

    @yield('content')

    <!-- FOOTER -->
    @include('frontend.includes.footer')
  </div>
    <script src="/frontend/js/jquery-3.3.1.min.js"></script>
    <script src="/frontend/js/popper.min.js"></script>
    <script src="/frontend/js/bootstrap.min.js"></script>
    <script src="/frontend/js/Headroom.js"></script>
    <script src="/frontend/js/jQuery.headroom.js"></script>
    <script src="/frontend/js/owl.carousel.min.js"></script>
    <script src="/frontend/js/smoothscroll.js"></script>
    <script src="/frontend/js/custom.js"></script>
    @yield('bottom-scripts')
  </body>

  <style>
    .content {display:none;}
.preload { 
    width:100px;
    height: 100px;
    position: fixed;
    top: 50%;
    left: 50%;
}
.centered {
  position: fixed;
  top: 50%;
  left: 50%;
  /* bring your own prefixes */
  transform: translate(-50%, -50%);
}
  </style>

  <script>
    if(localStorage.getItem('colormode'))
    {
        $('.color-mode-icon').toggleClass('active')
        $('body').toggleClass('dark-mode')
    }
    function colorMode()
    {
      localStorage.getItem('colormode') ? localStorage.removeItem('colormode') : localStorage.setItem('colormode',true);
    }
    
    $(function() {
    $(".preload").fadeOut(2500, function() {
            $(".content").fadeIn(500);        
        });
    });
  </script>



</html>