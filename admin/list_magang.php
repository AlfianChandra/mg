<!doctype html>
<html lang="en">
  <head>
    <?php include 'inc/essential.php'; ?>
  </head>
  <body>
    <?php include 'inc/modal.php'; ?>
    <?php include 'inc/alert.php'; ?>
    <?php include 'inc/upload.php'; ?>
    <?php include 'inc/sidebar.php'; ?>
    <div class="wrapper">
      <?php include 'inc/navbar.php' ?>
      
        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <h2 style="font-weight:bold;"> Manage Magang</h2>
              </div>
              <div class="col-md-12">
                <button type="button" at-type="lihat-mhs" class="btn btn-warning bt-mhs-act">Lihat Mahasiswa</button>
                <button type="button" at-type="lihat-dosen" class="btn btn-primary bt-mhs-act">Lihat dosen</button>
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
      var ht = new HtRequest();
      var modal = new Modal();
      var up = new UploadSys();
      
          $(".bt-mhs-act").click(function(){
              var at = $(this).attr("at-type");
              
              if(at === "lihat-mhs")
              {
                  ht.htGet("page/student-list-magang.php",".md-content");
                  modal.triggerModal("open","Lihat Mahasiswa");
              }
              else if(at === "lihat-dosen")
              {
                  ht.htGet("page/dosen-list-magang.php",".md-content");
                  modal.triggerModal("open","Lihat Dosen");
              }

          });
      });
    </script>  
</html>
