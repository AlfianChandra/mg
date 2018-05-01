<?php 
  require_once '../../core/Instansi.php';
  $instansi->lihatInstansi();
  
 ?>

<form action='../action/upload-instansi.php' method='post' enctype='multipart/form-data'>
<div class='col-md-5' >
  <h4 style='font-weight: bold;'>Dokumen Umum</h4>
  <label style='margin-top:10px;'>Dokumen Proposal</label>
  <input accept='.pdf, .doc, .docx, .doc' name="permohonan" required='required' type='file' style='padding:5px;width:100%;color:#222;border-bottom:1px solid #ddd;' class='form-control-file' >

</div>