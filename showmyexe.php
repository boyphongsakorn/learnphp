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
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">สื่อการเรียนการสอน PHP</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">หน้าแรก <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">เริ่มสื่อการเรียนการสอน</a>
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
                            <a class="dropdown-item active" href="showmyexe.php">หน้าแสดงคะแนนแบบฝึกหัด</a>
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
        </div>
    </nav>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</body>
</html>