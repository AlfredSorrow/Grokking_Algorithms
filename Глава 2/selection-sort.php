<?php

function findSmallest(array $array)
{
  $smallest = $array[0];
  $smallestIndex = 0;

  for ($i = 0; $i < sizeOf($array); $i++)
  {
    if ($array[$i] < $smallest) {
      $smallest = $array[$i];
      $smallestIndex = $i;
    }
  }

  return $smallestIndex;
}

function selectionSort(array $array)
{
  $newArr = [];
  $size = sizeOf($array);

  for ($i = 0; $i < $size; $i++) {
    $smallest = findSmallest($array);
    array_push($newArr, array_splice($array, $smallest, 1)[0]);
  }

  return $newArr;
}

$arr = [5, 3, 6, 2, 10];
print_r(selectionSort($arr));
