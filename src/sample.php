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
