
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
  
  <?php 
    require_once '../../core/Mahasiswa.php'; 
    
    $mahasiswa->konfirmasiList();
    
  ?>
</div>

<div class='col-md-12'>
  <table class='table table-responsive table-striped table-hover'>
    <thead>
      <tr>
        <th>NIM</th>
        <th>Nama Mahasiswa</th>
      </tr>
    </thead>

    <tbody>
      
      <?php foreach ($mahasiswa->datas as $key) : ?>
          <tr style='color:purple;font-weight:bold;text-transform: uppercase;' class='data-row' id='<?= $key->nim ?>'><td><?= $key->nim ?></td><td><?= $key->nama ?></td></tr>
      <?php endforeach ?>

    </tbody>
  </table>  
  <?php if($mahasiswa->datas == NULL):  ?>
   <h5 style='margin:0;text-align:center;text-transform: uppercase;font-size:16px;padding:10px;font-weight:bold;'><span class='fa fa-inbox'></span> Tidak ada hasil</h5>
  <?php endif ?>
</div>
<script>
$(document).ready(function(){
  var ht = new HtRequest();
  var modal = new Modal();
  
  $(".data-row").click(function(){
    var id = $(this).attr("id");
    var data = {"id":id};
    ht.htPost("page/konfirmasi-data.php",data,".md-content");
    modal.triggerModal("open","Data Mahasiswa");
  });
  

});
</script>
