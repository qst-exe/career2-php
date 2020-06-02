<?php

const THREAD_FILE = 'thread.txt';

$fp = fopen(THREAD_FILE, 'w');
fwrite($fp, '');
fclose($fp);

$redirect_url = $_SERVER['HTTP_REFERER'];
header("Location: $redirect_url");
exit;