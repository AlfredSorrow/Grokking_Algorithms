<?php

function countdown(int $number)
{
  echo $number . "\n";
  if ($number <= 0) {
    return;
  } else {
    countdown($number - 1);
  }
}

countdown(10); 
