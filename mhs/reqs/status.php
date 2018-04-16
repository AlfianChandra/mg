<style>
  .status-head
  {
    font-weight:bold;
  }
  
  .data-type
  {
    width:30%;
    float:left;
    box-sizing:border-box;
    padding:5px;
    border-bottom:2px;
    margin:0;
  }
  
  .data-content
  {
    font-weight: bold;
    width:70%;
    float:left;
    margin:0;
    box-sizing:border-box;
    padding:5px;
    text-transform: uppercase;
  }
  
  .data-status
  {
    float:left;
    box-sizing:border-box;
    width:100%;
    font-weight:bold;
    margin-top:10px;
  }
  
  .act-wrapper
  {
    float:left;
    box-sizing:border-box;
    width:100%;
    padding:10px;
  }
</style>
<div class="col-md-12">
  <h3 class="status-head">Status Kualifikasi Magang</h3>
  <h5 class="data-type">Nama</h5><h5 class="data-content">Alfian Chandra</h5>
  <h5 class="data-type">Total SKS</h5><h5 class="data-content">110 SKS</h5>
  <h5 class="data-type">IPK</h5><h5 class="data-content">2,69</h5>
  <h5 class="data-type">Semester</h5><h5 class="data-content">6 (GENAP)</h5>
  <div class="alert alert-success data-status">Anda Terkualifikasi untuk melaksanakan Magang. Silahkan persiapkan Persyaratan Magang Anda.</div>
</div>

<script>
 $(document).ready(function(){
  var http = new HtRequest();
  var modal = new Modal();
  $(".sk-click").click(function(){
    var type = $(this).attr("atr-type");
    if(type === "sk")
    {
      http.htGet("reqs/sk.php",".md-content");
      modal.triggerModal("open","SYARAT & KETENTUAN MAGANG");
    }
    else if(type === "instansi")
    {
      http.htGet("reqs/instance.php",".md-content");
      modal.triggerModal("open","INSTANSI");
    }

  });
 });
</script>
