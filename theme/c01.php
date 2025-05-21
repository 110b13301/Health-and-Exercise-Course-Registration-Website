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
<?php
  if ($_POST["comment"] != null) {
    $comsave = @file("comment/comment01.txt");
    $comsw = fopen("comment/comment01.txt","a");
    fputs($comsw,$_POST["comment"]."\r\n");
    fclose($comsw);

    $usersave = @file("comment/user01.txt");
    $usersw = fopen("comment/user01.txt","a");
    fputs($usersw,$_SESSION["name"]."\r\n");
    fclose($usersw);

    $timesave = @file("comment/time01.txt");
    $timesw = fopen("comment/time01.txt","a");
    fputs($timesw,date('Y-m-j')."\r\n");
    fclose($timesw);

    echo "<script type='text/javascript'>";
		echo "function refresh() {window.location.href = \"c01.php\";}";
		echo "setTimeout (\"refresh()\",0) ";
		echo "</script>";
  }
?>
<!-- page-title -->
<section class="page-title bg-cover" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1 class="display-1 text-white font-weight-bold font-primary">課程介紹</h1>
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

<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 mx-auto">
        <img src="images/course/c01.jpg" alt="post-thumb" class="img-fluid w-100 mb-3">
        <h3 class="font-tertiary mb-5">體能訓練課程</h3>
        <div class="content">
          <p>有強健的體能、健康的體態，才應該是生活的樣子。這堂高效體能訓練課程能幫你快速增強體能，鍛鍊心肺功能，讓精神、免疫力、
            全身循環一起提升，也針對身體曲線的雕塑做規劃，養成自律運動的習慣，讓身材曲線更好看。<br><br>
            本課程會以三大核心為主軸：強化心肺體能、曲線雕塑、舒緩放鬆，心肺適能有助血液循環與精神的提升，減少疲勞，
            也讓我們在工作時更有效率；骨盆運動能改善水腫，雕塑下半身線條，解決腰酸背痛與假跨髖的困擾。想要緩解情緒緊繃，提升睡眠品質，
            可以透過修復瑜珈放鬆深層肌肉，舒緩肩頸痠痛，同時改善烏龜頸和釋放脊椎壓力，無論你是想保持專注與精神、增加免疫力的忙碌上班族，
            或是正在備孕，以及產後想要加快修復體態的媽媽們，給自己多一點時間，用多一些的照顧，找回自己和自信與美麗。
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-10 mx-auto">
        <div class="p-5 mb-4">
          <?php
            $userload = @file("comment/user01.txt");
            $comload = @file("comment/comment01.txt");
            $timeload = @file("comment/time01.txt");
            for ($i = count($comload) - 1; $i >= 0; $i --) {
              echo "<div class=\"media border-bottom py-4\">";
              echo "  <img src=\"person.png\" width=\"93px\" height=\"93px\" class=\"img-fluid align-self-start mr-3\" alt=\"\">";
              echo "  <div class=\"media-body\">";
              echo "    <h5 class = mb-0 text-secondary>".$userload[$i]."</h5>";
              echo "    <span class=\"mr-3\">".$timeload[$i]."</span>";
              echo "    <p>".$comload[$i]."</p>";
              echo "  </div>";
              echo "</div>";
            }
          ?>
        </div>
        <h4 class="mb-3 pb-3 text-secondary">留言</h4>
        <form action="c01.php" method="post" class="row">
          <div class="col-12">
            <?php
              if ($_SESSION['check_status'] == "login_ok") {
                echo "<textarea name = \"comment\" id = \"comment\" placeholder = \"請在此輸入訊息\" class = \"form-control mb-4 border\"></textarea>";
                echo "<button type = \"submit\" class = \"btn btn-secondary rounded-0\">送出</button>";
              }
              else {
                echo "<textarea name = \"comment\" id = \"comment\" placeholder = \"必須先登入才能留言\" class = \"form-control mb-4 border\"></textarea>";
              }
            ?>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

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
