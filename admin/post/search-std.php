<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'magang';
$con = mysqli_connect($host,$user,$pass,$db);

$data = $_POST['data'];
$get = mysqli_query($con,"SELECT * FROM mahasiswa WHERE nama LIKE '%$data%' OR nim LIKE '%$data%'");
$row = mysqli_num_rows($get);
while($fetch = mysqli_fetch_array($get))
{
  ?>
<a class='userdata' href='javascript:void(0)' atr-id='<?= $fetch['nim'] ?>' style='text-transform: uppercase;width:100%;float:left;box-sizing:border-box;font-size:17px;padding:10px;font-weight:bold;'><?= $fetch['nama'] ?> &nbsp;&CenterDot;&nbsp; <?= $fetch['nim'] ?></a>
<?php
}

if(!$row)
{
  ?>
<h5 style='margin:0;text-align:center;text-transform: uppercase;font-size:16px;padding:10px;font-weight:bold;'>Tidak ada hasil</h5>
<?php
}
?>
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