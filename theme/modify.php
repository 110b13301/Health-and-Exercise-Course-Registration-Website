<?php
  // 檢查 cookie 中的 passed 變數是否等於 TRUE
  $passed = $_COOKIE["passed"];

  // 如果 cookie 中的 passed 變數不等於 TRUE
  // 表示尚未登入網站，將使用者導向首頁 index.html
  if ($passed != "TRUE")
  {
    header("location:index.html");
    exit();
  }

  // 如果 cookie 中的 passed 變數等於 TRUE
  // 表示已經登入網站，取得使用者資料
  else
  {
    require_once("dbtools.inc.php");

    $id = $_COOKIE["id"];

    // 建立資料連接
    $link = create_connection();

    // 執行 SELECT 陳述式取得使用者資料
    $sql = "SELECT * FROM users Where id = $id";
    $result = execute_sql($link, "member", $sql);

    $row = mysqli_fetch_assoc($result);
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
      <script type="text/javascript">
      function check_data()
      {
        if (document.myForm.password.value.length == 0)
        {
          alert("「使用者密碼」一定要填寫哦...");
          return false;
        }
        if (document.myForm.password.value.length > 10)
        {
          alert("「使用者密碼」不可以超過 10 個字元哦...");
          return false;
        }
        if (document.myForm.re_password.value.length == 0)
        {
          alert("「密碼確認」欄位忘了填哦...");
          return false;
        }
        if (document.myForm.password.value != document.myForm.re_password.value)
        {
          alert("「密碼確認」欄位與「使用者密碼」欄位一定要相同...");
          return false;
        }
        if (document.myForm.name.value.length == 0)
        {
          alert("您一定要留下真實姓名哦！");
          return false;
        }
        if (document.myForm.year.value.length == 0)
        {
          alert("您忘了填「出生年」欄位了...");
          return false;
        }
        if (document.myForm.month.value.length == 0)
        {
          alert("您忘了填「出生月」欄位了...");
          return false;
        }
        if (document.myForm.month.value > 12 | document.myForm.month.value < 1)
        {
          alert("「出生月」應該介於 1-12 之間哦！");
          return false;
        }
        if (document.myForm.day.value.length == 0)
        {
          alert("您忘了填「出生日」欄位了...");
          return false;
        }
        if (document.myForm.month.value == 2 & document.myForm.day.value > 29)
        {
          alert("二月只有 28 天，最多 29 天");
          return false;
        }
        if (document.myForm.month.value == 4 | document.myForm.month.value == 6
          | document.myForm.month.value == 9 | document.myForm.month.value == 11)
        {
          if (document.myForm.day.value > 30)
          {
            alert("4 月、6 月、9 月、11 月只有 30 天哦！");
            return false;
          }
        }
        else
        {
          if (document.myForm.day.value > 31)
          {
            alert("1 月、3 月、5 月、7 月、8 月、10 月、12 月只有 31 天哦！");
            return false;
          }
        }
        if (document.myForm.day.value > 31 | document.myForm.day.value < 1)
        {
          alert("出生日應該在 1-31 之間");
          return false;
        }
        myForm.submit();
      }
    </script>
</head>

<html>


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
          <a class="nav-link" href="course.php">課程內容</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">報名課程</a>
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
        <h1 class="display-1 text-white font-weight-bold font-primary">個人資料</h1>
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
<form name="myForm" method="post" action="update.php" >
      <table border="2" align="center" bordercolor="#6666FF">
        <tr>
          <td colspan="2" bgcolor="#6666FF" align="center">
            <font color="#FFFFFF">請填入下列資料 (標示「*」欄位請務必填寫)</font>
          </td>
        </tr>
        <tr bgcolor="#D7B8F3">
          <td align="right">*使用者帳號：</td>
          <td><?php echo $row["account"] ?></td>
        </tr>
        <tr bgcolor="#D7B8F3">
          <td align="right">*使用者密碼：</td>
          <td>
            <input type="password" name="password" size="15" value="<?php echo $row["password"] ?>">
            (請使用英文或數字鍵，勿使用特殊字元)
          </td>
        </tr>
        <tr bgcolor="#D7B8F3">
          <td align="right">*密碼確認：</td>
          <td>
            <input type="password" name="re_password" size="15" value="<?php echo $row["password"] ?>">
            (再輸入一次密碼，並記下您的使用者名稱與密碼)
          </td>
        </tr>
        <tr bgcolor="#D7B8F3">
          <td align="right">*姓名：</td>
          <td><input type="text" name="name" size="8" value="<?php echo $row["name"] ?>"></td>
        </tr>
        <tr bgcolor="#D7B8F3">
          <td align="right">*性別：</td>
          <td>
            <input type="radio" name="sex" value="男" checked>男
            <input type="radio" name="sex" value="女">女
          </td>
        </tr>
        <tr bgcolor="#D7B8F3">
          <td align="right">*生日：</td>
          <td>民國
            <input type="text" name="year" size="2" value="<?php echo $row["year"] ?>">年
            <input type="text" name="month" size="2" value="<?php echo $row["month"] ?>">月
            <input type="text" name="day" size="2" value="<?php echo $row["day"] ?>">日
          </td>
        </tr>
        <tr bgcolor="#D7B8F3">
          <td align="right">電話：</td>
          <td>
            <input type="text" name="telephone" size="20" value="<?php echo $row["telephone"] ?>">
            (依照 (02) 2311-3836 格式 or (04) 657-4587)
          </td>
        </tr>
        <tr bgcolor="#D7B8F3">
          <td align="right">行動電話：</td>
          <td>
            <input type="text" name="cellphone" size="20" value="<?php echo $row["cellphone"] ?>">
            (依照 (0922) 302-228 格式)
          </td>
        </tr>
        <tr bgcolor="#D7B8F3">
          <td align="right">地址：</td>
          <td><input type="text" name="address" size="45" value="<?php echo $row["address"] ?>"></td>
        </tr>
        <tr bgcolor="#D7B8F3">
          <td align="right">E-mail 帳號：</td>
          <td><input type="text" name="email" size="30" value="<?php echo $row["email"] ?>"></td>
        </tr>
        <tr bgcolor="#D7B8F3">
          <td align="right">個人網站：</td>
          <td><input type="text" name="url" size="40" value="<?php echo $row["url"] ?>"></td>
        </tr>
        <tr bgcolor="#D7B8F3">
          <td align="right">備註：</td>
          <td><textarea name="comment" rows="4" cols="45"><?php echo $row["comment"] ?></textarea></td>
        </tr>
        <center>
        <tr bgcolor="#D7B8F3">
          <td colspan="2" align="CENTER">
            <input type="button" value="修改資料" onClick="check_data()">

          </td>
        </tr>
        </center>
      </table>
</form>

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
<?php
    // 釋放資源及關閉資料連接
    mysqli_free_result($result);
    mysqli_close($link);
  }
?>
