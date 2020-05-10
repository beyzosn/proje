<?php
if(isset($_POST['email']) && isset($_POST['telefon']) && isset($_POST['message'])) {
   $email = $_POST['email'];
   $telefon = $_POST['telefon'];
   $mesaj = $_POST['message'];
   
   if($email!="" && $telefon!=""&& $mesaj!="")
      {
        echo($email);
        echo('<br>');
        echo($telefon);
        echo('<br>');
        echo($mesaj);
        echo('<br>');
           if(isset($_POST["yas"])) {
            $yas = $_POST["yas"];
            echo($yas);
            echo('<br>');
           }
           if(isset($_POST["cinsiyet"])) {
            $cinsiyet = $_POST["cinsiyet"];
            echo($cinsiyet);
            echo('<br>');
           }

           if(isset($_POST["mesaj_turu"])) {
            $mesajturu = $_POST["mesaj_turu"];
             if ($mesajturu == 1 ) echo 'Diğer' ;
             if ($mesajturu == 2 ) echo 'Şikayet' ;
             if ($mesajturu == 3 ) echo 'Öneri' ;
             echo('<br>');}

        header("Refresh: 5; index.html");
      }
      
}
?>