<?php
include("UyelikKontrol.php");
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Şirket Ekle</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="center">
        <h1>Yeni Şirket Ekle</h1>
        <form action="Kaydet.php" method="POST">
            <div class="txt_field">
                <input type="text" name="name" required> </br>
                <span></span>
                <label>Adı</label>
            </div>
            <div class="txt_field">
                <input type="text" name="country" required> </br>
                <span></span>
                <label>Ülkesi</label>
            </div>
            <div class="txt_field">
                <input type="number" name="found" required> </br>
                <span></span>
                <label>Kuruluş Yılı</label>
            </div>
            <div class="txt_field">
                <input type="number" name="hmgames" required> </br>
                <span></span>
                <label>Kaç oyunla katılacak</label>
            </div>
            <div>
                <label>Katılanacak gün</label>
                </br>
                <input type="date" name="date" required> </br>
            </div>
            </br>
            <input type="submit" value="Ekle">

            <div class="sign">
                <b><a href="UyeSayfasi.php"> Geri Dön </a> </b>
            </div>
        </form>
    </div>
</body>
</html>