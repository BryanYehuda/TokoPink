<!-- Page Content -->
<div id="page-content-wrapper">
  <a href="#menu-toggle" class="menuopener" id="menu-toggle"><i class="fa fa-bars"></i></a>

  <div class="parallax section db parallax-off all-page-bar" style="background-image:url('img/Tentang.jpg');">">
    <div class="container">
     <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
       <div class="title title-1 text-center">
        <div class="title--heading">
         <h1>Tentang Kami</h1>
       </div>
       <div class="clearfix"></div>
       <ol class="breadcrumb">
         <li><a href="<?php echo base_url().'beranda'?>">Home</a></li>
         <li class="active">Tentang Kami</li>
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

<div class="section wb" style="padding-bottom: 0px">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center">
        <div class="message-box">
          <h4>Sekilas</h4>
          <?php foreach ($sekilas->result() as $row): ?>
            <h2><?php echo ucwords($row->judul);?></h2>

            <p> <?php echo ucwords($row->konten);?></p>
          <?php endforeach?>
        </div><!-- end messagebox -->
      </div><!-- end col -->
    </div><!-- end row -->

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

    <div class="row dev-list text-center">
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
    <div class="section-title row text-center" style="margin-bottom: 0px">
      <div class="col-md-8 col-md-offset-2">
        <small>TESTIMONI PELANGGAN KAMI</small>
        <h3>HAPPY TESTIMONIALS!</h3>
        <hr class="grd1">
      </div>
    </div><!-- end title -->

    <div class="row">
      <div class="col-md-12 col-sm-12">
        <div id="my-pics" class="carousel slide" data-ride="carousel" style="width:250px;margin:auto;">
            <!-- <ol class="carousel-indicators">
            <li data-target="#my-pics" data-slide-to="0" class="active"></li>
            <li data-target="#my-pics" data-slide-to="1"></li>
            <li data-target="#my-pics" data-slide-to="2"></li>
            </ol> -->

            <!-- Content -->
            <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <?php $isFirst=true; 
            foreach ($testi->result() as $key) {?>
                <div class="item <?php echo ($isFirst) ? ' active' : '' ; ?>">
                  <img id="img" src="../img/<?php echo $key->img;?>" alt="Sunset over beach">
                </div>
                <?php 
                $isFirst=false;
              } ?>
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
      </div><!-- end col -->
    </div><!-- end row -->
  </div><!-- end container -->
            </div><!-- end section -->