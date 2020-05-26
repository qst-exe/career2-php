# Chapter3

環境構築についてです。

今までrept.itで開発していたものが自分のPCの内で開発できるようになります。

## 困ったときに見るべきサイト

- [PHP入門](https://www.javadrive.jp/php/)
- [PHPマニュアル](https://www.php.net/manual/ja/index.php)
- [XAMPP](https://www.apachefriends.org/jp/index.html)
- [サル先生のGit入門](https://backlog.com/ja/git-tutorial/)

## XAMPPでの開発の構築

https://www.apachefriends.org/jp/index.html

`ローカルディスク(C) > xampp > htdocs > (作りたいプロジェクト)`

[localhost/作りたいプロジェクト](http://localhost/作りたいプロジェクト) でアクセスできます。

## Gitによるバージョン管理

Linux感覚でWindowsが操作できる。

[Git for Windows](https://gitforwindows.org/)

対象プロジェクトでこのコマンド

```
git config user.name "ユーザー名"
git config user.email "メールアドレス"
```

本当はこのコマンド

```
git config --global user.name "ユーザー名"
git config --global user.email "メールアドレス"
```

[Sublime Merge](https://www.sublimemerge.com/download)

[SourceTree](https://www.sourcetreeapp.com/)

## エディタ

[VSCode](https://code.visualstudio.com/)

[PhpStorm](https://www.jetbrains.com/ja-jp/phpstorm/)

## Gitについて

詳しくは別の授業でやります。

![20191025-鹿児島mk3.006.jpeg](https://qiita-image-store.s3.ap-northeast-1.amazonaws.com/0/36927/edf60379-bd3b-f9cf-83f6-d4a6e084a375.jpeg "20191025-鹿児島mk3.006.jpeg")

![20191025-鹿児島mk3.007.jpeg](https://qiita-image-store.s3.ap-northeast-1.amazonaws.com/0/36927/e4d5b5db-34c3-16c0-8b09-b8f302f990c3.jpeg "20191025-鹿児島mk3.007.jpeg")

![20191025-鹿児島mk3.008.jpeg](https://qiita-image-store.s3.ap-northeast-1.amazonaws.com/0/36927/f56897fb-810f-144b-e018-67d706371e7e.jpeg "20191025-鹿児島mk3.008.jpeg")

![20191025-鹿児島mk3.009.jpeg](https://qiita-image-store.s3.ap-northeast-1.amazonaws.com/0/36927/9a490bf2-63cb-f584-c981-5582e7da9bab.jpeg "20191025-鹿児島mk3.009.jpeg")

![20191025-鹿児島mk3.010.jpeg](https://qiita-image-store.s3.ap-northeast-1.amazonaws.com/0/36927/2b25297d-8cfb-c418-1a55-d1cce4cf6634.jpeg "20191025-鹿児島mk3.010.jpeg")

![20191025-鹿児島mk3.011.jpeg](https://qiita-image-store.s3.ap-northeast-1.amazonaws.com/0/36927/7bfb1b57-0ee1-f3ff-96e0-3c9e47a19ee1.jpeg "20191025-鹿児島mk3.011.jpeg")


## 掲示板Appの作成

プロジェクトを作成してコピーする

[サンプルコード](https://github.com/qst-exe/career2-php-sample1)

### 課題

1. スレッドに投稿日時を表示しよう
2. 投稿フォームをカスタマイズしてみよう

※ 完成したらcommit&pushをしてください
