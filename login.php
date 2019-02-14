<?php
session_start();
if (isset($_SESSION["userid"])) {
    echo "<script>window.location.href = 'index.php';</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>เข้าสู่ระบบ </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <style>
    html, body
    {
        height: 100%;
    }
    </style>
    <script>
    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
    })
    </script>
</head>
<body style="margin-top: 0px;margin-left: 0px;margin-bottom: 0px;margin-right: 0px;">
    <table style="width: 100%;height: 100%;">
    <tr>
        <td align="center">
        <form action="checklogin.php" style="width: 25%" method="post">
    <label for="uname"><b>อีเมล</b></label>
    <input type="email" class="form-control" placeholder="กรอกอีเมล" name="uname" required>
    <br>
    <label for="psw"><b>รหัสผ่าน</b></label>
    <input type="password" class="form-control" placeholder="กรอกรหัสผ่าน" name="psw" required>
    <br>
    <button type="submit" class="btn btn-primary">ล็อกอิน</button> <a class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal" style="color: white;">สมัครสมาชิก</a>
</form>

        </td>
    </tr>
    </table>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">สมัครสมาชิก</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="checkregister.php" method="post">
        <label for="uname"><b>อีเมล</b></label>
    <input type="email" class="form-control" placeholder="กรอกอีเมล" name="uname" required>
    <br>
    <label for="psw"><b>รหัสผ่าน</b></label>
    <input type="password" class="form-control" placeholder="กรอกรหัสผ่าน" name="psw" required>
    <br>
    <label for="psw"><b>ใส่รหัสผ่านอีกครั้ง</b></label>
    <input type="password" class="form-control" placeholder="กรอกรหัสผ่าน" name="checkpsw" required>
    <br>
    <button type="submit" class="btn btn-primary">สมัคร</button>
        </form>
      </div>
    </div>
  </div>
</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>