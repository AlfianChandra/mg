
<style>
  .data-row
  {
    cursor:pointer;
  }
  
  .clear-search
  {
    position:absolute;
    bottom:0px;
    border:none;
    right:-30px;
    z-index:9999;
    background-color:#ddd;
    color:#444;
    border-radius:100px;
    height:60px;
    width:60px;
    border:3px solid transparent;
  }
  
    .clear-search:hover
    {
      background-color:purple;
      color:#fff;
    }
</style>
<div class='col-md-12'>
  <h3 style='font-weight:bold;'>Dosen Pembimbing Magang</h3>
  <?php 
    require_once '../../core/Dosen.php'; 
    
    $dosen->skPembimbingList();
    
  ?>
</div>


<div class='col-md-12'>
  <table class='table table-responsive table-striped table-hover'>
    <thead>
      <tr>
        <th>NIP</th>
        <th>Nama Dosen</th>
        <th>NIM Mahasiswa Bimbingan</th>
        <th>Nama Mahasiswa Bimbingan</th>
      </tr>
    </thead>

    <tbody>

      <?php foreach ($dosen->datas as $key) : ?>
          <tr style='color:purple;font-weight:bold;text-transform: uppercase;' class='data-row' id='<?= $key->nim ?>'><td><?= $key->nip ?></td><td><?= $key->nama ?></td><td><?= $key->nim ?></td><td><?= $key->nama_mhs ?></td></tr>
      <?php endforeach ?>

    </tbody>
  </table>  

  <?php if($dosen->datas == NULL):  ?>
   <h5 style='margin:0;text-align:center;text-transform: uppercase;font-size:16px;padding:10px;font-weight:bold;'><span class='fa fa-inbox'></span> Tidak ada hasil</h5>
  <?php endif ?>
</div>
<script>
$(document).ready(function(){
  var ht = new HtRequest();
  var modal = new Modal();
  var side = new SideBar();
  
  $(".data-row").click(function(){
    var id = $(this).attr("id");
    var data = {"id":id};
    ht.htPost("page/dosen-data-magang.php",data,".md-content");
    modal.triggerModal("open","Data Dosen");
  });
 
});
</script>
