# Chapter2

今回は配列と関数についてです。
ここまでできるとPHPで簡単なアプリケーションを作成することができます。

## 事前準備

[repl.it](https://repl.it/) でPHPのプロジェクトを作成しましょう。

## 困ったときに見るべきサイト

- [PHP入門](https://www.javadrive.jp/php/)
- [PHPマニュアル](https://www.php.net/manual/ja/index.php)

## 配列

[配列](https://www.php.net/manual/ja/language.types.array.php)

```php
<?php

// 配列
$area_list = ["福岡", "熊本", "鹿児島"];

// 連想配列
$john = [
    "id" => 1,
    "name" => "John",
    "age" => 23,
];

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
```

### 課題1

以下の配列から「マイケル」を取り出して出力してください。

[回答例](https://github.com/qst-exe/carrier2-php/blob/master/chapter2/task1.php)

```php
<?php

$members = ["ジョン", "マイケル", "トミー"];

// ここにプログラムを書いてください。
```

### 課題2

以下の配列を使って、「〇〇さんは✕✕歳です。」という文字を表示させてください。(ヒントはforeach)

[回答例](https://github.com/qst-exe/carrier2-php/blob/master/chapter2/task2.php)

```
期待する結果
田中さんは25歳です。
鈴木さんは30歳です。 
```

```php
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

// ここにプログラムを書いてください

```

### 課題3

以下の配列データを使って、期待する結果の文章を表示させてください。

やり方1：for文で頑張る

やり方2：配列操作の関数を使う(ヒント「array やりたいこと」で検索をしてみてください)

[回答例](https://github.com/qst-exe/carrier2-php/blob/master/chapter2/task3.php)

```
期待する結果(食べ物の並び順は問わない)
Aグループの食べ物
りんご, バナナ, トマト
Bグループの食べ物
キャベツ, さんま, さつまいも
```

```php
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

// ここにプログラムを書いてください

```

## 関数

ある不思議な箱に値を入れると、何かしらの値が返ってくる

```php
<?php

// y = 2x - 1;
function hoge(int x): int 
{
    return 2*x - 1;
}
```

### 課題4

以下のコードを関数を使って書き変えてください。ただし、出力結果は変わらないようにすること

[回答例](https://github.com/qst-exe/carrier2-php/blob/master/chapter2/task4.php)

```php
<?php

echo "織田信長はりんごが好きです。<br>";
echo "豊臣秀吉はみかんが好きです。<br>";
echo "徳川家康はレモンが好きです。<br>";

```

### 課題5

以下のレシートデータを表示するプログラムを書いてください。

[回答例](https://github.com/qst-exe/carrier2-php/blob/master/chapter2/task5.php)

条件
1. 商品のデータは下にある配列の商品データを使うこと
2. 商品には消費税10%がかかるので、それも考慮に入れること

```
レシート
消しゴム
¥132

レシート
鉛筆
ペン
¥418
```

```php
<?php

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

// ここにプログラムを書いてください 

```

## きれいなコードを書こう

[PSR2-コーディングガイド](http://www.infiniteloop.co.jp/docs/psr/psr-2-coding-style-guide.html)

### 課題6

以下のプログラムを読みやすいように書き換えてください。

```php
<?php

for($i = 1; $i <= 100; $i++){
echo toFizzBuzz($i) . "<br>";
}

// 数字をFizzBuzz化する。
function toFizzBuzz(int $i): string
{
$s = $i;switch ($i) {
  case ($i%15===0):
            $s = "FizzBuzz";break;
        case ($i%3===0):
            $s = "Fizz";
     break;
   case ($i%5 === 0):
      $s = "Buzz";
break;
    }
return $s;}
```
