<div class="container">
  <?php foreach ($isi->result() as $row): ?>
    <form action="<?php echo base_url(). 'Edit/save_edit_time'; ?>" method="post">
      <div class="form-group">
        <input type="hidden" name="id" value="<?php echo $row->id ?>">
        <input type="hidden" name="table" value="<?php echo $table ?>">
        <label for="exampleFormControlInput1">Hari</label>
        <input type="text" class="form-control" name="hari" value="<?php echo ucwords($row->hari);?>">
      </div>
      <div class="form-group">
        <div class="custom-control custom-radio custom-control-inline">
          <input onclick="undisableTxt()" type="radio" id="customRadioInline1" class="custom-control-input" name="toko" value="buka">
          <label class="custom-control-label" for="customRadioInline1">Toko Buka</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input onclick="disableTxt()" type="radio" id="customRadioInline2" class="custom-control-input" name="toko" value="tutup">
          <label class="custom-control-label" for="customRadioInline2">Toko Tutup</label>
        </div>
      </div>
      <div class="row">
        <div class="form-group clockpicker col-md-2">
          <label for="exampleFormControlInput1">Jam Buka</label>
          <input id="jsbuka" type="text" class="form-control" name="buka" value="<?php echo($row->jbuka)?>">
          <span class="input-group-addon">
            <i class="fa fa-clock"></i>
          </span>
        </div>
        <div class="form-group clockpicker col-md-2">
          <label for="exampleFormControlInput1">Jam Tutup</label>
          <input id="jstutup" type="text" class="form-control" name="tutup" value="<?php echo($row->jtutup)?>">
          <span class="input-group-addon">
            <i class="fa fa-clock"></i>
          </span>
        </div>
      </div>
      <button type="submit" class="btn btn-outline-info" value="simpan">Simpan</button>
    </form>
  <?php endforeach; ?>
</div>

<script>
  function disableTxt() {
    document.getElementById("jsbuka").disabled = true;
    document.getElementById("jstutup").disabled = true;
  }

  function undisableTxt() {
    document.getElementById("jsbuka").disabled = false;
    document.getElementById("jstutup").disabled = false;
  }
</script>