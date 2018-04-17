<style>
  .data-row
  {
    cursor:pointer;
  }
</style>
<div class='col-md-12'>
  <h3 style='font-weight:bold;'>Mahasiswa</h3>
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
      <tr style='color:purple;font-weight:bold;' class='data-row' id='1'>
        <td>F1E115029</td>
        <td>Alfian Chandra</td>
      </tr>
    </tbody>
  </table>  
</div>
<script>
$(document).ready(function(){
  var ht = new HtRequest();
  var modal = new Modal();
  
  $(".data-row").click(function(){
    var id = $(this).attr("id");
    var data = {"id":id};
    ht.htPost("page/student-data.php",data,".md-content");
    modal.triggerModal("open","Data Mahasiswa");
  });
});
</script>
