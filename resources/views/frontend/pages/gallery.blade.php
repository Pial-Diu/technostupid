@extends('frontend.master')

@section('title')
  Gallery
@endsection

@section('bottom-css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.0/css/lightgallery-bundle.min.css" integrity="sha512-nUqPe0+ak577sKSMThGcKJauRI7ENhKC2FQAOOmdyCYSrUh0GnwLsZNYqwilpMmplN+3nO3zso8CWUgu33BDag==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
		 a, a:hover, a:focus, a:active {
			text-decoration: none;
			color: inherit;
		}

		.imgctr {
			/* display: inline-block; */
			/* margin: 20px; */
			/* border: 1px solid black; */
			border-radius: 10px;
			overflow: hidden; 
		}


		#profile-pic {
			overflow: hidden;
			filter: sepia(30%);
			transition: 0.5s all ease-in-out;
			display: block;
		}
		#profile-pic:hover {
			filter: sepia(0%);
			/* transform:scale(1.5); */
			transform: scale(1.1);
  transform-origin: 50% 50%;
		}
		
	</style>
@endsection

@section('bottom-scripts')

  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.0/lightgallery.min.js" integrity="sha512-pG+XpUdyBtp28FzjpaIaj72KYvZ87ZbmB3iytDK5+WFVyun8r5LJ2x1/Jy/KHdtzUXA0CUVhEnG+Isy1jVJAbA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.0/plugins/zoom/lg-zoom.min.js" integrity="sha512-Lr6V5jv24JHC1+HU2k4n38smhlr2bBx2pdyM/GrYo/pnpzQ/Th2/LnCxyEesD8+jDnPlK1c6dKiI0uNnOSlyTg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.0/plugins/thumbnail/lg-thumbnail.min.js" integrity="sha512-cs5vRstvdBhVt5xFxjYtmbb3BF0fgVYwbBNsfAxFLGuRiRm/4PoKJvAt55KJtT8AvWOxDL4Xt/AVSE48geDjHQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script type="text/javascript">
      lightGallery(document.getElementById('lightgallery'), {
          plugins: [lgZoom, lgThumbnail],
          licenseKey: 'your_license_key',
          speed: 500,
          // ... other settings
      });
  </script>

@endsection

@section('content')

@include('frontend.includes.secondery-header')

<section class="contact py-5" id="about-me">
  <div class="container">
<h2 class="text-centre">Things I've built for the web</h2>
    <div class="row">
      
    <div id="lightgallery">
        <a href="/frontend/images/project/beedamall.png" data-lg-size="1600-2400">
            <img alt="img1" src="/frontend/images/project/beedamall.png" />
        </a>
        <a href="/frontend/images/project/amujamu.png" data-lg-size="1024-800">
            <img alt="img2" src="/frontend/images/project/amujamu.png" />
        </a>
        <a href="/frontend/images/project/vroom.png" data-lg-size="1024-800">
            <img alt="img2" src="/frontend/images/project/vroom.png" />
        </a>
    </div>

    </div>
  </div>
</section>

@endsection