<?php 
  require_once '../../core/Instansi.php';
  $instansi->lihatInstansi();
  
 ?>

<form action='../action/uploadPengajuanMahasiswa.php' method='post' enctype='multipart/form-data'>
<div class='col-md-5' >
  <!-- <h4 style='font-weight: bold;'>Dokumen Pendukung</h4>
  <label style='margin-top:10px;'>Dokumen Proposal</label>
  <input accept='.pdf, .doc, .docx, .doc' name="proposal" required='required' type='file' style='padding:5px;width:100%;color:#222;border-bottom:1px solid #ddd;' class='form-control-file' >
  <input accept='.pdf, .doc, .docx, .doc' name="cv" required='required' type='file' style='padding:5px;width:100%;color:#222;border-bottom:1px solid #ddd;' class='form-control-file' > -->
  <input type="submit" class="btn btn-primary" name="submit" value="kirim">
</div>
</form>