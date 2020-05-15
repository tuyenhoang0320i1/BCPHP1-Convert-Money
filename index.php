<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
Nhap vao <input type="text" name="usd" placeholder="usd"/>
    <br>
    <input type="submit" name="convert" value="Convert"/>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usd = $_POST['usd'];
    $rate = 23000;

    $convert = $usd * $rate;
    echo $convert . " VND";
}
?>

</body>
</html>