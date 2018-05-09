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
    
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <style>
      .lg-wrapper
      {
        top:100px;
        position:relative;
        margin-left:30%;
        width:40%;
        height:450px;
        float:left;
        box-sizing:border-box;
        background-color:#fff;
        box-shadow:0px 0px 10px #aaa;
      }
      
      .lg-heading
      {
        position:absolute;
        left:0;
        top:0;
        padding:15px;
        font-weight:bold;
        color:#fff;
        box-sizing:border-box;
        width:100%;
        text-align:center;
        background-color:rgb(30,150,255);
      } 
      
      .lg-foot
      {
        bottom:0;
        left:0;
        position: absolute;
        width:100%;
        color:#fff;
        font-style: italic;
        padding:10px;
        text-align: center;
        background-color:rgb(30,150,255);
      }
      
      .lg-form
      {
        position:absolute;
        bottom:30px;
        padding:20px;
        width:100%;
        border:none;
      }
      
      .inputs-lg
      {
        border:1px solid transparent;
        text-align:center;
        background-color:#eee;
        padding:20px;
        width:50%;
        transition:ease-in-out .3s;
        float:left;
        box-sizing:border-box;
      }
      
      .inputs-lg:focus
      {
        border:1px solid rgb(0,150,255);
      }
      
      .submit
      {
        cursor:pointer;
        position:absolute;
        left:238px;
        bottom:-65px;
        width:70px;
        color:#fff;
        background-color:rgb(0,150,255);
        height:70px;
        border-radius:100px;
        border:none;
        transition:ease-in-out .2s;
      }
      
      .submit:hover
      {
        background-color:orange;
      }
      
      .images
      {
        width:50%;
        margin-left:25%;
        margin-top:80px;
      }
      
      .appinfo
      {
        cursor:pointer;
        position:absolute;
        left:150px;
        bottom:-65px;
        width:70px;
        color:#fff;
        background-color:rgb(40,200,40);
        height:70px;
        border-radius:100px;
        border:none;
        transition:ease-in-out .2s;
      }
      .appinfo:hover
      {
        background-color:orange;
      }


      /* ------- */
      
      
      .lg-modal-ovr
      {
        position:fixed;
        top:0;
        left:0;
        width:100%;
        height:100%;
        background-color:rgba(0,0,0,0.9);
        z-index:9999;
      }
      
      
      .alr-wrapper
      {
        position:fixed;
        box-sizing:border-box;
        width:100%;
        top:0;
        left:0;
        display:none;
        padding:20px;
        background-color:rgb(250,120,60);
      }
    </style>
  </head>
  <body style="background-color:#ccc;">
    
    <div class="alr-wrapper">
      <div class="container">
        <h4 class="alr-content" style="font-size:18px;margin:0;color:#fff;text-transform: uppercase;font-weight: bold;"></h4>
      </div>
    </div>
    
    <div class="lg-wrapper">
      <div class="lg-heading">UNJA Internship Application &nbsp;&nbsp; &centerdot; &nbsp;&nbsp; System Gateway</div>
      
      <div class="lg-image">
        <img src="data:image/jpeg;base64,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" class="images">
      </div>
      
      <form method="post" enctype="multipart/form-data" class="form-lg">
        <div class="lg-form">
          <input type="text" style="text-transform:uppercase;" required="required" maxlength="30" name="username" placeholder="Nama Pengguna" class="inputs-lg">
          <input type="password" required="required" maxlength="30" name="pass" placeholder="KATA SANDI" class="inputs-lg">
          <button class="submit" type="submit"><span class="fa fa-send"></span></button>
        </div>
      </form>
    </div>
    
    <script>
    $(document).ready(function(){
      $(".form-lg").submit(function(ev){
        ev.preventDefault();
        var data = $(this).serialize();
        
        
        //Ajax login
        $.ajax({
          url:"../action/login.php",
          type:"post",
          async:true,
          data:data,
          cache:false,
          beforeSend:function(){
            
          },
          error:function(){
            
          },
          success:function(res)
          {
            if(res === "good")
            {
              $("input").val("");
              $("input").attr("disabled");
              
              $(".alr-content").html("<span class='fa fa-spinner fa-spin'></span> Login berhasil! Mohon tunggu")
              
              $(".alr-wrapper").slideDown(300);
              var time1 = 5;
              var int1 = setInterval(function(){
                time1--;
                if(time1 === 0)
                {
                  $(".alr-wrapper").slideUp(500);
                  clearInterval(int1);
                }
              },1000);
  
  
              var time = 3;
              var interval = setInterval(function(){
                time--;
                if(time === 0)
                {
                  location = "index.php";
                  clearInterval(interval);
                }
              },1000); 
            }
            else if(res === "bad")
            {
              $("input").val("");
              
              $(".alr-content").html("<span class='fa fa-warning'></span> Login gagal! &nbsp;&nbsp; &centerdot; &nbsp;&nbsp; Nama Pengguna & Kata Sandi salah!");
              $(".alr-wrapper").slideDown(300);
              var time = 5;
              var int = setInterval(function(){
                time--;
                if(time === 0)
                {
                  $(".alr-wrapper").slideUp(500);
                  clearInterval(int);
                }
              },1000);
            }
          }
        });
      });
    });
    </script>
  </body>
</html>

