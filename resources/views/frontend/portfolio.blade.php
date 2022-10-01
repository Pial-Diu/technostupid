<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ config('app.name') }}</title>

    <link rel="stylesheet" href="/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="/frontend/css/unicons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <!-- https://fontawesome.com/v5/search?m=free -->

    <link rel="stylesheet" href="/frontend/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/frontend/css/owl.theme.default.min.css">
    <!-- MAIN STYLE -->
    <link rel="stylesheet" href="/frontend/css/tooplate-style.css">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    
  </head>
  <body>

    <!-- MENU -->
   @include('frontend.includes.header')

    <!-- ABOUT -->
   
    @include('frontend.includes.intro')


    {{-- @include('frontend.includes.about') --}}
    <!-- PROJECTS -->
    
    @include('frontend.includes.projects')

    <!-- FEATURES -->
    @include('frontend.includes.experience')

    <!-- CONTACT -->
    @include('frontend.includes.contact')

    <!-- FOOTER -->
    @include('frontend.includes.footer')

    <script src="/frontend/js/jquery-3.3.1.min.js"></script>
    <script src="/frontend/js/popper.min.js"></script>
    <script src="/frontend/js/bootstrap.min.js"></script>
    <script src="/frontend/js/Headroom.js"></script>
    <script src="/frontend/js/jQuery.headroom.js"></script>
    <script src="/frontend/js/owl.carousel.min.js"></script>
    <script src="/frontend/js/smoothscroll.js"></script>
    <script src="/frontend/js/custom.js"></script>

  </body>

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

  </script>



</html>