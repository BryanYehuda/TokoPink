<!DOCTYPE html>
<html lang="en">

<!-- Basic -->

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
    <style type="text/css">
      .table-produk {
        color: black;
      }

      .table-produk td{
        padding-right: 10px;
        text-align: left;
      }

      .produk{
        margin-top: 50px;
      }
    </style>

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
    <div id="sidebar-wrapper" style="overflow: auto; overflow-x: hidden;">
     <div class="side-top">
      <div class="logo-sidebar">
       <a href="<?php echo base_url().'beranda'?>"><img src="../../assets/images/icon_toko.png" alt="image" style="margin-top: -90px"></a>
     </div>
     <ul class="sidebar-nav navlist">
       <li><a class="btn" href="<?php echo base_url().'beranda'?>">Produk Kami</a></li>
       <li><a class="btn" href="<?php echo base_url().'tentang'?>">Tentang Kami</a></li>
       <li><a class="btn" href="<?php echo base_url().'bisnis'?>">Ingin Berbisnis?</a></li>
     </ul>
   </div>
 </div>
 <!-- End Sidebar-wrapper -->

 <!-- CONTENT -->
 <div id="services" class="section lb" style="padding: 0px">
  <div class="container-fluid">
    <div class="section-title row text-center">
          <?php foreach ($pro->result() as $row): ?>
        <div class="col-md-8 col-md-offset-2">
          <small>Produk Kami</small>
          <h3><?php echo ucwords($row->nama); ?></h3>
          <hr class="grd1">
        </div>
    </div><!-- end title -->

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <table class="table-produk">
          <div class="col-md-12 text-center">
            <img src="../../img/<?php echo $row->img;?>" alt="" class="img-responsive img-rounded aligncenter" style="width: 30%">
          </div>
          <div class="col-md-12 col-md-offset-12 text-left produk">
            <tr>
              <td>Bahan</td>
              <td>:</td>
              <td><?php echo ucwords($row->bahan); ?></td>
            </tr>
            <tr>
              <td>Ukuran</td>
              <td>:</td>
              <td><?php echo ucwords($row->size); ?></td>
            </tr>
            <tr>
              <td>Berat</td>
              <td>:</td>
              <td><?php echo ucwords($row->berat); ?></td>
            </tr>
            <tr>
              <td>Ketersediaan Warna</td>
              <td>:</td>
              <td><?php echo ucwords($row->warna); ?></td>
            </tr>
            <tr>
              <td>Range Harga</td>
              <td>:</td>
              <td><?php echo "Rp " . number_format($row->min,2,',','.')." - "."Rp " . number_format($row->max,2,',','.');?></td>
            </tr>
            <tr>
              <td>Harga Partai</td>
              <td>:</td>
              <td><?php echo "Rp " . number_format($row->partai,2,',','.');?></td>
            </tr>
            <tr>
              <td>Harga Grosir</td>
              <td>:</td>
              <td><?php echo "Rp " . number_format($row->grosir,2,',','.');?></td>
            </tr>
            <tr>
              <td>Harga Eceran</td>
              <td>:</td>
              <td><?php echo "Rp " . number_format($row->ecer,2,',','.');?></td>
            </tr>
            <tr>
              <td>Harga Reseller</td>
              <td>:</td>
              <td><?php echo "Rp " . number_format($row->resell,2,',','.');?></td>
            </tr>
            <tr>
              <td>Minimal Pembelian</td>
              <td>:</td>
              <td><?php echo ucwords($row->minpem); ?> Pcs</td>
            </tr>
            <tr>
              <td>Keterangan</td>
              <td>:</td>
              <td><?php echo ucwords($row->ket); ?></td>
            </tr>
            <tr>
              <td>Kelengkapan</td>
              <td>:</td>
              <td><?php echo ucwords($row->kel); ?></td>
            </tr>
          </div><!-- end issue -->
          <?php endforeach ?>
          </table>
          <div class="col-md-12 text-center">
            <a href="<?php echo base_url().'bisnis'?>" class="btn btn-light btn-radius btn-brd grd1 effect-2 butn" style="margin: 20px">
              Hubungi Kami
            </a>
          </div>
        </div><!-- end col -->
    </div>

    <hr class="invis4">
  </div><!-- end container -->
</div><!-- end section -->
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
          <a href="<?php echo base_url().'beranda'?>">Produk Kami</a>
          <a href="<?php echo base_url().'tentang'?>">Tentang Kami</a>
          <a href="<?php echo base_url().'bisnis'?>">Ingin Berbisnis?</a>
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