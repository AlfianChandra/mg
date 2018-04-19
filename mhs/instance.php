<!doctype html>
<html lang="en">
  <head>
    <?php 
      include 'inc/essential.php'; 
      require_once '../core/Instansi.php';
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
                <h2><i class="material-icons">business</i> Instansi Magang</h2>
                <button type='button' class='btn btn-primary instance'>Lihat Instansi</button>
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
      var modal = new Modal();
      var ht = new HtRequest();
      $(".instance").click(function(){
        modal.triggerModal("open","Instansi");
        ht.htGet("reqs/instance.php",".md-content");
      });
    });
  </script>
</html>

