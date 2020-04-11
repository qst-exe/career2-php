<html>
<head><title>PHP TEST</title></head>
<body>

<?php

$counter_file = 'counter.txt';
$counter_lenght = 8;

// ファイルが存在しなければデフォルト値:0のファイルを作成する
if (! file_exists($counter_file)) {
    $fp = fopen($counter_file, 'w');
    fwrite($fp, 0);
    fclose($fp);
}

$fp = fopen($counter_file, 'r+');

if ($fp){
    if (flock($fp, LOCK_EX)){

        $counter = fgets($fp, $counter_lenght);
        $counter++;

        rewind($fp);

        if (fwrite($fp,  $counter) === FALSE){
            print('ファイル書き込みに失敗しました');
        }

        flock($fp, LOCK_UN);
    }
}

fclose($fp);

print('count:'.$counter);

?>
</body>
</html>
