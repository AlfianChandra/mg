<!doctype html>
<html lang="en">
  <head>
    <?php 
      include 'inc/essential.php';
     ?>
  </head>
  <body>
    <?php include 'inc/modal.php'; ?>
    <?php include 'inc/alert.php'; ?>
    <div class="wrapper">
      <?php include 'inc/navbar.php' ?>
      
        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <h2 style="text-transform: capitalize;"><i class="material-icons">pan_tool</i> selamat datang, <b style="color:purple"><?= $mahasiswa->nama ?></b>!</h2>
              </div>
              <div class="col-md-4">
                <img src="http://icons.iconarchive.com/icons/webalys/kameleon.pics/512/Student-3-icon.png" class="img-responsive pp_image"> 
              </div>
              <div class="col-md-3">
                <button type="button" atr-type="profil" class="btn btn-success ajax-call" style="width:100%;">Ringkasan Profil</button>
                <button type="button" atr-type="status" class="btn btn-primary ajax-call" style="width:100%;">Status Magang</button>
                <button type="button" atr-type="sk" class="btn btn-danger ajax-call" style="width:100%;">Syarat & Ketentuan Magang</button>

<<<<<<< HEAD
=======
                
>>>>>>> 4998ea65a1e27ca9da2acd38cc0cbffe76334e53
                <?php if ($mahasiswa->nama_pembimbing !== ""): ?>
                  <button type="button" atr-type="pembimbing" class="btn btn-info ajax-call" style="width:100%;">Kontak pembimbing</button>
                <?php endif ?>
              </div>
            </div>
          </div>
        </div>
        <?php
        include 'inc/footer.php';
        ?>
      </div>
    </div>
  </body>
  <!--   Core JS Files   -->
  <script src="assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
  <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="assets/js/material.min.js" type="text/javascript"></script>
  <!--  Charts Plugin -->
  <script src="assets/js/chartist.min.js"></script>
  <!--  Dynamic Elements plugin -->
  <script src="assets/js/arrive.min.js"></script>
  <!--  PerfectScrollbar Library -->
  <script src="assets/js/perfect-scrollbar.jquery.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/bootstrap-notify.js"></script>
  <!-- Material Dashboard javascript methods -->
  <script src="assets/js/material-dashboard.js?v=1.2.0"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/js/demo.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
    
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();
    
    });
  </script>
  
  <script>
    $(document).ready(function(){
      //Init classes
      var http = new HtRequest();
      var modal = new Modal();
      //Functions
      $(".ajax-call").click(function(){
        var call = $(this).attr("atr-type");
        modal.triggerModal("open","");
        if(call === "profil")
        {
          http.htGet("reqs/profil.php",".md-content");
          modal.triggerModal("close");
          modal.triggerModal("open","PROFIL MAHASISWA");
        }
        else if(call === "status")
        {
          http.htGet("reqs/status.php",".md-content");
          modal.triggerModal("close");
          modal.triggerModal("open","STATUS MAGANG");
        }
        else if(call === "sk")
        {
          http.htGet("reqs/sk.php",".md-content");
          modal.triggerModal("close");
          modal.triggerModal("open","SYARAT & KETENTUAN MAGANG");
        }
        else if(call === "instansi")
        {
          http.htGet("reqs/instance.php",".md-content");
          modal.triggerModal("close");
          modal.triggerModal("open","INSTANSI");
        }
        else if(call === "pembimbing")
        {
          http.htGet("reqs/pembimbing.php",".md-content");
          modal.triggerModal("close");
          modal.triggerModal("open","INSTANSI");
        }
        else
        {
          http.htError();
        }
      });
    });
  </script>
</html>

