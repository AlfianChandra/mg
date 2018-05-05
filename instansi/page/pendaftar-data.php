<?php

  if(!$_POST) {
    die("error");
  }else{
    $_SESSION['id'] = $_POST['id'];
    $id = $_SESSION['id'];
    require_once '../../core/Mahasiswa.php';
    $mahasiswa->mahasiswaTerpilih($id);

  }

?>

<style>
  .profile-head
  {
    font-weight:bold;
  }
  
  .data-type
  {
    width:30%;
    float:left;
    box-sizing:border-box;
    padding:5px;
    border-bottom:2px;
    margin:0;
  }
  
  .data-content
  {
    font-weight: bold;
    width:70%;
    float:left;
    margin:0;
    box-sizing:border-box;
    padding:5px;
    text-transform: uppercase;
  }
  
  .profile-content
  {
    height:300px;
    overflow-y:auto;
  }
</style>

<div class='col-md-3'>
  <h3 style='font-weight: bold;'>Foto Mahasiswa</h3>
  <img src='http://icons.iconarchive.com/icons/webalys/kameleon.pics/512/Student-3-icon.png' style='width:100%;'>
</div>

<div class='col-md-9'>
  <h3 style='font-weight: bold;'>Data Mahasiswa</h3>
  <div class="profile-content">
    <h5 class="data-type">Nama</h5><h5 class="data-content"> : <?= $mahasiswa->nama ?></h5>
    <h5 class="data-type">Jenis Kelamin</h5><h5 class="data-content">: <?= $mahasiswa->jenis_kelamin ?></h5>
    <h5 class="data-type">Tempat & Tanggal Lahir</h5><h5 class="data-content">: <?= $mahasiswa->tempat_lahir . ', ' . $mahasiswa->tanggal_lahir ?></h5>
    <h5 class="data-type">Nomor Telepon</h5><h5 class="data-content">: <?= $mahasiswa->telp ?></h5>
    <h5 class="data-type">NIM</h5><h5 class="data-content">: <?= $mahasiswa->nim ?></h5>
    <h5 class="data-type">Program Studi</h5><h5 class="data-content">: <?= $mahasiswa->prodi ?></h5>
    <h5 class="data-type">Fakultas</h5><h5 class="data-content">: <?= $mahasiswa->fakultas ?></h5>

  </div>
  
</div>

<div class="col-md-12">
  

  <form action="../action/penerimaanMagang.php" class="col-md-9" method="post" enctype="multipart/form-data"">
    <button type='button' class='btn btn-default backbtn col-md-3'>Kembali</button>
    file surat balasan
    <input type="file" name="surat_balasan" required>
    <input type="radio" name="penerimaan" value="1">terima
    <input type="radio" name="penerimaan" value="2">tolak
    <input type="text" name="nim" value="<?= $mahasiswa->nim ?>" hidden>
    <input type="submit" name="submit" value="kirim">
  </form>
</div>


<script>
$(document).ready(function(){
  var modal = new Modal();
  var ht = new HtRequest();
  
  
  $(".backbtn").click(function(){
    ht.htGet("page/pendaftar-list.php",".md-content");
    modal.triggerModal("open","Lihat Mahasiswa");
  });

  
});  
</script>