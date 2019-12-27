<?php

if($argc !== 2) {
    die('args err' . "\n");
}

main($argv[1]);

function main($text) {
    $ueText = mb_convert_encoding($text, 'UTF-8');
    $res = json_decode(file_get_contents(sprintf('https://www.google.com/transliterate?langpair=ja-Hira|ja&text=%s', rawurlencode($ueText))), true);
    foreach($res as $i) {
        echo $i[1][0];
    }
}

echo "\n";

