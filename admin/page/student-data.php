<?php

  if(!$_POST) {
    echo "error";
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
        <h5 class="data-type">NIM</h5><h5 class="data-content">: <?= $mahasiswa->nim ?></h5>
    
    <h5 class="data-type">Tempat & Tanggal Lahir</h5><h5 class="data-content">: <?= $mahasiswa->tempat_lahir . ', ' . $mahasiswa->tanggal_lahir ?></h5>
    <h5 class="data-type">Jenis Kelamin</h5><h5 class="data-content">: <?= $mahasiswa->jenis_kelamin ?></h5>
    <h5 class="data-type">Fakultas</h5><h5 class="data-content">: <?= $mahasiswa->fakultas ?></h5>
    <h5 class="data-type">Program Studi</h5><h5 class="data-content">: <?= $mahasiswa->prodi ?></h5>
    <h5 class="data-type">Nomor Telepon</h5><h5 class="data-content">: <?= $mahasiswa->telp ?></h5>
    <h5 class="data-type">Dosen Pembimbing</h5><h5 class="data-content">: <?= $mahasiswa->nama_pembimbing ?></h5>
  </div>
  
</div>

<div class="col-md-12">
  <button type='button' class='btn btn-default backbtn'>Kembali</button>
  <button type="button" class="btn btn-success bt-mhs-act" data-id="<?= $mahasiswa->nim ?>">Edit</button>
  <button type="button" class="btn btn-danger bt-delete" data-id="<?= $mahasiswa->nim ?>">Hapus</button>
</div>

<script>
$(document).ready(function(){
  var modal = new Modal();
  var ht = new HtRequest();
  var pr = new Prompt();
  
  $(".backbtn").click(function(){
    ht.htGet("page/student-list.php",".md-content");
    modal.triggerModal("open","Lihat Mahasiswa");
  });

  $(".bt-mhs-act").click(function(){
    var id = $(this).attr("data-id");
    var data = {"id":id};
    modal.triggerModal("open","Edit Mahasiswa");
    ht.htPost("page/edit-student-form.php",data,".md-content");
  });
  
  $(".bt-delete").click(function(){
    var id = $(this).attr("data-id");
    var data = {"id":id};
    pr.triggerPrompt("open","Apaakah Ente Yakin?!",function(){
      ht.fireForm("../action/hapusMahasiswa.php",data);
      ht.htGet("page/student-list.php",".md-content");
      modal.triggerModal("open","Lihat Mahasiswa");
      $(".pr-overlay").fadeOut(500);
    });
  });
});           
</script>