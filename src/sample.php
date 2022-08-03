<?php

$a = 'php';
$b = $a;
$a[0] = 'Z';

echo $a;
echo $b;

$c = 'php';
$d = &$a;
$c[0] = 'Z';

echo $a;
echo $b;

echo gettype(1) . PHP_EOL;
echo gettype(0) . PHP_EOL;
echo gettype(-1) . PHP_EOL;

var_dump(0b10);
var_dump(010);
var_dump(0x10);

var_dump(PHP_INT_MAX);
var_dump(PHP_INT_MAX + 18);
var_dump((PHP_INT_MAX + 1) == (PHP_INT_MAX + 2));


var_dump(1.1);
var_dump(1.1e2);
var_dump(0.1 + 0.2);
var_dump(0.1 + 0.2 == 0.3);

$number = bcadd('0.1', '0.2', 1);
var_dump((float)$number === 0.3);


$str1 = 'abcde';
$str2 = 'あいうえお';
echo strlen($str1) . PHP_EOL;
echo strlen($str2) . PHP_EOL;
echo mb_strlen($str1) . PHP_EOL;

var_dump('1' === '１');
var_dump(mb_convert_kana('1', 'Kas') === mb_convert_kana('１', 'Kas'));

if () {
    echo 'true' . PHP_EOL;
} else {
    echo 'true' . PHP_EOL;
}

$a = null;
var_dump($b);
unset($a);
var_dump($a);
