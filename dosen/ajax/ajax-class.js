class HtRequest
{ 
  htGet(url,resp)
  {
    $.ajax({
      url:url,
      type:"get",
      async:true,
      cache:false,
      success:function(res)
      {
        $(resp).html(res);
      },
      error:function()
      {
        var modal = new Modal();
        var alert = new Alert();
        modal.triggerModal("close");
        alert.triggerAlert("open","KESALAHAN PADA AJAX REQUEST: KODE 404<br> <b>KONTEN: Target Referensi URL tidak ditemukan pada drektori berikut > '"+url+"'</b>","alert-danger","Kesalahan AJAX");
        $(resp).html("Terjadi kesalahan. Tidak ada data.");
      }
    });
  }
  
  htError()
  {
    var modal = new Modal();
    var alert = new Alert();
    alert.triggerAlert("open","KESALAHAN PADA AJAX REQUEST: KODE 404<br> <b>KONTEN: Target Referensi URL tidak diketahui.</b>","alert-danger","Kesalahan AJAX");
    modal.triggerModal("close");
  }
  
  htDirect(url)
  {
    if($.trim(url) === "")
    {
      alert("AJAX Request Fatal Error: 404\n\
      Unable to direct.");
    }
  }
  
  htPost(url,data,resp)
  {
    var alert = new Alert();
    $.ajax({
      url:url,
      data:data,
      type:"post",
      cache:false,
      async:true,
      beforeSend:function()
      {
        
      },
      success:function(res)
      {
        if(res === "error")
        {
          alert.triggerAlert("open","RESPON NEGATIF: KODE 0<br> <b>KONTEN: Tidak dapat memuat data. Server tidak menerima Data.","alert-danger","Respon Server");
        }
        else
        {
          $(resp).html(res);
        }
      },
      error:function()
      {
        alert.triggerAlert("open","KESALAHAN PADA AJAX REQUEST - FILE UPLOADER: KODE 404<br> <b>KONTEN: Target Referensi URL tidak ditemukan pada drektori berikut > '"+url+"'</b>","alert-danger","Kesalahan AJAX");
      }
    });
  }
  
  upload(url,data)
  {
    var alert = new Alert();
    var up = new UploadSys();
    $.ajax({
      url:url,
      data:data,
      type:"post",
      cache:false,
      async:true,
      contentType:false,
      processData:false,
      beforeSend:function()
      {
        
      },
      success:function(res)
      {
        up.triggerSys("close");
      },
      error:function()
      {
        up.triggerSys("close");
        alert.triggerAlert("open","KESALAHAN PADA AJAX REQUEST - FILE UPLOADER: KODE 404<br> <b>KONTEN: Target Referensi URL tidak ditemukan pada drektori berikut > '"+url+"'</b>","alert-danger","Kesalahan AJAX");
      }
    });
  }

  fireForm(url,data)
  {
    var alert = new Alert();
    var up = new UploadSys();

    $.ajax({
        url:url,
        type:"post",
        data:data,
        cache:false,
        async:true,
        beforeSend:function()
        {
        },
        success:function(res)
        {
            up.triggerSys("close");
            if(res === "error")
            {
                alert.triggerAlert("open","Kesalahan pada Server. Data gagal dikirim.","alert-danger","Pengiriman Data");
            }
            else
            {
                alert.triggerAlert("open","Data Berhasil Dikirim <br><b>KONTEN: Berhasil mengirim Data ke Server.</b></br>","alert-success","Pengiriman Data");
            }

        },
        error:function()
        {
          up.triggerSys("close");
          alert.triggerAlert("open","KESALAHAN PADA AJAX REQUEST - FILE UPLOADER: KODE 404<br> <b>KONTEN: Target Referensi URL tidak ditemukan pada drektori berikut > '"+url+"'</b>","alert-danger","Kesalahan AJAX");
        }
    });
  }
  
}

class Modal
{
  triggerModal(cmd,title)
  {
    if(cmd === "close")
    {
      $(".md-overlay").fadeOut(500);
    }
    else if(cmd === "open" && title !== "")
    {
      
      $(".md-content").fadeOut(0);
      $(".md-content").fadeIn(500);
      
      $(".md-content").html("");
      $(".md-dismiss").click(function(){
        $(".md-overlay").slideUp(500);
        $(".md-content").fadeOut(500);
      });
      
      $(".md-overlay").slideDown(500);
      $(".md-title-content").html(title);
    }
    else if(cmd === "open" && title === "")
    {
      $(".md-content").html("");
      $(".md-overlay").slideUp(500);
    }
    else
    {
      alert("False command! Unknown inserted parameters!");
    }
  }
}

class Alert
{
  triggerAlert(cmd,content,type,context)
  {
    if(cmd === "close")
    {
      $(".alr-overlay").fadeOut(500);
      $(".alr-content").html("");
      $(".alert").removeClass("alert-danger");
      $(".alert").removeClass("alert-sucess");
      $(".alert").removeClass("alert-info");
      $(".alert").removeClass("alert-warning");
      $(".alert").removeClass("alert-default");
    }
    else if(cmd === "open")
    {
      $(".alert").removeClass("alert-danger");
      $(".alert").removeClass("alert-sucess");
      $(".alert").removeClass("alert-info");
      $(".alert").removeClass("alert-warning");
      $(".alert").removeClass("alert-default");

      $(".alert").addClass(type);
      $(".alert-context").html(context);
      $(".alr-overlay").fadeIn(500);
      $(".alr-content").html(content);
      $(".alr-overlay").click(function(){
        $(".alr-overlay").fadeOut(500);
      });
    }
  }
}

class UploadSys
{
  triggerSys(cmd,title,url,form)
  {
    var alert = new Alert();
    var ajax = new HtRequest();
    if(cmd === "close")
    {
      $(".up-overlay").fadeOut(500);
    }
    else if(cmd === "open")
    { 
      
      ajax.htGet(url,form);
      
      $(".up-title-content").html(title);
      $(".up-overlay").fadeIn(500);
      $(".up-dismiss").click(function(){
        $(".up-overlay").fadeOut(500);
      });
    }
    else
    {
      alert.triggerAlert("open","KESALAHAN UPLOADSYS:<br> <b>Referensi Perintah Tidak Dketahui.</b>","alert-danger","Kesalahan AJAX");
    }
  }
}

class SideBar
{
  playSidebar(cmd,title)
  {
    if(cmd === "close")
    {
      $(".side-bar").css("width","0%");
      $(".side-bar").css("opacity","0");
      $(".side-close").fadeOut(500);
      $(".cntn").fadeOut(50);
    }
    else if(cmd === "open")
    {
      $(".side-bar").css("width","30%");
      $(".side-bar").css("opacity","1");
      $(".side-title").html(title);
      $(".side-close").fadeIn(500);
      $(".cntn").fadeIn(50);
      $(".side-dismiss").click(function(){
        $(".side-bar").css("width","0%");
        $(".side-bar").css("opacity","0");
        $(".side-close").fadeOut(500);
        $(".cntn").fadeOut(50);
      });
    }
    else
    {
      console.log("Unknown Command");
    }
  }
}