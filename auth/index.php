<!DOCTYPE html>
<html lang="en">
  <head>
    <?php 
        require_once '../core/Auth.php';
        $auth->isLogin();
     ?>
    <title>INTERNAPP SYSTEM GATEWAY</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->	
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->	
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->	
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
  </head>
  <body>
    <div class="limiter">
      <div class="container-login100" style='height:100px;'>
        <div class="wrap-login100">
          <form class="login100-form" method="POST" action="../action/login.php">
            <span class="login100-form-title p-b-34">
            ADMINISTRATOR AUTH
            </span>
            <div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
              <input id="first-name" class="input100" type="text" name="username" placeholder="Nama Pengguna">
              <span class="focus-input100"></span>
            </div>
            <div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
              <input class="input100" type="password" name="pass" placeholder="Kata Sandi">
              <span class="focus-input100"></span>
            </div>
            <div class="container-login100-form-btn">
              <input type="submit" class="login100-form-btn" value="Sign in">
            </div>
          </form>
          <div class="login100-more">
            <img src='https://siakadlama.unja.ac.id/foto/F1E115015.JPG' style='height:100%;width:16.666%;object-fit: cover;float:left;'>
            <img src='https://siakadlama.unja.ac.id/foto/F1E115010.JPG' style='height:100%;width:16.666%;object-fit: cover;float:left;'>
            <img src='https://siakadlama.unja.ac.id/foto/F1E115004.JPG' style='height:100%;width:16.666%;object-fit: cover;float:left;'>
            <img src='https://siakadlama.unja.ac.id/foto/F1E115034.JPG' style='height:100%;width:16.666%;object-fit: cover;float:left;'>
            <img src='https://siakadlama.unja.ac.id/foto/F1E115029.JPG' style='height:100%;width:16.666%;object-fit: cover;float:left;'>
            <img src='https://siakadlama.unja.ac.id/foto/F1E115021.JPG' style='height:100%;width:16.666%;object-fit: cover;float:left;'>
            <style>
              .overlays
              {
                position:absolute;
                top:0;
                bottom:0;
                width:100%;
                height:100%;
                background-color:rgba(0,0,0,0.7);
              }
            </style>
            <div class='overlays'>
              <h2 style='text-align:center;color:#fff;margin-top:20px;'><span style='color:purple;font-style: italic'>INTERN</span>APP<br><br>SISTEM INFORMASI MAGANG<br>
              KELOMPOK 7</h2>
              <div class='write' style='margin-top:25px;padding:20px;'>
                <h5 style='text-align: left;color:#fff;font-size:13px;'>Lead Project Manager: &nbsp;&nbsp;&nbsp;&nbsp; <b>Yulia Oktaviani</b></h5>
                <h5 style='text-align: left;color:#fff;font-size:13px;'>System Analyst Specialists: &nbsp;&nbsp;&nbsp;&nbsp; <b>Adam Rahmat Fitrianto</b>, <b>Al Ikhzan</b></h5>
                <h5 style='text-align: left;color:#fff;font-size:13px;'>Lead DataBase Expert: &nbsp;&nbsp;&nbsp;&nbsp; <b>Muhammad Khatami Husaini</b></h5>
                <h5 style='text-align: left;color:#fff;font-size:13px;'>Lead Programmer: &nbsp;&nbsp;&nbsp;&nbsp; <b>Rahmad Arif Irwansyah</b></h5>
                <h5 style='text-align: left;color:#fff;font-size:13px;'>Lead Interface Designer: &nbsp;&nbsp;&nbsp;&nbsp; <b>Alfian Chandra</b></h5>
                <address style='color:#fff;margin-top: 15px;font-style: italic;font-size:12px;'>&COPY; INTERNAPP. Made with &hearts; and special touches by 7th Team &centerdot; Information System &centerdot; University of Jambi</address>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="dropDownSelect1"></div>
    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <script>
      $(".selection-2").select2({
      	minimumResultsForSearch: 20,
      	dropdownParent: $('#dropDownSelect1')
      });
    </script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <script src='vendor/type/jquery.typeText.min.js'></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>
    <script>
    $(document).ready(function(){
      $(".write").typeText({
        typeSpeed:50,
        lineWait:1000
      });
    });
    </script>
  </body>
</html>

