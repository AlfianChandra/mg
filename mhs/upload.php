<!doctype html>
<html lang="en">
  <head>
    <?php include 'inc/essential.php'; ?>
  </head>
  <body>
    <?php include 'inc/modal.php'; ?>
    <?php include 'inc/alert.php'; ?>
    <?php include 'inc/upload.php'; ?>
    <div class="wrapper">
      <?php include 'inc/navbar.php' ?>
      
        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <h2><i class="material-icons">folder</i> Dokumen </h2>
              </div>
            </div>
            <div class="row">
              <style>
                .download-body
                {
                  height:320px;
                  overflow-y:auto;
                }
                .upload-body
                {
                  height:300px;
                  overflow-y:auto;
                }
              </style>
              <div class="col-md-3">
                <button type="button" style="width:100%" class="btn btn-primary trg-doc" target='.files-download' file='down-file.php' inn-body='.download-body'><i class="material-icons">file_download</i> Unduh Dokumen</button>
                <button type="button" style="width:100%" class="btn btn-info trg-doc" target='.files-upload' file='up-file.php' inn-body='.upload-body'><i class="material-icons">file_upload</i> Unggah Dokumen</button>
              </div>
              <div class="col-md-9 files-download filesdoc" style="border-left:3px solid purple;display:none">
                <h3 style="background-color:purple;color:#fff;margin:0;padding:10px;font-weight:bold;">Unduh Dokumen</h3>
                <div class='col-md-12 download-body' style='padding-top:20px;'>
                  
                </div>
              </div>
              
              <div class="col-md-9 files-upload filesdoc" style="border-left:3px solid rgb(0,170,190);;display:none">
                <h3 style="background-color:rgb(0,170,190);color:#fff;margin:0;padding:10px;font-weight:bold;">Unggah Dokumen</h3>
                <div class='col-md-12 upload-body' style='padding-top:20px;'>
                  
                </div>
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
      $(".trg-doc").click(function(){
        var target = $(this).attr("target");
        var body = $(this).attr("inn-body");
        var file = $(this).attr("file");
    
        $(".filesdoc").fadeOut(0);
        $(target).slideDown(500);
        
        
        http.htGet("reqs/"+file,body);
      });
    });
  </script>
</html>

