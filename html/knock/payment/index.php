<?php
$amount = 988;
$coins = [
    500 => 0,
    100 => 0,
    50 => 0,
    10 => 0,
    5 => 0,
    1 => 0
    ];

//ここにコードを書きましょう。

foreach($coins as $key => $value){
    echo $key . '円玉：' . $value . '枚' . PHP_EOL;
}
