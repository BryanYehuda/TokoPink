<!doctype html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <!-- Required meta tags -->
  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="../../../assets/clock/bootstrap-clockpicker.min.css">
  <link rel="stylesheet" href="../../../assets/clock/clockpicker.css">

  <title>CMS || Toko Pink</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">CMS Toko Pink</a>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(). 'edit/beranda' ?>">Ubah data</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Tambah data
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="<?php echo base_url(). 'Edit/add1/t_konten1/konten1'; ?>">Header Carousel</a>
            <a class="dropdown-item" href="<?php echo base_url(). 'Edit/add1/t_kontak/kontak'; ?>">Informasi Kontak</a>
            <a class="dropdown-item" href="<?php echo base_url(). 'Edit/add2/t_ad'; ?>">Alamat Toko</a>
            <a class="dropdown-item" href="<?php echo base_url(). 'Edit/add3/t_katpro'; ?>">Kategori Produk</a>
            <a class="dropdown-item" href="<?php echo base_url(). 'Edit/add4/t_pro'; ?>">Produk</a>
            <a class="dropdown-item" href="<?php echo base_url(). 'Edit/add5/t_testi'; ?>">Testimoni</a>
          </div>
        </li>
      </ul>
      <span class="navbar-text">
        <div class="btn-group dropleft">
          <button type="button" class="btn btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Hi, <?php echo ucwords($this->session->userdata('nama')); ?>
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="<?php echo base_url(). 'Edit/edit_adm'; ?>">Ganti Password</a>
            <a class="dropdown-item" href="<?php echo base_url(). 'Login/logout'; ?>">Logout</a>
          </div>
        </div>
      </span>
    </div>
  </nav>
  <!-- CONTENT -->
  <?php echo $page;?>
  <!-- CONTENT -->
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="../../../assets/clock/bootstrap-clockpicker.min.js"></script>
  <script src="../../../assets/clock/clockpicker.js"></script>
  <script src="../../../assets/clock/jquery-clockpicker.min.js"></script>
</body>
<script type="text/javascript">
  $('.clockpicker').clockpicker({
    donetext: 'Done'
  });</script>
  </html>