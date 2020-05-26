<html>
<head><title>掲示板App</title></head>
<body>

<h1>掲示板App</h1>

<h2>投稿フォーム</h2>

<form method="POST" action="<?php print($_SERVER['PHP_SELF']) ?>">
    <input type="text" name="personal_name"><br><br>
    <textarea name="contents" rows="8" cols="40">
</textarea><br><br>
    <input type="submit" name="btn1" value="投稿する">
</form>

<h2>スレッド</h2>

<?php

const THREAD_FILE = 'thread.txt';

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
?>

</body>
</html>