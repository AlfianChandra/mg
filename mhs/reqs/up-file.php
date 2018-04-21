<style>
  .up-files
  {
    border:1px solid #ccc;
  }
  
  .files
  {
    width:100%;
    border:1px solid #ddd;
    padding:10px;
    cursor:pointer;
    box-sizing:border-box;
    transition:ease-in-out 0.3s;
  }
  
  .files:hover
  {
    border:1px solid rgb(0,70,255);
    background-color:rgb(0,150,255);
    color:#fff;
  }
  
  .uploadbt
  {
    float:left;
    box-sizing:border-box;
    width:100%;
  }
</style>

<div class='col-md-12'>
  <label>File Permohonan</label>
  <button type='button' class='btn btn-info uploadbt' uptype='permohonan'>Unggah</button>
</div>

<div class='col-md-12' style='padding:20px;'></div>

<div class='col-md-12'>
  <label>File Pengajuan</label>
  <button type='button' class='btn btn-info uploadbt' uptype='pengajuan'>Unggah</button>
</div>

<div class='col-md-12' style='padding:20px;'></div>

<div class='col-md-12'>
  <label>File KRS</label>
  <button type='button' class='btn btn-info uploadbt' uptype='krs'>Unggah</button>
</div>

<div class='col-md-12' style='padding:20px;'></div>


<div class='col-md-12'>
  <label>File KHS</label>
  <button type='button' class='btn btn-info uploadbt' uptype='khs'>Unggah</button>
</div>

<div class='col-md-12' style='padding:20px;'></div>


<div class='col-md-12'>
  <label>File Transkrip Nilai</label>
  <button type='button' class='btn btn-info uploadbt' uptype='transkrip'>Unggah</button>
</div>
<script>
$(document).ready(function(){
  var up = new UploadSys();
  
  $(".uploadbt").click(function(){
    var type = $(this).attr("uptype");
    if(type === "permohonan")
    {
      up.triggerSys("open","Unggah Dokumen Permohonan","uploader/permohonan.php",".up-body-content");
    }
    else if(type === "pengajuan")
    {
      up.triggerSys("open","Unggah Dokumen Pengajuan","uploader/pengajuan.php",".up-body-content");
    }
    else if(type === "krs")
    {
      up.triggerSys("open","Unggah Dokumen KRS","uploader/krs.php",".up-body-content");
    }
    else if(type === "khs")
    {
      up.triggerSys("open","Unggah Dokumen KHS","uploader/khs.php",".up-body-content");
    }
    else if(type === "transkrip")
    {
      up.triggerSys("open","Unggah Dokumen Transkrip Nilai","uploader/transkrip.php",".up-body-content");
    }
  });
});
</script>