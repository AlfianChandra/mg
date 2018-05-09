<style>
  .alr-overlay
  {
    position:fixed;
    top:0;
    display:none;
    left:0;
    width:100%;
    height:100%;
    cursor:pointer;
    background-color:rgba(0,0,0,0.6);
    z-index:9999;
  }
  
  .alr-content
  {
    font-weight:bold;
    font-size:19px;
    margin-top:10px;
    box-sizing:border-box;
  }
  
  .alr-body
  {
    margin-top:15px;
  }
</style>
<div class="alr-overlay" title="Klik untuk menutup Alert">
  <div class="container" style="margin-top:200px;">
    <div class="alert alr-body">
      <span class="fa fa-info-circle fa-2x"></span> <span class="pull-right alert-context">Kesalahan AJAX</span>
      <div class="alr-content"></div>
    </div>
  </div>
</div>