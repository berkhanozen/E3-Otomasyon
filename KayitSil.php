<html>
<head>
    <meta charset="UTF-8">
</head>
<body>

<?php
include("mySqlBaglan.php");
include("UyelikKontrol.php");

$sql = "DELETE FROM companies WHERE company_id = ".$_GET['id'];


$response = mysqli_query($con, $sql);

if(!$response)
{
    echo "Bir hata ile karşılaşıldı ". mysqli_error($con);
}
else
{
    header("Location: UyeSayfasi.php");
}

mysqli_close($con);

?>
    
</body>
</html>