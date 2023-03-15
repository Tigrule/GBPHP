<?php

// $arr = [1, 2, "3"];
// $arr[5] = 6;
// $arr[] = 45;

// var_dump(implode('.', $arr));


// for ($key = 0; $key <= count($arr); $key++) {
//   if (isset($arr[$key])) {
//     $value = $arr[$key];
//     print_r("{$key} => {$value}" . PHP_EOL, $return = $value <= 2);
//     $return ? print("aha\n") : null ;}
//     else echo "$key - no\n";
// }

// echo 1 . print_r(2), 3;

// $arr = [
// 	[1, 2, 3],
// 	[4, 25, 6],
// 	[9, 7, 8]
// ];

// foreach ($arr as $value) {
//   foreach ($value as $item) {
//     echo (string)$item . ", ";
//   }
//   print PHP_EOL;
// }
/*
$menu = [
  [
    'href' => '/',
    'text' => 'Главная'
  ],
  [
    'href' => '/news',
    'text' => 'Новости'
  ]
  ];

  foreach ($menu as $item): ?>
  <a href="<?=$item['href']?>"><?=$item['text']?></a>
  <?php endforeach; ?>*/
  
  $person = [
    'name' => 'Goodman',
    'age' => 29,
    'rasa' => 'elf',
    'class' => 'warrior',
    'force' => 5,
    'stamina' => 5,
    'health' => 100,
    'inventory' => [
      [
        'name' => 'sword',
        'type' => 'weapon',
        'attack' => 10,
        'force' => 2
      ],
      [
        'name' => 'axe',
        'type' => 'weapon',
        'attack' => 15
      ],
      [
        'name' => 'health_potion',
        'type' => 'porions',
        'heal' => 100
      ]
    ]
  ];

  $person['inventory'][] = [
    'name' => 'money',
    'count' => 100
  ];

  // $lost = array_rand($person['inventory']);
  // unset($person['inventory'][$lost]);
  // print_r($person['inventory']);