<?php

    if (isset($_POST["email"])){

        $kime = "info@softmareit.com";
        $konu = $_POST["subject"];

        $mesaj = "<h1>".$_POST["message"]."</h1>";

        $baslik = "From: ".$_POST["name"]."<".$_POST["email"].">\r\n";
        $baslik .= "Reply-to : reply@yener.com\r\n";
        $baslik .= "Content-type: text/html\r\n";


        if(mail($kime,$konu,$mesaj,$baslik))
            echo "Emailiniz basariyla gonderilmistir.";
        else
            echo "Malesef emailiniz gonderilemedi.";
    }

    

?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Softmare IT | İletişim</title>
<meta charset="utf-8">
<meta name="format-detection" content="telephone=no">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/stuck.css">
<link rel="stylesheet" href="css/form.css">
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/script.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tmStickUp.js"></script>
<script src="js/modal.js"></script>
<script src="js/TMForm.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script>
 $(document).ready(function(){
  $().UItoTop({ easingType: 'easeOutQuart' });
  $('#stuck_container').tmStickUp({});
});
</script>
<!--[if lt IE 9]>
 <div style=' clear: both; text-align:center; position: relative;'>
   <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
     <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
   </a>
</div>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body id="top">
<!--==============================
              header
=================================-->
<header>
<!--==============================
            Stuck menu
=================================-->
  <section id="stuck_container">
    <div class="container">
      <div class="row">
        <div class="grid_12">
        <h1>
          <a href="index.html">
            <img src="images/logo1.png" alt="SoftmareIT | Anasayfa">
          </a>
        </h1>
         
     
        <ul class="mobmen" id="mymobmen">
  <li><a href="index.html">Anasayfa</a></li>
  <li><a href="kurumsal.html">Kurumsal</a></li>
  <li><a href="referanslar.html">Referanslar</a></li>
  <li><a href="neleryapiyoruz.html">Neler Yapıyoruz?</a></li>
  <li  class="current"  ><a href="iletisim.html">İletişim</a></li>
  <li class="icon">
    <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
  </li>
</ul>
  
  
  
  <script type="text/javascript">
function myFunction() {
    var x = document.getElementById("mymobmen");
    if (x.className === "mobmen") {
        x.className += " responsive";
    } else {
        x.className = "mobmen";
    }
}
</script>

     
        </div>
      </div>
    </div>
  </section>
</header>
<!--=====================
          Content
======================-->
<section class="content"><div class="ic"></div>
</br>
</br>

  <div class="container">
    <div class="row">
      
      <div class="grid_6">
        <div class="text1 tx__1">İletişim Formu</div>
          <form id="form" action="" method="post" >
            <div class="form_spinner">
              <img src="images/Preloader_4.gif" alt="">
            </div>
            <div class="modal fade response-message">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Başarılı</h4>
                  </div>
                  <div class="modal-body">
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="response-error-message"></div>
                <label class="name">
                  <input type="text" name="name" placeholder="Adınız:" value="" data-constraints="@Required @JustLetters" />
                  <span class="empty-message">*Bu alan zorunludur.</span>
                  <span class="error-message">*Geçerli bir isim giriniz.</span>
                </label>
                <label class="email">
                  <input type="text" name="email" placeholder="E-mail:" value="" data-constraints="@Required @Email" />
                  <span class="empty-message">*Bu alan zorunludur.</span>
                  <span class="error-message">*Geçerli bir e-posta giriniz.</span>
                </label>
        
                  <label class="phone">
                  <input type="text" name="phone" placeholder="Telefon Numarası:" value="" data-constraints="@Required @JustNumbers"/>
                  <span class="empty-message">*Bu alan zorunludur.</span>
                  <span class="error-message">*Geçerli bir telefon giriniz.</span>
                </label>
               
                </label>
                <label class="message">
                  <textarea name="message" placeholder="Mesajınız:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
                  <span class="empty-message">*Bu alan zorunludur.</span>
                  <span class="error-message">*Mesajınız çok kısa.</span>
                </label>
                <div class="clear"></div>

</br>
                 <button class="btn">Gonder</button>

     
          </form>
      </div>
      <div class="grid_6">
        <div class="text1 tx__1">İletişim Bilgileri</div>
    
    
    
        SoftmareIT Yazılım Hizmetleri <br>
        İstanbul/Maltepe <br>
        Telefon: +90 5393385556 <br>
        E-mail: <a href="#">info@softmare.com</a>
    </br>
    </br>
    </br>
    </br>
        <p><span class="color1 fw1"><a href="http://www.softmareit.com/neleryapiyoruz.html" rel="nofollow">Tüm Hizmetlerimiz </a></span>için 7/24 destek sunuyoruz. </p>
        <p></p>
    
    <table border="3">
    <tr>
    <td><a href="https://api.whatsapp.com/send?phone=905393385556" target=”_blank” > <img src="images/whatsapp.png"> </a> </td>
    <td>  </br>  <a href="https://api.whatsapp.com/send?phone=905393385556" target=”_blank” >    Whatsapp Destek Hattı </a> </td>
    </tr>
    </table>
  
  
  
    
    
      </div>
    
    <div class="grid_12">
        <h3 class="ta__center"></h3>
        <div class="map">
          <figure class="">
          <iframe src="https://www.google.com/maps/d/embed?mid=1QIddBVksl7I4wFyF8Apxm1bRDP-eIZHX" style="border:0"></iframe>
        
      
      </figure>
        </div>
      </div>
    
    
    </div>
  </div>
</section>
<!--==============================
              footer
=================================-->
<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="grid_12">
        <div class="socials">
          <a href="#" class="fa fa-twitter"></a>
          <a href="#" class="fa fa-facebook"></a>
          <a href="#" class="fa fa-google-plus"></a>
          <a href="#" class="fa fa-instagram"></a>
        </div>
        <div class="copyright"><span class="brand">Web Design</span> &copy; <span id="copyright-year"></span> | <a href="#">Privacy Policy</a> <div>Website designed by <a href="http://www.softmareit.com/" rel="nofollow">SoftmareIT.com</a></div></div>
      </div>
    </div>
  </div>
</footer>
</body>
</html>