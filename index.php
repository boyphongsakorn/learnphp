<?php
session_start();
require 'settings.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>เว็บสื่อการเรียนการสอน PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Mitr" rel="stylesheet">
    <style>
.center { 
  height: 200px;
  position: relative;
  background-image: url("image/php.gif");
}

.center p {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  color: white;
  font-size: 150%;
}
</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">สื่อการเรียนการสอน PHP</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="">หน้าแรก <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="instrmedia.php">เริ่มสื่อการเรียนการสอน</a>
                </li>
                <!--li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li-->
            </ul>
            <ul class="nav navbar-nav navbar-right">
                    <?php
                    if (isset($_SESSION["userid"])) {
                    $sql = "SELECT * FROM user WHERE userid='$_SESSION[userid]'";
                    $get = mysqli_query($mysqli, $sql);
                    $loot = $get->fetch_assoc();
                    ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $loot["email"]; ?>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <?php
                        if ($loot["haveadmin"] == 1) {
                        ?>
                        <a class="dropdown-item" href="admin.php">หน้าแอดมิน</a>
                        <?php
                        }
                        ?>
                            <a class="dropdown-item" href="showmyexe.php">หน้าแสดงคะแนนแบบฝึกหัด</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="logout.php">ออกจากระบบ</a>
                        </div>
                    </li>
                    <?php
                    } else {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">เข้าสู่ระบบ</a>
                    </li>
                    <?php
                    }
                    ?>
            </ul>
            <!--form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form-->
        </div>
    </nav>

    <div class="center"><p>สื่อการเรียนการสอน <span class="badge badge-primary"><img src="http://us3.php.net/images/logos/php-logo.svg" alt="php" width="42"></span></p></div>
    <div class="container shadow p-3 mb-5 bg-white rounded" style="background-image: url('image/phpintro.jpg');background-size: 100%;font-family: 'Mitr', sans-serif;">
        <center><img src="http://us3.php.net/images/logos/php-logo.svg" alt="php" width="42"> คืออะไร ?</center><br>
        PHP ย่อมาจาก PHP Hypertext Preprocessor แต่เดิมย่อมาจาก Personal Home Page Tools<br>
        PHP คือภาษาคอมพิวเตอร์จำพวก scripting language ภาษาจำพวกนี้คำสั่งต่างๆจะเก็บอยู่ในไฟล์ที่เรียกว่า script<br>
        และเวลาใช้งานต้องอาศัยตัวแปรชุดคำสั่ง ตัวอย่างของภาษาสคริปก็เช่น JavaScript , Perl เป็นต้น<br>
        ลักษณะของ PHP ที่แตกต่างจากภาษาสคริปต์แบบอื่นๆ คือ PHP ได้รับการพัฒนาและออกแบบมา<br>
        เพื่อใช้งานในการสร้างเอกสารแบบ HTML โดยสามารถสอดแทรกหรือแก้ไขเนื้อหาได้โดยอัตโนมัติ<br><br>
        <center>ลักษณะเด่นของ <img src="http://us3.php.net/images/logos/php-logo.svg" alt="php" width="42"> มีอะไรบ้าง ?</center><br>
        1. ใช้ได้ฟรี<br>
     2. PHP เป็นโปร แกรมวิ่งข้าง Sever ดังนั้นขีดความสามารถไม่จำกัด <br>
     3. Conlatfun นั่นคือPHP วิ่งบนเครื่อง UNIX,Linux,Windows ได้หมด<br>
     4. เรียนรู้ง่าย เนืองจาก PHP ฝั่งเข้าไปใน HTML และใช้โครงสร้างและไวยากรณ์ภาษาง่ายๆ<br>
     5. เร็วและมีประสิทธิภาพ โดยเฉพาะเมือใช้กับ Apach Xerve เพราะไม่ต้องใช้โปรแกรมจากภายนอก<br>
     6. ใช้ร่วมกับ XML ได้ทันที<br>
     7. ใช้กับระบบแฟ้มข้อมูลได้<br>
     8. ใช้กับข้อมูลตัวอักษรได้อย่างมีประสิทธิภาพ<br>
     9. ใช้กับโครงสร้างข้อมูล แบบ Scalar,Array,Associative array<br>
     10. ใช้กับการประมวลผลภาพได้<br>
     <center><a href="instrmedia.php" class="btn btn-primary shadow-sm p-3 mb-5 rounded">เริ่มสื่อการเรียนการสอน <img src="http://us3.php.net/images/logos/php-logo.svg" alt="php" width="42"></a></center>
    </div>
    <ul class="nav justify-content-end" style="font-family: 'Mitr', sans-serif;">
        Project by Phongsakorn Wisetthon & Supansa ThumThong
    </ul>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>