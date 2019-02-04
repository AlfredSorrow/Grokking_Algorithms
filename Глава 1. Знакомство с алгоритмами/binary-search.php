<?php

function binarySearch (array $sortedArray, int $item)
{
  $low = 0;
  $high = sizeOf($sortedArray) - 1;

  while ($low <= $high) {
    $mid = floor(($low + $high) / 2);
    $guess = $sortedArray[$mid];

    if ($guess === $item) {
      return $mid;
    }
    if ($guess > $item) {
      $high = $mid - 1;
    } else {
      $low = $mid + 1;
    }
  }

  return "There is no such element";
}

$myList = [1, 3, 5, 7, 9];

echo binarySearch($myList, 3) . "\n";; // => 1
echo binarySearch($myList, -1) . "\n";; // => There is no such element
