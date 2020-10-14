<div class="container">
    <form action="<?php echo base_url(). 'Edit/save_edit_adm'; ?>" method="post">
      <div class="form-group">
        <input type="hidden" name="id" value="<?php echo $this->session->userdata('id') ?>">
        <label for="exampleFormControlInput1">Nama</label>
        <input type="text" class="form-control" name="nama" value="<?php echo ucwords($this->session->userdata('nama'));?>">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Username</label>
        <input type="text" class="form-control" name="username" value="<?php echo $this->session->userdata('username');?>" readonly>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Password Baru</label>
        <input type="password" class="form-control" name="pass">
      </div>
      <button type="submit" class="btn btn-outline-info" value="simpan">Simpan</button>
    </form>
</div>