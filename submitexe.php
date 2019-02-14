<?php
session_start();
require 'settings.php';
$sql = "SELECT * FROM exechapter WHERE chapterno=$_GET[c] ORDER BY exechapter ASC";
$get = mysqli_query($mysqli, $sql);
$score = 0;
$answer;
while($objResult = mysqli_fetch_array($get))
    {
        if($objResult["answer"] == $_POST[$objResult["exechapter"]]) {
            $score++;
            $answer = $answer.$_POST[$objResult["exechapter"]]."|";
        } else {
            $answer = $answer.$_POST[$objResult["exechapter"]]."|";
        }
    }
$sqlexe = "INSERT INTO exercise (userid, chapter, answer, score) VALUES ('$_SESSION[userid]', '$_GET[c]', '$answer', '$score')";
$get = mysqli_query($mysqli, $sqlexe);
echo "<script>alert('แบบฝึกหัดบทที่ ".$_GET['c']." คุณทำได้ ".$score." คะแนน');window.location.href = 'instrmedia.php';</script>";
?>