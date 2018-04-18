<?php
if($_POST)
{
  $id = $_POST['id'];
  if($id == 1)
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
    <h5>Dosen P.A</h5>
    <h5>Semester</h5>
    <h5>IPK</h5>
    <h5>Alamat E-Mail</h5>
  </div>
  
  <div class='col-md-6'>
    <h5>: Alfian Chandra</h5>
    <h5>: F1E115029</h5>
    <h5>: Kota Jambi</h5>
    <h5>: 25 Desember 1997</h5>
    <h5>: Laki-Laki</h5>
    <h5>: S1 - Sistem Informasi</h5>
    <h5>: Sains & Teknologi</h5>
    <h5>: Indra Weni</h5>
    <h5>: 6 (Genap)</h5>
    <h5>: 2,69</h5>
    <h5>: alfian.github404@gmail.com</h5>
  </div>
</div>
<div class="col-md-12">
  <button type='button' class='btn btn-default backbtn'>Kembali</button>
  <button type='button' class='btn btn-danger'>Hapus</button>
  <button type='button' class='btn btn-info'>Edit</button>
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