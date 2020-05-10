<?php
if(isset($_POST['isim']) && isset($_POST['sifre'])) {
   $kullanici = $_POST['isim'];
   $sifre = $_POST['sifre'];
 
   if($kullanici=="b181210018@sakarya.edu.tr"&& $sifre=="123")
      {
        echo"Hoşgeldiniz “b181210018”";
        header("Refresh: 3; index.html");
      }
      else
      {
        if(empty($kullanici) || empty($sifre)) {
          echo 'Kullanıcı adı veya şifre boş bırakılamaz!';
          header("Refresh: 3; login.html");} 
         else{
          echo "Yanlış kullanıcı adı veya şifre!";
          header("Refresh: 3; login.html");
         }
}
}
?>
