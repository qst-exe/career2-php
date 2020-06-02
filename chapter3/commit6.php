<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>掲示板App</title>
</head>
<body>

<div class="container">
    <div class="col-md-8">
        <h1 class="text-center text-primary py-3">掲示板App</h1>

        <h2 class="text-muted py-3">投稿フォーム</h2>

        <form method="POST" action="<?php print($_SERVER['PHP_SELF']) ?>">
            <div class="form-group">
                <label for="name">名前</label>
                <input type="text" class="form-control" id="name" name="personal_name" placeholder="名前" required>
            </div>
            <div class="form-group">
                <label for="contents">内容</label>
                <textarea class="form-control" id="contents" name="contents" rows="8" cols="40" placeholder="内容" required></textarea>
            </div>
            <button class="btn btn-primary" type="submit">投稿する</button>
        </form>

        <hr>

        <h2 class="text-muted py-3">スレッド</h2>

        <form method="post" action="delete.php">
            <button class="btn btn-danger" type="submit">投稿を全削除する</button>
        </form>

<?php

const THREAD_FILE = 'thread.txt';

if($_SERVER["REQUEST_METHOD"] === "POST"){
    writeData();
}

readData();

function readData(){
    // ファイルが存在しなければデフォルト空文字のファイルを作成する
    if (! file_exists(THREAD_FILE)) {
        $fp = fopen(THREAD_FILE, 'w');
        fwrite($fp, '');
        fclose($fp);
    }

    $fp = fopen(THREAD_FILE, 'rb');

    if ($fp){
        if (flock($fp, LOCK_SH)){
            while (!feof($fp)) {
                $buffer = fgets($fp);
                print($buffer);
            }

            flock($fp, LOCK_UN);
        }else{
            print('ファイルロックに失敗しました');
        }
    }

    fclose($fp);
}

function writeData(){
    $personal_name = $_POST['personal_name'];
    $contents = $_POST['contents'];
    $contents = nl2br($contents);

    $data = "<hr>\n";
    $data = $data."<p>投稿日時: ".date("Y/m/d H:i:s")."</p>\n";
    $data = $data."<p>投稿者: ".$personal_name."</p>\n";
    $data = $data."<p>内容:</p>\n";
    $data = $data."<p>".$contents."</p>\n";

    $fp = fopen(THREAD_FILE, 'ab');

    if ($fp){
        if (flock($fp, LOCK_EX)){
            if (fwrite($fp,  $data) === FALSE){
                print('ファイル書き込みに失敗しました');
            }

            flock($fp, LOCK_UN);
        }else{
            print('ファイルロックに失敗しました');
        }
    }

    fclose($fp);
}
?>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>