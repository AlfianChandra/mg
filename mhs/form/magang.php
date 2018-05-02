<?php 
  require_once '../../core/Instansi.php';
  $instansi->lihatInstansi();
  
 ?>

<form action='../action/upload.php' method='post' enctype='multipart/form-data'>
<div class='col-md-4' >
  <h4 style='font-weight: bold;'>Instansi Pilihan</h4>
  <select class='form-control instance' style='text-transform:capitalize;' name='instansi'required>
    <option value=''>Pilih instansi...</option>

    <?php foreach ($instansi->datas as $key): ?>  
    <option value='<?= $key->username ?>' ><?= $key->nama_instansi ?></option>
    <?php endforeach ?>
    
  </select>
</div>

<div class='col-md-4'>
  <h4 style='font-weight: bold;'>Mulai magang</h4>
  <input type='date' name="tanggal_mulai" class='form-control'required>
</div>
<div class='col-md-4'>
  <h4 style='font-weight: bold;'>Selesai magang</h4>
  <input type='date' name="tanggal_selesai" class='form-control'required>
</div>

<!--<div class='col-md-3'>
  <h4 style='font-weight: bold;'>Dokumen</h4>
    <label style='margin-top:10px;'>Dokumen Permohonan</label>
    <input accept='.pdf, .doc, .docx, .doc' name="permohonan" required='required' type='file' style='padding:5px;width:100%;color:#222;border-bottom:1px solid #ddd;' class='form-control-file' >
    
    <label style='margin-top:10px;'>Dokumen Transkrip</label>
    <input accept='.pdf, .doc, .docx, .doc' name="transkrip" required='required' type='file' style='padding:5px;width:100%;color:#222;border-bottom:1px solid #ddd;' class='form-control-file'>
    
    <label style='margin-top:10px;'>Dokumen KHS</label>
    <input accept='.pdf, .doc, .docx, .doc' name="khs" required='required' type='file' style='padding:5px;width:100%;color:#222;border-bottom:1px solid #ddd;' class='form-control-file'>
    
    <label style='margin-top:10px;'>Dokumen KRS</label>
    <input accept='.pdf, .doc, .docx, .doc' name="krs" required='required' type='file' style='padding:5px;width:100%;color:#222;border-bottom:1px solid #ddd;' class='form-control-file'>
</div>-->
  
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

<div class="col-md-12">
  <h4 style='font-weight: bold;'>Dokumen</h4>
  <div class="input-area">
    <input type="file" required="required" accept=".pdf, .doc, .docx" name="permohonan" class='inputs1'>
    <h5 class='h51'><i class='material-icons'>file_upload</i> <br> Dokumen Permohonan <br> (Seret File / Klik Area Ini)</h5>
  </div>

  <div class="input-area">
    <input type="file" required="required" accept=".pdf, .doc, .docx" name="transkrip" class='inputs2'>
    <h5 class='h52'><i class='material-icons'>file_upload</i> <br> Dokumen Transkrip <br> (Seret File / Klik Area Ini)</h5>
  </div>
  
  <div class="input-area">
    <input type="file" required="required" accept=".pdf, .doc, .docx" name="KHS" class='inputs3'>
    <h5 class='h53'><i class='material-icons'>file_upload</i> <br> Dokumen KHS <br> (Seret File / Klik Area Ini)</h5>
  </div>
  
  <div class="input-area">
    <input type="file" required="required" accept=".pdf, .doc, .docx" name="KRS" class='inputs4'>
    <h5 class='h54'><i class='material-icons'>file_upload</i> <br> Dokumen KRS <br> (Seret File / Klik Area Ini)</h5>
  </div>
</div>  
  
<div class='col-md-12' style='padding:10px;'>
  <input name="submit" type='submit' class='btn btn-primary' value="Simpan & Lanjutkan">
</div>
</form>

<script>
$(document).ready(function(){
  setInterval(function(){
    
    var in1 = $(".inputs1");
    var in2 = $(".inputs2");
    var in3 = $(".inputs3");
    var in4 = $(".inputs4");
    
    if($.trim(in1.val()) !== "")
    {
      $(".h51").html("<i class='material-icons'>file_upload</i> <br>"+ in1.val()).css("font-weight","bold").css("color","purple");
    }
    
    if($.trim(in2.val()) !== "")
    {
      $(".h52").html("<i class='material-icons'>file_upload</i> <br>"+ in2.val()).css("font-weight","bold").css("color","purple");;
    }
    
    if($.trim(in3.val()) !== "")
    {
      $(".h53").html("<i class='material-icons'>file_upload</i> <br>"+ in3.val()).css("font-weight","bold").css("color","purple");;
    }
    
    if($.trim(in4.val()) !== "")
    {
      $(".h54").html("<i class='material-icons'>file_upload</i> <br>"+ in4.val()).css("font-weight","bold").css("color","purple");;
    }
  },100);
});
</script>
