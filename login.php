<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ozellik.css">
    <title>php</title>
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
    


    <div class="php" >
       <?php
         if($_POST["isim"]=="Mariam Al Refai" && $_POST["numara"]=="B221210583" ){
           echo"MERYEM ALREFAI SAYFASINA HOŞGELDİNİZ";
          }
         else
          echo"Yanlış Bilgileri girdiniz";
     
        ?>
    </div>
</body>
</html>