<html>
<head><title>掲示板App</title></head>
<body>

<h1>掲示板App</h1>

<form method="POST" action="<?php print($_SERVER['PHP_SELF']) ?>">
    <input type="text" name="personal_name"><br><br>
    <textarea name="contents" rows="8" cols="40">
</textarea><br><br>
    <input type="submit" name="btn1" value="投稿する">
</form>

</body>
</html>