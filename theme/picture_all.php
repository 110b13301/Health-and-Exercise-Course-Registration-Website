<?php
	session_start();
?>
<!doctype html>
<html><!-- InstanceBegin template="/Templates/home.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<title>test</title>
	<style>
		a{
			font-size: 20pt;
			color: #5E2F01;
			text-decoration: none;
		}
		body{
			background-repeat:no-repeat;
			background-size: cover;
			
		}
	</style>
</head>

<!--<body bgcolor="#FFB3B5">-->
<body background="bg.jpg">
	<center>
	<table border="1"  bordercolor="#FFFFFF" width="80%">
		<tr>
		<td ><center><b></b><h1 style="color:#FFFFFF" ><font color="#A8005E"><img src="https://storage.googleapis.com/sticker-prod/m1xblizIrzk5KdCfH6hf/16-1.png" width="8%">野生</font>喵喵怪</h1></center>
		</td>
		</tr>
		
		</table>	
		
		<b><a href="home.php">首頁</a>&nbsp;&nbsp;&nbsp;
		<a href="picture.php">貼圖</a>&nbsp;&nbsp;&nbsp;
		<a href="register.php">表單????</a>&nbsp;&nbsp;&nbsp;
		<a href="about.html">關於野生喵喵怪</a>&nbsp;&nbsp;&nbsp;
		<a href="login.php">登入</a>&nbsp;&nbsp;&nbsp;
		<a href="logout.php">登出</a></b>&nbsp;&nbsp;&nbsp;
		<?php
		if($_SESSION['check_status']=="login_ok"){
			echo $_SESSION["name"]."你好哇~";
		}
		else{
			echo"";
		}
		?>
		
		

		<br>
		<br>
		<!-- InstanceBeginEditable name="3" -->3<!-- InstanceEndEditable -->
		<center>
		
	<table border="0" width="80%">
		<tr>
		<td>
		
		<center><h1><!-- InstanceBeginEditable name="EditRegion1" -->首頁<!-- InstanceEndEditable --></h1></center>
		<!-- InstanceBeginEditable name="EditRegion2" -->
			<?php
				if (is_dir("C:\AppServ\www\web\picture")) {
				$handle=opendir("C:\AppServ\www\web\picture");
				while ($file = readdir($handle)) { //readdir()內為上一行opendir取得之資源變數
				if ($file!="." and $file!=".." and $file!="picture_all.php") {
						echo "<img src=\"".$file."\" width=\"40%\" height=\"40%\" <br>";}
				}}
			
			
			
			?>
			
			<?php 
			$handle= opendir("picture");
			while ($file = readdir($handle)){
				if ($file!="." and $file!=".." and $file!="show_all.php") {
					echo "<img src=\"pictures\\".$file."\" width=\"40%\" height=\"40%\" <br>";}
			}
			?>
			
			<!-- InstanceEndEditable -->
		</td></tr></table>
		</center>
	</center>


</body>
<!-- InstanceEnd --></html>
