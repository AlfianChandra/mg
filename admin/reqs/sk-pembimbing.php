<?php 
  require_once '../../core/Dosen.php';

  if(!$_POST)
  {
    die("error");
  }else{
    $_SESSION['nip_sk'] = $_POST['id'];      
    $dosen->skPembimbing();
  }
 ?>

<style>
  .input-area
  {
    float:left;
    box-sizing:border-box;
    width:24%;
    margin-left:1%;
    height:160px;
    position:relative;
    border:3px dashed #ccc;
  }
  
  .input-area > input
  {
    opacity:0;
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    cursor:pointer;  
  }
  
  .input-area > h5
  {
    font-size:12px;
    margin:0;
    text-align: center;
    margin-top:50px;
    color:#666;
  }
  
  .input-area > input:hover .input-area
  {
    border:1px solid #333;
  }
</style>

<form action='../action/skPembimbing.php' method='post' enctype='multipart/form-data'>

  <div class="col-md-12">
    <h4 style='font-weight: bold;'>Pilih Dokumen SK Pembimbing Magang</h4>
    <div class="input-area">
      <input type="file" required="required" accept=".pdf" name="sk_pembimbing" class='inputs1'>
      <h5 class='h51'><i class='material-icons'>file_upload</i> <br> Dokumen SK Pembimbing Magang <br> (Seret File / Klik Area Ini)</h5>
    </div>
  </div>

  <div class='col-md-12' style='padding:25px;'>
    <input name="submit" type='submit' class='btn btn-primary' value="Kirim">
  </div>

</form>

<script>
$(document).ready(function(){
  setInterval(function(){
    
    var in1 = $(".inputs1");
    
    if($.trim(in1.val()) !== "")
    {
      $(".h51").html("<i class='material-icons'>file_upload</i> <br>"+ in1.val()).css("font-weight","bold").css("color","purple");
    }

  },100);
});
</script>