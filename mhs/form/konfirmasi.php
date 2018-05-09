<?php 
  require_once '../../core/Mahasiswa.php';  
 ?>
<style>
  .input-area
  {
    float:left;
    box-sizing:border-box;
    width:24%;
    margin-left:1%;
    height:160px;
    position:relative;
    border:3px dashed #ccc;
  }
  
  .input-area > input
  {
    opacity:0;
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    cursor:pointer;  
  }
  
  .input-area > h5
  {
    font-size:12px;
    margin:0;
    text-align: center;
    margin-top:50px;
    color:#666;
  }
  
  .input-area > input:hover .input-area
  {
    border:1px solid #333;
  }
</style>
<form action='../action/konfirmasiMagang.php' method='post' enctype='multipart/form-data'>
  <div class="col-md-12" style="padding:0 25px;">
    <h4 style='font-weight: bold;'>Dokumen Surat Balasan  </h4>  
    <a class="btn" href="file/surat_balasan_<?= $mahasiswa->nim ?>.pdf" >Download surat balasan instansi</a>
  </div>

  <div class="col-md-12" style="padding:0 25px;">
    <h4 style='font-weight: bold;'>Konfirmasi Magang</h4>  
    <input type="submit" name="submit" onclick="return confirm('apakah anda yakin?')" class="btn btn-success" value="konfirmasi">
  </div>
</form>
