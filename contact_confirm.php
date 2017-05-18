<?php
session_start();
require_once("function.php");

$name = filter_input(INPUT_POST, "name");
$mail = filter_input(INPUT_POST, "mail");
$mailconf = filter_input(INPUT_POST, "mailconf");
$message = filter_input(INPUT_POST, "message");

$err_flg = false;

// バリデーションチェック

// 名前
if (mb_strlen($name) > 10 || mb_strlen($name) < 0) {
  $err_flg = true;
  $name_err = error("１～１０以内で入力してください。");
} else if (preg_match("/^[ -\/:-@\[-`\{-\~]+$/",$name)) {
  $err_flg = true;
  $name_err = error("入力できない文字が含まれています。");
}

// メールアドレス
if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
  $err_flg = true;
  $mail_err = error("正しいメールアドレスを入力してください");
}

// メールアドレス確認
if ( $mail != $mailconf) {
  $err_flg = true;
  $mailconf_err = error("メールアドレスが一致していません。");
}

// フラグがたてばエラー分出力
if ($err_flg == true) {
  // 値残し
  $_SESSION["name"] = $name;
  $_SESSION["mail"] = $mail;
  $_SESSION["mailconf"] = $mailconf;
  $_SESSION["message"] = $message;
  // エラー分
  $_SESSION["name_err"] = $name_err;
  $_SESSION["mail_err"] = $mail_err;
  $_SESSION["mailconf_err"] = $mailconf_err;
  $_SESSION["err_flg"] = $err_flg;
  header("location: contact.php");
  exit();
}

$back = filter_input(INPUT_POST,"back");

if (isset($back)) {
  $_SESSION["name"] = $name;
  $_SESSION["mail"] = $mail;
  $_SESSION["mailconf"] = $mailconf;
  $_SESSION["message"] = $message;
  $_SESSION["back"] = $back;
  header("Location: contact.php");
  exit;
}

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
      <p>送信する内容をご確認ください</p>
      <small class="required">可能な限り返信しておりますが、内容によってご返信できない場合もございます。</small>

      <form role="form" action="contact_end.php" method="post">

        <div class="row">
          <div class="form-group">
            <label class="control-label" for="InputName">お名前（ニックネーム可）</label>
            <p><?= h($name); ?></p>
          </div>
        </div>

        <div class="row">
          <div class="form-group">
            <label class="control-label" for="InputName">メールアドレス</label>
            <p><?= h($mail); ?></p>
          </div>
        </div>

        <div class="row">
          <label for="InputUrl">
          メッセージ
          </label>
         <p><?= h($message); ?></p>
        </div>

        <input type="submit" class="sbt_1" value="送信">

      </form>

      <form role="form" action="contact_confirm.php" method="post">
        <input type="hidden" name="back" value="back">
        <input type="hidden" name="name" value=<?=$name; ?> >
        <input type="hidden" name="mail" value=<?=$mail; ?> >
        <input type="hidden" name="mailconf" value=<?=$mailconf; ?> >
        <input type="hidden" name="message" value=<?=$message; ?> >
        <input type=submit class="sbt_2" value="戻る">
      </form>

    </main>

    <footer>
      <div class="copy_light"><small>Copy Light bi-nasu.2017</small></div>
    </footer>
  </div>
</body>
</html>
