<?php
session_start();
require 'settings.php';
$sql = "SELECT * FROM user WHERE userid='$_SESSION[userid]'";
$get = mysqli_query($mysqli, $sql);
$loot = $get->fetch_assoc();
if (!isset($_SESSION["userid"]) && $loot["haveadmin"] == 0) {
    echo "<script>window.location.href = 'index.php';</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Mitr" rel="stylesheet">
</head>
<body style="font-family: 'Mitr', sans-serif;">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">หน้าจัดการเว็บไซต์</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">หน้า <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?exemam">แก้ไขแบบฝึกหัด</a>
      </li>
    </ul>
  </div>
</nav>
    
<div class="container">
<?php 
if (isset($_GET['exemam'])) {
?>
<?php
    if ($_GET['exemam'] == null) {
      echo "<center><h2>แก้ไข แบบฝึกหัด บทที่ 1</h2></center>";
      $selectec = "SELECT * FROM exechapter WHERE chapterno=1";
    } else {
      echo "<center><h2>แก้ไข แบบฝึกหัด บทที่ ".$_GET["exemam"]."</h2></center>";
      $selectec = "SELECT * FROM exechapter WHERE chapterno=$_GET[exemam]";
    }
    $querychaterno = $mysqli->query($selectec);
    $qno = 1;
    while($objResult = mysqli_fetch_array($querychaterno))
    {
        ?>
        <div class="row">
        <div class="col-sm">
        ข้อที่ <?php echo $qno;$qno++;echo ". ";echo $objResult['question'];echo "<br>";?>
        </div>
        <?php
        $c = 0;
        $choice = explode("|", $objResult['choice']);
        while ($c < 4) {
            ?>
            <div class="col-sm">
            <?php
            echo $c+1;echo ".";
            echo $choice[$c];
            $c++;
            ?>
            </div>
            <?php
        }
        ?>
        </div>
        <br>
        <?php
    }
    ?>

<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
    </li>
    <?php
    $b = 1;
    while($objResult = mysqli_fetch_array($querydata))
    {
    ?>
    <li class="page-item"><a class="page-link" href="?exemam=<?php echo $objResult["id"]; ?>"><?php echo $b; ?></a></li>
    <?php
    $b++;
    }
    ?>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
<?php
}
?>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>