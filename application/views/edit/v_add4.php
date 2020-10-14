<div class="container">
  <form action="<?php echo base_url(). 'Edit/save_img3'; ?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <input type="hidden" name="table" value="<?php echo $table ?>">
      <label for="exampleFormControlInput1">Nama Produk</label>
      <input type="text" class="form-control" name="nama">
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Kategori Produk</label>
      <select class="form-control" id="exampleFormControlSelect1" name="kategori">
        <?php foreach($kat->result() as $pro) : ?>
          <option value="<?php echo $pro->id;?>"><?php echo ucwords($pro->kategori);?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="form-group">
        <div class="form-row align-items-center">
            <div class="col-3">
                <label for="exampleFormControlInput1">Bahan Produk</label>
                <input type="text" class="form-control" name="bahan">
            </div>
            <div class="col-3">
                <label for="exampleFormControlInput1">Ukuran Produk</label>
                <input type="text" class="form-control" name="ukuran">
            </div>
            <div class="col-3">
                <label for="exampleFormControlInput1">Berat Produk</label>
                <input type="text" class="form-control" name="berat">
            </div>
            <div class="col-3">
                <label for="exampleFormControlInput1">Warna Tersedia</label>
                <input type="text" class="form-control" name="warna">
            </div>
        </div>
    </div>
    <div class="form-group mb-2">
      <label for="exampleFormControlInput1">Harga Produk</label>
      <div class="form-row align-items-center">
        <div class="col-3">
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text">Min</div>
            </div>
            <input type="text" class="form-control" id="inlineFormInputGroup" name="hmin">
          </div>
        </div>
        <div class="col-auto">
          <div class="input-group mb-2">
            <div class="input-group">
              -
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text">Max</div>
            </div>
            <input type="text" class="form-control" id="inlineFormInputGroup" name="hmax">
          </div>
        </div>
        </div>
        <div class="form-row align-items-center">
        <div class="col-3">
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text">Partai</div>
            </div>
            <input type="text" class="form-control" id="inlineFormInputGroup" name="hpar">
          </div>
        </div>
        <div class="col-3">
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text">Grosir</div>
            </div>
            <input type="text" class="form-control" id="inlineFormInputGroup" name="hsir">
          </div>
        </div>
        <div class="col-3">
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text">Eceran</div>
            </div>
            <input type="text" class="form-control" id="inlineFormInputGroup" name="hcer">
          </div>
        </div>
        <div class="col-3">
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text">Reseller</div>
            </div>
            <input type="text" class="form-control" id="inlineFormInputGroup" name="hsel">
          </div>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Minimal Pembelian</label>
      <input type="text" class="form-control" name="minpem">
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Keterangan</label>
      <textarea class="form-control" name="ket" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Kelengkapan</label>
      <textarea class="form-control" name="kel" rows="3"></textarea>
    </div>
    <div class="row">
      <div class="col-md-2">
        <label class="newbtn"> 
          <p>UPLOAD BARU</p>
          <img id="blah" src="http://placehold.it/120x120">
          <input id="pic" name="img" class='pis' onchange="readURL(this);" type="file" >
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-outline-info" value="simpan">Simpan</button>
  </form>
</div>
<script>

 $('.newbtn').bind("click" , function () {
  $('#pic').click();
});

 function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $('#blah')
      .attr('src', e.target.result);
    };

    reader.readAsDataURL(input.files[0]);
  }
}
</script>
<style>


  #pic{
   display: none;
 }

 .newbtn{
   cursor: pointer;
 }
 #blah{
  max-width:100px;
  height:100px;
  margin-top:20px;
}

</style>