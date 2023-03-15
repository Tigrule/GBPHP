<?php

use LDAP\Result;

$name = readline('Как вас зовут? - ');
$result = null;
$sum = 0;

$n = readline('Сколько задач у вас запланировано сегодня? - ');

for ($i = 1; $i <= $n; $i++) {
  $task1 = readline('Какая задача стоит перед вами сегодня? - ');
  $dur1 = readline('Сколько часов займёт эта задача? - ');
  $result .= "$task1 ({$dur1}ч) \n";
  $sum += (int)$dur1;
}

$result = "$name, сегодня у вас запланировано 3 задачи:
$result Примерное время выполнения плана {$sum}ч";

echo $result;
?>