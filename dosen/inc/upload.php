<style>
  .up-overlay
  {
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background-color:rgba(0,0,0,0.8);
    z-index:9997;
    display:none;
  }
  
  .up-heading
  {
    float:left;
    box-sizing:border-box;
    width:100%;
  }
  
  .up-title
  {
    background-color:purple;
    float:left;
    box-sizing:border-box;
    width:100%;
    margin:0;
  }
  
  .up-title-content
  {
    float:left;
    box-sizing:border-box;
    padding:15px;
    color:#fff;
    font-weight:bold;
    text-transform:uppercase;
  }
  
  .up-close
  {
    padding:15px;
    color:#fff;
    border:none;
    background-color:transparent;
  }
  
  .up-close:hover{
    color:orange;
  }
  
  .up-body
  {
    float:left;
    box-sizing:border-box;
    width:100%;
    padding-top:30px;
    padding-bottom:30px;
    background-color:#fff;
    height:500px;
    overflow-y:auto;
  }
  
  .up-footer
  {
    float:left;
    box-sizing:border-box;
    width:100%;
    position:relative;
  }
  
  .up-actbtn
  {
    position:absolute;
    bottom:-35px;
    font-size:20px;
    border-radius:150px;
    border:none;
    width:70px;
    height:70px;
    margin:0;
    padding:0px;
    text-decoration: none;
  }
  
  .act-1
  {
    right:130px;
  }
  
  .act-2
  {
    right:50px;
  }
  
  .btn:not(.btn-just-icon):not(.btn-fab) .fa, .navbar .navbar-nav > li > a.btn:not(.btn-just-icon):not(.btn-fab) .fa
  {
    top:0;
  }
</style>
<div class="up-overlay">
  <div class="container" style="margin-top:15px;">
    <div class="upload">
      <div class="up-heading">
        <h4 class="up-title"><span class="up-title-content">Title</span> <button type="button" class="up-close up-dismiss pull-right"><span class="fa fa-close"></span></button></h4>
      </div>
      
      <div class="up-body">
        <div class="col-md-12 up-body-content">

        </div>
      </div>
      
      <div class="up-footer">
        <button type="button" class="up-submit up-actbtn act-2 btn btn-danger up-dismiss"><span class="fa fa-close"></span></button>
      </div>
    </div>
  </div>
</div>