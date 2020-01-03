<?php
$mysqli = new mysqli('localhost','learnphpme_phpdata','Team1556th','learnphpme_phpdata');
mysqli_set_charset($mysqli, "utf8");
$selectdata = "SELECT * FROM header";
$querydata = $mysqli->query($selectdata);
?>