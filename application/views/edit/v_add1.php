<div class="container">
    <form action="<?php echo base_url(). 'Edit/save_add1'; ?>" method="post">
      <div class="form-group">
        <input type="hidden" name="nama" value="<?php echo $nama;?>">
        <input type="hidden" name="table" value="<?php echo $table;?>">
        <label for="exampleFormControlInput1">Judul</label>
        <input type="text" class="form-control" name="judul">
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Konten</label>
        <textarea class="form-control" rows="3" name="konten"></textarea>
      </div>
      <button type="submit" class="btn btn-outline-info" value="simpan">Simpan</button>
    </form>
</div>