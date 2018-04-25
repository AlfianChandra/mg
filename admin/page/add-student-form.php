<form class="std-form" method="post" enctype="multipart/form-data" style="margin-bottom:50px;float:left;width:100%;">
    <div class="col-md-6">
        <h3 style="font-weight:bold;">Data Pribadi</h3>
        <input type="text" required="required" name="nama" maxlength="40" class="form-control i1" placeholder="Nama Lengkap">
        <input type="text" required="required" name="nim" maxlength="10" class="form-control i2" placeholder="Nomor Induk Mahasiswa">
        <input type="password" required="required" name="password" class="form-control i3" placeholder="Kata Sandi">
        <input type="text" required="required" name="tempat_lahir" class="form-control i4" placeholder="Tempat Lahir">
        <input type="date" required="required" name="tanggal_lahir" class="form-control i5" placeholder="Tanggal Lahir">
        <div class="col-md-12" style="padding:0px;margin-bottom:25px;border-bottom:1px solid #ccc;">
            <label style="width:100%;margin-top:15px;float:left;">Jenis Kelamin</label>
            
            <label style="float:left;box-sizing:border-box;width:auto;">

                <input type="radio" name="jenis_kelamin" value="1"> Laki-Laki
            </label>
            
            <label style="float:left;box-sizing:border-box;width:auto;margin-left:30px;">
                <input type="radio" name="jenis_kelamin" value='0'> Perempuan
            </label>
            
        </div>
    </div>

    <div class="col-md-6">
        <h3 style="font-weight:bold;">Data Akademik</h3>
        <input type="text" required="required" name="prodi" class="form-control i6" placeholder="Program Studi">
        <input type="text" required="required" name="fakultas" class="form-control i7" placeholder="Fakultas">
        <input type="text" required="required" name="semester" class="form-control i8" placeholder="Semester">
        <input type="text" required="required" name="sks" class="form-control i9" placeholder="Total SKS">
        <input type="text" required="required" name="ipk" class="form-control i0" placeholder="Indeks Prestasi Kumulatif">
        <input type="text" required="required" name="telp" class="form-control ia" placeholder="No. Telp">
        <input type="number" required="required" name="nip_pembimbing" class="form-control ib" placeholder="NIP Pembimbing">
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
             ht.fireForm("../action/tambahMahasiswa.php",data);
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
           else if($.trim($(".i6").val()) === "")
           {
             $(".up-send").fadeOut(400);
           }
           else if($.trim($(".i7").val()) === "")
           {
             $(".up-send").fadeOut(400);
           }
           else if($.trim($(".i8").val()) === "")
           {
             $(".up-send").fadeOut(400);
           }
           else if($.trim($(".i9").val()) === "")
           {
             $(".up-send").fadeOut(400);
           }
           else if($.trim($(".i0").val()) === "")
           {
             $(".up-send").fadeOut(400);
           }
           else if($.trim($(".ia").val()) === "")
           {
             $(".up-send").fadeOut(400);
           }
           else if($.trim($(".ib").val()) === "")
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