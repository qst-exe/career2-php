# Chapter6

今までの総復習として、TODOアプリを1からつくります。

## 困ったときに見るべきサイト

- [PHP入門](https://www.javadrive.jp/php/)
- [PHPマニュアル](https://www.php.net/manual/ja/index.php)

## 課題

以下のTODOアプリをPHPとMySQLを使って作成してください。

![スクリーンショット 2020-07-13 2.15.27.jpg](https://qiita-image-store.s3.ap-northeast-1.amazonaws.com/0/36927/fafe9e39-16b5-c872-d281-099d1c5cf2e0.jpeg "スクリーンショット 2020-07-13 2.15.27.jpg")

デザインはサンプルの通りでなくて大丈夫です。

### できてほしいこと

1. タスク名と期限を入力して作成できる
1. 作成したタスクが期限の近いものから上に一覧になって表示できる
1. 全てのタスクを削除できる
1. タスクの進捗(未着手, 作業中, 完了)を「変更ボタンを使って」更新できる

### 追加の課題

![localhost_3000_.png](https://qiita-image-store.s3.ap-northeast-1.amazonaws.com/0/36927/61f2a570-7f36-e473-601e-eaf09f7a5936.png "localhost_3000_.png")

1. 任意のタスクを削除することができる
1. タスクに画像を添付することができる

[現時点でのDB構造](https://docs.google.com/spreadsheets/d/1nBeaj9TKSgdsaentfXHGfnfgchWSK7y1221q8K3OOfY/edit#gid=0)

## リポジトリ

リポジトリは以下の箇所からforkするか、自分で作成するかしてください。

[https://github.com/qst-exe/career2-php-todo](https://github.com/qst-exe/career2-php-todo)


## ヒント

1. このアプリの実装に必要なことを分解してみてください。
1. 参考までにHTMLを[ここ](https://raw.githubusercontent.com/qst-exe/career2-php/master/chapter6/sample.html)に貼っておきます。
1. [PHPの画像アップロードについて](https://qiita.com/icelandnono/items/b6b3c06124d273f28673)

### phpMyAdminの権限がないとき

```
// MySQLにアクセスする
$ mysql -h localhost -u root -ppassword

// DBを作る
CREATE DATABASE todo;

// DBを見る
show databases;
```

### 2020-10-07 使うコマンド

マイグレーションファイル作成

```
$ vendor/bin/phpmig generate AddTodoImage
```

カラム追加

```
ALTER TABLE `todo` ADD image VARCHAR(255) DEFAULT NULL after `status`
```

```
ALTER TABLE `todo` DROP `image`;
```

### 困ったときのTips

- [環境構築の動画](https://youtu.be/XwtassK4Q4I)
- [Composerのダウンロード](https://youtu.be/tdFiUL4o_5g)
- [GitへのPushの動画](https://youtu.be/NNjIwnCVsCg)
- [GitにPushできないとき](https://wak-tech.com/archives/933)
