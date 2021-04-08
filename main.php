<?php

require_once __DIR__ . '/Car.class.php';
require_once __DIR__ . '/Taxi.class.php';

// Taxiクラスのインスタンスを生成
$taxi1 = new Taxi('クラウンのタクシー', 222, 'black');

// 3人乗車
echo $taxi1->pickUp(3);
echo $taxi1->information();
echo "\n";

// 2人降車
echo $taxi1->lower(2);
echo $taxi1->information();
echo "\n";

// 2人降車
// 1人しか乗っていないので降車できない
echo $taxi1->lower(2);