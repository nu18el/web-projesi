<?php
ob_start();
$user='g231210572';
$pass='Nuseybe20062005!';
if(isset($_POST['username'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    if($username==$user && $password==$pass){
        echo "hoş geldin g231210572";
    }
    else{
        echo'Hata,Kullanıcı adı veya şifresi hatalıdır';
    }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="C:\Users\Mühendis\Desktop\web Prejesi/style.css">
    <style>
        body {
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            min-height: 500px;
            height: 100vh;

        }
    </style>
</head>

<body>
    <header>
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

    </header>
    <!-- <div class="bgrd">
        <div class="wrapper">
            <form action="">
                <h1>Login</h1>
                <div class="input_box"><br>
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="username" placeholder="User name" required>
                </div>
                <div class="input_box"><br>
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="remember_forget">
                    <label>
                        <input type="checkbox" name="remember">Remember me</label>
                    <a href="#">Forget password?</a>
                </div>
                <button type="submit" class="button">Login</button>
                <div class="register">
                    <p>Dont have an account? <a href="#">Register</a></p>
                </div>

            </form>
        </div>
        <footer>
            <div class="basinhakki">
                <center>

                    <div class="dizayn">
                        <span> Nuseybe Elabdullah </span>
                        <a href="C:\Users\Mühendis\Desktop\web Prejesi\iletisim.html"> Tarafından dizayn edilmiştir
                        </a>
                        <span>|</span>
                        <i class="fa-regular fa-copyright"></i>
                        <span>2024 Tüm hakları saklıdır</span>
                    </div>
                </center>
            </div>
        </footer>

    </div> -->
</body>

</html>