<?php
include 'settings.php';
if ($_POST['psw'] !== $_POST['checkpsw']) {
    echo "<script>alert('รหัสผ่านไม่ตรงกัน');window.history.back();</script>";
} else {
    $sql = "INSERT INTO user (email, password,haveadmin) VALUES ('$_POST[uname]','$_POST[psw]','0')";
    mysqli_query($mysqli, $sql);
    echo "<script>alert('สมัครเสร็จเรียบร้อยแล้ว');window.location.href = 'login.php';</script>";
}
?>