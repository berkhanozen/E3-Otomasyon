<?php

    session_start();

    include("mySqlBaglan.php");

    if(isset($_POST['username']) and isset($_POST['password']))
    {

        extract($_POST);
        $password = hash('sha256', $password);
    
        $sql = "SELECT * FROM users WHERE username = '$username' and password = '$password' ";
    
        $response = mysqli_query($con, $sql);
    
        if(!$response)
        {
            echo "Bir hata ile karşılaşıldı. ". mysqli_error($con);
        }
    
        $count = mysqli_num_rows($response);
    
        if($count == 1)
        {
            $_SESSION['username'] = $username;
        }
        else
        {
            echo "<p class='wrong'> Kullanıcı adı veya şifre yanlış girildi </p>";
        }
    }
    
    if (isset($_SESSION['username']))
    { 
         header("Location: UyeSayfasi.php"); 
    }
    else
    { 
  
    ?> 

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Giriş Yap </title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <img src="img/e3icon.ico" class="e3icon">
    <div class="center">
        <h1>Kullanıcı Girişi</h1>
        <form action="<?php $_PHP_SELF ?>" method="POST">
            <div class="txt_field">
                <input type="text" name="username" required> </br>
                <span></span>
                <label>Kullanıcı Adı</label>
            </div>
            <div class="txt_field">
                <input type="password" name="password" required> </br>
                <span></span>
                <label>Şifre</label>
            </div>
            <input type="submit" value="Giriş Yap">

            <div class="sign">
                Üye değil misin? <b><a href="UyeOl.php"> Üye Ol </a> </b>
            </div>
        </form>
    </div>
    
</body>
</html>

<?php } ?>