<?php

function loopSum(array $array)
{
  $result = 0;
  $size = sizeOf($array);

  foreach ($array as $number) {
    $result = $result + $number;
  }

  return $result;
}

function recursiveSum(array $array)
{
  if (sizeOf($array) === 1) {
    return $array[0];
  }

  return $array[0] + recursiveSum(array_splice($array, 1));
}

$array = [2, 5, 8, 10, 3];
echo loopSum($array) . "\n"; // 28
echo recursiveSum($array) . "\n"; // 28
