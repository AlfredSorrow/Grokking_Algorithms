<?php

function findHighest(array $array)
{
  if (sizeOf($array) === 1) {
    return $array[0];
  }

  if ($array[0] > $array[1]) {
    array_splice($array, 1, 1);
    return findHighest($array);
  } else {
    return findHighest(array_splice($array, 1));
  }
  
}

$array = [2, 5, 8, 10, 3];
echo findHighest($array) . "\n"; // 10
