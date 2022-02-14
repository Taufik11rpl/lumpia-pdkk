<!doctype html>
<html class="" lang="en">


<!-- Mirrored from template.hasthemes.com/resta/resta/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Feb 2022 04:55:06 GMT -->
@include('layouts.head')

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  
    
    
    <!-- Pre Loader
	============================================ -->
	<div class="preloader">
		<div class="loading-center">
			<div class="loading-center-absolute">
				<div class="object object_one"></div>
				<div class="object object_two"></div>
				<div class="object object_three"></div>
			</div>
		</div>
	</div>
  	<!-- Body main wrapper start -->    
    <div class="wrapper white-bg">
   @include('layouts.header')
       
       <!--slider section start-->
      @yield('content')
        <!--Footer section start-->
      @include('layouts.Footer')
        <!--Footer section end-->
    </div>
    <!-- Body main wrapper end -->
    
    
    <!--=================================
     style-customizer start  -->

    <div class="style-customizer closed">

      <div class="buy-button">
            <a href="#" class="customizer-logo"><img src="images/logo/logo.png" alt="Theme Logo"></a>
            <a class="opener" href="#"><i class="fa fa-cog fa-spin"></i></a>
            <div class="buy-now">
                <a class="button button-border" href="#">Buy now!</a> 
            </div>
        </div>
      <div class="clearfix content-chooser">
        <h3>Layout Options</h3>
        <p>Which layout option you want to use?</p>
        <ul class="layoutstyle clearfix">
          <li class="wide-layout selected" data-style="wide" title="wide"> Wide </li>
          <li class="boxed-layout" data-style="boxed" title="boxed"> Boxed </li>
        </ul>
        <h3>Color Schemes</h3>
        <p>Which theme color you want to use? Select from here.</p>
        <ul class="styleChange clearfix">
          <li class="skin-default selected" title="skin-default" data-style="skin-default" ></li>
          <li class="color-1" title="color-1" data-style="color-1"></li>
          <li class="color-2" title="color-2" data-style="color-2"></li>
          <li class="color-3" title="color-3" data-style="color-3"></li>
          <li class="color-4" title="color-4" data-style="color-4"></li>
          <li class="color-5" title="color-5" data-style="color-5"></li>
          <li class="color-6" title="color-6" data-style="color-6"></li>
          <li class="color-7" title="color-7" data-style="color-7"></li>
          <li class="color-8" title="color-8" data-style="color-8"></li>
          <li class="color-9" title="color-9" data-style="color-9"></li>
          <li class="color-10" title="color-10" data-style="color-10"></li>
          <li class="color-11" title="color-11" data-style="color-11"></li>
        </ul>
        
        <h3>Background Patterns</h3>
        <p>Which background pattern you want to use?</p>
        <ul class="patternChange clearfix">
          <li class="pattern-0" data-style="pattern-0" title="white background"></li>
          <li class="pattern-1" data-style="pattern-1" title="pattern-1"></li>
          <li class="pattern-2" data-style="pattern-2" title="pattern-2"></li>
          <li class="pattern-3" data-style="pattern-3" title="pattern-3"></li>
          <li class="pattern-4" data-style="pattern-4" title="pattern-4"></li>
          <li class="pattern-5" data-style="pattern-5" title="pattern-5"></li>
          <li class="pattern-6" data-style="pattern-6" title="pattern-6"></li>
          <li class="pattern-7" data-style="pattern-7" title="pattern-7"></li>
        </ul>
        <h3>Background Images</h3>
        <p>Which background image you want to use?</p>
        <ul class="patternChange main-bg-change clearfix">
          <li class="main-bg-1" data-style="main-bg-1" title="Background 1"> <img src="images/customizer/bodybg/bg-1.jpg" alt=""></li>
          <li class="main-bg-2" data-style="main-bg-2" title="Background 2"> <img src="images/customizer/bodybg/bg-2.jpg" alt=""></li>
          <li class="main-bg-3" data-style="main-bg-3" title="Background 3"> <img src="images/customizer/bodybg/bg-3.jpg" alt=""></li>
          <li class="main-bg-4" data-style="main-bg-4" title="Background 4"> <img src="images/customizer/bodybg/bg-4.jpg" alt=""></li>
          <li class="main-bg-5" data-style="main-bg-5" title="Background 5"> <img src="images/customizer/bodybg/bg-5.jpg" alt=""></li>
          <li class="main-bg-6" data-style="main-bg-6" title="Background 6"> <img src="images/customizer/bodybg/bg-6.jpg" alt=""></li>
          <li class="main-bg-7" data-style="main-bg-7" title="Background 7"> <img src="images/customizer/bodybg/bg-7.jpg" alt=""></li>
          <li class="main-bg-8" data-style="main-bg-8" title="Background 8"> <img src="images/customizer/bodybg/bg-8.jpg" alt=""></li>
          <li class="main-bg-9" data-style="main-bg-9" title="Background 9"> <img src="images/customizer/bodybg/bg-9.jpg" alt=""></li>
          <li class="main-bg-10" data-style="main-bg-10" title="Background 10"> <img src="images/customizer/bodybg/bg-10.jpg" alt=""></li>
          <li class="main-bg-11" data-style="main-bg-11" title="Background 11"> <img src="images/customizer/bodybg/bg-11.jpg" alt=""></li>
          <li class="main-bg-12" data-style="main-bg-12" title="Background 12"> <img src="images/customizer/bodybg/bg-12.jpg" alt=""></li>
        </ul>
        <ul class="resetAll">
          <li><a class="button button-border button-reset" href="#">Reset All</a></li>
        </ul>
      </div>
    </div>

    <!-- style-customizer End -->
    



    <!-- Placed js at the end of the document so the pages load faster -->

    
   @include('layouts.js')
</body>


<!-- Mirrored from template.hasthemes.com/resta/resta/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Feb 2022 04:55:52 GMT -->
</html>