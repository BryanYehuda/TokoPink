<div class="container">
  <table class="table">
    <thead>
      <tr>
        <h2>Konten</h2>
        <th scope="col">Bagian</th>
        <th scope="col">Judul</th>
        <th scope="col">Konten</th>
        <th scope="col">Tindakan</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($content1->result() as $row): ?>
        <tr>
          <th>Corousel</th>
          <td><?php echo ucwords($row->judul);?></td>
          <td><?php echo ucwords($row->konten);?></td>
          <td>
            <a type="button" class="btn btn-outline-info" href="<?php echo base_url(); ?>Edit/edit/<?php echo$row->id; ?>/t_konten1">Edit</a>
            <a type="button" class="btn btn-outline-danger" href="<?php echo base_url(); ?>Edit/delete/<?php echo$row->id; ?>/t_konten1">Delete</a>
          </td>
        </tr>
      <?php endforeach; ?>
      <?php foreach ($sekilas->result() as $row): ?>
        <tr>
          <th>Sekilas</th>
          <td><?php echo ucwords($row->judul);?></td>
          <td><?php echo ucwords($row->konten);?></td>
          <td>
            <a type="button" class="btn btn-outline-info" href="<?php echo base_url(); ?>Edit/edit/<?php echo$row->id; ?>/t_konten1">Edit</a>
          </td>
        </tr>
      <?php endforeach; ?>
      <?php foreach ($misi->result() as $row): ?>
        <tr>
          <th>Data 1</th>
          <td><?php echo ucwords($row->judul);?></td>
          <td><?php echo ucwords($row->konten);?></td>
          <td>
            <a type="button" class="btn btn-outline-info" href="<?php echo base_url(); ?>Edit/edit/<?php echo$row->id; ?>/t_konten1">Edit</a>
          </td>
        </tr>
      <?php endforeach; ?>
      <?php foreach ($why->result() as $row): ?>
        <tr>
          <th>Data 2</th>
          <td><?php echo ucwords($row->judul);?></td>
          <td><?php echo ucwords($row->konten);?></td>
          <td>
            <a type="button" class="btn btn-outline-info" href="<?php echo base_url(); ?>Edit/edit/<?php echo$row->id; ?>/t_konten1">Edit</a>
          </td>
        </tr>
      <?php endforeach; ?>
      <?php foreach ($about->result() as $row): ?>
        <tr>
          <th>Data 3</th>
          <td><?php echo ucwords($row->judul);?></td>
          <td><?php echo ucwords($row->konten);?></td>
          <td>
            <a type="button" class="btn btn-outline-info" href="<?php echo base_url(); ?>Edit/edit/<?php echo$row->id; ?>/t_konten1">Edit</a>
          </td>
        </tr>
      <?php endforeach; ?>
      <?php foreach ($about2->result() as $row): ?>
        <tr>
          <th>Data 4</th>
          <td><?php echo ucwords($row->judul);?></td>
          <td><?php echo ucwords($row->konten);?></td>
          <td>
            <a type="button" class="btn btn-outline-info" href="<?php echo base_url(); ?>Edit/edit/<?php echo$row->id; ?>/t_konten1">Edit</a>
          </td>
        </tr>
      <?php endforeach; ?>
      <?php foreach ($bis->result() as $row): ?>
        <tr>
          <th>Data 5</th>
          <td><?php echo ucwords($row->judul);?></td>
          <td><?php echo ucwords($row->konten);?></td>
          <td>
            <a type="button" class="btn btn-outline-info" href="<?php echo base_url(); ?>Edit/edit/<?php echo$row->id; ?>/t_konten1">Edit</a>
          </td>
        </tr>
      <?php endforeach; ?>
      <?php foreach ($contact->result() as $row): ?>
        <tr>
          <th>Kontak</th>
          <td><?php echo ucwords($row->judul);?></td>
          <td><?php echo ucwords($row->konten);?></td>
          <td>
            <a type="button" class="btn btn-outline-info" href="<?php echo base_url(); ?>Edit/edit/<?php echo$row->id; ?>/t_konten1">Edit</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <br>
  <table class="table">
    <thead>
      <tr>
        <h2>List Kontak</h2>
        <th scope="col">Icon</th>
        <th scope="col">Placeholder</th>
        <th scope="col">Link</th>
        <th scope="col">Tindakan</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($list->result() as $row): ?>
        <tr>
          <th>
          <label>
            <img id="img" src="../img/<?php echo $row->img;?>">
          </label></th>
          <td><?php echo ucwords($row->judul);?></td>
          <td><?php echo ucwords($row->konten);?></td>
          <td>
            <a type="button" class="btn btn-outline-info" href="<?php echo base_url(); ?>Edit/edit_img1/<?php echo$row->id; ?>/t_kontak">Edit</a>
            <a type="button" class="btn btn-outline-danger" href="<?php echo base_url(); ?>Edit/delete/<?php echo$row->id; ?>/t_kontak">Delete</a>
          </td>
        </tr>
      <?php endforeach; ?>
      </tbody>
  </table>
  <br>
  <table class="table">
    <thead>
      <tr>
        <h2>Jadwal Buka Toko</h2>
        <th scope="col">No</th>
        <th scope="col">Hari</th>
        <th scope="col">Jam Buka</th>
        <th scope="col">Jam Tutup</th>
        <th scope="col">Tindakan</th>
      </tr>
    </thead>
    <tbody>
      <?php $no=1; foreach ($jam->result() as $row): ?>
      <tr>
        <th><?php echo $this->session->userdata('row')+$no++;?></th>
        <td><?php echo ucwords($row->hari);?></td>
        <td><?php echo ucwords($row->jbuka);?></td>
        <td><?php echo ucwords($row->jtutup);?></td>
        <td>
          <a type="button" class="btn btn-outline-info" href="<?php echo base_url(); ?>Edit/edit_time/<?php echo$row->id; ?>/t_jadwal">Edit</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Bagian</th>
      <th scope="col">Judul</th>
      <th scope="col">Konten</th>
      <th scope="col">Gambar</th>
      <th scope="col">Tindakan</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($alamat->result() as $row): ?>
      <tr>
        <th>Alamat</th>
        <td><?php echo ucwords($row->judul);?></td>
        <td><?php echo ucwords($row->konten);?></td>
        <td>
          <label>
            <img id="img" src="../img/<?php echo $row->img;?>">
          </label>
        </td>
        <td>
          <a type="button" class="btn btn-outline-info" href="<?php echo base_url(); ?>Edit/edit_img1/<?php echo$row->id; ?>/t_ad">Edit</a>
          <a type="button" class="btn btn-outline-danger" href="<?php echo base_url(); ?>Edit/delete_img/<?php echo$row->id; ?>/t_ad">Delete</a>
        </td>
      </tr>
    <?php endforeach; ?>
    <?php foreach ($top->result() as $row): ?>
      <tr>
        <th>Keunggulan</th>
        <td><?php echo ucwords($row->judul);?></td>
        <td><?php echo ucwords($row->konten);?></td>
        <td>
          <label>
            <img id="img" src="../img/<?php echo $row->img;?>">
          </label>
        </td>
        <td>
          <a type="button" class="btn btn-outline-info" href="<?php echo base_url(); ?>Edit/edit_img1/<?php echo$row->id; ?>/t_ic">Edit</a>
          <a type="button" class="btn btn-outline-danger" href="<?php echo base_url(); ?>Edit/delete_img/<?php echo$row->id; ?>/t_ic">Delete</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<br>
