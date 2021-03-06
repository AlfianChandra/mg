<style>
  .profile-head
  {
    font-weight:bold;
  }
  
  .data-type
  {
    width:30%;
    float:left;
    box-sizing:border-box;
    padding:5px;
    border-bottom:2px;
    margin:0;
  }
  
  .data-content
  {
    font-weight: bold;
    width:70%;
    float:left;
    margin:0;
    box-sizing:border-box;
    padding:5px;
    text-transform: uppercase;
  }
  
  .profile-content
  {
    height:300px;
    overflow-y:auto;
  }
</style>
<div class="col-md-3">
  <h3 class="profile-head">Foto Profil</h3>
  <img src="http://icons.iconarchive.com/icons/webalys/kameleon.pics/512/Student-3-icon.png" class="img-responsive"> 
</div>
<div class="col-md-9">
  <h3 class="profile-head">Informasi Profil</h3> <?php require_once '../../core/Instansi.php'; ?>
  <div class="profile-content">
    <h5 class="data-type">Nama</h5><h5 class="data-content"> : <?= $instansi->nama_instansi ?></h5>
    <h5 class="data-type">Kapasitas</h5><h5 class="data-content">: <?= $instansi->kapasitas ?></h5>
    <h5 class="data-type">Deskripsi</h5><h5 class="data-content">: <?= $instansi->deskripsi ?></h5>
    <h5 class="data-type">Syarat</h5><h5 class="data-content">: <?= $instansi->syarat ?></h5>
    <h5 class="data-type">Kriteria</h5><h5 class="data-content">: <?= $instansi->kriteria ?></h5>
    <h5 class="data-type">Alamat</h5><h5 class="data-content">: <?= $instansi->alamat_instansi ?></h5>
  </div>
</div>