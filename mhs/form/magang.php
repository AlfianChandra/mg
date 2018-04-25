<form action='#' method='post' enctype='multipart/form-data'>
<div class='col-md-4'>
  <h4 style='font-weight: bold;'>Instansi Pilihan</h4>
  <select class='form-control instance' style='text-transform:capitalize;' name='instansi'required>
    <option value=''>Pilih instansi...</option>
    <?php
    $con = mysqli_connect("localhost","root","","magang");
    $ins = mysqli_query($con,"SELECT * FROM instansi");
    while($fetch = mysqli_fetch_array($ins))
    {
      ?>
    <option value='<?= $fetch['nama_instansi'] ?>'><?= $fetch['nama_instansi'] ?></option>
    <?php
    }
    ?>
  </select>
</div>

<div class='col-md-2'>
  <h4 style='font-weight: bold;'>Jadwal</h4>
  <input type='date' class='form-control'required name='tgl_magang'>
</div>

<div class='col-md-6'>
  <h4 style='font-weight: bold;'>Dokumen</h4>
    <label style='margin-top:10px;'>Dokumen Permohonan</label>
    <input accept='.pdf, .doc, .docx, .doc' required='required' type='file' style='padding:5px;width:100%;color:#222;border-bottom:1px solid #ddd;' class='form-control-file' name='file_permohonan'>
    
    <label style='margin-top:10px;'>Dokumen Transkrip</label>
    <input accept='.pdf, .doc, .docx, .doc' required='required' type='file' style='padding:5px;width:100%;color:#222;border-bottom:1px solid #ddd;' class='form-control-file' name='file_transkrip'>
    
    <label style='margin-top:10px;'>Dokumen KHS</label>
    <input accept='.pdf, .doc, .docx, .doc' required='required' type='file' style='padding:5px;width:100%;color:#222;border-bottom:1px solid #ddd;' class='form-control-file' name='file_khs'>
    
    <label style='margin-top:10px;'>Dokumen KRS</label>
    <input accept='.pdf, .doc, .docx, .doc' required='required' type='file' style='padding:5px;width:100%;color:#222;border-bottom:1px solid #ddd;' class='form-control-file' name='file_krs'>
</div>
<div class='col-md-12' style='padding:10px;'>
  <button type='submit' class='btn btn-primary btn-lg'>Simpan & Lanjutkan</button>
</div>
</form>