
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
<br><br>
<center><marquee scrollamount="10" width="30%" behavior="alternate"><font color="#B50652"><big><b>有特別活動課程!!!!</b></big></font></marquee><br></center>
<!-- 這裡放程式碼 -->
<section class="section">
  <div class="container">
    <div class="row">
    <div class="col-lg-4 col-md-6 mb-4">
        <article class="card">
          <img src="images/course/c09.jpg" width="290px" height="197px" alt="post-thumb" class="card-img-top mb-2">
          <div class="card-body p-0">
            <a href="c09.php" class="h4 card-title d-block my-3 text-dark hover-text-underline">（特別課程）複利健走法</a>
            <a href="c09.php" class="btn btn-transparent">課程介紹</a>
          </div>
        </article>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <article class="card">
          <img src="images/course/c01.jpg" width="290px" height="197px" alt="post-thumb" class="card-img-top mb-2">
          <div class="card-body p-0">
            <a href="c01.php" class="h4 card-title d-block my-3 text-dark hover-text-underline">體能訓練課程</a>
            <a href="c01.php" class="btn btn-transparent">課程介紹</a>
          </div>
        </article>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <article class="card">
          <img src="images/course/c02.jpg" width="290px" height="197px" alt="post-thumb" class="card-img-top mb-2">
          <div class="card-body p-0">
            <a href="c02.php" class="h4 card-title d-block my-3 text-dark hover-text-underline">增肌減脂課程</a>
            <a href="c02.php" class="btn btn-transparent">課程介紹</a>
          </div>
        </article>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <article class="card">
          <img src="images/course/c03.jpg" width="290px" height="197px" alt="post-thumb" class="card-img-top mb-2">
          <div class="card-body p-0">
            <a href="c03.php" class="h4 card-title d-block my-3 text-dark hover-text-underline">鐵人三項課程</a>
            <a href="c03.php" class="btn btn-transparent">課程介紹</a>
          </div>
        </article>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <article class="card">
          <img src="images/course/c04.jpg" width="290px" height="197px" alt="post-thumb" class="card-img-top mb-2">
          <div class="card-body p-0">
            <a href="c04.php" class="h4 card-title d-block my-3 text-dark hover-text-underline">精實線條課程<br><br></a>
            <a href="c04.php" class="btn btn-transparent">課程介紹</a>
          </div>
        </article>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <article class="card">
          <img src="images/course/c05.jpg" width="290px" height="197px" alt="post-thumb" class="card-img-top mb-2">
          <div class="card-body p-0">
            <a href="c05.php" class="h4 card-title d-block my-3 text-dark hover-text-underline">芭蕾提斯課程<br><br></a>
            <a href="c05.php" class="btn btn-transparent">課程介紹</a>
          </div>
        </article>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <article class="card">
          <img src="images/course/c06.jpg" width="290px" height="197px" alt="post-thumb" class="card-img-top mb-2">
          <div class="card-body p-0">
            <a href="c06.php" class="h4 card-title d-block my-3 text-dark hover-text-underline">瑜珈課程<br><br></a>
            <a href="c06.php" class="btn btn-transparent">課程介紹</a>
          </div>
        </article>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <article class="card">
          <img src="images/course/c07.jpg" width="290px" height="197px" alt="post-thumb" class="card-img-top mb-2">
          <div class="card-body p-0">
            <a href="c07.php" class="h4 card-title d-block my-3 text-dark hover-text-underline">樂齡生活的健康養成<br><br></a>
            <a href="c07.php" class="btn btn-transparent">課程介紹</a>
          </div>
        </article>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <article class="card">
          <img src="images/course/c08.jpg" width="290px" height="197px" alt="post-thumb" class="card-img-top mb-2">
          <div class="card-body p-0">
            <a href="c08.php" class="h4 card-title d-block my-3 text-dark hover-text-underline">飲食訓練課程<br><br></a>
            <a href="c08.php" class="btn btn-transparent">課程介紹</a>
          </div>
        </article>
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

