<?php

  require_once '../../core/Mahasiswa.php';  
  require_once '../../core/Dosen.php';  
  $data = $_POST['data'];
  $_SESSION['prodi'] = $dosen->prodi;
  $mahasiswa->konfirmasiCari($data);
?>

 <?php  foreach ($mahasiswa->datas as $key): ?>
    <a class='userdata' href='javascript:void(0)' atr-id='<?= $key->nim?>' style='text-transform: uppercase;width:100%;float:left;box-sizing:border-box;font-size:17px;padding:10px;font-weight:bold;'> <?= $key->nim?> &nbsp;&CenterDot;&nbsp; <?= $key->nama?></a>
  <?php endforeach ?>
 

<?php if ($mahasiswa->datas == NULL): ?> 
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
    ht.htPost("page/konfirmasi-data.php",id,".md-content");
  });
});
</script>