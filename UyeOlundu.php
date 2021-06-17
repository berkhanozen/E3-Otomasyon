<?php

include("mySqlBaglan.php");

if(isset($_POST['username']) and isset($_POST['password']))
{

    extract($_POST);

    $password = hash('sha256', $password);
    
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    
    $response = mysqli_query($con, $sql);
    
    if(!$response)
    {
        echo "Kayıt başarısız ". mysqli_error($con);
    }

    mysqli_close($con);
    
}

?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <img src="img/e3icon.ico" class="e3icon">
    <div class="center" style="background:white;">
        <p style="text-align:center; font-size:20px;">Kaydınız tamamlanmıştır. <a href="Index.php"> Giriş Yap </a> </p>
    </div>
</body>
</html>