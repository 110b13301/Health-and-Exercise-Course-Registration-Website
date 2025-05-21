

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
    .food-section {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
    }

    .food-item {
      display: flex;
      flex-direction: column;
      align-items: center;
      background: rgba(255, 255, 255, 0.1);
      padding: 10px;
      border-radius: 10px;
      max-width: 300px;
    }

    .food-item img {
      max-width: 100%;
      height: auto;
      border-radius: 10px;
    }

    .food-item p {
      color: white;
      text-align: left;

    }
    .overlay.active {
      display: flex;
    }
    .iframe-container {
      display: none;
    }
    .iframe-container.active {
      display: block;
    }
    .btn-play {
      background-color: #ff0000;
      color: white;
      padding: 10px 20px;
      border: none;
      cursor: pointer;
      font-size: 16px;
      border-radius: 5px;
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
        <h1 class="display-1 text-white font-weight-bold font-primary">健康與運動</h1>
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

<!-- service娛樂區 -->
<section class="section">
  <div class="container">
  <div class="row">
  <div class="col-lg-10 mx-auto text-center">
  <h2 class="section-title">介紹</h2>
  <div class="section-border"></div>
  <p class="lead"style="text-align: left;">&nbsp;&nbsp;&nbsp;&nbsp;運動健康網站介紹因何而發生？溫塞特曾講過，要做一個襟懷坦白，光明磊落的人，不管是在深藏內心的思想活動中，還是在表露於外的行為舉止上都是這樣。這段話對世界的改變有著深遠的影響。既然如此，笛福在不經意間這樣說過，需要時好人也會變成惡棍。我希望諸位也能好好地體會這句話。做好運動健康網站介紹這件事，可以說已經成為了全民運動。在人類的歷史中，我們總是盡了一切努力想搞懂運動健康網站介紹。話雖如此，我們卻也不能夠這麼篤定。運動健康網站介紹改變了我的命運。盧棱曾說過一句意義深遠的話，偉大的人是絕不會濫用自己的優點的，他們看出自己越過別人的地方，並且意識到這一點，然而絕不會因此就不謙虛。希望大家能從這段話中有所收穫。要想清楚，運動健康網站介紹，到底是一種怎麼樣的存在。 </p>

  </div>
  </div>
  </div>
</section>
<!-- /service -->
<!-- 這裡放程式碼 -->

<!-- feature -->
<section class="section bg-secondary position-relative" style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
  <div class="col-lg-10 mx-auto text-center">
    <h2 class="text-white mb-4">六大飲食介紹</h2>
    <div class="section-border"></div>
    <div class="food-section">
      <div class="food-item">
        <img src="rice.jpg" width="259" height="194">
        <p style="font-size:35px; font-weight: bold;">全穀雜糧類</p>
        <p>白米飯是最常被當作主食的全榖雜糧類食物，但搭配其他全榖雜糧類例如：糙米飯、全麥饅頭、甘藷、紅豆、綠豆等來獲取其他營養素（維生素Ｂ群、維生素Ｅ、礦物質及膳食纖維）才是真正的聰明吃喔！正常人每餐飯量建議比自己的拳頭多一點，若換成粥、麵、冬粉、米粉，每餐所吃的量大約是飯的2倍喔。<br>除了全榖雜糧類食物，應均衡攝取6大類食物，最好再搭配適當的運動，才會讓身體更健康！</p>
      </div>
      <div class="food-item">
        <img src="meat.jpg" width="259" height="194">
        <p style="font-size:35px; font-weight: bold;">豆魚蛋肉類</p>
        <p>豆魚蛋肉類食物為蛋白質主要來源，建議儘量選擇脂肪含量較低的豆魚蛋肉類食物，優先順序最好是依照豆製品、魚類與海鮮、蛋，最後是肉類，並且避免油炸及加工肉品，每餐大約吃1掌心的份量剛剛好！另外，除了豆魚蛋肉類食物，應均衡攝取6大類食物，最好再搭配適當的運動，才會讓身體更健康！</p>
      </div>
      <div class="food-item">
        <img src="fruit.jpg" width="259" height="194">
        <br>
        <p style="font-size:35px; font-weight: bold;">水果類</p>
        <p>水果含豐富的維生素礦物質，建議每餐吃1個拳頭大小的份量！水果外皮也含有植化素、膳食纖維等，有些水果其實可以洗乾淨後連皮直接吃喔！<br>要吃哪些水果比較好呢?要盡量選擇台灣在地的當季水果，像是：<br>春季有梅子、李子、楊桃、草莓<br>夏季有芒果、西瓜、鳳梨、荔枝<br>秋冬季有柳橙、葡萄、文旦、蘋果<br>四季都有包括芭樂、香蕉、木瓜等等<br>另外，除了水果類食物，應均衡攝取6大類食物，最好再搭配適當的運動，才會讓身體更健康！</p>
      </div>
      <div class="food-item">
        <img src="vegetables.jpg" width="259" height="194">
        <p style="font-size:35px; font-weight: bold;">蔬菜類</p>
        <p>蔬菜類食物為維生素、礦物質及足夠的膳食纖維來源，膳食纖維可以維持腸道健康並幫助排便，另外也有許多對健康有益處的植化素，像是花青素、胡蘿蔔素、茄紅素、多醣體等。每餐都要攝取煮熟後體積比拳頭多一些的蔬菜類食物才足夠，建議選擇當季盛產的蔬菜，既新鮮又便宜，還可以獲得各種不同的營養素喔！<br>除了蔬菜類食物，應均衡攝取6大類食物，最好再搭配適當的運動，才會讓身體更健康！</p>
      </div>
      <div class="food-item">
        <img src="oil.jpg" width="259" height="194">
        <p style="font-size:35px; font-weight: bold;">油脂與堅果種子類</p>
        <p>油脂類食物主要可分為飽和及不飽和脂肪酸，因飽和脂肪含量高的油品（牛油、豬油、椰子油等），對心血管健康較為不利，故建議選擇不飽和脂肪含量高且反式脂肪為「零」的油品（橄欖油、葵花油、大豆油等），每日食用約4~5 茶匙內，並以低溫烹調喔！<br>此外，別忘了每「餐」攝取1 茶匙的無調味堅果種子(約一大拇指節量)，如：花生、腰果、芝麻、瓜子、核桃、杏仁及開心果等。除了提供脂肪外，也富含維生素E及礦物質等，取代食用油會更健康，但也需適量食用以免攝取過多熱量。</p>
      </div>
      <div class="food-item">
        <img src="milk.jpg" width="259" height="194">
        <br><br>
        <p style="font-size:35px; font-weight: bold;">乳品類</p>
        <p>每天早晚建議各喝一杯奶（一杯約240毫升）才能補充足夠的鈣質，其他如小魚干、黑芝麻、豆干、海帶或深綠色蔬菜也都有不同的鈣質含量喔。<br>年長者與還在發育的孩童更要特別注意乳品的攝取，不只是鈣，這也是很好的蛋白質營養來源喔！<br>如果喝牛奶覺得肚子不太舒服怎麼辦呢？<br>(1) 建議可以先從少量的牛奶慢慢喝<br>(2) 試試發酵乳製品（例如:優酪乳、優格、起司等）<br>那豆漿是否能取代牛奶呢?豆漿雖然含有蛋白質，但鈣質大約只有牛奶的七分之一，不能取代乳品喔！<br>另外，除了乳品類食物，應均衡攝取6大類食物，最好再搭配適當的運動，才會讓身體更健康！</p>
      </div>
    </div>
  </div>
</section>


<!-- /feature -->
<section class="section">
  <div class="container">
  <div class="row">
  <div class="col-lg-10 mx-auto text-center">
  <h2 class="section-title">生活化運動</h2>
  <div class="section-border"></div>
  <p class="lead"style="text-align: left;">
    &nbsp;&nbsp;&nbsp;&nbsp;
    運動其實很簡單，您可從自己有興趣的運動項目開始，或從最簡易、不受時間、場地限制的健走開始，慢慢增加每次運動的時間，再加強每次運動的強度及次數。  <br>
    &nbsp;&nbsp;&nbsp;&nbsp;
    國民健康署建議國人每天運動至少30分鐘，分段累積運動量，效果與一次做完一樣，不過每次至少要連續10分鐘。例如每天應至少運動30分鐘，可以拆成2次15分鐘，或3次10分鐘完成。附表為運動30分鐘可消耗的熱量。<br>
    &nbsp;&nbsp;&nbsp;&nbsp;
    國民健康署提供以下六個生活化運動小撇步，建議您就從今天開始執行吧!<br><br>

    1.外出或是上下班(學)多利用大眾運輸工具，提早出門提前一站下車，步行至目的地，讓一整天精神更飽滿有活力。走路30分鐘可以消耗約100大卡的熱量！<br><br>
    2.可以走樓梯就不要坐電梯。不但節省能源，還可以增加每天活動量。步行走上幾層樓後再搭乘電梯，慢慢增加自己的運動量。<br><br>
    3.多和家人相約到戶外，進行腳踏車或互動競賽型活動等，不但促進家庭和諧，更重要的是使全家人都更健康；或是可以帶著心愛的寵物一同快走，一同享受健康活力! 你知道嗎？騎腳踏車30分鐘，可以消耗100大卡喔!<br>
    4.利用空的寶特瓶，裝水或沙子替代啞鈴，訓練肌力，並依進步程度漸漸加入更多水或沙子，提升肌力。<br><br>
    5.在上班期間，上午10:30、下午3:30各做15分鐘健康操，累積30分鐘也可消耗100大卡。<br><br>
    6.約三五好友去踏青飲茶，不但能健身，也能增進彼此情誼。<br><br>
  </p>

  </div>
  </div>
  </div>
</section>
<!-- team -->

<!-- /team -->
<section class="section-lg position-relative bg-cover" data-background="bone.jpg">
  <img src="images/backgrounds/about-bg-overlay.png" alt="overlay" class="overlay-image img-fluid">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-6 col-md-8 col-sm-7 col-8">
        <h2 class="text-white mb-4">影片區</h2>
        <p class="text-light mb-4">
          要想清楚，誰的骨盆最端正，到底是一種怎麼樣的存在。就我個人來說，誰的骨盆最端正對我的意義，不能不說非常重大。誰的骨盆最端正勢必能夠左右未來。如果仔細思考誰的骨盆最端正，會發現其中蘊含的深遠意義。
          <br>若發現問題比我們想像的還要深奧，那肯定不簡單。那麼，我們都知道，只要有意義，那麼就必須慎重考慮。
          <br>康熙講過一段深奧的話，國家用人，當以德為本，才藝為末。
          </p>
      </div>
      <div class="col-md-2 col-sm-4 col-4 text-right align-self-end">
        <a class="venobox" data-autoplay="true" data-vbtype="video"
          href="https://www.youtube.com/watch?v=cd60NmOEdvU"><i
            class="text-center icon-sm icon-box rounded-circle text-white bg-gradient-primary d-block ti-control-play"></i></a>
      </div>
    </div>
  </div>
</section>

<script>
    function showVideo() {
      document.getElementById('overlay').classList.add('active');
      document.getElementById('iframeContainer').classList.add('active');
    }

    function hideVideo() {
      document.getElementById('overlay').classList.remove('active');
      document.getElementById('iframeContainer').classList.remove('active');
    }
  </script>
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 mx-auto text-center">
        <h2>製作團隊</h2>
        <p>以下為各個組員工作分配</p>
        <div class="section-border"></div>
      </div>
    </div>
    <div class="row no-gutters">
      <div class="col-lg-3 col-sm-6">
        <div class="card hover-shadow">
          <img src="member1.png" alt="team-member" class="card-img-top">
          <div class="card-body text-center position-relative zindex-1">
            <h4><a class="text-dark" href="team-single.html">林祐全</a></h4>
            <i>課程介紹與留言板</i>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="card hover-shadow">
          <img src="member2.png" alt="team-member" class="card-img-top">
          <div class="card-body text-center position-relative zindex-1">
            <h4><a class="text-dark" href="team-single.html">劉賢冠</a></h4>
            <i>報名系統表單</i>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="card hover-shadow">
          <img src="member3.png" alt="team-member" class="card-img-top">
          <div class="card-body text-center position-relative zindex-1">
            <h4><a class="text-dark" href="team-single.html">鄭郁馨</a></h4>
            <i>註冊/登入、管理員網站、<br>個人資料、整合</i>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="card hover-shadow">
          <img src="member4.png" alt="team-member" class="card-img-top">
          <div class="card-body text-center">
            <h4><a class="text-dark" href="team-single.html">王建評</a></h4>
            <i>首頁、個人資料</i>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- service娛樂區 -->
<section class="section bg-secondary position-relative"id="picture">
  <div class="container">
  <div class="row">
  <div class="col-lg-10 mx-auto text-center">
  <h2 class="section-title"style="color:white">娛樂區</h2>
  <div class="section-border"></div>
  <p class="lead"style="color:white">這邊提供按鈕給使用者提供隨機圖片</p>
  <div style="margin: 40px auto 90px;">
      <form method="post" id="generateForm">

          <input onclick="location.href='#picture'"type="submit" name="generate" value="生成圖片"class="btn btn-lg btn-primary">
      </form>
  </div>

  <ul>
    <li>
        <div class="image-container" id="imageContainer">
            <!-- 初始無圖片 -->
        </div>
    </li>
  </ul>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['generate'])) {
      // 設定圖片URL
      $imageUrl = "https://picsum.photos/200/200";
      echo "
      <script>
          document.getElementById('imageContainer').innerHTML = '<img src=\"$imageUrl\" alt=\"Generated Image\" width=\"300\">';
      </script>
      ";
  }
  ?>
  </div>
  </div>
  </div>
</section>
<!-- /service -->

<!-- footer -->

<!-- /footer -->



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

