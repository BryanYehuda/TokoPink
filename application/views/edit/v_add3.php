<div class="container">
  <form action="<?php echo base_url(). 'Edit/save_img2'; ?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <input type="hidden" name="table" value="<?php echo $table ?>">
      <label for="exampleFormControlInput1">Kategori</label>
      <input type="text" class="form-control" name="kategori">
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Info</label>
      <textarea class="form-control" name="konten" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-outline-info" value="simpan">Simpan</button>
  </form>
</div>