<?php

$first_name = "次郎";
$last_name = "山田";
$job = "エンジニア";
$current_date = date("Ymd");
$birth_year = 1980;
$birth_month = 4;
$birth_day = 1;
$birthday = date('Ymd', strtotime("${birth_year}/${birth_month}/${birth_day}"));
$age = floor(($current_date-$birthday)/10000);

echo "私の名前は${last_name}${first_name}です。<br>";
echo "${last_name}さんは${birth_year}年${birth_month}月${birth_day}日生まれの${age}歳です。<br>";
echo "${last_name}さんは${job}として働いています。<br>";
echo "${last_name}${first_name}さんは、${job}として20年働いてきたベテランです。<br>";

