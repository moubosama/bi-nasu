<?php


//特殊文字対策
function h($str) {
  return htmlspecialchars($str, ENT_QUOTES);
}

//エラーメッセージ
function error($msg) {
  return '<span style="color:#FF0000;">'.h($msg).'</span>';
}

?>