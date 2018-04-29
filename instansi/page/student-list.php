
<style>
  .data-row
  {
    cursor:pointer;
  }
  
  .clear-search
  {
    position:absolute;
    bottom:0px;
    border:none;
    right:-30px;
    z-index:9999;
    background-color:#ddd;
    color:#444;
    border-radius:100px;
    height:60px;
    width:60px;
    border:3px solid transparent;
  }
  
    .clear-search:hover
    {
      background-color:purple;
      color:#fff;
    }
</style>
<div class='col-md-12'>
  <h3 style='font-weight:bold;'>Mahasiswa</h3>
  <?php 
    require_once '../../core/Mahasiswa.php'; 
    
    $mahasiswa->lihatMahasiswa();
    
  ?>
</div>

<div class="col-md-3" style='position:relative;'>
  <button type='button' class='clear-search'><span class='fa fa-close'></span></button>

  
    <input type="text" required="required" name="search" class="form-control search" placeholder="Cari Mahasiswa (NIM/Nama)">
  

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
      <?php 
        foreach ($mahasiswa->datas as $key) {
          echo "<tr style='color:purple;font-weight:bold;text-transform: uppercase;' class='data-row' id='$key->nim'><td>".$key->nim."</td><td>".$key->nama."</td></tr>";
        }
      ?>

    </tbody>
  </table>  
</div>
<script>
$(document).ready(function(){
  var ht = new HtRequest();
  var modal = new Modal();
  var side = new SideBar();
  
  $(".data-row").click(function(){
    var id = $(this).attr("id");
    var data = {"id":id};
    ht.htPost("page/student-data.php",data,".md-content");
    modal.triggerModal("open","Data Mahasiswa");
  });
  
  setInterval(function(){
    if($.trim($(".search").val()) !== "")
    {
      $(".clear-search").fadeIn(200);
      side.playSidebar("open","Hasil Pencarian Untuk: &nbsp;&nbsp;&nbsp '<span style='color:orange'> "+ $(".search").val()+"</span> '");
    }
    else
    {
      $(".clear-search").fadeOut(200);
      side.playSidebar("close");
    }
  },0);
  
  $(".side-dismiss").click(function(){
    $(".search").val("");
  });
  
  $(".clear-search").click(function(){
    $(".search").val("");
  });
  
  $(".search").on("keyup",function(){
    var searchkey = $(this).val();
    var data = {"data":searchkey};
    ht.htPost("post/search-std.php",data,".cntn");
  });
});
</script>
