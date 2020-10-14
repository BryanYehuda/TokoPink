<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">   

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Site Metas -->
<title>Pink Importir</title>  
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="shortcut icon" href="../../assets/images/icon_toko.png" type="image/x-icon" />
<link rel="apple-touch-icon" href="../../assets/images/icon_toko.png">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="../../assets/style.css">
<!-- Colors CSS -->
<link rel="stylesheet" href="../../assets/css/colors.css">
<!-- ALL VERSION CSS -->
<link rel="stylesheet" href="../../assets/css/versions.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="../../assets/css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="../../assets/css/custom.css">

    <!--[if lt IE 9]>
      <script src="../../assets/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="../../assets/https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body class="barber_version">

    <!-- LOADER -->
    <div id="preloader">
      <div class="cube-wrapper">
        <div class="cube-folding">
         <span class="leaf1"></span>
         <span class="leaf2"></span>
         <span class="leaf3"></span>
         <span class="leaf4"></span>
       </div>
       <span class="loading" data-name="Loading">TokoPink Loading</span>
     </div>
   </div><!-- end loader -->
   <!-- END LOADER -->

   <div id="wrapper">

    <!-- Sidebar-wrapper -->
    <div id="sidebar-wrapper">
     <div class="side-top">
      <div class="logo-sidebar">
       <a href="<?php echo base_url().'beranda'?>"><img src="../../assets/images/icon_toko.png" alt="image"></a>
     </div>
     <ul class="sidebar-nav navlist">
       <li><a class="btn" href="<?php echo base_url().'beranda'?>">Home</a></li>
       <li><a class="btn" href="<?php echo base_url().'tentang'?>">Tentang Kami</a></li>
       <li><a class="btn" href="<?php echo base_url().'produk'?>">Produk Kami</a></li>
       <li><a class="btn" href="<?php echo base_url().'lokasi'?>">Lokasi Toko Kami</a></li>
       <li><a class="btn" href="<?php echo base_url().'bisnis'?>">Ingin Berbisnis?</a></li>
       <li><a class="btn" href="<?php echo base_url().'hubungi'?>">Contact</a></li>
     </ul>
   </div>
 </div>
 <!-- End Sidebar-wrapper -->

 <!-- CONTENT -->
<div id="services" class="section lb">
    <div class="container-fluid">
        <div class="section-title row text-center">
            <div class="col-md-8 col-md-offset-2">
                <small>Error 404</small>
                <h3>Page Not Found</h3>                
            </div>
        </div><!-- end title -->
    </div>
</div>
 <!-- END CONTENT -->

 <div id="map" class="map-box">
  <div class="container-fluid">

  </div><!-- end container -->
</div><!-- end section -->

<div class="copyrights">
  <div class="container-fluid">
    <div class="footer-distributed">
      <div class="footer-left">
        <p class="footer-links">
          <a href="<?php echo base_url().'beranda'?>">Home</a>
          <a href="<?php echo base_url().'tentang'?>">Tentang Kami</a>
          <a href="<?php echo base_url().'produk'?>">Produk Kami</a>
          <a href="<?php echo base_url().'lokasi'?>">Lokasi Toko Kami</a>
          <a href="<?php echo base_url().'bisnis'?>">Ingin Berbisnis?</a>
          <a href="<?php echo base_url().'hubungi'?>">Contact</a>
        </p>
        <p class="footer-company-name">All Rights Reserved. &copy; 2019 <a href="#">Pink Importir</a> Design By : <a href="https://adajupiter.com/">Jupiter Development</a></p>
      </div>
    </div>
  </div><!-- end container -->
</div><!-- end copyrights -->
</div>
</div><!-- end wrapper -->

<a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

<!-- ALL JS FILES -->
<script src="../../assets/js/all.js"></script>
<script src="../../assets/js/responsive-tabs.js"></script>
<!-- ALL PLUGINS -->
<script src="../../assets/js/custom.js"></script>

<!-- Menu Toggle Script -->
<script>
  (function($) {
    "use strict";
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
    smoothScroll.init({
            selector: '[data-scroll]', // Selector for links (must be a class, ID, data attribute, or element tag)
            selectorHeader: null, // Selector for fixed headers (must be a valid CSS selector) [optional]
            speed: 500, // Integer. How fast to complete the scroll in milliseconds
            easing: 'easeInOutCubic', // Easing pattern to use
            offset: 0, // Integer. How far to offset the scrolling anchor location in pixels
            callback: function ( anchor, toggle ) {} // Function to run after scrolling
          });
  })(jQuery);
  var header = document.getElementById("navlist");
  var btns = header.getElementsByClassName("btn");
  for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
      var current = document.getElementsByClassName("active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
    });
  }
</script>

</body>
</html>