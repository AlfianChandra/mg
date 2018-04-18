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
    $instansi->pilihInstansi();
  ?>
  <table class='table table-responsive table-striped table-hover'>
    <thead>
      <tr>
        <td>Nama Instansi</td>
        <td>Kapasitas Pemagang</td>
      </tr>
    </thead>
      
      <tbody>
        <?php 
            $i=1;
            foreach ($instansi->datas as $key) {
              echo "<tr class='clicker' data-id='$i'><td>".$key->nama_instansi."</td><td>".$key->kapasitas."</td></tr>";
            }
            $i++;
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