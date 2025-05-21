<?php
  require_once("dbtools.inc.php");

  // 取得表單資料
  $account = $_POST["account"];
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

  // 檢查帳號是否有人申請
  $sql = "SELECT * FROM users Where account = '$account'";
  $result = execute_sql($link, "member", $sql);

  // 如果帳號已經有人使用
  if (mysqli_num_rows($result) != 0)
  {
    // 釋放 $result 佔用的記憶體
    mysqli_free_result($result);

    // 顯示訊息要求使用者更換帳號名稱
    echo "<script type='text/javascript'>";
    echo "alert('您所指定的帳號已經有人使用，請使用其它帳號');";
    echo "history.back();";
    echo "</script>";
  }

  // 如果帳號沒人使用
  else
  {
    // 釋放 $result 佔用的記憶體
    mysqli_free_result($result);

    // 執行 SQL 命令，新增此帳號
    $sql = "INSERT INTO users (account, password, name, sex,
            year, month, day, telephone, cellphone, address,
            email, url, comment) VALUES ('$account', '$password',
            '$name', '$sex', $year, $month, $day, '$telephone',
            '$cellphone', '$address', '$email', '$url', '$comment')";

    $result = execute_sql($link, "member", $sql);
  }

  // 關閉資料連接
  mysqli_close($link);
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

  <body bgcolor="#FFFFFF">
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

    <p align="center">恭喜您已經註冊成功了，您的資料如下：<br>
          帳號：<font color="#FF0000"><?php echo $account ?></font><br>
          密碼：<font color="#FF0000"><?php echo $password ?></font><br>
          請記下您的帳號及密碼，然後<a href="login.php">登入網站</a>。
        </p>




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
