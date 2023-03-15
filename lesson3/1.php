<?php
echo "Программа перемножает элементы двух массивов соответствующих индексов\n" . PHP_EOL;
echo "Введите два значения или оставьте значение пустым, чтобы массив был создан автоматически" . PHP_EOL;
echo "Вводите массивы через запятую с пробелом" . PHP_EOL;

$arr1 = readline("Введите первый массив:" . PHP_EOL);

if ((bool)$arr1){
  $arr1 = explode(', ', $arr1);
  foreach ($arr1 as $el) {
    $el = (float)$el;
  };
  // is_array($arr1) ? : die('Введите массив через запятую с пробелом');
} else {
  $arr1 = range(1, 5);
  shuffle($arr1);
}

$arr2 = readline("Введите второй массив:" . PHP_EOL);

if ((bool)$arr2){
  $arr2 = explode(', ', $arr2);
  foreach ($arr2 as $el) {
    $el = (float)$el;
  };
} else {
  $arr2 = range(1, 5);
  shuffle($arr2);
}

$big = null;
$little = null;

if (count($arr1) >= count ($arr2)) {
  $more = $arr1;
  $less = $arr2;
} else {
  $more = $arr2;
  $less = $arr1;
}

for ($i = count($less); $i < count($more); $i++) {
  $less[$i] = NAN;
};

for ($i = 0; $i < count($more); $i++) {
  print ((string)((float)$more[$i] * (float)$less[$i]) . ", ");
}

/*
Заметка
Подумать о разных разделителях и пропущенных пробелах
*/