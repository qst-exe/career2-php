<?php

$rand = mt_rand(1, 100);
$result = "";

// おみくじのプログラム
if ($rand <= 20) {
    $result = "大吉";
} elseif ($rand <= 50) {
    $result = "中吉";
} else {
    $result = "小吉";
}

// おみくじの結果を出力
echo $result;