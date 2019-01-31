<?php

function getSize(array $array) // php already has "count" fucntion
{
  if ($array === []) {
    return 0;
  }

  return 1 + getSize(array_splice($array, 1));
}

$array = [2, 5, 8, 10, 3];
echo getSize($array); // 5
