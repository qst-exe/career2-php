# Chapter7

PHPフレームワーク「Laravel」を使ってアプリ開発を行います。

## Laravelのインストール

Laravelインストーラのダウンロード(composerのインストールが必須です)
```
$ composer global require laravel/installer
```

プロジェクトの作成
```
$ composer create-project "laravel/laravel=7.*" todo
```

Laravelサーバの起動
```
$ php artisan serve
```

Laravelで作ったアプリケーションは以下のURLから閲覧できます。

http://localhost:8000/

## GitHubでのリポジトリ作成

今まではForkしてリポジトリを作っていましたが、これからは各個人のアカウントに直接リポジトリを作ってください。

