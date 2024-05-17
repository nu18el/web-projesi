<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ozellik.css">
    <title>iletisim</title>
</head>
<body>

<img src="pembe.jpg" class="resim1">
    <div class="Menu">
        <h1 class="logo">Meryem Al Refai</h1>
        <ul>
            <li><a href="index.html">Ana Sayfa</a></li>
            <li><a href="hakkimda.html">Hakkımda</a></li>
            <li><a href="sehrim.html">Şehrim</a></li>
            <li><a href="cv.html">CV</a></li>
            <li><a href="mirasimiz.html">Mirasımız</a></li>
            <li><a href="iletisim.html">İletişim</a></li>
            <li><a href="log.html">Login</a></li>

        </ul>
    </div>

    <div class="open">
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
            echo "E MAIL ADRESINIZ : " .$_GET["mail"]  ;
            echo" $satir";
            echo" $satir";
            echo "BÖLÜMÜZÜZ : " .$_GET["BÖLÜM"]  ;
            echo" $satir";
            echo" $satir";
            echo "MESAJINIZ : " .$_GET["mesaj"]  ;
            echo" $satir";
            echo" $satir";
            echo "CİNSİYETİNİZ : " .$_GET["cınsıyet"]  ;
            echo" $satir";
           
    
         }
         
         
        ?>
    </div>
    
</body>
</html>