<style>
  .file-uploader
  {
    float:left;
    box-sizing:border-box;
    width:100%;
    height:200px;
    border:4px dashed purple;
    position: relative;
  }
  
  .fileinput
  {
    position:absolute;
    left:0;
    top:0;
    width:100%;
    height:100%;
    opacity: 0;
    cursor:pointer;
  }
  
  .file-title
  {
    float:left;
    box-sizing:border-box;
    width:100%;
    height:auto;
    text-align:center;
    text-transform:uppercase;
    margin-top:80px;
    color:purple;
    font-weight:bold;
  }
</style>

<form class='up-form' method='post' enctype="multipart/form-data" action="../action/upload.php">
  <div class='col-md-12' style='padding:0px;'>
    <label>File Diunggah Dalam Format PDF*</label>
  </div>
  <div class='file-uploader'>
    <input type='file' name='krs' class='fileinput' accept='.pdf' required>
    <h5 class='file-title'>Seret File ke Area Ini atau Klik untuk Mengunggah</h5>
  </div>
  <div class='col-md-12' style='padding:0px;'>
    <a href='https://siakad.unja.ac.id' class='btn btn-primary' target='_blank'>Kunjungi SIAKAD UNJA</a>
  </div>
    <div>
    <input type="submit" name="submit" value="upload">
  </div>
</form>
<script>
$(document).ready(function(){
  setInterval(function(){
    if($.trim($(".fileinput").val()) === "")
    {
      $(".file-title").html("Seret File ke Area Ini atau Klik untuk Mengunggah");
      $(".up-send").fadeOut(500);
    }
    else
    {
      $(".file-title").html($(".fileinput").val() + " - File siap diunggah!");
      $(".up-send").fadeIn(500);
    }
  },0);
  
  $(".up-send").click(function(){
    $(".up-form").submit();
  });
  
  $(".up-form").submit(function(rev){
    var up = new HtRequest();
    rev.preventDefault();
    up.upload("post/post-upload.php",$(this).serialize());
  });
});
</script>