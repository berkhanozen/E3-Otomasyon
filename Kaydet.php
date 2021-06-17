<html>
<head>
    <meta charset="UTF-8">
</head>
<body>

<?php
include("mySqlBaglan.php");
include("UyelikKontrol.php");

$name = $_POST['name'];
$country = $_POST['country'];
$found = $_POST['found'];
$date = $_POST['date'];
$hmgames = $_POST['hmgames'];

$sql = "INSERT INTO companies (name, country, found, date, hmgames) VALUES ('$name', '$country', '$found', '$date', '$hmgames')";

$response = mysqli_query($con, $sql);

if(!$response)
{
    echo "Veritabanına bağlanılamadı". mysqli_error($con);
}
else
{
    header("Location: UyeSayfasi.php");
}

mysqli_close($con);

?>
    
</body>
</html>