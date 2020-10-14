<div class="container">
  <?php foreach ($isi->result() as $row): ?>
    <form action="<?php echo base_url(). 'Edit/save_edit_img4'; ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $row->id ?>">
        <input type="hidden" name="table" value="<?php echo $table ?>">
      <div class="row">
        <div class="col-md-2">
          <label class="newbtn"> 
            <p>UPLOAD FOTO TESTIMONI</p>
            <img id="blah" src="http://placehold.it/120x120">
            <input id="pic" class='pis' name="img" onchange="readURL(this);" type="file" >
          </label>
        </div>
        <div class="col-md-2">
          <label>
            <p>FOTO TESTIMONI LAMA</p>
            <img id="blah" src="../../../img/<?php echo $row->img;?>">
            <input type="hidden" name="old" value="<?php echo $row->img; ?>">
          </label>
        </div>
      </div>
      <button type="submit" class="btn btn-outline-info" value="simpan">Simpan</button>
    </form>
  <?php endforeach; ?>
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