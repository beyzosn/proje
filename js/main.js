 $("#carouselExampleCaptions").carousel({ interval: 2000, pause:false});
           
$("#mirasımız").carousel({ interval: 3000, pause:false});

  var formGiris = document.forms["girisFormu"];  // form seçimi
  var email = formGiris.email;   // eposta alanı seçimi
  var telefon = formGiris["telefon"];  // sifre alanı seçimi
  var mesaj =  formGiris["message"];

formGiris.onsubmit=function(){
    if (email.value != "" && telefon.value !="" && mesaj.value!=""){
      alert("BAŞARILI!");
    }
    else 
    {
        if(email.value=="" && mesaj.value==""&& telefon.value=="" ){
        alert("Tüm alanları doldurunuz.")
        return false;
        }
        else
        {
            if(email.value=="")
            {
                alert("E-mail alanı boş bırakılamaz!");
                return false;
            }
            else{
                if(telefon.value==""){
                    alert("Telefon alanı boş bırakılamaz!");
                    return false;
                }
                else if(mesaj.value==""){
                    alert("Mesaj alanı boş bırakılamaz!");
                    return false;
                }
                else if(deger==""){
                alert("Cinsiyet seçimi yapınız");
                return false;
                }
            }
       }
    }
}




            

             