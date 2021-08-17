<?php

$list[] = [
  'title' => 'Laundry',
  'priority' => 2,
  'due' => '',
  'complete' => true,
];
$list[] = [
  'title' => 'Clean out fridge',
  'priority' => 3,
  'due' => '07/30/2016',
  'complete' => false,
];

echo $list[1]['title'];

?>