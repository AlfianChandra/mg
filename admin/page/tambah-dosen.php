<form class="std-form" method="post" enctype="multipart/form-data" style="margin-bottom:50px;float:left;width:100%;">
    <div class="col-md-6">
        <h3 style="font-weight:bold;">Data Pribadi</h3>
        <input type="text" required="required" name="nama" maxlength="40" class="form-control i1" placeholder="Nama Lengkap">
        <input type="text" required="required" name="nip" maxlength="10" class="form-control i2" placeholder="Nomor Induk Pegawai">
        <input type="password" required="required" name="password" class="form-control i3" placeholder="Kata Sandi">
    </div>

    <div class="col-md-6">
        <h3 style="font-weight:bold;">Data Akademik</h3>
        <input type="text" required="required" name="prodi" class="form-control i4" placeholder="Program Studi">
        <input type="text" required="required" name="telp" class="form-control i5" placeholder="No. Telp">
    </div>
</form>
<script>
     $(document).ready(function(){
         var ht = new HtRequest();

         $(".up-send").click(function(){
             $(".std-form").submit();
         });

         $(".std-form").submit(function(ev){
             ev.preventDefault();
             var data = $(this).serialize();
             ht.fireForm("../action/tambahDosen.php",data);
         });
        
         setInterval(function(){
           if($.trim($(".i1").val()) === "")
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
           else
           {
             $(".up-send").fadeIn(500);
           }
         },0);
     });
</script>