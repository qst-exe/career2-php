# Chapter1

今回は型と変数、条件分岐、繰り返し処理について扱います。
他の言語でも使う基本的な処理はここで扱います。

## 事前準備

[repl.it](https://repl.it/) でPHPのプロジェクトを作成しましょう。

## 困ったときに見るべきサイト

- [PHP入門](https://www.javadrive.jp/php/)
- [PHPマニュアル](https://www.php.net/manual/ja/index.php)

## PHPの基本構文

```php
<?php

// コメントは // でつける 

/*
* こういう風にコメントすることもできる
*/
echo "hello, world!"; # でつけることもできる


// 文末の?と>は極力着けない
?>
```

## 型について

[型](https://www.php.net/manual/ja/language.types.php)

[型判定の関数](https://www.php.net/manual/ja/function.gettype.php)

PHPは動的型付け言語なので、以下のような挙動でも問題なく動く

```php
<?php

function add($i, $j)
{
    return $i + $j;
}

echo(add(2, 3));
echo(add(1.5, 3.5));
echo(add("2", "3"));
echo(add("hoge", "fuga"));
```

ただし、これだと困ることが多いので、実際には引数と返り値の型を指定することが多い

```php
<?php

function add(int $i, int $j): int
{
    return $i + $j;
}
```

## 変数について

[変数](https://www.php.net/manual/ja/language.variables.basics.php)

変数名は極力分かりやすい名前をつける(term事件)

[スコープ](https://www.php.net/manual/ja/language.variables.scope.php)

グローバルは基本的に使わない

[その他の変数](https://www.php.net/manual/ja/language.variables.external.php)

DRY(Don’t Repeat Yourself)の原則


## 課題1

以下の文字列を出力するプログラムを書いてください。(ヒントecho, brタグ)

```
私の名前は田中次郎です。
田中さんは40歳です。
田中さんはエンジニアとして働いています。
田中次郎さんは、エンジニアとして20年働いてきたベテランです。
```

### 課題2

課題1のプログラムを変数を使って書き換えてください。
実行時の出力結果は変わらないようにお願いします。

### 課題3(おまけ)

「山田さんは40歳です。」という文章を「山田さんは1980年4月1日生まれの40歳です。」に変更してください。
今日の日付に応じて、年齢が変わるとベストです。

## 条件分岐

> 牛乳を１パック買ってきて。卵があったら６つお願い

[if](https://www.php.net/manual/ja/control-structures.if.php)

[elseif](https://www.php.net/manual/ja/control-structures.elseif.php)

[switch](https://www.php.net/manual/ja/control-structures.switch.php)

比較演算子 `==` の落とし穴 

```php
<?php

$a = 1;
$b = 1; 

if ($a == $b) {
  echo "真です";
} else {
  echo "偽です";
}
// > 真です

$c = 1;
$d = "1";

if ($c == $d) {
  echo "真です";
} else {
  echo "偽です";
}
// > 真です

$e = 0;
$f = "hoge";
if ($e == $f) {
  echo "真です";
} else {
  echo "偽です";
}
// > 真です

```


なるべく `===`　を使おう  

```php
<?php

$a = 1;
$b = 1; 

if ($a === $b) {
  echo "真です";
} else {
  echo "偽です";
}
// > 真です

$c = 1;
$d = "1";

if ($c === $d) {
  echo "真です";
} else {
  echo "偽です";
}
// > 偽です

$e = 0;
$f = "hoge";
if ($e === $f) {
  echo "真です";
} else {
  echo "偽です";
}
// > 偽です

```

### 課題4 

おみくじ風のプログラムをif文を使って書いてください。おみくじ結果の条件は以下の通りです。

| 結果 | 割合 |
|---|---|
| 大吉 | 20% |
| 中吉 | 30% |
| 小吉 | 50% |

```php
<?php

$rand = mt_rand(1, 100);

// おみくじのプログラム

// おみくじの結果を出力
echo $result;
```


### 課題5

上のおみくじアプリをswitch文を使って書いてください。


## 繰り返し処理

[for](https://www.php.net/manual/ja/control-structures.for.php)

[foreach](https://www.php.net/manual/ja/control-structures.foreach.php)

[while](https://www.php.net/manual/ja/control-structures.while.php)

### 課題6

1から100までの数をプリントするプログラムを書いてください。ただし3の倍数のときは数の代わりに｢Fizz｣と、5の倍数のときは｢Buzz｣とプリントし、3と5両方の倍数の場合には｢FizzBuzz｣とプリントすること。

```
期待する結果
1
2
Fizz
4
Buzz
Fizz
7
8
Fizz
Buzz
11
Fizz
13
14
FizzBuzz
16
17
Fizz
19
Buzz
Fizz
22
23
Fizz
Buzz
26
Fizz
28
29
FizzBuzz
31
32
Fizz
34
Buzz
Fizz
37
38
Fizz
Buzz
41
Fizz
43
44
FizzBuzz
46
47
Fizz
49
Buzz
Fizz
52
53
Fizz
Buzz
56
Fizz
58
59
FizzBuzz
61
62
Fizz
64
Buzz
Fizz
67
68
Fizz
Buzz
71
Fizz
73
74
FizzBuzz
76
77
Fizz
79
Buzz
Fizz
82
83
Fizz
Buzz
86
Fizz
88
89
FizzBuzz
91
92
Fizz
94
Buzz
Fizz
97
98
Fizz
Buzz
```