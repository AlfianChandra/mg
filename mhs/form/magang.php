<?php 
  require_once '../../core/Instansi.php';
  $instansi->lihatInstansi();
  
 ?>

<form action='../action/upload.php' method='post' enctype='multipart/form-data'>
<div class='col-md-3' >
  <h4 style='font-weight: bold;'>Instansi Pilihan</h4>
  <select class='form-control instance' style='text-transform:capitalize;' name='instansi'required>
    <option value=''>Pilih instansi...</option>

    <?php foreach ($instansi->datas as $key): ?>  
    <option value='<?= $key->username ?>' ><?= $key->nama_instansi ?></option>
    <?php endforeach ?>
    
  </select>
</div>

<div class='col-md-2'>
  <h4 style='font-weight: bold;'>Mulai magang</h4>
  <input type='date' name="tanggal_mulai" class='form-control'required>
</div>
<div class='col-md-2'>
  <h4 style='font-weight: bold;'>Selesai magang</h4>
  <input type='date' name="tanggal_selesai" class='form-control'required>
</div>

<div class='col-md-3'>
  <h4 style='font-weight: bold;'>Dokumen</h4>
    <label style='margin-top:10px;'>Dokumen Permohonan</label>
    <input accept='.pdf, .doc, .docx, .doc' name="permohonan" required='required' type='file' style='padding:5px;width:100%;color:#222;border-bottom:1px solid #ddd;' class='form-control-file' >
    
    <label style='margin-top:10px;'>Dokumen Transkrip</label>
    <input accept='.pdf, .doc, .docx, .doc' name="transkrip" required='required' type='file' style='padding:5px;width:100%;color:#222;border-bottom:1px solid #ddd;' class='form-control-file'>
    
    <label style='margin-top:10px;'>Dokumen KHS</label>
    <input accept='.pdf, .doc, .docx, .doc' name="khs" required='required' type='file' style='padding:5px;width:100%;color:#222;border-bottom:1px solid #ddd;' class='form-control-file'>
    
    <label style='margin-top:10px;'>Dokumen KRS</label>
    <input accept='.pdf, .doc, .docx, .doc' name="krs" required='required' type='file' style='padding:5px;width:100%;color:#222;border-bottom:1px solid #ddd;' class='form-control-file'>
</div>
<div class='col-md-12' style='padding:10px;'>
  <input name="submit" type='submit' class='btn btn-primary btn-lg' value="Simpan & Lanjutkan">
</div>
</form>
