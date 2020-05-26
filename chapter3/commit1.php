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

</body>
</html>