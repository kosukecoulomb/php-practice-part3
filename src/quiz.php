<?php

echo 'テレビのチャンネルを入力してください' . PHP_EOL;
$channel = fgets(STDIN);

echo 'テレビの視聴分数を入力してください' . PHP_EOL;
$time = fgets(STDIN);

echo 'テレビの視聴回数を入力してください' . PHP_EOL;
$count = fgets(STDIN);

echo $channel;
echo $time;
echo $count . PHP_EOL;
