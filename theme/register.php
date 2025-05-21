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
        <h1 class="display-1 text-white font-weight-bold font-primary">報名課程</h1>
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
  <?php
		// if(mktime()<strtotime($row_pub['NEWS_DUE_DATE'])+(60*60*24)){}
		// echo "網頁載入時間: ".date('Y-m-j')."<br>";$datestr1="2024-06-07 00:00:00";
		// echo "報名截止時間: ".$datestr1."<br>";
		// echo "剩餘時間: ".round((strtotime($datestr1)-mktime())/(60*60*24),1)."天"."<br>";
		// echo strtotime($datestr1)." ".mktime()."<br>";
	?>
	<h1>報名資訊</h1>
		<font size="5"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;報名表</b></font>
		&nbsp;&nbsp;&nbsp;&nbsp;
		  <!-- 框線顏色
			<a href="register.php?table_color=blue"><img src="blue.jpg" width="15"></a>&nbsp;&nbsp;
			<a href="register.php?table_color=red"><img src="red.jpg" width="15"></a>&nbsp;&nbsp;
			<a href="register.php?table_color=green"><img src="green.jpg" width="15"></a>
			背景色
			<a href="register.php?back_color=blue"><img src="blue.jpg" width="15"></a>&nbsp;&nbsp;
			<a href="register.php?back_color=red"><img src="red.jpg" width="15"></a>&nbsp;&nbsp;
			<a href="register.php?back_color=green"><img src="green.jpg" width="15"></a> -->
			<form action="register_receive.php" method="get">

				<center>
					<?php
						if($_GET['table_color']==blue){$_SESSION["table_color"]="blue";}
						elseif($_GET['table_color']==red){$_SESSION["table_color"]="red";}
						elseif($_GET['table_color']==green){$_SESSION["table_color"]="green";}

						if($_GET['back_color']==blue){$_SESSION["back_color"]="blue";}
						elseif($_GET['back_color']==red){$_SESSION["back_color"]="red";}
						elseif($_GET['back_color']==green){$_SESSION["back_color"]="green";}

						echo "<table border=\"1\" bordercolor=\"".$_SESSION['table_color']."\"
						bgcolor=\"".$_SESSION['back_color']."\">";
				    ?>
					<tr><td>姓名：</td><td><input type="text" name="name"></input><b><font color="red">*必填</font></b></td></tr>
					<tr><td>電話：</td><td><input type="text" name="number"></input><b><font color="red">*必填</font></b></td></tr>
					<tr><td>性別：</td>
						<td>
							<input type="radio" name="gender" value="男"checked>男</input>
							<input type="radio" name="gender" value="女">女</input>
                            <b><font color="red">*必填</font></b>
						</td></tr>
                    <tr><td>人數：</td>
						<td>
							<select name=people_num size="multiple">
								<option value="1">1人</option>
								<option value="2">2人</option>
								<option value="3">3人</option>
								<option value="4">4人</option>
								<option value="5">5人</option>
                                <option value="6">6人</option>
								<option value="7">7人</option>
								<option value="8">8人</option>
								<option value="9">9人</option>
								<option value="10">10人</option>
							</select>
							<b style="color:red">每人一堂$300元,*必填</b>
					</td></tr>
					<tr><td>課程選擇：</b></td>
						<td>
              <input type="checkbox" name="course[]" value="體能訓練課程">體能訓練課程</input>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="checkbox" name="course[]" value="增肌減脂課程">增肌減脂課程</input>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox" name="course[]" value="鐵人三項課程">鐵人三項課程</input><br>
							<input type="checkbox" name="course[]" value="精實線條課程">精實線條課程</input>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox" name="course[]" value="芭蕾提斯課程">芭蕾提斯課程</input>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="checkbox" name="course[]" value="瑜珈課程">瑜珈課程</input><br>
              <input type="checkbox" name="course[]" value="樂齡生活的健康養成">樂齡生活的健康養成</input>
							<input type="checkbox" name="course[]" value="有氧課程">有氧課程</input>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="checkbox" name="course[]" value="飲食訓練課程">飲食訓練課程</input><br>
              <b style="color:red">*必填</b>
						</td>
					</tr>
					<tr>
						<td>備註：</td><td><textarea name="remark" cols="40" rows="10"></textarea></td>
					</tr>
					<tr><td colspan="2">
                    <center>
						<?php
							if($_SESSION["check_status"]=="login_ok")
							{echo "<Button Type=\"Submit\">報名成功</Button>";}
							else
							{echo "必須登入才能報名";}
						?>
					</center></td></tr>
				</table>
				</center>
			</form>
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
