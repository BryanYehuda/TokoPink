<style type="text/css">
  li{
    margin : 5px;
  }
</style>
<!-- Page Content -->
<div id="page-content-wrapper">
  <a href="#menu-toggle" class="menuopener" id="menu-toggle"><i class="fa fa-bars"></i></a>

  <div class="parallax section db parallax-off all-page-bar" style="background-image:url('img/Bisnis.jpg');">">
    <div class="container">
     <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
       <div class="title title-1 text-center">
        <div class="title--heading">
         <h1>Berbisnis</h1>
       </div>
       <div class="clearfix"></div>
       <ol class="breadcrumb">
         <li><a href="assets/index-3.html">Home</a></li>
         <li class="active">Berbisnis</li>
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

<div id="appointment" class="section wb">
  <div class="container-fluid">
    <?php foreach ($bis->result() as $bisrow) : ?>
    <div class="section-title row text-center">
      <div class="col-md-8 col-md-offset-2">
        <h4><?php echo ucwords($bisrow->nama); ?></h4>
        <h3><?php echo ucwords($bisrow->judul); ?></h3>
        <hr class="grd1">
        <p class="lead"><?php echo ucwords($bisrow->konten); ?></p>
      </div>
    </div><!-- end title -->
    <?php endforeach; ?>

    <div class="row" style="display: flex;justify-content: center;align-items: center;">
      <div class="col-md-8">
       <div class="appointment-left">
        <h2 style="text-align: center;">Opening Time</h2>
        <div class="appointment-time" style="margin-top: 10px">
          <table class="table table-striped">
            <tbody>
            <?php foreach ($jadwal->result() as $jdw) : ?>
                  <tr>
                    <td><?php echo ucwords($jdw->hari); ?></td>
                    <td style="text-align: right;"><?php echo ucwords($jdw->jbuka." - ".$jdw->jtutup); ?></td>
                  </tr>
           <?php endforeach; ?>
            </tbody>
          </table>
         </div>
       </div>
     </div>
    </div>

   <div class="row" style="display: flex;justify-content: center;align-items: center;margin-bottom: 20px">
      <div class="col-md-8">
       <div class="appointment-left">
        <h2 style="text-align: center;margin-top: 8%">Contact</h2>
        <div class="col-md-12" style="text-align: center;margin-top: 10px">
        <?php foreach ($kontak as $key) {?>
          <!--<ul>-->
          <!--  <li>-->
          <div class="col-md-4">
              
          </div>
          <table class="col-md" style="justify-content: center;">
              <tr>
                  <td>
                  </td>
                  <td>
                    <a href="<?php echo $key->konten ?>">
                        <img src="img/<?php echo $key->img;?>" style="width: 40px;">
                        <?php echo ucwords($key->judul) ?>
                    </a>
                  </td>
              </tr>
            </table>
          <!--  </li>-->
          <!--</ul>-->
        <?php  }?>  
         </div>
       </div>

     </div>
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