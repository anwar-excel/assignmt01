<?php 
  $a = array(1,2,array(3,4, array(5,6,7), 8), 9);
$it = new RecursiveIteratorIterator(new RecursiveArrayIterator($a));
foreach($it as $v) {
    $new_arr[] = $v;
}
echo array_sum($new_arr); 




?>