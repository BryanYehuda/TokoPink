<!-- Page Content -->
<div id="page-content-wrapper">
    <a href="#menu-toggle" class="menuopener" id="menu-toggle"><i class="fa fa-bars"></i></a>
    
    <div class="parallax section db parallax-off all-page-bar" style="background-image:url('img/Produk.jpg');">">
        <div class="container">
           <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">
                 <div class="title title-1 text-center">
                    <div class="title--heading">
                       <h1>Produk Kami</h1>
                   </div>
                   <div class="clearfix"></div>
                   <ol class="breadcrumb">
                       <li><a href="assets/index-3.html">Home</a></li>
                       <li class="active">Produk Kami</li>
                   </ol>
               </div>
               <!-- .title end -->
           </div>
       </div>
   </div>
</div><!-- end all-page-bar -->

<section class="section nopad cac text-center">
    <a href="#"><h3>Tertarik dengan Toko Pink? Langsung hubungi kami atau berikan kontak anda!</h3></a>
</section>

<div id="services" class="section lb">
    <div class="container-fluid">
        <div class="section-title row text-center">
            <div class="col-md-8 col-md-offset-2">
                <?php foreach ($ket->result() as $row): ?>
                    <small>Selamat Datang di Toko Pink</small>
                    <h3><?php echo ucwords($row->judul); ?></h3>
                    <hr class="grd1">
                    <p class="lead"><?php echo ucwords($row->konten); ?></p>
                <?php endforeach ?>
            </div>
        </div><!-- end title -->

        <div class="row">
            <?php foreach ($produk->result() as $row): ?>
                <div class="col-md-6">
                    <a href="<?php echo base_url(); ?>Main/product/<?php echo$row->id; ?>">
                        <div class="service-wrap clearfix">
                            <img src="img/<?php echo $row->img;?>" alt="" class="img-responsive img-rounded alignleft">
                            <h4><?php echo ucwords($row->nama); ?></h4>
                            <p><?php echo ucwords($row->ket); ?></p>
                        </div><!-- end issue -->
                    </a>
                </div><!-- end col -->
            <?php endforeach ?>
        </div>

        <hr class="invis4">

        <div class="text-center">
            <a href="#services" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">MARI BERBISNIS!</a>
        </div>
    </div><!-- end container -->
</div><!-- end section -->

<div id="testimonials" class="parallax section db parallax-off" style="background-image:url('img/Testi.jpg');">
  <div class="container-fluid">
    <div class="section-title row text-center">
      <div class="col-md-8 col-md-offset-2">
        <small>TESTIMONI PELANGGAN KAMI</small>
        <h3>HAPPY TESTIMONIALS!</h3>
        <hr class="grd1">
      </div>
    </div><!-- end title -->

    <div class="row">
      <div class="col-md-12 col-sm-12">
        <div class="testi-carousel owl-carousel owl-theme">
          <?php foreach ($testi->result() as $row): ?>
            <div class="testimonial clearfix">
              <div class="desc">
                <h3><i class="fa fa-quote-left"></i> <?php echo ucwords($row->judul);?></h3>
                <p class="lead"><?php echo ucwords($row->komentar);?></p>
              </div>
              <div class="testi-meta">
                <img src="img/<?php echo $row->img;?>" alt="" class="img-responsive alignright">
                <h4><?php echo ucwords($row->nama);?><small>- <?php echo ucwords($row->jabatan);?></small></h4>
              </div>
            </div>
          <?php endforeach?>
        </div><!-- end carousel -->
      </div><!-- end col -->
    </div><!-- end row -->
  </div><!-- end container -->
            </div><!-- end section -->