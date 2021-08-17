<?php

$learn = array('Conditionals','Arrays','Loops');
$learn[] = 'Build something awesome!';
array_push($learn,'Functions','Forms','Objects');
array_unshift($learn,'HTML','CSS');
asort($learn);
sort($learn);
rsort($learn);
//var_dump($learn);
shuffle($learn);
echo $learn[0];
// $learn[1];
//echo implode("\n",$learn);

?>