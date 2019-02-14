<?php
session_start();
require 'settings.php';
if (!isset($_SESSION["userid"])) {
    echo "<script>window.location.href = 'index.php';</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Mitr" rel="stylesheet">
</head>
<body style="font-family: 'Mitr', sans-serif;">
    <div class="container">
    <form action="submitexe.php?c=<?php echo $_GET['c']; ?>" method="post"> 
    <center>แบบฝึกหัดบทที่ <?php echo $_GET['c']; ?></center>
    <?php
    $selectec = "SELECT * FROM exechapter WHERE chapterno=$_GET[c] ORDER BY exechapter ASC";
    $querydata = $mysqli->query($selectec);
    $qno = 1;
    while($objResult = mysqli_fetch_array($querydata))
    {
        ?>
        ข้อที่ <?php echo $qno;$qno++;echo ". ";echo $objResult['question'];echo "<br>";?><br>
        <div class="row">
        <?php
        $c = 0;
        $choice = explode("|", $objResult['choice']);
        while ($c < 4) {
            ?>
            <div class="col-sm">
            <input type="radio" name="<?php echo $objResult['exechapter']; ?>" value="<?php echo $choice[$c]; ?>">
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
    <center><input type="submit" value="ส่งคำตอบ" class="btn btn-primary" onclick="myFunction()"></center>
    </form>
    </div>

    <script>
    function myFunction() {
        confirm("ยืนยันที่จะส่งคำตอบ แบบฝึกหัดชุดนี้ไหม ?");
    }
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>