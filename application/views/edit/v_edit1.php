<div class="container">
  <?php foreach ($isi->result() as $row): ?>
    <form action="<?php echo base_url(). 'Edit/save_edit'; ?>" method="post">
      <div class="form-group">
        <input type="hidden" name="id" value="<?php echo $row->id ?>">
        <input type="hidden" name="table" value="<?php echo $table ?>">
        <label for="exampleFormControlInput1">Judul</label>
        <input type="text" class="form-control" name="judul" value="<?php echo ucwords($row->judul);?>">
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Konten</label>
        <textarea class="form-control" rows="3" name="konten"><?php echo ucwords($row->konten);?></textarea>
      </div>
      <button type="submit" class="btn btn-outline-info" value="simpan">Simpan</button>
    </form>
  <?php endforeach; ?>
</div>