<?php
  // 檢查 cookie 中的 passed 變數是否等於 TRUE
  $passed = $_COOKIE["passed"];

  /* 如果 cookie 中的 passed 變數不等於 TRUE，
     表示尚未登入網站，將使用者導向首頁 index.html */
  if ($passed != "TRUE")
  {
    header("location:index.html");
    exit();
  }

  /* 如果 cookie 中的 passed 變數等於 TRUE，
     表示已經登入網站，則取得使用者資料 */
  else
  {
    require_once("dbtools.inc.php");

    //取得 modify.php 網頁的表單資料
    $id = $_COOKIE["id"];
    $password = $_POST["password"];
    $name = $_POST["name"];
    $sex = $_POST["sex"];
    $year = $_POST["year"];
    $month = $_POST["month"];
    $day = $_POST["day"];
    $telephone = $_POST["telephone"];
    $cellphone = $_POST["cellphone"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $url = $_POST["url"];
    $comment = $_POST["comment"];

    // 建立資料連接
    $link = create_connection();

    // 執行 UPDATE 陳述式來更新使用者資料
    $sql = "UPDATE users SET password = '$password', name = '$name',
            sex = '$sex', year = $year, month = $month, day = $day,
            telephone = '$telephone', cellphone = '$cellphone',
            address = '$address', email = '$email', url = '$url',
            comment = '$comment' WHERE id = $id";
    $result = execute_sql($link, "member", $sql);

    // 關閉資料連接
    mysqli_close($link);
  }
?>



<?php
	session_start();
?>

<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Agen | Bootstrap Agency Template</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
  <!-- venobox css -->
  <link rel="stylesheet" href="plugins/venobox/venobox.css">
  <!-- card slider -->
  <link rel="stylesheet" href="plugins/card-slider/css/style.css">

  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">

  <!--Favicon-->
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

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
      aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse text-center" id="navigation">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">首頁</a>
        </li>
        <?php
        if($_SESSION["admin"]=="admin_ok"){
          echo "<li class=\"nav-item\">".
          "<a class=\"nav-link\" href=\"admin.php\">管理區</a>"
          ."</li>";}
        else{

        }
        ?>
        <li class="nav-item">
          <a class="nav-link" href="about.html">課程內容</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.html">報名課程</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="picture.php">圖片區</a>
        </li>
        <?php
        if($_SESSION['check_status']=="login_ok"){
          echo "<li class=\"nav-item\">".
          "<a href=\"modify.php\"><Img Src=\"person.png\"width=50dp ></a>"
          ."</li>";
          echo "<li class=\"nav-item\">".
          "<a class=\"nav-link\" href=\"#\" onclick=\"logout()\">登出</a>"
          ."</li>";}
        else{
            echo "<li class=\"nav-item\">".
            "<a class=\"nav-link\" href=\"login.php\">登入</a>"
          ."</li>";
        }
        ?>
      </ul>
    </div>
  </nav>
</header>

<body>
<!-- page-title -->
<section class="page-title bg-cover" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1 class="display-1 text-white font-weight-bold font-primary">首頁</h1>
        <?php
        if($_SESSION['check_status']=="login_ok"){
          echo "<h4>".$_SESSION["name"]."你好哇~"."</h4>";
        }
        else{
          echo"";
        }

        echo "<h4>"."你的IP是:".$_SERVER['REMOTE_ADDR']."<br>"."</h4>";
        ?>
      </div>
    </div>
  </div>
</section>

<!-- /page-title -->
<br>

<!-- 這裡放程式碼 -->

<center>
      <?php echo $name ?>，恭喜您已經修改資料成功了。
      <p><a href="index.php">回首頁</a></p>
    </center>



<script>
function logout() {
    if (confirm("您確定要登出嗎？")) {
        fetch('logout.php', {
            method: 'GET',
            credentials: 'same-origin' // 傳遞 cookie 以確保 session 正確
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



<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- venobox -->
<script src="plugins/venobox/venobox.min.js"></script>
<!-- shuffle -->
<script src="plugins/shuffle/shuffle.min.js"></script>
<!-- apear js -->
<script src="plugins/counto/apear.js"></script>
<!-- counter -->
<script src="plugins/counto/counTo.js"></script>
<!-- card slider -->
<script src="plugins/card-slider/js/card-slider-min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="plugins/google-map/gmap.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>

</body>
</html>
