<?php 
  require_once '../../core/Dosen.php';

  if(!$_POST)
  {
    die("error");
  }else{

    $_SESSION['nip'] = $_POST['id'];
    $dosen->dosenDetail();
        
  }
 ?>

<form class="std-edit-form" method="post" enctype="multipart/form-data" style="margin-bottom:50px;float:left;width:100%;">
    <div class="col-md-6">

        <h3 style="font-weight:bold;">Data Pribadi</h3>
        <input type="text" required="required" name="nama" maxlength="40" class="form-control i1" placeholder="Nama Lengkap" value="<?= $dosen->nama ?>">
        
        <input type="text" required="required" name="telp" class="form-control i2" placeholder="No. Telp" value="<?= $dosen->telp ?>">
    
    </div>

    <div class="col-md-6">
        <h3 style="font-weight:bold;">Data Akademik</h3>
    
        <input type="text" required="required" name="prodi" class="form-control i3" placeholder="Program Studi" value="<?= $dosen->prodi ?>">        
    </div>

    <div class="col-md-12">
      <input type="submit" class="btn btn-primary" name="submit" value="Simpan">
      <input type="submit" class="btn btn-default cancel" name="submit" value="Batal">
    </div>
  
</form>
<script>
  $(document).ready(function(){
    var ht = new HtRequest();
    var modal = new Modal();
    
    $(".std-edit-form").submit(function(ev){
      ev.preventDefault();
      var data = $(this).serialize();
      ht.fireForm("../action/editDosen.php",data);
      ht.htGet("page/dosen-list.php",".md-content");
      modal.triggerModal("open","Lihat Dosen");
    });
    
    $(".cancel").click(function(){
      ht.htGet("page/dosen-list.php",".md-content");
      modal.triggerModal("open","Lihat Mahasiswa");
    });
  });
</script>
