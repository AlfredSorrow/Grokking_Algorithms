<?php

function factorial($number)
{
  if ($number === 1) {
    return 1;
  } else {
    return $number * factorial($number - 1);
  }
}

echo factorial(10); // 3628800
