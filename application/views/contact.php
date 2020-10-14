
<!-- Page Content -->
<div id="page-content-wrapper">
  <a href="#menu-toggle" class="menuopener" id="menu-toggle"><i class="fa fa-bars"></i></a>

  <div class="parallax section db parallax-off all-page-bar" style="background-image:url('img/Kontak.jpg');">">
    <div class="container">
     <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
       <div class="title title-1 text-center">
        <div class="title--heading">
         <h1>Contact</h1>
       </div>
       <div class="clearfix"></div>
       <ol class="breadcrumb">
         <li><a href="assets/index-3.html">Home</a></li>
         <li class="active">Contact</li>
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

<div id="contact" class="section wb">
  <div class="container-fluid">
    <div class="section-title row text-center">
      <div class="col-md-8 col-md-offset-2">
        <small>Hubungi Kami</small>
        <h3>Contact</h3>
        <hr class="grd1">
        <?php foreach ($contact->result() as $row): ?>
          <p class="lead"><?php echo ucwords($row->konten);?></p>
        <?php endforeach?>
        <?php foreach ($list->result() as $row):?>
          <tr>
            <td>
              <a href="<?php echo ucwords($row->konten)?>" class="btn btn-light btn-radius btn-brd grd1 effect-1 butn">
                </i><?php echo ucwords($row->judul)?>
              </a>
            </td>
          </tr>
        <?php endforeach?>
      </div>
    </div><!-- end title -->
  </div><!-- end container -->
</div><!-- end section -->
