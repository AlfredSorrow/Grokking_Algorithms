<?php

function quickSort(array $array)
{
  if (sizeOf($array) <= 1) {
    return $array;
  }
  
  $pivot = $array[0];
  $less = [];
  $greater = [];
  for ($i = 1; $i < sizeOf($array); $i++ ) {
    if ($array[$i] > $pivot) {
      $greater[] = $array[$i];
    } else {
      $less[] = $array[$i];
    }
  }

  return array_merge(quickSort($less), [$pivot], quickSort($greater));
  
}

$array = [2, 5, 8, 10, 3];
print_r(quickSort($array));
