<html>
<head><title>PHP TEST</title></head>
<body>

<p>掲示板</p>

<form method="POST" action="<?php print($_SERVER['PHP_SELF']) ?>">
    <input type="text" name="personal_name"><br><br>
    <textarea name="contents" rows="8" cols="40">
</textarea><br><br>
    <input type="submit" name="btn1" value="投稿する">
</form>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    writeData();
}

readData();

function readData(){
    $keijban_file = 'thread.txt';

    // ファイルが存在しなければデフォルト空文字のファイルを作成する
    if (! file_exists($keijban_file)) {
        $fp = fopen($keijban_file, 'w');
        fwrite($fp, '');
        fclose($fp);
    }

    $fp = fopen($keijban_file, 'rb');

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
    $data = $data."<p>投稿者:".$personal_name."</p>\n";
    $data = $data."<p>内容:</p>\n";
    $data = $data."<p>".$contents."</p>\n";

    $keijban_file = 'thread.txt';

    $fp = fopen($keijban_file, 'ab');

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
</body>
</html>