<table class="table">
  <thead>
    <tr>
      <h2>Produk</h2>
      <th scope="col">Kategori</th>
      <th scope="col">Nama</th>
      <th scope="col">Info</th>
      <th scope="col">Harga</th>
      <th scope="col">Min. Beli</th>
      <th scope="col">Keterangan</th>
      <th scope="col">Kelengkapan</th>
      <th scope="col">Gambar</th>
      <th scope="col">Tindakan</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($pro->result() as $row): ?>
      <tr>
        <th><?php echo ucwords($row->kategori);?></th>
        <td><?php echo ucwords($row->nama)?></td>
        <td>
        Bahan
        <?php echo ucwords($row->bahan)?>
        <br>
        Berat
        <?php echo ucwords($row->berat)?>
        <br>
        Ukuran
        <?php echo ucwords($row->size)?>
        <br>
        warna
        <?php echo ucwords($row->warna)?>
        </td>
        <td>
        Range
        <?php echo "Rp " . number_format($row->min,2,',','.')." - "."Rp " . number_format($row->max,2,',','.');?>
        <br>
        Partai
        <?php echo "Rp " . number_format($row->partai,2,',','.');?>
        <br>
        Grosir
        <?php echo "Rp " . number_format($row->grosir,2,',','.');?>
        <br>
        Eceran
        <?php echo "Rp " . number_format($row->ecer,2,',','.');?>
        <br>
        Reseller
        <?php echo "Rp " . number_format($row->resell,2,',','.');?>
        </td>
        <td><?php echo ucwords($row->minpem)?></td>
        <td><?php echo ucwords($row->ket);?></td>
        <td><?php echo ucwords($row->kel);?></td>
        <td><l
          abel>
          <img id="img" src="../img/<?php echo $row->img;?>">
        </label>
      </td>
      <td>
        <a type="button" class="btn btn-outline-info" href="<?php echo base_url(); ?>Edit/edit_img3/<?php echo$row->id; ?>/t_pro">Edit</a>
        <a type="button" class="btn btn-outline-danger" href="<?php echo base_url(); ?>Edit/delete_img/<?php echo$row->id; ?>/t_pro">Delete</a>
      </td>
    </tr>
  <?php endforeach; ?>
</tbody>
</table>
<br>
<table class="table">
  <thead>
    <tr>
      <h2>Testimoni</h2>
      <th scope="col">No</th>
      <th scope="col">Foto</th>
      <th scope="col">Tindakan</th>
    </tr>
  </thead>
  <tbody>
    <?php $no=1; foreach ($testi->result() as $row): ?>
    <tr>
      <th><?php echo $this->session->userdata('row')+$no++;?></th>
      <td><label>
        <img id="img" src="../img/<?php echo $row->img;?>">
      </label>
    </td>
    <td>
      <a type="button" class="btn btn-outline-info" href="<?php echo base_url(); ?>Edit/edit_img4/<?php echo$row->id; ?>/t_testi">Edit</a>
      <a type="button" class="btn btn-outline-danger" href="<?php echo base_url(); ?>Edit/delete_img/<?php echo$row->id; ?>/t_testi">Delete</a>
    </td>
  </tr>
<?php endforeach; ?>
</tbody>
</table>

<table class="table">
    <thead>
      <tr>
        <h2>Gambar Background</h2>
        <th scope="col">Bagian</th>
        <th scope="col">Nama</th>
        <th scope="col">Gambar</th>
        <th scope="col">Tindakan</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach ($bg->result() as $row): ?>
        <tr>
          <th>Gambar</th>
          <td><?php echo ucwords($row->nama);?></td>
          <td><label>
            <img id="img" src="../img/<?php echo $row->img;?>">
            </label></td>
          <td>
            <a type="button" class="btn btn-outline-info" href="<?php echo base_url(); ?>Edit/edit_imgbg/<?php echo$row->nama; ?>/t_bg">Edit</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
<style>
 #img{
  max-width:100px;
  height:100px;
  margin-top:20px;
}
</style>