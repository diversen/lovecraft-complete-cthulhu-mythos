<?php

$file = $argv[1];
$str = file_get_contents($file);

echo str_replace("\
 ![ ](/pics/PixelClear.gif)", "\n\n", $str);
