<style>
  .pr-overlay
  {
    display:none;
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background-color:rgba(0,0,0,0.5);
    z-index:9999; 
  }
  
  .pr-wrp
  {
    position:absolute;
    left:30%;
    top:150px;
    float:left;
    box-sizing:border-box;
    z-index:9999;
    width:40%;
    background-color:#fff;
    box-shadow:0px 0px 10px #ccc;
  }
  
  .pr-title
  {
    background-color:purple;
    padding:15px;
    font-weight:bold;
    color:#fff;
  }
  
  .pr-content
  {
    font-weight:bold;
    font-size:15px;
    float:left;
    box-sizing:border-box;
    width:100%;
    padding:20px;
    height:150px;
    background-color:#fff;
  }
  
  .pr-act
  {
    transition:ease-in-out .3s;
    position:absolute;
    bottom:-30px;
    right:0;
    width:60px;
    height:60px;
    border-radius:100px;
    border:none;
    font-size:18px;
  }
  
  .act1
  {
    right:75px;
    background-color:purple;
    color:#fff;
  }
  
  .act2
  {
    right:10px;
  }
  
  .pr-act:hover
  {
    background-color:orange;
    color:#fff;
  }
</style>
<div class="pr-overlay">
  <div class="pr-wrp">
    <div class="pr-title"><span class="fa fa-question-circle"></span> KONFIRMASI</div>
    <div class="pr-content">
      Apakah Anda yakin ingin menghapus Akun ini? Tindakan ini tidak dapat diurungkan!
    </div>
    <button type="button" class="pr-act act1"><span class="fa fa-check"></span></button>
    <button type="button" class="pr-act act2 pr-dismiss"><span class="fa fa-close"></span></button>
  </div>
</div>