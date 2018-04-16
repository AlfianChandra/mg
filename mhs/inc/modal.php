<style>
  .md-overlay
  {
    position:fixed;
    top:0;
    left:0;
    display:none;
    box-sizing:border-box;
    width:100%;
    height:100%;
    z-index:9998;
    background-color:rgba(0,0,0,0.9);
  }
  
  .md-heading
  {
    float:left;
    box-sizing:border-box;
    width:100%;
    background-color:purple;
  }
  
  .md-title
  {
    margin:0;
    padding:10px;
    color:#fff;
    padding:15px;
    font-weight:bold;
    text-transform:uppercase;
  }
  
  .md
  {
    float:left;
    box-sizing:border-box;
    width:100%;
    margin-top:15px;
  }
  
  .md-close
  {
    float:right;
    margin:0;
    background-color:transparent;
    border:none;
    transition:ease-in-out .3s;
  }
  
  .md-close:hover
  {
    color:orange;
  }
  
  .md-body
  {
    float:left;
    box-sizing:border-box;
    width:100%;
    padding:20px;
    position:relative;
    background-color:#fff;
    height:450px;
    overflow-y:auto;
  }
  
  .md-footing
  {
    float:left;
    box-sizing:border-box;
    width:100%;
    position:relative;
    padding:10px;
  }
  
  .md-actbtn-1
  {
    position:absolute;
    bottom:-15px;
    font-size:20px;
    border-radius:150px;
    border:none;
    right:130px;
    width:70px;
    height:70px;
    margin:0;
    padding:0px;
    text-decoration: none;
  }
  
  .md-actbtn-2
  {
    position:absolute;
    bottom:-15px;
    font-size:20px;
    border-radius:150px;
    border:none;
    right:50px;
    width:70px;
    height:70px;
    margin:0;
    padding:0px;
    text-decoration: none;
  }
  
  .bg-content
  {
    
  }
  
  .btn:not(.btn-just-icon):not(.btn-fab) .fa, .navbar .navbar-nav > li > a.btn:not(.btn-just-icon):not(.btn-fab) .fa
  {
    top:0;
  }
</style>
<div class="md-overlay">
  <div class="md">
    <div class="container md-size">
      <div class="md-heading">
        <h4 class="md-title"><span class="md-title-content"></span> <button type="button" class="md-close md-dismiss"><span class="fa fa-close"></span></button></h4>
      </div>
      <div class="md-body">
        <div class="col-md-12 bg-content md-content">
          
        </div>
      </div>
      <div class="md-footing">
        <button type="button" class="btn btn-danger md-actbtn-2 md-dismiss"><span class="fa fa-close"></span></button>
      </div>
    </div>
  </div>
</div>