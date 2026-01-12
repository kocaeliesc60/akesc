<?php
$urls = [
    "https://www.google.com/",
    "https://www.google.com/",
    "https://www.google.com/",
    "https://www.google.com/",
    "https://www.google.com/",
    "https://www.google.com/",
    "https://www.google.com/",
    "https://www.google.com/",
    "https://www.google.com/",
    "https://www.google.com/"
];


$entropy = microtime(true) . random_int(100000, 999999) . ($_SERVER['REMOTE_ADDR'] ?? '0.0.0.0');
$hash = crc32($entropy);
$index = abs($hash) % count($urls);

header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

header("Location: " . $urls[$index], true, 301);
exit();
?>
