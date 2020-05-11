<?php

$rand = mt_rand(1, 100);
$result = "";

// おみくじのプログラム
switch ($rand) {
    case ($rand <= 20):
        $result = "大吉";
        break;

    case ($rand <= 50):
        $result = "中吉";
        break;

    default:
        $result = "小吉";
        break;
}

// おみくじの結果を出力
echo $result;