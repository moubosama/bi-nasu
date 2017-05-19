<?php

// ローカルDB接続
//データーベース接続
function getDb() {
   $dsn = 'mysql:dbname=bi_nasu_db;host=localhost;charset=utf8';
   $user = "root";
   $pass = "";

   try {

     $db = new PDO($dsn, $user,$pass);

     $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   } catch (PDOEXception $e) {
     echo $e->getMessage();
   }
   return $db;
 }



// デバッグ用
function pr($str) {
	echo "<pre>";
	print_r($str);
	echo "</pre>";
}

//特殊文字対策
function h($str) {
  return htmlspecialchars($str, ENT_QUOTES);
}

//エラーメッセージ
function error($msg) {
  return '<span style="color:#FF0000;">'.h($msg).'</span>';
}

?>