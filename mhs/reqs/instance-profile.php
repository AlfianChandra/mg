<?php
if(!$_POST)
{
  echo "error";
}
else
{
  require_once '../../core/Instansi.php';
  require_once '../../core/Mahasiswa.php';

  $id = $_POST['id'];
  $username = $mahasiswa->nim;
  $_SESSION['instansi'] = $id;
  $instansi->instansiTerpilih($id);
  $instansi->statusInstansi();
  
}
    ?>
<style>
  .prof-title
  {
    font-weight:bold;
  }
</style>
<div class='col-md-12'>
  <button type='button' class='btn btn-default back'>Kembali</button>
  <?php if($mahasiswa->sks >= 120) : ?>
    <?php if ($instansi->tempat_magang !== NULL) : ?>
      <?php if ($instansi->tempat_magang == $instansi->username) : ?>
        <button type="button" class='btn btn-success'>terpilih</button> 
      <?php else : ?>
        <a class='btn btn-primary' href="../action/pilih.php">ubah instansi</a>
      <?php endif; ?>
    <?php else : ?>
      <a class='btn btn-primary' href="../action/pilih.php">Pilih</a>
    <?php endif; ?>
  <?php endif; ?>
</div>
<div class='col-md-12'>
  <h3 class='prof-title'><?= $instansi->nama_instansi ?></h3>
  <div class='col-md-9'>
    <h5 style='font-weight:bold;font-size:13px;'>DESKRIPSI</h5>
    <p><?= $instansi->deskripsi ?></p>
    
    <h5 style='font-weight:bold;font-size:13px;'>Syarat</h5>
    <p><?= $instansi->syarat ?></p>
    
    <h5 style='font-weight:bold;font-size:13px;'>Kriteria</h5>
    <p><?= $instansi->kriteria ?></p>
  </div>
  <div class='col-md-3'>
    <img src='assets/img/<?= $instansi->username ?>.png' style='float:left; box-sizing:border-box;width:100%;' alt="gambar">
    <h5 style='font-weight:bold;font-size:13px;'><span class='fa fa-user'></span> Kapasitas:  <b style='color:purple;'><?= $instansi->kapasitas ?> Orang</b></h5>
    <h5 style='font-weight:bold;font-size:13px;'><span class='fa fa-road'></span> Alamat:  <b style='color:purple;'><?= $instansi->alamat_instansi ?></b></h5>
  </div>
</div>

<script>
$(document).ready(function(){
  var modal = new Modal();
  var ht = new HtRequest();
  $(".back").click(function(){
    modal.triggerModal("open","Instansi");
    ht.htGet("reqs/instance.php",".md-content");
  });  
})  
</script>
