<?php
if(!$_POST)
{
  echo "error";
}
else
{
  $id = $_POST['id'];

  if($id == 1)
  {
    ?>
<style>
  .prof-title
  {
    font-weight:bold;
  }
</style>
<div class='col-md-12'>
  <button type='button' class='btn btn-default back'>Kembali</button>
  <button type='button' class='btn btn-primary'>Pilih</button>
</div>
<div class='col-md-12'>
  <h3 class='prof-title'>Kepolisian Daerah Jambi</h3>
  <div class='col-md-9'>
    <h5 style='font-weight:bold;font-size:13px;'>DESKRIPSI</h5>
    <p>Kepolisian Daerah Jambi atau Polda Jambi (dulu bernama Komando Daerah Kepolisian (Komdak atau Kodak) V/Jambi) adalah pelaksana tugas Kepolisian RI di wilayah Provinsi Jambi. Polda Jambi tergolong polda tipe B karena itu dipimpin oleh seorang kepala kepolisian daerah yang berpangkat bintang satu atau (Brigadir Jenderal Polisi).</p>
    
    <h5 style='font-weight:bold;font-size:13px;'>Syarat</h5>
    <p>-</p>
    
    <h5 style='font-weight:bold;font-size:13px;'>Kriteria</h5>
    <p>-</p>
  </div>
  <div class='col-md-3'>
    <img src='https://2.bp.blogspot.com/-8VCRXndJBDg/WglS7RjIUZI/AAAAAAAAEyE/nKbjTpj6Jt0UstwiwXJfjfonAKqkqLeLQCLcBGAs/s1600/polda%2Bjambi.png' style='float:left;
         box-sizing:border-box;width:100%;'>
    <h5 style='font-weight:bold;font-size:13px;'><span class='fa fa-user'></span> Kapasitas:  <b style='color:purple;'>4 Orang</b></h5>
    <h5 style='font-weight:bold;font-size:13px;'><span class='fa fa-road'></span> Alamat:  <b style='color:purple;'>Jl. Jend. Sudirman No.45, Tambak Sari, Jambi Sel., Kota Jambi, Jambi 36138</b></h5>
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
<?php
  }
  else if($id == 2)
  {
    ?>
<style>
  .prof-title
  {
    font-weight:bold;
  }
</style>
<div class='col-md-12'>
  <button type='button' class='btn btn-default back'>Kembali</button>
  <button type='button' class='btn btn-primary'>Pilih</button>
</div>
<div class='col-md-12'>
  <h3 class='prof-title'>PT. Angkasapura </h3>
  <div class='col-md-9'>
    <h5 style='font-weight:bold;font-size:13px;'>DESKRIPSI</h5>
    <p>PT. Angkasa Pura I (Persero) adalah sebuah perusahaan Badan Usaha Milik Negara (BUMN) yang memberikan pelayanan lalu lintas udara dan bisnis bandar udara di Indonesia yang menitikberatkan pelayanan pada kawasan Indonesia bagian tengah dan kawasan Indonesia bagian timur.</p>
    
    <h5 style='font-weight:bold;font-size:13px;'>Syarat</h5>
    <p>-</p>
    
    <h5 style='font-weight:bold;font-size:13px;'>Kriteria</h5>
    <p>-</p>
  </div>
  <div class='col-md-3'>
    <img src='http://www.angkasapura2.co.id/assets/img/images/ap2_logo.jpg' style='float:left;
         box-sizing:border-box;width:100%;'>
    <h5 style='font-weight:bold;font-size:13px;'><span class='fa fa-user'></span> Kapasitas:  <b style='color:purple;'>4 Orang</b></h5>
    <h5 style='font-weight:bold;font-size:13px;'><span class='fa fa-road'></span> Alamat:  <b style='color:purple;'>Jalan Soekarno-Hatta No.1, Paal Merah, Jambi Selatan, Kota Jambi, Jambi 36139</b></h5>
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
<?php
  }
}
?>