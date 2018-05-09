<?php
$a = 0;
?>
<!doctype html>
<html lang="en">
  <head>
    <?php include 'inc/essential.php'; ?>
    <style>
      .guideline
      {
        position:absolute;
        top:-3px;
        left:0;
        border-radius:10px;
        width:100%;
        padding:8px;
        background-color:#ccc;
      }
      
      .step
      {
        transition:ease-in-out .5s;
        position:absolute;
        top:-45px;
        z-index:9995;
        background-color:#ccc;
        width:100px;
        text-align:center;
        height:100px;
        border-radius:50px;
        cursor:pointer;
      }
      
      .step-1
      {
        left:0;
      }
      
      .step-2
      {
        left:45%;
      }
      
      .step-3
      {
        right:0;
      }
      
      .step-desc
      {
        font-size:12px;
        font-weight:bold;
        text-transform: uppercase;
        position:absolute;
        width:100%;
        bottom:-60px;
        color:#aaa;
        left:0;
        text-align:center;
      }
      
      .step-list
      {
        display:none;
        z-index:9998;
        box-shadow: 0px 0px 20px #888;
        position:absolute;
        top:-150px;
        left:-70%;
        width:240px;
        padding:10px;
        background-color:rgb(0,150,255);
        border-radius:5px;
        color:#fff;
        height:120px;
        animation:updown linear infinite 1s;
      }
      
      @keyframes updown
      {
        0%{top:-150px}
        50%{top:-145px}
        100%{top:-150px}
      }
      
      .lst
      {
        position:absolute;
        font-size: 10px;
        text-align:left;
        top:0;
        width:90%;
        right:-20px;
        padding:20px;
        margin-bottom:10px;
        overflow-y:hidden;
        height:120px;
      }
      
      .lst:hover
      {
        overflow-y:auto;
      }
    </style>
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
                <h2><i class="material-icons">clear_all</i> Pendaftaran Magang </h2>
              </div>
            </div>
            <div class="row" style="padding:70px;">
              <?php
              $status = true;
              if($status == true)
              {
                ?>
              <div class="col-md-12" style="position:relative;">
                
                <?php
                if($a === 1)
                {
                  ?>        
                <div class="step step-1" style='background-color:rgb(30,210,40);'>
                  <span style='margin-top:19px;color:#fff;font-size:60px;' class="material-icons">control_point</span>
                  <h4 class='step-desc' style='color:rgb(30,210,40);'> 
                    <span class='fa fa-check'></span> Pendaftaran Magang
                  </h4>
                  
                  <div class='step-list'>
                    <span style='
                          font-size:60px;
                          position:absolute;
                          top:30px;
                          color:#fff;
                          left:22px;
                          'class='fa fa-envelope'></span>
                    
                    <div class='lst'>      
                      <ul>
                        <li>Mengunggah Dokumen Persyaratan</li>
                        <li>Memilih Instansi</li>
                        <li>Menentukan Waktu Magang</li>
                      </ul>
                    </div>
                    
                    <span style='
                          position:absolute;
                          box-sizing:border-box;
                          bottom:-20px;
                          font-size:30px;
                          color:rgb(0,150,255);
                          left:0;
                          width:100%;
                          text-align:center;
                          ' class='fa fa-caret-down'></span>
                  </div>
                </div>
                
                <div class="step step-2">
                  <span style='margin-top:19px;color:#fff;font-size:60px;' class="material-icons">next_week</span>
                  <h4 class='step-desc'>
                    Pendaftaran Instansi
                  </h4>
                  
                   <div class='step-list'>
                    <span style='
                          font-size:60px;
                          position:absolute;
                          top:30px;
                          color:#fff;
                          left:22px;
                          'class='fa fa-envelope'></span>
                    
                    <div class='lst'>      
                      <ul>
                        <li>Mengunggah Dokumen Persyaratan</li>
                      </ul>
                    </div>
                    
                    <span style='
                          position:absolute;
                          box-sizing:border-box;
                          bottom:-20px;
                          font-size:30px;
                          color:rgb(0,150,255);
                          left:0;
                          width:100%;
                          text-align:center;
                          ' class='fa fa-caret-down'></span>
                  </div>
                </div>
                
                <div class="step step-3">
                  <span style='margin-top:19px;color:#fff;font-size:60px;' class="material-icons">verified_user</span>
                  <h4 class='step-desc'>
                    Status Pendaftaran
                  </h4>
                  
                   <div class='step-list'>
                    <span style='
                          font-size:60px;
                          position:absolute;
                          top:30px;
                          color:#fff;
                          left:22px;
                          'class='fa fa-envelope'></span>
                    
                    <div class='lst'>      
                      <ul>
                        <li>Menunggu Respon & Status Diterima Magang</li>
                      </ul>
                    </div>
                    
                    <span style='
                          position:absolute;
                          box-sizing:border-box;
                          bottom:-20px;
                          font-size:30px;
                          color:rgb(0,150,255);
                          left:0;
                          width:100%;
                          text-align:center;
                          ' class='fa fa-caret-down'></span>
                  </div>
                </div>    
                  <?php
                }
                else if($a == 2)
                {
                  ?>              
                <div class="step step-1" style='background-color:rgb(30,210,40);'>
                  <span style='margin-top:19px;color:#fff;font-size:60px;' class="material-icons">control_point</span>
                  <h4 class='step-desc' style='color:rgb(30,210,40);'> 
                    <span class='fa fa-check'></span> Pendaftaran Magang
                  </h4>
                  
                  <div class='step-list'>
                    <span style='
                          font-size:60px;
                          position:absolute;
                          top:30px;
                          color:#fff;
                          left:22px;
                          'class='fa fa-envelope'></span>
                    
                    <div class='lst'>      
                      <ul>
                        <li>Syarat 1</li>
                        <li>Syarat 2</li>
                      </ul>
                    </div>
                    
                    <span style='
                          position:absolute;
                          box-sizing:border-box;
                          bottom:-20px;
                          font-size:30px;
                          color:rgb(0,150,255);
                          left:0;
                          width:100%;
                          text-align:center;
                          ' class='fa fa-caret-down'></span>
                  </div>
                </div>
                
                
                <div class="step step-2" style='background-color:rgb(30,210,40);'>
                  <span style='margin-top:19px;color:#fff;font-size:60px;' class="material-icons">next_week</span>
                  <h4 class='step-desc' style='color:rgb(30,210,40);'>
                    <span class='fa fa-check'></span> Pendaftaran Instansi
                  </h4>
                  
                   <div class='step-list'>
                    <span style='
                          font-size:60px;
                          position:absolute;
                          top:30px;
                          color:#fff;
                          left:22px;
                          'class='fa fa-envelope'></span>
                    
                    <div class='lst'>      
                      <ul>
                        <li>Syarat 1</li>
                        <li>Syarat 2</li>
                        <li>Syarat 3</li>
                      </ul>
                    </div>
                    
                    <span style='
                          position:absolute;
                          box-sizing:border-box;
                          bottom:-20px;
                          font-size:30px;
                          color:rgb(0,150,255);
                          left:0;
                          width:100%;
                          text-align:center;
                          ' class='fa fa-caret-down'></span>
                  </div>
                </div>
                
                <div class="step step-3">
                  <span style='margin-top:19px;color:#fff;font-size:60px;' class="material-icons">verified_user</span>
                  <h4 class='step-desc'>
                    Status Pendaftaran
                  </h4>
                  
                   <div class='step-list'>
                    <span style='
                          font-size:60px;
                          position:absolute;
                          top:30px;
                          color:#fff;
                          left:22px;
                          'class='fa fa-envelope'></span>
                    
                    <div class='lst'>      
                      <ul>
                        <li>Syarat 1</li>
                        <li>Syarat 2</li>
                        <li>Syarat 3</li>
                        <li>Syarat 3</li>
                        <li>Syarat 3</li>
                      </ul>
                    </div>
                    
                    <span style='
                          position:absolute;
                          box-sizing:border-box;
                          bottom:-20px;
                          font-size:30px;
                          color:rgb(0,150,255);
                          left:0;
                          width:100%;
                          text-align:center;
                          ' class='fa fa-caret-down'></span>
                  </div>
                </div>
                <?php
                }
                else if($a == 4)
                {
                  ?>
                <div class="step step-1" style='background-color:rgb(30,210,40);'>
                  <span style='margin-top:19px;color:#fff;font-size:60px;' class="material-icons">control_point</span>
                  <h4 class='step-desc' style='color:rgb(30,210,40);'> 
                    <span class='fa fa-check'></span> Pendaftaran Magang
                  </h4>
                  
                  <div class='step-list'>
                    <span style='
                          font-size:60px;
                          position:absolute;
                          top:30px;
                          color:#fff;
                          left:22px;
                          'class='fa fa-envelope'></span>
                    
                    <div class='lst'>      
                      <ul>
                        <li>Syarat 1</li>
                        <li>Syarat 2</li>
                      </ul>
                    </div>
                    
                    <span style='
                          position:absolute;
                          box-sizing:border-box;
                          bottom:-20px;
                          font-size:30px;
                          color:rgb(0,150,255);
                          left:0;
                          width:100%;
                          text-align:center;
                          ' class='fa fa-caret-down'></span>
                  </div>
                </div>
                
                
                <div class="step step-2" style='background-color:rgb(30,210,40);'>
                  <span style='margin-top:19px;color:#fff;font-size:60px;' class="material-icons">next_week</span>
                  <h4 class='step-desc' style='color:rgb(30,210,40);'>
                    <span class='fa fa-check'></span> Pendaftaran Instansi
                  </h4>
                  
                   <div class='step-list'>
                    <span style='
                          font-size:60px;
                          position:absolute;
                          top:30px;
                          color:#fff;
                          left:22px;
                          'class='fa fa-envelope'></span>
                    
                    <div class='lst'>      
                      <ul>
                        <li>Syarat 1</li>
                        <li>Syarat 2</li>
                        <li>Syarat 3</li>
                      </ul>
                    </div>
                    
                    <span style='
                          position:absolute;
                          box-sizing:border-box;
                          bottom:-20px;
                          font-size:30px;
                          color:rgb(0,150,255);
                          left:0;
                          width:100%;
                          text-align:center;
                          ' class='fa fa-caret-down'></span>
                  </div>
                </div>
                
                <div class="step step-3" style="background-color:rgb(255,40,20);">
                  <span style='margin-top:19px;color:#fff;font-size:60px;' class="material-icons">verified_user</span>
                  <h4 class='step-desc'style="color:rgb(255,40,20);">
                    <span class="fa fa-close"></span> Status Pendaftaran
                  </h4>
                  
                   <div class='step-list'>
                    <span style='
                          font-size:60px;
                          position:absolute;
                          top:30px;
                          color:#fff;
                          left:22px;
                          'class='fa fa-envelope'></span>
                    
                    <div class='lst'>      
                      <ul>
                        <li>Syarat 1</li>
                        <li>Syarat 2</li>
                        <li>Syarat 3</li>
                        <li>Syarat 3</li>
                        <li>Syarat 3</li>
                      </ul>
                    </div>
                    
                    <span style='
                          position:absolute;
                          box-sizing:border-box;
                          bottom:-20px;
                          font-size:30px;
                          color:rgb(0,150,255);
                          left:0;
                          width:100%;
                          text-align:center;
                          ' class='fa fa-caret-down'></span>
                  </div>
                </div>
                <?php
                }
                else if($a == 0)
                {
                  ?>
                <div class="step step-1">
                  <span style='margin-top:19px;color:#fff;font-size:60px;' class="material-icons">control_point</span>
                  <h4 class='step-desc'> 
                    Pendaftaran Magang
                  </h4>
                  
                  <div class='step-list'>
                    <span style='
                          font-size:60px;
                          position:absolute;
                          top:30px;
                          color:#fff;
                          left:22px;
                          'class='fa fa-envelope'></span>
                    
                    <div class='lst'>      
                      <ul>
                        <li>Syarat 1</li>
                        <li>Syarat 2</li>
                      </ul>
                    </div>
                    
                    <span style='
                          position:absolute;
                          box-sizing:border-box;
                          bottom:-20px;
                          font-size:30px;
                          color:rgb(0,150,255);
                          left:0;
                          width:100%;
                          text-align:center;
                          ' class='fa fa-caret-down'></span>
                  </div>
                </div>
                
                
                <div class="step step-2">
                  <span style='margin-top:19px;color:#fff;font-size:60px;' class="material-icons">next_week</span>
                  <h4 class='step-desc'>
                    Pendaftaran Instansi
                  </h4>
                  
                   <div class='step-list'>
                    <span style='
                          font-size:60px;
                          position:absolute;
                          top:30px;
                          color:#fff;
                          left:22px;
                          'class='fa fa-envelope'></span>
                    
                    <div class='lst'>      
                      <ul>
                        <li>Syarat 1</li>
                        <li>Syarat 2</li>
                        <li>Syarat 3</li>
                      </ul>
                    </div>
                    
                    <span style='
                          position:absolute;
                          box-sizing:border-box;
                          bottom:-20px;
                          font-size:30px;
                          color:rgb(0,150,255);
                          left:0;
                          width:100%;
                          text-align:center;
                          ' class='fa fa-caret-down'></span>
                  </div>
                </div>
                
                <div class="step step-3">
                  <span style='margin-top:19px;color:#fff;font-size:60px;' class="material-icons">verified_user</span>
                  <h4 class='step-desc'>
                    Status Pendaftaran
                  </h4>
                  
                   <div class='step-list'>
                    <span style='
                          font-size:60px;
                          position:absolute;
                          top:30px;
                          color:#fff;
                          left:22px;
                          'class='fa fa-envelope'></span>
                    
                    <div class='lst'>      
                      <ul>
                        <li>Syarat 1</li>
                        <li>Syarat 2</li>
                        <li>Syarat 3</li>
                        <li>Syarat 3</li>
                        <li>Syarat 3</li>
                      </ul>
                    </div>
                    
                    <span style='
                          position:absolute;
                          box-sizing:border-box;
                          bottom:-20px;
                          font-size:30px;
                          color:rgb(0,150,255);
                          left:0;
                          width:100%;
                          text-align:center;
                          ' class='fa fa-caret-down'></span>
                  </div>
                </div>
                <?php
                }
                else
                {
                  ?>
                <div class="step step-1" style='background-color:rgb(30,210,40);'>
                  <span style='margin-top:19px;color:#fff;font-size:60px;' class="material-icons">control_point</span>
                  <h4 class='step-desc' style='color:rgb(30,210,40);'> 
                    <span class='fa fa-check'></span> Pendaftaran Magang
                  </h4>
                  
                  <div class='step-list'>
                    <span style='
                          font-size:60px;
                          position:absolute;
                          top:30px;
                          color:#fff;
                          left:22px;
                          'class='fa fa-envelope'></span>
                    
                    <div class='lst'>      
                      <ul>
                        <li>Syarat 1</li>
                        <li>Syarat 2</li>
                      </ul>
                    </div>
                    
                    <span style='
                          position:absolute;
                          box-sizing:border-box;
                          bottom:-20px;
                          font-size:30px;
                          color:rgb(0,150,255);
                          left:0;
                          width:100%;
                          text-align:center;
                          ' class='fa fa-caret-down'></span>
                  </div>
                </div>
                
                
                <div class="step step-2" style='background-color:rgb(30,210,40);'>
                  <span style='margin-top:19px;color:#fff;font-size:60px;' class="material-icons">next_week</span>
                  <h4 class='step-desc' style='color:rgb(30,210,40);'>
                    <span class='fa fa-check'></span> Pendaftaran Instansi
                  </h4>
                  
                   <div class='step-list'>
                    <span style='
                          font-size:60px;
                          position:absolute;
                          top:30px;
                          color:#fff;
                          left:22px;
                          'class='fa fa-envelope'></span>
                    
                    <div class='lst'>      
                      <ul>
                        <li>Syarat 1</li>
                        <li>Syarat 2</li>
                        <li>Syarat 3</li>
                      </ul>
                    </div>
                    
                    <span style='
                          position:absolute;
                          box-sizing:border-box;
                          bottom:-20px;
                          font-size:30px;
                          color:rgb(0,150,255);
                          left:0;
                          width:100%;
                          text-align:center;
                          ' class='fa fa-caret-down'></span>
                  </div>
                </div>
                
                <div class="step step-3" style='background-color:rgb(30,210,40);'>
                  <span style='margin-top:19px;color:#fff;font-size:60px;' class="material-icons">verified_user</span>
                  <h4 class='step-desc' style='color:rgb(30,210,40);'>
                    <span class='fa fa-check'></span> Status Pendaftaran
                  </h4>
                  
                   <div class='step-list'>
                    <span style='
                          font-size:60px;
                          position:absolute;
                          top:30px;
                          color:#fff;
                          left:22px;
                          'class='fa fa-envelope'></span>
                    
                    <div class='lst'>      
                      <ul>
                        <li>Syarat 1</li>
                        <li>Syarat 2</li>
                        <li>Syarat 3</li>
                        <li>Syarat 3</li>
                        <li>Syarat 3</li>
                      </ul>
                    </div>
                    
                    <span style='
                          position:absolute;
                          box-sizing:border-box;
                          bottom:-20px;
                          font-size:30px;
                          color:rgb(0,150,255);
                          left:0;
                          width:100%;
                          text-align:center;
                          ' class='fa fa-caret-down'></span>
                  </div>
                </div>
                <?php
                }
                ?>
                
                <div class="guideline">
                  <?php
                  
                  if($a == 1)
                  {
                    ?>
                  <div class='succ-line line1' style='
                       padding:10px;
                       position:absolute;
                       left:0;
                       top:0;
                       padding:8px;
                       background-color:rgb(30,210,40);
                       width:50%;
                       '></div>
                  <?php
                  }
                  else if($a == 2)
                  {
                    ?>
                  <div class='succ-line line1' style='
                       padding:10px;
                       position:absolute;
                       left:0;
                       top:0;
                       padding:8px;
                       background-color:rgb(30,210,40);
                       width:100%;
                       '></div>
                  <?php
                  }
                  else if($a == 0)
                  {
                    ?>
                  
                  <?php
                  }
                  else
                  {
                    ?>
                  <div class='succ-line line1' style='
                       padding:10px;
                       position:absolute;
                       left:0;
                       top:0;
                       padding:8px;
                       background-color:rgb(30,210,40);
                       width:100%;
                       '></div>
                  <?php
                  }
                  ?>
                </div>
              </div>
              <?php
              }
              else
              {
                ?>
              <h4 class='alert alert-warning' style='text-align: center;font-weight:bold;'>Anda belum dapat melakukan Pendaftaran Magang. Mohon penuhi Persyaratan terlebih dahulu.</h4>
              <?php
              }
              ?>
            </div>
            
            <div class='row'>
              <div class='col-md-12' style='padding:40px;'></div>
            </div>
            
            <div class='row'>
              <div class='col-md-12'>
                
                <?php if ($a == 0): ?>                
                <div class='col-md-4 col-md-offset-4'>
                  <h5 style='margin:0;text-align: center;text-transform: uppercase;font-weight:bold;font-size:13px;'>Langkah 1 &centerdot; Pendaftaran Magang</h5>
                  <button target='magang' type='button' class='btn btn-info btn-lg btn-act' style='width:100%;'>Lengkapi Persyaratan</button>
                </div>

                <?php elseif ($a == 1): ?>
                <div class='col-md-4 col-md-offset-4'>
                  <h5 style='margin:0;text-align: center;text-transform: uppercase;font-weight:bold;font-size:13px;'>Langkah 2 &centerdot; Pendaftaran Instansi</h5>
                  <button target='instance' type='button' class='btn btn-info btn-lg btn-act' style='width:100%;'>Lengkapi Persyaratan</button>
                </div>
                <?php elseif ($a == 2): ?>
                <div class='col-md-4 col-md-offset-4'>
                  <h5 style='margin:0;text-align: center;text-transform: uppercase;font-weight:bold;font-size:13px;'>Langkah 3 &centerdot; Status Pendaftaran</h5>
                  <button target='instance' type='button' disabled class='btn btn-default disabled btn-lg btn-act' style='width:100%;'>
                    <span class="fa fa-spinner fa-spin"></span> <br>Menunggu Persetujuan
                  </button>
                </div>
                <?php elseif ($a == 3): ?>
                <div class='col-md-4 col-md-offset-4'>
                  <h5 style='margin:0;text-align: center;text-transform: uppercase;font-weight:bold;font-size:13px;'>Langkah 3 &centerdot; Status Pendaftaran</h5>
                  <button target='instance' type='button' class='btn btn-success btn-lg btn-act' style='width:100%;'>
                    <span class="fa fa-check"></span> <br>Permohonan Magang Disetujui<br>
                    KLIK UNTUK KONFIRMASI
                  </button>
                </div>
                <?php elseif ($a == 4): ?>
                <div class='col-md-4 col-md-offset-4'>
                  <h5 style='margin:0;text-align: center;text-transform: uppercase;font-weight:bold;font-size:13px;'>Langkah 3 &centerdot; Status Pendaftaran</h5>
                  <button target='none' type='button' class='btn btn-danger btn-lg btn-act' style='width:100%;'>
                    <span class="fa fa-close"></span> <br>Permohonan Magang Ditolak
                  </button>
                </div>
                <div class="col-md-4 col-md-offset-4">
                  <a href="upload.php" class='btn btn-default btn-act' style='width:100%;'>
                    Pendaftaran Ulang
                  </a>
                </div>
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
      $(".step-1").click(function(){
        $(this).children("div").fadeToggle(100);
      });
      
      $(".step-2").click(function(){
        $(this).children("div").fadeToggle(100);
      });
      
      $(".step-3").click(function(){
        $(this).children("div").fadeToggle(100);
      });
      
      
      
      //ini adalah pembatas :)
      
      var ht = new HtRequest();
      var modal = new Modal();
      
      $(".btn-act").click(function(){
        var target = $(this).attr("target");
        
        if(target === "magang")
        {
          modal.triggerModal("open","Pendaftaran Magang");
          ht.htGet("form/magang.php",".md-content");
        }
        else if(target === "instance")
        {
          modal.triggerModal("open","Pendaftaran Instansi");
          ht.htGet("form/instance.php",".md-content");
        }
      });
    });
  </script>
</html>

