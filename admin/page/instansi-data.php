<?php

  if(!$_POST) {
    die("error");
  }else{
    
    require_once '../../core/Instansi.php';
    $id = $_POST['id'];
    $instansi->instansiTerpilih($id);

    $_SESSION['instansi'] = $id;    
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
  <h3 style='font-weight: bold;'>Data Instansi</h3>
  <div class='col-md-9'>
    <h5 style='font-weight:bold;font-size:13px;'>Nama Instansi</h5>
    <p><?= $instansi->nama_instansi ?></p>

    <h5 style='font-weight:bold;font-size:13px;'>Deskripsi</h5>
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

<div class="col-md-12">
  <button type='button' class='btn btn-default backbtn'>Kembali</button>
  <button type="button" class="btn btn-success bt-mhs-act" data-id="<?= $instansi->username ?>">Edit</button>
  <button type="button" class="btn btn-danger bt-delete" data-id="<?= $instansi->username ?>">Hapus</button>
</div>

<script>
$(document).ready(function(){
  var modal = new Modal();
  var ht = new HtRequest();
  var pr = new Prompt();
  
  $(".backbtn").click(function(){
    ht.htGet("page/instansi-list.php",".md-content");
    modal.triggerModal("open","Lihat Instansi");
  });

  $(".bt-mhs-act").click(function(){
    var id = $(this).attr("data-id");
    var data = {"id":id};
    modal.triggerModal("open","Edit Instansi");
    ht.htPost("page/edit-instansi.php",data,".md-content");
  });
  
  $(".bt-delete").click(function(){
    var id = $(this).attr("data-id");
    var data = {"id":id};
    pr.triggerPrompt("open","Hapus Akun ini? Tindakan ini tidak dapat dipulihkan.",function(){
      ht.fireForm("../action/hapusInstansi.php",data);
      ht.htGet("page/instansi-list.php",".md-content");
      modal.triggerModal("open","Lihat Instansi");
      $(".pr-overlay").fadeOut(500);
    });
  });
});           
</script>