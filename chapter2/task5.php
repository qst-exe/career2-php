<?php

// 消費税10%
const TAX = 0.1;

// 商品単体の値段を計算する
function calculate(int $price, int $count): int
{
    return $price*$count*(1+TAX);
}

// レシートの文字列を返す
function showReceipt(array $items): string
{
    $total_price = 0;
    foreach ($items as $item) {
        $total_price += calculate($item["price"], $item["count"]);
    }
    $item_name_list = array_column($items, "name");

    return "レシート<br>".implode("<br>", $item_name_list)."<br>¥$total_price<br><br>";
}

$items_a = [
    [
        "name" => "消しゴム",
        "count" => 2,
        "price" => 60,
    ]
];

$items_b = [
    [
        "name" => "鉛筆",
        "count" => 3,
        "price" => 60,
    ],
    [
        "name" => "ペン",
        "count" => 2,
        "price" => 100,
    ],
];

echo showReceipt($items_a);
echo showReceipt($items_b);