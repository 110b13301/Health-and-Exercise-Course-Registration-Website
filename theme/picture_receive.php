<?php
session_start();
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta charset="utf-8">
  <title>Agen | Bootstrap Agency Template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="plugins/venobox/venobox.css">
  <link rel="stylesheet" href="plugins/card-slider/css/style.css">
  <link href="css/style.css" rel="stylesheet">
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <style>
    h4 {
      color: white;
    }
  </style>
</head>

<body>
<header class="navigation fixed-top">
  <nav class="navbar navbar-expand-lg navbar-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-center" id="navigation">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">首頁</a>
        </li>
        <?php
        if ($_SESSION["admin"] == "admin_ok") {
          echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"admin.php\">管理區</a></li>";
        }
        ?>
        <li class="nav-item">
          <a class="nav-link" href="course.php">課程內容</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">報名課程</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="picture.php">圖片區</a>
        </li>
        <?php
        if ($_SESSION['check_status'] == "login_ok") {
          echo "<li class=\"nav-item\"><a href=\"modify.php\"><Img Src=\"person.png\" width=50dp></a></li>";
          echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"#\" onclick=\"logout()\">登出</a></li>";
        } else {
          echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"login.php\">登入</a></li>";
        }
        ?>
      </ul>
    </div>
  </nav>
</header>

<section class="page-title bg-cover" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1 class="display-1 text-white font-weight-bold font-primary">接收端</h1>
        <?php
        if ($_SESSION['check_status'] == "login_ok") {
          echo "<h4>".$_SESSION["name"]."你好哇~</h4>";
        }
        echo "<h4>你的IP是:".$_SERVER['REMOTE_ADDR']."<br></h4>";
        ?>
      </div>
    </div>
  </div>
</section>

<br>

<center>
  <?php
  $error_msg = "";

  if ($_FILES['upload_file']['type'] != "image/png" && $_FILES['upload_file']['type'] != "image/jpeg") {
    $error_msg = "請用png或jpg，感謝您的配合";
  } elseif ($_FILES['upload_file']['size'] > 3000000) {
    $error_msg = "照片檔案太大囉~請小於3MB~感謝你的配合";
  }

  if ($error_msg == "") {
    $dest_upload_file = dirname(__FILE__)."/picture/".$_FILES['upload_file']['name'];
    move_uploaded_file($_FILES['upload_file']['tmp_name'], $dest_upload_file);
    echo "<script>
    let timeLeft = 10;
    const countdown = setInterval(() => {
        if(timeLeft === 0) {
            clearInterval(countdown);
            window.location.href = 'picture.php';
        }
        document.getElementById('timer').innerText = timeLeft;
        timeLeft--;
    }, 1000);
  </script>";
echo "照片上傳成功，<span id='timer'>10</span>秒回到照片區"."<br>";
    echo "檔案名稱: ".$_FILES['upload_file']['name']."<br>";
    echo "檔案大小: ".$_FILES['upload_file']['size']."<br>";
    echo "檔案格式: ".$_FILES['upload_file']['type']."<br>";
    echo "檔案名稱: ".$_FILES['upload_file']['tmp_name']."<br>";
    echo "檔案代碼: ".$_FILES['upload_file']['error']."<br>";

  } else {
    echo "<img src='https://stickershop.line-scdn.net/stickershop/v1/product/26291433/LINEStorePC/main.png?v=1'/><br>";
    echo "<div class='alert '>$error_msg</div>";
    echo "<script>
    let timeLeft = 5;
    const countdown = setInterval(() => {
        if(timeLeft === 0) {
            clearInterval(countdown);
            window.location.href = 'picture.php';
        }
        document.getElementById('timer').innerText = timeLeft;
        timeLeft--;
    }, 1000);
  </script>";
echo "照片上傳失敗，<span id='timer'>5</span>秒回到照片區"."<br>";
  }
  ?>
</center>

<script>
function logout() {
  if (confirm("您確定要登出嗎？")) {
    fetch('logout.php', {
      method: 'GET',
      credentials: 'same-origin'
    })
    .then(response => response.text())
    .then(data => {
      alert("登出成功");
      setTimeout(() => {
        window.location.href = 'index.php';
      });
    })
    .catch(error => console.error('Error:', error));
  }
}
</script>

<script src="plugins/jQuery/jquery.min.js"></script>
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<script src="plugins/slick/slick.min.js"></script>
<script src="plugins/venobox/venobox.min.js"></script>
<script src="plugins/shuffle/shuffle.min.js"></script>
<script src="plugins/counto/apear.js"></script>
<script src="plugins/counto/counTo.js"></script>
<script src="plugins/card-slider/js/card-slider-min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="plugins/google-map/gmap.js"></script>
<script src="js/script.js"></script>

</body>
</html>
