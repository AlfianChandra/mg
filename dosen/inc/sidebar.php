<style>
  .side-bar
  {
    position:fixed;
    top:0;
    opacity:0;
    right:0;
    width:0%;
    background-color:#555;
    height:100%;
    transition:ease-in-out .5s;
    z-index:9999;
    box-shadow:0px 0px 10px #bbb;
    
  }
  
  .side-close
  {
    position:absolute;
    top:10px;
    box-shadow:0px 0px 10px #ccc;
    left:-25px;
    background-color:#eee;
    border:none;
    width:50px;
    transition:ease-in-out 0.3s;
    height:50px;
    color:#666;
    border-radius:100px;
  }
  
  .side-close:hover
  {
    color:#fff;
    background-color:red;
  }
  
  .side-content
  {
    position:absolute;
    top:72px;
    left:0;
    height:100%;
    box-sizing:border-box;
    width:100%;
    padding:15px;
    background-color:#eee;
  }
  
  .side-title
  {
    background-color:rgb(150,50,180);
    padding:10px;
    position:absolute;
    left:5%;
    top:-20px;
    text-transform:uppercase;
    font-weight:bold;
    overflow:hidden;
    border-radius:3px;
    width:90%;
    color:#fff;
    white-space: nowrap;
    text-overflow:ellipsis;
  }
  
  .cntn
  {
    float:left;
    box-sizing:border-box;
    width:100%;
    padding:10px;
    margin-top:10px;
    height:595px;
    overflow-y:auto;
  }
</style>
<div class="side-bar">
  <button type="button" class="side-dismiss side-close"><span class='fa fa-chevron-right'></span></button>
  <div class='side-content'>
    <div class='side-title'>This is The Main Title of The Sidebar. Please put your title here</div>
    <div class='cntn'>
      
    </div>
  </div>
</div>
<!--</div>-->