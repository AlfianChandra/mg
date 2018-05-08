<?php 
    require_once '../../core/Dosen.php';
    
    $_SESSION['prodi'] = $dosen->prodi;
    $dosen->lihatDosenPembimbing(); 
  
 ?>

<form action='../action/pilihPembimbing.php' method='post' enctype='multipart/form-data'>
<div class='col-md-4' >
  <h4 style='font-weight: bold;'>Pilih Pembimbing Magang</h4>
  <select class='form-control instance' style='text-transform:capitalize;' name='pembimbing'required>
    <option value=''>Pilih pembimbing...</option>

    <?php foreach ($dosen->datas as $key): ?>  
       <option style="text-transform: capitalize;" value='<?= $key->nip ?>' ><?= $key->nama ?></option>
    <?php endforeach ?>
    
  </select>
</div>


<div class='col-md-12' style='padding:10px;'>
  <input name="submit" type='submit' class='btn btn-primary' value="Simpan & Lanjutkan">
</div>
</form>

