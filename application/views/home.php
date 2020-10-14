<style type="text/css">
  #paginator a{
    margin : 5px; 
  }
</style>
<!-- Page Content -->
<div id="page-content-wrapper">
  <a href="#menu-toggle" class="menuopener" id="menu-toggle"><i class="fa fa-bars"></i></a>

  <div id="home" class="parallax first-section parallax-off all-page-bar" data-stellar-background-ratio="0.4" style="background-image:url('<?php echo base_url()?>img/Beranda.jpg');">
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

<div id="services" class="section lb" style="padding-top: 0px">
    <div class="container-fluid">
        <div class="section-title row text-center">
            <div class="col-md-8 col-md-offset-2" style="margin-top: 30px">
                <?php foreach ($ket->result() as $row): ?>
                    <small>Selamat Datang di Toko Pink</small>
                    <h3><?php echo ucwords($row->judul); ?></h3>
                    <hr class="grd1">
                    <p class="lead"><?php echo ucwords($row->konten); ?></p>
                <?php endforeach ?>
            </div>
        </div><!-- end title -->

        <?php
        $nb_elem_per_page = 8;
        $page = isset($_GET['page'])?intval($_GET['page']):0;
        // if (isset($_GET['next'])) {
        //   $page = $page+1;
        // }elseif (isset($GET['prev'])) {
        //   $page = $page-1;
        // }
        $data = $produk->result();
        $number_of_pages = intval(count($data)/$nb_elem_per_page)+1;
        ?>

        <div class="row">
            <?php foreach (array_slice($data, $page*$nb_elem_per_page, $nb_elem_per_page) as $row){ ?>
                <div class="col-md-6">
                    <a href="<?php echo base_url(); ?>Main/product/<?php echo $row->id; ?>">
                        <div class="service-wrap clearfix">
                            <img src="<?php echo base_url()?>img/<?php echo $row->img;?>" alt="" class="img-responsive img-rounded alignleft">
                            <h4><?php echo ucwords($row->nama); ?></h4>
                            <p><?php echo ucwords($row->ket); ?></p>
                        </div><!-- end issue -->
                    </a>
                </div><!-- end col -->
            <?php } ?>

        </div>
        
        <div class="section-title row text-center">
          <div class="col-md-8 col-md-offset-2" style="margin-top: 30px">
           <!-- <ul id='paginator'> -->
              <ul class="pagination">
                <li class="page-item <?php echo($page==0) ? 'disabled' : ''?>"><a class="page-link" <?php echo($page!=0) ? 'href="?page='.($page-1).'"' : ''?>>Previous</a></li>
              <?php
              for($i=0;$i<$number_of_pages;$i++){?>
                  <li class="page-item <?php echo ($page==$i) ? 'active' : '' ?>"><a href='<?php echo base_url()?>beranda/?page=<?php echo $i ?>'><?php echo $i+1?></a></li>
              <?php } ?>
                  <li class="page-item <?php echo($page==$number_of_pages-1) ? 'disabled' : ''?>"><a class="page-link" <?php echo($page!=$number_of_pages-1) ? 'href="?page='.($page+1).'"' : ''?>>Next</a></li>
              </ul>
              <!-- </ul> -->
           </div>
        </div>
    </div><!-- end container -->
</div><!-- end section -->

<div id="testimonials" class="parallax section db parallax-off" style="background-image:url('<?php echo base_url()?>img/Testi.jpg');">
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

            <script type="text/javascript" src="https://pagination.js.org/dist/2.1.5/pagination.js"></script>
            <script type="text/javascript" src="https://pagination.js.org/dist/2.1.5/pagination.min.js"></script>

            <script src="https://code.jquery.com/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.4.2/jquery.twbsPagination.js"></script>

<!-- 
            <script type="text/javascript">
              $('#pagination-demo').twbsPagination({
                totalPages: 5,
                // the current page that show on start
                startPage: 1,

                // maximum visible pages
                visiblePages: 5,

                initiateStartPageClick: true,

                // template for pagination links
                href: false,

                // variable name in href template for page number
                hrefVariable: '{{number}}',

                // Text labels
                first: 'First',
                prev: 'Previous',
                next: 'Next',
                last: 'Last',

                // carousel-style pagination
                loop: false,

                // callback function
                onPageClick: function (event, page) {
                  $('.page-active').removeClass('page-active');
                  $('#page'+page).addClass('page-active');
                },

                // pagination Classes
                paginationClass: 'pagination',
                nextClass: 'next',
                prevClass: 'prev',
                lastClass: 'last',
                firstClass: 'first',
                pageClass: 'page',
                activeClass: 'active',
                disabledClass: 'disabled'

                });

            </script> -->