@extends('frontend.master')

@section('title')
  Gallery
@endsection

@section('bottom-css')

<style>
  .portfolio-menu{
	text-align:center;
}
.portfolio-menu ul li{
	display:inline-block;
	margin:0;
	list-style:none;
	padding:10px 15px;
	cursor:pointer;
	-webkit-transition:all 05s ease;
	-moz-transition:all 05s ease;
	-ms-transition:all 05s ease;
	-o-transition:all 05s ease;
	transition:all .5s ease;
}

.portfolio-item{
	/*width:100%;*/
}
.portfolio-item .item{
	/*width:303px;*/
	float:left;
	margin-bottom:10px;
}

</style>
@endsection

@section('bottom-scripts')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>

<script>
   $('.portfolio-menu ul li').click(function(){
         	$('.portfolio-menu ul li').removeClass('active');
         	$(this).addClass('active');
         	
         	var selector = $(this).attr('data-filter');
         	$('.portfolio-item').isotope({
         		filter:selector
         	});
         	return  false;
         });
         $(document).ready(function() {
         var popup_btn = $('.popup-btn');
         popup_btn.magnificPopup({
         type : 'image',
         gallery : {
         	enabled : true
         }
         });
         });
</script>

@endsection

@section('content')

@include('frontend.includes.secondery-header')
<section class="contact py-5">
<div class="container">
        <!-- <div class="col-lg-8 mx-auto">
          <h2>Things I've built for the web</h2>
        </div> -->
         <div class="portfolio-item row">
            @foreach($images as $image)
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm-12">
               <a href="{{$image['image']}}" class="fancylight popup-btn" data-fancybox-group="light"> 
               <img class="img-fluid" src="{{$image['image']}}" alt="">
               </a>
            </div>

            @endforeach
            
         </div>
      </div>
</section>
@endsection