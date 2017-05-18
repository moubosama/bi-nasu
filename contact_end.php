<?php
session_start();
require_once("function.php");

$name = filter_input(INPUT_POST, "name");
$mail = filter_input(INPUT_POST, "mail");
$message = filter_input(INPUT_POST, "message");


session_destroy();
?>

<html>
<head>
    <meta charset="utf-8">
    <title>もぶおテストサーバー</title>
    <link rel="stylesheet" type="text/css" href="contact_confirm.css">
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

      <h2>CONFIRM</h2>

      <h3>COMPLETE</h3>

      <div>
        送信が完了しました。<br/>
        返信をお待ちください。
      </div>

    </main>

    <footer>
      <div class="copy_light"><small>Copy Light bi-nasu.2017</small></div>
    </footer>
  </div>
</body>
</html>
