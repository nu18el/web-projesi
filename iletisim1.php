<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İLETİŞİM</title>
    <link rel="stylesheet" href="C:\Users\Mühendis\Desktop\web Prejesi\iletisim.css">
</head>

<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="#">NUSEYBE</a>
            </div>
            <ul>
                <li><a href="C:\Users\Mühendis\Desktop\web Prejesi\anasayfa.html">Ana Sayfa</a></li>
                <li><a href="C:\Users\Mühendis\Desktop\web Prejesi\index.html">Login</a></li>
                <li><a href="C:\Users\Mühendis\Desktop\web Prejesi\iletisim.html">İletişim</a></li>
                <li><a href="C:\Users\Mühendis\Desktop\web Prejesi\cv.html">CV</a></li>
                <li><a href="C:\Users\Mühendis\Desktop\web Prejesi\sehrim.html">Şehrim</a></li>
                <li><a href="C:\Users\Mühendis\Desktop\web Prejesi\mirasimiz.html">Mirasımız</a></li>
                <li><a href="C:\Users\Mühendis\Desktop\web Prejesi\ilgialanlarim.html">İlgi Alanlarım</a></li>



            </ul>
        </div>
    </div>
        <?php
          $satir='<br>';
          echo "verileriniz alındı. TEŞEKKÜRLER";
          echo" $satir";
          echo" $satir";
          
         

         if(isset($_GET["but"])){
            echo "ADINIZ : " .$_GET["ad"]  ;
            echo" $satir";
            echo" $satir";
            echo "SOYADINIZ : " .$_GET["soyad"]  ;
            echo" $satir";
            echo" $satir";
            echo "TELEFON NUMARANIZ : " .$_GET["telefon"]  ;
            echo" $satir";
            echo" $satir";
            echo "E MAIL ADRESINIZ : " .$_GET["email"]  ;
            echo" $satir";
            echo" $satir";
            echo "BAŞLIK : " .$_GET["baslik"]  ;
            echo" $satir";
            echo" $satir";
            echo "MESAJINIZ : " .$_GET["mesaj"]  ;
            echo" $satir";
            echo" $satir";
            echo "CİNSİYETİNİZ : " .$_GET["cinsiyet"]  ;
            echo" $satir";
        }
         
    ?>

</body>
</html>
       