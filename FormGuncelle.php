<html>
<head>
    <meta charset="UTF-8">
    <title>Güncelle</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body> 
<?php
include("mySqlBaglan.php");
include("UyelikKontrol.php");

$sql = "SELECT * FROM companies WHERE company_id = ".$_GET['id'];

$response = mysqli_query($con, $sql);

if(!$response)
{
    echo "Bir hata ile karşılaşıldı. ". mysqli_error($con);
}

$read = mysqli_fetch_array($response);

mysqli_close($con);

?>

    <div class="center">
        <h1> Şirket Bilgilerini Güncelle </h1>
        <form action="KayitGuncelle.php?id=<?php echo $_GET['id'] ?>" method="POST">
            <div class="txt_field">
                <input type="text" name="name" value="<?php echo $read['name'] ?>" required> </br>
                <span></span>
                <label>Adı</label>
            </div>
            <div class="txt_field">
                <input type="text" name="country" value="<?php echo $read['country'] ?>" required> </br>
                <span></span>
                <label>Ülkesi</label>
            </div>
            <div class="txt_field">
                <input type="number" name="found" value="<?php echo $read['found'] ?>" required> </br>
                <span></span>
                <label>Kuruluş Yılı</label>
            </div>
            <div class="txt_field">
                <input type="number" name="hmgames" value="<?php echo $read['hmgames'] ?>" required> </br>
                <span></span>
                <label>Kaç oyunla katılacak</label>
            </div>
            <div>
                <label>Katılanacak gün</label>
                </br>
                <input type="date" name="date" value="<?php echo $read['date'] ?>" required> </br>
            </div>
            </br>
            <input type="submit" value="Kaydet">

            <div class="sign">
                <b><a href="UyeSayfasi.php"> Geri Dön </a> </b>
            </div>
        </form>

</body>
</html>