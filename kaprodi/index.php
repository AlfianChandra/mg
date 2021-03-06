<!doctype html>
<html lang="en">
  <head>
    <?php include 'inc/essential.php'; ?>
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
                <h2><i class="material-icons">pan_tool</i> Selamat Datang, <b style="color:purple; text-transform: capitalize;"><?= $dosen->nama ?></b></h2>
              </div>
              <div class="col-md-4">
                <img src="https://www.coolheadtech.com/hs-fs/hub/189007/file-526634248-png/google-apps-admin-panel-icon.png?t=1522945830559&width=237&name=google-apps-admin-panel-icon.png" class="img-responsive pp_image">
              </div>
              <div class="col-md-3">

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
</html>

