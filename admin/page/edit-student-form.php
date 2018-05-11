<?php 
  require_once '../../core/Mahasiswa.php';

  if(!$_POST)
  {
    echo "error";
  }else{

    $id = $_POST['id'];
    $mahasiswa->mahasiswaTerpilih($id);
    
    $tgl_lahir = strtotime($mahasiswa->tanggal_lahir);
    $tanggal_kelahiran = date('Y-m-d', $tgl_lahir);
    $_SESSION['nim_edit'] = $id;
  }
 ?>

<form class="std-edit-form" method="post" enctype="multipart/form-data" style="margin-bottom:50px;float:left;width:100%;">
    <div class="col-md-6">

        <h3 style="font-weight:bold;">Data Pribadi</h3>
        <input type="text" required="required" name="nama" maxlength="40" class="form-control i1" placeholder="Nama Lengkap" value="<?= $mahasiswa->nama ?>">
        
        <!-- <input type="password" required="required" name="password" class="form-control i3" placeholder="Kata Sandi"> -->
        <input type="text" required="required" name="tempat_lahir" class="form-control i2" placeholder="Tempat Lahir" value="<?= $mahasiswa->tempat_lahir ?>">
        <input type="date" required="required" name="tanggal_lahir" class="form-control i3" placeholder="Tanggal Lahir" value="<?= $tanggal_kelahiran; ?>">

        <input type="text" required="required" name="telp" class="form-control i4" placeholder="No. Telp" value="<?= $mahasiswa->telp ?>">
        <div class="col-md-12" style="padding:0px;margin-bottom:25px;border-bottom:1px solid #ccc;" >
            <label style="width:100%;margin-top:15px;float:left;">Jenis Kelamin</label>
            
            <label style="float:left;box-sizing:border-box;width:auto;">

                <input type="radio" name="jenis_kelamin" value="1" <?php if($mahasiswa->jenis_kelamin == "Laki-laki") echo "checked"; ?>> Laki-Laki
            </label>
            
            <label style="float:left;box-sizing:border-box;width:auto;margin-left:30px;">
                <input type="radio" name="jenis_kelamin" value='0' <?php if($mahasiswa->jenis_kelamin == "Perempuan") echo "checked"; ?>> Perempuan
            </label>
            
        </div>
    </div>

    <div class="col-md-6">
        <h3 style="font-weight:bold;">Data Akademik</h3>
        
        <input type="text" required="required" name="fakultas" class="form-control i6" placeholder="Fakultas" value="<?= $mahasiswa->fakultas ?>">
        <input type="text" required="required" name="prodi" class="form-control i7" placeholder="Program Studi" value="<?= $mahasiswa->prodi ?>">
        <input type="text" required="required" name="semester" class="form-control i8" placeholder="Semester" value="<?= $mahasiswa->semester ?>">
        <input type="text" required="required" name="sks" class="form-control i9" placeholder="Total SKS" value="<?= $mahasiswa->sks ?>">
        <input type="text" required="required" name="ipk" class="form-control i0" placeholder="Indeks Prestasi Kumulatif" value="<?= $mahasiswa->ipk ?>">
        
    </div>

    <div>
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
      ht.fireForm("../action/editMahasiswa.php",data);
      ht.htGet("page/student-list.php",".md-content");
      modal.triggerModal("open","Lihat Mahasiswa");
    });
    
    $(".cancel").click(function(){
      ht.htGet("page/student-list.php",".md-content");
      modal.triggerModal("open","Lihat Mahasiswa");
    });
  });
</script>
