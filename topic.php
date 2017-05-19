<?php

?>

<html>
<head>
    <meta charset="utf-8">
    <title>もぶおテストサーバー</title>
    <link rel="stylesheet" type="text/css" href="contact.css">
</head>
<body>
  <div class="wrap">
    <header>
    	 <h3>TOPIC投稿フォーム</h3>
    </header>

    <main>
    
      <form role="form" action="topic_confirm.php" method="post">
      	<div class="title"><input type="text" name="title" placeholder="タイトル入力"></div>
      	<div class="topic"><textarea name="topic" cols="40" rows="4" placeholder="ここに最新の情報を投稿してください"></textarea></div>
      	<div class="confirm"><input type="submit" value="確認画面"></div>
      </form>

    </main>

    <footer>
      <div class="copy_light"><small>Copy Light bi-nasu.2017</small></div>
    </footer>
  </div>
</body>
</html>