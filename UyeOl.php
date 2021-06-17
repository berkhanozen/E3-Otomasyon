<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Üye Ol</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <img src="img/e3icon.ico" class="e3icon">
    <div class="center">
        <h1>Yeni Hesap Oluştur</h1>
        <form action="UyeOlundu.php" method="POST">
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
            <input type="submit" value="Kayıt Ol">

            <div class="sign">
                Üye misin? <b><a href="Index.php"> Üyeyim </a> </b>
            </div>
        </form>
    </div>

</body>
</html>