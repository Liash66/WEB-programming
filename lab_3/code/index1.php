<?php

$str = 'ahb acb aeb aeeb adcb axeb';
preg_match_all('/a..b/', $str, $matches);
print_r($matches[0]);

$str = 'a1b2c3';
$new_str = preg_replace_callback('/\d+/', function($matches)
{
    $num = $matches[0];
    return $num * $num * $num;
}, $str);

echo "\n" . $new_str;