<?php
$mysqli = new mysqli('localhost','username','password','database');
mysqli_set_charset($mysqli, "utf8");
$selectdata = "SELECT * FROM header";
$querydata = $mysqli->query($selectdata);
?>