<?php

  if(@$giris=isset($_POST['giris'])==false)
 {

  $kullaniciadi=$_POST["isim"];
  $sifre=$_POST["sifre"];

   if($kullaniciadi=="")
   {
     echo "Kullanıcı adını boş bıraktınız!";
   }
   else if($sifre=="")
   {
     echo "Şifre alanını boş bıraktınız!";
   }
   else
   {

      if($kullaniciadi=="b181210018@sakarya.edu.tr"&& $sifre=="123")
      {
        echo"Hoşgeldiniz b181210018";
      }
      else
      {
        echo "Yanlış kullanıcı adı veya şifre!";
      }
   }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" type="text/css" href="css/fontawesome.min.css.css"/>
 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
 <link rel="stylesheet" type="text/css" href="css/main.css"/>


 <title>Giriş Yap</title>
</head>
<body>
   <section id="cover">
     <div class="container">
         <div class="row">
             <nav class="navbar navbar-expand-lg fixed-top navbar-light  ">
                 <a class="navbar-brand" id="text" href="#">Beyza Nur Deniz</a>
                 <button class="navbar-toggler navbar" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
                 </button>
                     <div class="collapse navbar-collapse justify-content-end" id="navbarText">
                         <ul class="nav nav-tabs justify-content-end">
                             <li class="nav-item"><a href="proje.html" class="nav-link ">Anasayfa</a></li>
                             <li class="nav-item"><a href="hakkımda.html" class="nav-link">Hakkımda</a></li>
                             <li class="nav-item"><a href="ozgecmis.html" class="nav-link">Özgeçmiş</a></li>
                             <li class="nav-item"><a href="sehrim.html" class="nav-link">Şehrim</a></li>
                             <li class="nav-item"><a href="iletisim.html" class="nav-link">İletişim</a></li>
                             <li class="nav-item"><a href="login.html" class="nav-link">Giriş Yap</a></li>
                         </ul>
                     </div>
             </nav>
          </div>
     </div>

     <div class="loginbox">
        <img src="images/kullanici.png" class="kullanici">
        <h1>Giriş Yap</h1>

        <form action="" method="POST">
            <p>Kullanıcı Adı</p>
            <input type="text" name="isim" placeholder="Enter Username">
            <p>Şifre</p>
            <input type="password" name="sifre" placeholder="Enter Password">
            <input type="submit" name="giris" value="Giriş Yap">
        </form>
    </div>

 </section>
 <script src="js/jquery-3.5.1.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/main.js"></script>
</body>
</html>
