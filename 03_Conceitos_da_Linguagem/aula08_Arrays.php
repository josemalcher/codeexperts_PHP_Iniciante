<?php

/**
 * Array com chaves númericas
 */
$array = array(12, 10, "Jose Malcher Jr", 10.0);
#print $array[3];

/* Associativos
Pode-se nomear as chaves dos arrays, associando
os elementos do mesmo aos nomes criados
*/
$associativo = array('name' => "Jose Malcher Jr", 'price' => 12);
#print $associativo['name'];

// $keys = array_keys($associativo);
// print_r($keys);
// //
// $values = array_values($associativo);
// print_r($values);
//
// print array_key_exists("name", $associativo);
//
//print in_array(122, $array);
//
/**
 * Short syntax
 * PHP 5.4 +
 */
$array = [12, 10, "Jose Malcher Jr", 10.0];

print_r($array);