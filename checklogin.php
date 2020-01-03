<?php
session_start();
include 'settings.php';
$sql = "SELECT * FROM user WHERE email='$_POST[uname]' AND password='$_POST[psw]'";
$result = mysqli_query($mysqli, $sql);
if (mysqli_num_rows($result) > 0) {
    $get = $result->fetch_assoc();
    $_SESSION["userid"] = $get["userid"];
    echo "<script>window.location.href = 'index.php';</script>";
} else {
    echo "<script>alert('อีเมลหรือรหัสผ่านไม่ตรงกัน');window.history.back();</script>";
}
?>