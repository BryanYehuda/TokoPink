<!-- Page Content -->
<div id="page-content-wrapper">
  <a href="#menu-toggle" class="menuopener" id="menu-toggle"><i class="fa fa-bars"></i></a>

  <div id="home" class="parallax first-section" data-stellar-background-ratio="0.4" style="background-image:url('img/Beranda.jpg');">
    <div class="container-fluid">
      <div class="row">
        <div id="full-width" class="owl-carousel owl-theme" style="margin-top: -50px">
          <?php foreach ($content1->result() as $row): ?>
           <div class="text-center item">
            <div class="col-md-8 col-md-offset-2 col-sm-12">
             <div class="big-tagline text-center">
              <h2>
                <strong><?php echo ucwords($row->judul);?></strong>
              </h2>
              <p class="lead">
                <?php echo ucwords($row->konten); ?>
              </p>
              <a href="<?php echo base_url().'bisnis'?>" class="btn btn-light btn-radius btn-brd grd1 effect-1 butn">
                MARI BERBISNIS!
              </a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div><!-- end row -->  
</div><!-- end container -->
</div><!-- end section -->

<section class="section nopad cac text-center">
  <a href="#"><h3>Tertarik dengan Toko Pink? Langsung hubungi kami atau berikan kontak anda!</h3></a>
</section>

<div class="section wb">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center">
        <div class="message-box">
          <h4>Sekilas</h4>
          <?php foreach ($sekilas->result() as $row): ?>
            <h2><?php echo ucwords($row->judul);?></h2>

            <p> <?php echo ucwords($row->konten);?></p>

            <a href="<?php echo base_url().'tentang'?>" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Pelajari Lebih Lanjut</a>
          <?php endforeach?>
        </div><!-- end messagebox -->
      </div><!-- end col -->
    </div><!-- end row -->

    <hr class="hr1"> 

    <div class="row">
      <div class="col-md-12">
       <div class="about-tab">
        <ul class="nav nav-tabs">
         <li class="active"><a href="#tab_a" data-toggle="tab"><?php foreach ($misi->result() as $row): 
         echo ucwords($row->judul);
       endforeach
       ?></a></li>
       <li><a href="#tab_b" data-toggle="tab"><?php foreach ($why->result() as $row): 
       echo ucwords($row->judul);
     endforeach
     ?></a></li>
     <li><a href="#tab_c" data-toggle="tab"><?php foreach ($about->result() as $row): 
     echo ucwords($row->judul);
   endforeach
   ?></a></li>								
 </ul>
 <div class="tab-content">
   <div class="tab-pane fade in active" id="tab_a">
    <p><?php foreach ($misi->result() as $row): 
    echo ucwords($row->konten);
  endforeach
  ?></p>
</div>
<div class="tab-pane fade" id="tab_b">
  <p><?php foreach ($why->result() as $row): 
  echo ucwords($row->konten);
endforeach
?></p>
</div>
<div class="tab-pane fade" id="tab_c">
  <p><?php foreach ($about->result() as $row): 
  echo ucwords($row->konten);
endforeach
?></p>
</div>
</div><!-- tab content -->
</div>
</div><!-- end col -->
</div><!-- end row -->

<hr class="hr1"> 

<div class="row text-center">
  <?php foreach ($top->result() as $row) :?>
    <div class="col-md-4 col-sm-6 col-xs-12">
     <div class="service-widget">
      <div class="post-media wow fadeIn">
        <a href="assets/uploads/barber_01.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
        <img src="assets/uploads/barber_01.jpg" alt="" class="img-responsive img-rounded">
      </div>
      <h3><?php echo ucwords($row->judul);?></h3>
      <p><?php echo ucwords($row->konten);?></p>
    </div><!-- end service -->
  </div>
<?php endforeach ?>
</div><!-- end row -->
</div><!-- end container -->
</div><!-- end section -->

<div id="barbers" class="section lb">
  <div class="container-fluid">
    <div class="section-title row text-center">
      <div class="col-md-8 col-md-offset-2">
        <small>LOKASI TOKO KAMI</small>
        <h3>Semakin Dekat Dengan Anda</h3>
        <hr class="grd1">
        <p class="lead">Berikut adalah lokasi dari toko kami yang dapat anda kunjungi</p>
      </div>
    </div><!-- end title -->

    <div class="row dev-list text-center" style="display: flex;
    justify-content: center;
    align-items: center;">
      <?php foreach ($alamat->result() as $row) :?>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="widget clearfix">
            <div class="hover-br">
             <img src="img/<?php echo $row->img;?>" alt="" class="img-responsive">
           </div>
           <div class="widget-title">
            <h3><?php echo ucwords($row->judul);?></h3>
          </div>
          <!-- end title -->
          <p><?php echo ucwords($row->konten);?></p>
        </div><!--widget -->
      </div><!-- end col -->
    <?php endforeach?>
  </div><!-- end row -->
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







            div class="section wb">
  <div class="container-fluid">
    <div class="row">
      
      <div class="col-md-8 col-md-offset-2 text-center">
        <div class="message-box">
          
          <!-- Carousel container -->
          <div id="my-pics" class="carousel slide" data-ride="carousel" style="width:400px;margin:auto;">
            <!-- Indicators -->
            <a class="btn btn-light btn-radius btn-brd grd1 effect-2" style="margin: 20px">
                Kategori
            </a>
            <!-- <ol class="carousel-indicators">
            <li data-target="#my-pics" data-slide-to="0" class="active"></li>
            <li data-target="#my-pics" data-slide-to="1"></li>
            <li data-target="#my-pics" data-slide-to="2"></li>
            </ol> -->

            <!-- Content -->
            <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <div class="item active">
              <img src="img/Tas_Wanita_01.jpg" alt="Sunset over beach">
              <a href="<?php echo base_url().'Main/product/0'?>" class="btn btn-light btn-radius btn-brd grd1 effect-2 butn" style="margin: 20px">
                Cek Produk
              </a>
              </div>
            <?php foreach ($product as $key) { ?>
              <div class="item">
              <img src="img/<?php echo $key->img_produk?>" alt="Sunset over beach">
              <a href="<?php echo base_url(); ?>Main/product/<?php echo $key->produk_id; ?>" class="btn btn-light btn-radius btn-brd grd1 effect-2 butn" style="margin: 20px">
                Cek Produk
              </a>
              </div>
            <?php } ?>
            </div>

            <!-- Previous/Next controls -->
            <a class="left carousel-control" href="#my-pics" role="button" data-slide="prev">
            <span class="icon-prev" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#my-pics" role="button" data-slide="next">
            <span class="icon-next" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
            

          </div>
        </div>
      </div><!-- end col -->
      
    </div><!-- end row -->
</div><!-- end container -->
</div><!-- end section -->