<?php

$nums = [];

for ($i = 0; $i < 5; $i++) {
    $col = range($i * 15 + 1, $i * 15 + 15);
    shuffle($col);
    $nums[$i] = array_slice($col, 0, 5);
}

function h($s){
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}

$nums[2][2] = "FREE";

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-utf-8">
    <title>BINGO!</title>
    <style type="text/css">
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            font-size: 16px;
        }
        #container{
            margin: 0 auto;
            width: 322px;
        }

        td, th {
            width: 65px;
            height: 45px;
        }

        td {
            background: #4169e1;
            color: #fff;
        }

        th {
            color: #4169e1;
            font-size: 22px;
        }
    </style>
</head>
<body>
<div id="container">
    <table>
        <tr>
            <th>B</th><th>I</th><th>N</th><th>G</th><th>O</th>
        </tr>
        <?php for ($i = 0; $i < 5; $i++) : ?>
            <tr>
                <?php for ($j = 0; $j < 5; $j++) : ?>
                    <td><?= h($nums[$j][$i]); ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</div>
</body>
</html>
