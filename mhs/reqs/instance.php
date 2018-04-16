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
  <table class='table table-responsive table-striped table-hover'>
    <thead>
      <tr>
        <td>Nama Instansi</td>
        <td>Kapasitas Pemagang</td>
      </tr>
    </thead>
      
      <tbody>
        <tr class='clicker' data-id='1'>
          <td>Kepolisian Daerah</td>
          <td>4</td>
        </tr>
        <tr class='clicker' data-id='2'>
          <td>PT. Angkasapura</td>
          <td>4</td>
        </tr>
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