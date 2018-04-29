<form class="ins-form" method="post" enctype="multipart/form-data">
  <div class="col-md-3">
    <h3 style='font-weight:bold;'>Informasi Akun</h3>
    <input type='text' required='required' name='username' placeholder='ID Instansi' class='form-control i1'>
    <input type='password' required='required' name='password' placeholder='Kata Sandi' class='form-control i2'>
  </div>
  <div class='col-md-3'>
    <h3 style='font-weight:bold;'>Informasi Instansi</h3>
    <input type='text' class='form-control i3' placeholder="Nama Instansi" required='required' name='nama_instansi'>
    <input type='text' class='form-control i4' placeholder="Kapasitas Pemagang" required='required' name='kapasitas'>
    <input type='text' class='form-control i5' placeholder="Kriteria Pemagang" required='required' name='kriteria'>
    <input type='text' class='form-control i6' placeholder="Syarat" required='required' name='syarat'>
  </div>
  <div class='col-md-6'>
    <h3 style='font-weight:bold;'>Informasi Lain</h3>
    <input type='text' class='form-control i7' placeholder="Alamat" required='required' name='alamat'>

    <textarea class='form-control i0' name='deskripsi' placeholder='Deskripsi Instansi'></textarea>
  </div>
</form>

<script>
  $(document).ready(function(){
    var ht = new HtRequest();
    
    $(".up-send").click(function(){
        $(".ins-form").submit();
    });

    $(".ins-form").submit(function(ev){
        ev.preventDefault();
        var data = $(this).serialize();
        ht.fireForm("../action/tambahInstansi.php",data);
    });
    
    setInterval(function(){
      if($.trim($(".i1").val()) == "")
      {
        $(".up-send").fadeOut(400);
      }
      else if($.trim($(".i2").val()) === "")
      {
        $(".up-send").fadeOut(400);
      }
      else if($.trim($(".i3").val()) === "")
      {
        $(".up-send").fadeOut(400);
      }
      else if($.trim($(".i4").val()) === "")
      {
        $(".up-send").fadeOut(400);
      }
      else if($.trim($(".i5").val()) === "")
      {
        $(".up-send").fadeOut(400);
      }
      else if($.trim($(".i6").val()) === "")
      {
        $(".up-send").fadeOut(400);
      }
      else if($.trim($(".i7").val()) === "")
      {
        $(".up-send").fadeOut(400);
      }

      else if($.trim($(".i0").val()) === "")
      {
        $(".up-send").fadeOut(400);
      }
      else
      {
        $(".up-send").fadeIn(500);
      }
    },0);    
  });
</script>