<style>
  .clicker
  {
    font-weight:bold;
    cursor: pointer;
    color:purple;
  }
</style>
<div class='col-md-12'>
  <h3 style='font-weight:bold;'>Pilih Instansi</h3>
  <?php 
    require_once '../../core/Instansi.php'; 
    $instansi->lihatInstansi();

  ?>
  <table class='table table-responsive table-striped table-hover'>
    <thead>
      <tr>
        <td>Nama Instansi</td>
        <td>Kapasitas Pemagang</td>
        <td>Jumlah Pemagang</td>
        <td>Pemagang Terdaftar</td>
      </tr>
    </thead>
      
      <tbody>
        <?php 
            foreach ($instansi->datas as $key) {
              echo "<tr style='text-transform:capitalize' class='clicker' data-id='$key->username'><td>".$key->nama_instansi."</td><td>".$key->kapasitas."</td><td>".$key->pemagang."</td><td>".$key->pemagang_terdaftar."</td></tr>";
            }
         ?>
      </tbody>
  </table>
</div>
<script>
$(document).ready(function(){
  var modal = new Modal();
  var ht = new HtRequest();
  
  $(".clicker").click(function(){
    var id = $(this).attr("data-id");
    var data = {"id":id};
    modal.triggerModal("open","Profil Instansi");
    ht.htPost("reqs/instance-profile.php",data,".md-content");
  });
});  
</script>