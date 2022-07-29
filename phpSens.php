<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<form action="phpSens.php" method="post">
 enter temperature : <input type="number" name="temp"> <br> <br>


<input type="submit">

</form>

<br> <br>
<?php
 $temp = $_POST["temp"];
 if ($temp < 15){
     echo "OFF";
 }
 else
     echo "ON";
?>
</body>
</html>
