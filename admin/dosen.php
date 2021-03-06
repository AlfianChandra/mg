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
    <?php include 'inc/prompt.php'; ?>
    <div class="wrapper">
      <?php include 'inc/navbar.php' ?>
      
        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <h2 style="font-weight:bold;"> Manage Dosen</h2>
              </div>
              <div class="col-md-12">
                <button type="button" at-type="tambah" class="btn btn-primary bt-mhs-acts">Tambah dosen</button>
                <button type="button" at-type="lihat" class="btn btn-warning bt-mhs-acts">Lihat dosen</button>
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
      
          $(".bt-mhs-acts").click(function(){
              var at = $(this).attr("at-type");
              if(at === "tambah")
              {
                  up.triggerSys("open","Tambah Dosen","page/tambah-dosen.php",".up-body-content");
              }
              else if(at === "lihat")
              {
                  ht.htGet("page/dosen-list.php",".md-content");
                  modal.triggerModal("open","Lihat Dosen");
              }
          });
      });
    </script>  
</html>
