<?php

$a_list = [
    [
        "group" => "A",
        "name" => "りんご"
    ],
    [
        "group" => "B",
        "name" => "キャベツ"
    ],
    [
        "group" => "B",
        "name" => "さんま"
    ],
    [
        "group" => "A",
        "name" => "バナナ"
    ],
];

$b_list = [
    [
        "group" => "B",
        "name" => "さつまいも"
    ],
    [
        "group" => "A",
        "name" => "トマト"
    ],
];

// 配列同士を結合する
$mixed_list = array_merge($a_list, $b_list);

// 配列を特定条件でフィルターする
$group_a_list = array_filter($mixed_list, function($food) {
    return $food['group'] === "A";
});
$group_b_list = array_filter($mixed_list, function($food) {
    return $food['group'] === "B";
});

echo "Aグループの食べ物<br>";
// 配列から指定したkeyの値を取り出す
echo implode(", ", array_column($group_a_list, "name"));
echo "<br>";
echo "Bグループの食べ物<br>";
echo implode(", ", array_column($group_b_list, "name"));
