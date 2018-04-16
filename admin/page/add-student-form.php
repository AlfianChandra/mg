<form class="std-form" method="post">
    <div class="col-md-6">
        <h3 style="font-weight:bold;">Data Pribadi</h3>
        <input type="text" required="required" name="nama" maxlength="40" class="form-control" placeholder="Nama Lengkap">
        <input type="text" required="required" name="nim" maxlength="10" class="form-control" placeholder="Nomor Induk Mahasiswa">
        <input type="password" required="required" name="password" class="form-control" placeholder="Kata Sandi">
        <input type="text" required="required" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir">
        <input type="date" required="required" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir">
        <div class="col-md-12" style="padding:0px;margin-bottom:25px;border-bottom:1px solid #ccc;">
            <label style="width:100%;margin-top:15px;float:left;">Jenis Kelamin</label>
            <label style="float:left;box-sizing:border-box;width:auto;">
                <input type="radio" name="jk"> Laki-Laki
            </label>
            <label style="float:left;box-sizing:border-box;width:auto;margin-left:30px;">
                <input type="radio" name="jk"> Perempuan
            </label>
        </div>
    </div>

    <div class="col-md-6">
        <h3 style="font-weight:bold;">Data Akademik</h3>
        <input type="text" required="required" name="prodi" class="form-control" placeholder="Program Studi">
        <input type="text" required="required" name="fakultas" class="form-control" placeholder="Fakultas">
        <input type="text" required="required" name="dosen_pa" class="form-control" placeholder="Dosen P.A">
        <input type="text" required="required" name="total_sks" class="form-control" placeholder="Total SKS">
        <input type="text" required="required" name="ipk" class="form-control" placeholder="Indeks Prestasi Kumulatif">
        <input type="email" required="required" name="email" class="form-control" placeholder="Alamat E-Mail">
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
            ht.fireForm("post/add-student.php",data);
        });
    });
</script>