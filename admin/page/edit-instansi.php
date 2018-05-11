<?php 
  require_once '../../core/Instansi.php';

  if(!$_POST)
  {
    die("error");
  }else{

    $id = $_POST['id'];

    $instansi->instansiTerpilih($id);
    $_SESSION['instansi_username'] = $id;

  }
 ?>
<form class="ins-edit-form" method="post" enctype="multipart/form-data">
  
  <div class='col-md-3'>
    <h3 style='font-weight:bold;'>Informasi Instansi</h3>
    <input type='text' class='form-control i3' placeholder="Nama Instansi" required='required' name='nama_instansi' value="<?= $instansi->nama_instansi ?>">
    <input type='number' class='form-control i4' placeholder="Kapasitas Pemagang" required='required' name='kapasitas' value="<?= $instansi->kapasitas ?>">
    <input type='text' class='form-control i5' placeholder="Kriteria Pemagang" required='required' name='kriteria' value="<?= $instansi->kriteria ?>">
    <input type='text' class='form-control i6' placeholder="Syarat" required='required' name='syarat' value="<?= $instansi->syarat ?>">
  </div>
  <div class='col-md-6'>
    <h3 style='font-weight:bold;'>Informasi Lain</h3>
    <input type='text' class='form-control i7' placeholder="Alamat" required='required' name='alamat' value="<?= $instansi->alamat_instansi ?>">

    <textarea class='form-control i0' name='deskripsi' placeholder='Deskripsi Instansi'><?= $instansi->deskripsi ?></textarea>
  </div>

    <div class="col-md-12">
      <input type="submit" class="btn btn-primary" name="submit" value="Simpan">
      <input type="submit" class="btn btn-default cancel" name="submit" value="Batal">
    </div>
  
</form>
<script>
  $(document).ready(function(){
    var ht = new HtRequest();
    var modal = new Modal();
    
    $(".ins-edit-form").submit(function(ev){
      ev.preventDefault();
      var data = $(this).serialize();
      ht.fireForm("../action/editInstansi.php",data);
      ht.htGet("page/instansi-list.php",".md-content");
      modal.triggerModal("open","Lihat Instansi");
    });
    
    $(".cancel").click(function(){
      ht.htGet("page/instansi-list.php",".md-content");
      modal.triggerModal("open","Lihat Instansi");
    });
    
  });
</script>
