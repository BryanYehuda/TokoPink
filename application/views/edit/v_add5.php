<div class="container">
  <form action="<?php echo base_url(). 'Edit/save_img4'; ?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <input type="hidden" name="table" value="<?php echo $table ?>">
    <div class="row">
      <div class="col-md-2">
        <label class="newbtn"> 
          <p>UPLOAD TESTIMONI BARU</p>
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