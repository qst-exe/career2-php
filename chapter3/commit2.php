<html>
<head><title>掲示板App</title></head>
<body>

<h1>掲示板App</h1>

<h2>投稿フォーム</h2>

<form method="POST" action="<?php print($_SERVER['PHP_SELF']) ?>">
    <input type="text" name="personal_name" placeholder="名前"><br><br>
    <textarea name="contents" rows="8" cols="40" placeholder="内容">
</textarea><br><br>
    <input type="submit" name="btn1" value="投稿する">
</form>

<h2>スレッド</h2>

<?php

const THREAD_FILE = 'thread.txt';

function writeData() {
    $personal_name = $_POST['personal_name'];
    $contents = $_POST['contents'];
    $contents = nl2br($contents);

    $data = "<hr>\n";
    $data = $data."<p>投稿者:".$personal_name."</p>\n";
    $data = $data."<p>内容:</p>\n";
    $data = $data."<p>".$contents."</p>\n";

    $fp = fopen(THREAD_FILE, 'a');

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

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    writeData();
}
?>

</body>
</html>