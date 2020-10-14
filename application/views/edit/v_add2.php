<div class="container">
  <form action="<?php echo base_url(). 'Edit/save_img1'; ?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <input type="hidden" name="table" value="<?php echo $table ?>">
      <label for="exampleFormControlInput1">Judul</label>
      <input type="text" class="form-control" name="judul">
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Konten</label>
      <textarea class="form-control" name="konten" rows="3"></textarea>
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