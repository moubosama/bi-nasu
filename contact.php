<?php
session_start();
require_once("function.php");



if (isset($_SESSION["err_flg"]) === true) {

  $name         = $_SESSION["name"];
  $mail         = $_SESSION["mail"];
  $mailconf     = $_SESSION["mailconf"];
  $message      = $_SESSION["message"];

  $name_err     = $_SESSION["name_err"];
  $mail_err     = $_SESSION["mail_err"];
  $mailconf_err = $_SESSION["mailconf_err"];
  $err_flg      = $_SESSION["err_flg"];
}

if (isset($_SESSION["back"])) {
  $name         = $_SESSION["name"];
  $mail         = $_SESSION["mail"];
  $mailconf     = $_SESSION["mailconf"];
  $message      = $_SESSION["message"];
}

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

      <h2>CONTACT</h2>
      <p>ご意見、感想など等があればこちらのフォームから送信してください。</p>
      <small class="required">可能な限り返信しておりますが、内容によってご返信できない場合もございます。</small>


      <h3>メールフォーム</h3>

      <form role="form" action="contact_confirm.php" method="post">

        <div class="row">
          <div class="form-group">
            <label class="control-label" for="InputName">お名前（ニックネーム可）</label>
            <input type="text" class="form-control" name="name" autocomplete="off" value="<?= !empty($name)? h($name):""; ?>" placeholder="Enter name" required>
          </div>
          <span>
            <?= !empty($name_err)? $name_err:""; ?>
          </span>
        </div>

        <div class="row">
          <div class="form-group">
            <label class="control-label" for="InputName">メールアドレス</label>
            <input type="text" class="form-control" name="mail" autocomplete="off" value="<?= !empty($mail)? h($mail):""; ?>" placeholder="Enter email" required>
          </div>
          <span>
            <?= !empty($mail_err)? $mail_err:""; ?>
          </span>
        </div>

        <div class="row">
          <div class="form-group">
            <label class="control-label" for="InputName">メールアドレス（確認）</label>
            <input type="text" class="form-control" name="mailconf" autocomplete="off" value="<?= !empty($mailconf)? h($mailconf):""; ?>" placeholder="Enter email" required>
          </div>
          <span>
            <?= !empty($mailconf_err)? $mailconf_err:""; ?>
          </span>
        </div>

        <div class="row">
          <label for="InputUrl">
            <span class="text-danger"></span>
              メッセージ
          </label>
          <textarea name="message" class="form-control" rows="10" autocomplete="off" placeholder="ここにメッセージを入力してください" required><?= !empty($message)? $message:""; ?></textarea>
        </div>

        <input type="submit" class="sbt_1" value="確認">

      </form>

    </main>

    <footer>
      <div class="copy_light"><small>Copy Light bi-nasu.2017</small></div>
    </footer>
  </div>
</body>
</html>
