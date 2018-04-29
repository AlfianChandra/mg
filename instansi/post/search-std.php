<?php

  require_once '../../core/Instansi.php';  
  $data = $_POST['data'];
  $instansi->pendaftarCari($data);
    
  foreach ($instansi->datas as $key) {
    echo "<a class='userdata' href='javascript:void(0)' atr-id='$key->nim' style='text-transform: uppercase;width:100%;float:left;box-sizing:border-box;font-size:17px;padding:10px;font-weight:bold;'> $key->nim &nbsp;&CenterDot;&nbsp; $key->nama</a>";
  }
 ?>

<?php if ($instansi->datas == NULL): ?> 
<h5 style='margin:0;text-align:center;text-transform: uppercase;font-size:16px;padding:10px;font-weight:bold;'><span class='fa fa-inbox'></span> Tidak ada hasil</h5>
<?php endif ?>

<script>
$(document).ready(function(){
  var modal = new Modal();
  var ht = new HtRequest();
  
  $(".userdata").click(function(){
    var data = $(this).attr("atr-id");
    var id = {"id":data};
    modal.triggerModal("open","Data Mahasiswa");
    ht.htPost("page/student-data.php",id,".md-content");
  });
});
</script>