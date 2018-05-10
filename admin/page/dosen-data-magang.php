<?php

  if(!$_POST) {
    die("error");
  }else{
    
    require_once '../../core/Dosen.php';
    $_SESSION['nip'] = $_POST['id'];

    $dosen->dosenDetailSk();
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
  <h3 style='font-weight: bold;'>Foto Dosen</h3>
  <img src='http://icons.iconarchive.com/icons/webalys/kameleon.pics/512/Student-3-icon.png' style='width:100%;'>
</div>

<div class='col-md-9'>
  <h3 style='font-weight: bold;'>Data Dosen Pembimbing Magang</h3>
  <div class="profile-content">
    <h5 class="data-type">NIP</h5><h5 class="data-content"> : <?= $dosen->nip ?></h5>
    <h5 class="data-type">Nama</h5><h5 class="data-content">: <?= $dosen->nama ?></h5>
    <h5 class="data-type">Program Studi</h5><h5 class="data-content">: <?= $dosen->prodi ?></h5>
    <h5 class="data-type">Nomor Telepon</h5><h5 class="data-content">: <?= $dosen->telp ?></h5>
    <h5 class="data-type">Mahasiswa Bimbingan</h5><h5 class="data-content">: <?= $dosen->nama_mhs ?></h5>
    <h5 class="data-type">NIM Mahasiswa Bimbingan</h5><h5 class="data-content">: <?= $dosen->nim ?></h5>
  </div>
  
</div>

<div class="col-md-12">
  <button type='button' class='btn btn-default backbtn'>Kembali</button>
  <button type="button" class="btn btn-success bt-mhs-act" data-id="<?= $dosen->nip ?>">Kirim SK Pembimbing magang</button>
</div>

<script>
$(document).ready(function(){
  var modal = new Modal();
  var ht = new HtRequest();
  var pr = new Prompt();
  
  $(".backbtn").click(function(){
    ht.htGet("page/dosen-list-magang.php",".md-content");
    modal.triggerModal("open","Lihat Dosen");
  });

  $(".bt-mhs-act").click(function(){
    var id = $(this).attr("data-id");
    var data = {"id":id};
    modal.triggerModal("open","Lihat Dosen");
    ht.htPost("reqs/sk-pembimbing.php",data,".md-content");
  });
});           
</script>