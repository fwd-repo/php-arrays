<?php

$iceCream = array(
  'Alena' => 'Black Cherry', 
  'Treasure' => 'Chocolate', 
  'Dave' => 'Cookies and Cream', 
  'Rialla' => 'Strawberry'
);

$iceCream['alena'] = 'Pistachio';
$iceCream['Dave Thomas'] = 'Cookies and Cream';
$iceCream[] = 'Vanilla';
$iceCream['Andrew'] = true;
var_dump($iceCream);

?>