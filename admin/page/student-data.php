<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'magang';
$con = mysqli_connect($host,$user,$pass,$db);

if($_POST)
{
  $id = $_POST['id'];
  $get = mysqli_query($con,"SELECT * FROM mahasiswa WHERE nim = '$id'");
  $fetch = mysqli_fetch_array($get);
  {
    ?>

<style>
  h5
  {
    margin:0;
    font-weight:bold;
  }
</style>

<div class='col-md-3'>
  <h3 style='font-weight: bold;'>Foto Mahasiswa</h3>
  <img src='http://icons.iconarchive.com/icons/webalys/kameleon.pics/512/Student-3-icon.png' style='width:100%;'>
</div>

<div class='col-md-9'>
  <h3 style='font-weight: bold;'>Data Mahasiswa</h3>
  <div class='col-md-3'>
    <h5>Nama Lengkap</h5>
    <h5>NIM</h5>
    <h5>Tempat Lahir</h5>
    <h5>Tanggal Lahir</h5>
    <h5>Jenis Kelamin</h5>
    <h5>Program Studi</h5>
    <h5>Fakultas</h5>
    <h5>NIP Pembimbing</h5>
    <h5>Semester</h5>
    <h5>IPK</h5>
    <h5>SKS</h5>
  </div>
  
  <style>
    .data > h5
    {
      text-transform: uppercase;
    }
  </style>
  
  <div class='col-md-6 data'>
    <h5>: <?= $fetch['nama'] ?></h5>
    <h5>: <?= $fetch['nim'] ?></h5>
    <h5>: <?= $fetch['tempat_lahir'] ?></h5>
    <h5>: <?= $fetch['tanggal_lahir'] ?></h5>
    <h5>: <?php 
            if($fetch['jenis_kelamin'] == 1)
            {
              ?>Laki-Laki<?php
            }else{
              ?>Perempuan<?php
            }
            ?></h5>
    <h5>: <?= $fetch['prodi'] ?></h5>
    <h5>: <?= $fetch['fakultas'] ?></h5>
    <h5>: <?= $fetch['nip_pembimbing'] ?></h5>
    <h5>: <?= $fetch['semester'] ?></h5>
    <h5>: <?= $fetch['ipk'] ?></h5>
    <h5>: <?= $fetch['sks'] ?></h5>
  </div>
</div>
<div class="col-md-12">
  <button type='button' class='btn btn-default backbtn'>Kembali</button>
  <button type='button' nim='<?= $fetch['nim'] ?>' class='btn btn-danger'>Hapus</button>
  <button type='button' nim='<?= $fetch['nim'] ?>' class='btn btn-info'>Edit</button>
</div>

<script>
$(document).ready(function(){
  var modal = new Modal();
  var ht = new HtRequest();
  
  $(".backbtn").click(function(){
    ht.htGet("page/student-list.php",".md-content");
    modal.triggerModal("open","Lihat Mahasiswa");
  });
});  
</script>
    <?php
  }
}
?>