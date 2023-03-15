<?php
// В каком году произошла Куликовская битва?

$answer = '';
$qwestion = "В каком году произошла Куликовская битва? - 1380, 1280 или 1160? - "
.PHP_EOL;

do {
  $answer = readline($qwestion);
  switch ($answer) {
    case "1380":
      echo 'Верно';
      break;
    case "1280":
    case "1160":
      echo "Неверно";
      break;
    default:
     $answer = '';
  }
  } while (!(bool)$answer);
