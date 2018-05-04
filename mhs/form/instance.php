<?php 
  require_once '../../core/Mahasiswa.php';
  // $instansi->lihatInstansi();
  
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
<form action='../action/uploadPengajuanMahasiswa.php' method='post' enctype='multipart/form-data'>
  <div class="col-md-12">
    <h4 style='font-weight: bold;'>Dokumen Pendukung (Optional)</h4>
    <div class="input-area">
      <input type="file" accept=".pdf, .doc, .docx" name="permohonan" class='inputs1'>
      <h5 class='h51'><i class='material-icons'>file_upload</i> <br> Proposal Magang <br> (Seret File / Klik Area Ini)</h5>
    </div>
    <div class="input-area">
      <input type="file" accept=".pdf, .doc, .docx" name="permohonan" class='inputs1'>
      <h5 class='h51'><i class='material-icons'>file_upload</i> <br> CV <br> (Seret File / Klik Area Ini)</h5>
    </div>
  </div>
  <div class="col-md-12" style="padding:25px 25px 0px 25px;">
    <input type="submit" name="submit" class="btn btn-primary" value="Unggah & Lanjutkan">
  </div>
</form>

  <div class="col-md-12" style="padding: 0px 25px;">
    <a class="btn" href="file/pengajuan_<?= $mahasiswa->nim ?>.pdf" >Download dokumen pengajuan</a>
  </div>

<script>
$(document).ready(function(){
  setInterval(function(){
    
    var in1 = $(".inputs1");
    
    if($.trim(in1.val()) !== "")
    {
      $(".h51").html("<i class='material-icons'>file_upload</i> <br>"+ in1.val()).css("font-weight","bold").css("color","purple");
    }
  },100);
});
</script>