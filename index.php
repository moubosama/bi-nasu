<?php
require_once("function.php");

// topic取得
try {
  $pdo = getDb();
  $sql = "SELECT topic,  DATE_FORMAT(contribution, '%Y-%m-%d') as contribution FROM topic order by id desc limit 3";
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $topics = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
  echo $e->getMessage();
}


?>

<html>
<head>
    <meta charset="utf-8">
    <title>もぶおテストサーバー</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" href="css/jquery.bxslider.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" /></script>
    <script src="js/jquery.bxSlider.min.js"></script>
    <script>
      $(document).ready(function(){
        $('.bxslider').bxSlider();
      });
    </script>
</head>
<body>
  <div class="wrap">
    <header>

      <nav>
        <ul class="main-nav">
          <li ><a href="#"><img src="img/top_img/test.png" alt="ロゴ画像"></a></li>
          <li class="navi_right"><a href="index.php">Top</a></li>
          <li class="navi_right"><a href="Art.php">Art</a></li>
          <li class="navi_right"><a href="#">Profire</a></li>
          <li class="navi_right"><a href="contact.php">Contact</a></li>
        </ul>
      </nav>

    </header>

    <main>

      <section class="top_page">
        <ul class="bxslider">
          <li><img src="img/top_img/topimg1.jpg" alt="メイン画像" widtd="100%" height="88%"></li>
          <li><img src="img/top_img/topimg2.jpg" alt="メイン画像" widtd="100%" height="88%"></li>
          <li><img src="img/top_img/topimg3.jpg" alt="メイン画像" widtd="100%" height="88%"></li>
          <li><img src="img/top_img/topimg4.jpg" alt="メイン画像" widtd="100%" height="88%"></li>
        </ul>
        <h1>当サイトについて</h1>
        <p>
          このサイトは絵師、び～なすのＨＰです。テストテストテストテストテストテストテスト<br>
          テストテストテストテストテストテストテストテストテストテストテストテストテストテスト<br>
        </p>
      </section>

      <section class="topic">
        <h1>TOPIC</h1>
        <div><strong>最新の情報</strong></div>

        <table>
        <?php foreach($topics as $topic):  ?>

          <tr>
            <td><?= pr($topics["2"]["contribution"]); ?></td>
          </tr>
          <tr>
            <td><?= pr($topics["1"]["topic"]); ?></td>
          </tr>

        <?php endforeach; ?>
        </table>
       

      </section>

    </main>

    <footer>
      <div class="copy_light"><small>Copy Light bi-nasu.2017</small></div>
    </footer>
  </div>
</body>
</html>
