<?php

$member_list = [
    [
        "id" => 1,
        "name" => "田中",
        "age" => 25,
    ],
    [
        "id" => 2,
        "name" => "鈴木",
        "age" => 30,
    ]
];

foreach ($member_list as $member) {
    echo "${member['name']}さんは${member['age']}歳です。<br>";
}