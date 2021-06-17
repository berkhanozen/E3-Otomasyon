<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Ana Sayfa</title>

    <style>

    *
    {
        margin: 0;
        padding: 0;
        outline: 0;
        font-family: "Montserrat", sans-serif;
    }

    table
    {
        position: absolute;
        border-collapse: collapse;
        left: 20%;
        top: 25%;
        width: 60%;
        font-size: 1.1em;
        border-spacing: 0;
        border-radius: 12px 12px 0 0;
        overflow: hidden;
        background-color: #a300cc;
        color: #f2f2f2;
        text-align: center;
    }

    td
    {
        padding: 5px 15px;
    }

    th
    {
        padding: 12px 15px;
        background: #660080;
        color: #f2f2f2;
    }

    input[type="submit"]
    {
        color: white;
        margin: 0 0 0 -50%;
        border-radius: 15px;
        font-size: 15px;
        width: 130%;
        cursor: pointer;
        background-color: #7a0099;

    }

    input[type="submit"]:hover
    {
        background-color: #d633ff;
    }

    li, a
    {
        color:#66e0ff;
        text-decoration: none;
        font-size: 20px;
    }

    a:hover
    {
        background-color: #00617a;
        transition: .3s;
    }

    header
    {
        position: relative;
        left: 30px;
        align-items: left; 
    }

    .welcome
    {
        position: relative;
        top: 10px;
        left: 30px;
        color: #66e0ff;
    }

    .title
    {
        position: absolute;
        top: 20%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: #e3b2ef;
    }
    
</style>

</head>

<body>

<img src="img/e3icon.ico" class="e3icon">

<?php
include("mySqlBaglan.php");
include("UyelikKontrol.php");

$sql = "SELECT * FROM companies";

$response = mysqli_query($con, $sql);

if(!$response)
{
    echo "Bir hatayla karşılaşıldı: " . mysqli_error($con);
}

echo "<h1 class='welcome'> Hoşgeldin ". $_SESSION['username'] ."</br> </h1> <div class='container'>";

echo "<div> <h2 class='title'> E3 Oyun Fuarına Katılacak Olan Şirketler </h2> </div>";

echo "<div> <table border=1>
<tr><th>Şirket ID</th><th>Şirket Adı</th><th>Kuruluş Yeri</th><th>Kuruluş Yılı</th><th>Sunum Tarihi</th><th>Kaç oyunla katılacak</th><th colspan=2> </th></tr>";

while($read = mysqli_fetch_array($response))
{
    echo "<tr><td>".$read['company_id']."</td>
    <td>".$read['name']."</td>
    <td>".$read['country']."</td>
    <td>".$read['found']."</td>
    <td>".$read['date']."</td>
    <td>".$read['hmgames']."</td>
    <td class='bg'><a href=FormGuncelle.php?id=".$read['company_id']."> <input type='submit' value='Güncelle'> </a></td>
    <td class='bg'><a href=KayitSil.php?id=".$read['company_id']."> <input type='submit' value='Sil'> </a></td> </tr>";
}

echo "</table> </div> </div>";

mysqli_close($con);

?>

<header>
    <ul type="none"><b>
    </br>
    </br>
        <li><a href="Form.php">Tabloya Yeni Oyun Firması Ekle</a></li>
        </br>
        <li><a href="OturumuKapat.php">Oturumu Kapat</a></li></b>
    </ul>
</header>

    
</body>
</html>