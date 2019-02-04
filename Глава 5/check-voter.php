<?php

function checkVoter(string $name)
{
  static $voted = [];
  if (array_key_exists($name, $voted)) {
    return "kick them out! \n";  
  } else {
    $voted[$name] = true;
    return "let them vote! \n";
  }
}

echo checkVoter("tom"); // let them vote!
echo checkVoter("mike"); // let them vote!
echo checkVoter("mike"); // kick them out!
