<?php
$wishes = [
  "счастья", "здоровья", "веселья"
];
$epithets = [
  "безграничного", "вселенского", "огромного"
];

$result_wish = [];
foreach ($wishes as $w){
  $random_index = array_rand($epithets);
  $result_wish[] = $epithets[$random_index] . " " . $w;
  unset($epithets[$random_index]);
};

$name = readline('Введите ваше имя: ');

$result_wish = implode(", ", $result_wish);

$result = "Дорогой $name, поздравляю тебя от всего сердца с днём рождения, желаю тебе $result_wish";

echo $result;

// print_r($result_wish);