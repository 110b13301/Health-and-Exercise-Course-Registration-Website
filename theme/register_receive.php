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
          <a class="nav-link" href="register.php">報名課程</a>
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
    <h1>報名結果</h1>
        <?php
            $people_num=$_GET['people_num'];
            $name=$_GET['name'];
            
            if($name=="")
            {
                header("refresh:5;URL=register.php");
                echo "<center><font size=\"+2\">";
                echo "<big><font color=\"red\">未填姓名, 5秒後跳回報名網頁</font></big>";
            }
            else
            {   
              // Display each selected course
                echo "<h2>報名成功</h2>";
                echo "<table border=\"1\">";
                echo "<tr><td><big><b>姓名：</td><td>".$name."</td></tr>";
                echo "<tr><td><big><b>電話：</td><td>".$_GET['number']."</td></tr>";
                echo "<tr><td><big><b>性別：</td><td>".$_GET['gender']."</td></tr>";
                echo "<tr><td><big><b>人數：</td><td>".$_GET['people_num']."</td></tr>";
                if (isset($_GET['course']) && !empty($_GET['course'])) {
                  $courses = $_GET['course'];
              
                  echo "<tr><td><big><b>課程選擇：</b></big></td><td>";
                  foreach ($courses as $coursess) {
                      echo htmlspecialchars($coursess) . "<br>";
                  }
                      echo "</td></tr>";
                  } 
                echo "<tr><td><big><b>備註：</td><td>".$_GET['remark']."</td></tr></table>";
                
                if((($people_num)*300)==0){
                    echo "<font color=\"red\">報名總額：".(($people_num)*300)."元, </font>";
                }
                else
                {
                    echo "<font color=\"red\">報名總額：".(($people_num)*300)."元, 把錢交給管理員</font>";
                }
            }
            
            $w=fopen("register.txt","a");
            fputs($w,$name.",".$_GET['number'].",".$_GET['gender'].",".$people_num); //將新資料寫進檔案
            foreach ($courses as $coursess) {
              fputs($w,",".htmlspecialchars($coursess)); //將新資料寫進檔案
            }
            fputs($w,"\r\n");
            fclose($w);
        
        ?>
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
