<?php

  if(!$_POST) {
    die("error");
  }else{
    $_SESSION['id'] = $_POST['id'];
    $id = $_SESSION['id'];

    require_once '../../core/Mahasiswa.php';
    $mahasiswa->bimbinganDetail($id);


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
    <h5 class="data-type">NIM</h5><h5 class="data-content">: <?= $mahasiswa->nim ?></h5>
    <h5 class="data-type">Nama</h5><h5 class="data-content"> : <?= $mahasiswa->nama ?></h5>
    <h5 class="data-type">Jenis Kelamin</h5><h5 class="data-content">: <?= $mahasiswa->jenis_kelamin ?></h5>
    <h5 class="data-type">Tempat & Tanggal Lahir</h5><h5 class="data-content">: <?= $mahasiswa->tempat_lahir . ', ' . $mahasiswa->tanggal_lahir ?></h5>
    <h5 class="data-type">Pelaksanaan Magang</h5><h5 class="data-content">: <?= $mahasiswa->tanggal_mulai ?> - <?= $mahasiswa->tanggal_selesai ?></h5>   
    <h5 class="data-type">Instansi Magang</h5><h5 class="data-content">: <?= $mahasiswa->nama_instansi ?></h5>
    <h5 class="data-type">Nomor Telepon</h5><h5 class="data-content">: <?= $mahasiswa->telp ?></h5>


  </div>
  
</div>

<div class="col-md-12">
  
   <button type='button' class='btn btn-default backbtn col-md-3'>Kembali</button>
   <a href="../mhs/file/pengajuan_<?= $mahasiswa->nim ?>.pdf" class="btn btn-success">download sk penunjukkan pembimbing</a>

</div>


<script>
$(document).ready(function(){
  var modal = new Modal();
  var ht = new HtRequest();
  
  
  $(".backbtn").click(function(){
    ht.htGet("page/bimbingan-list.php",".md-content");
    modal.triggerModal("open","Lihat Mahasiswa");
  });
  
});  
</script>