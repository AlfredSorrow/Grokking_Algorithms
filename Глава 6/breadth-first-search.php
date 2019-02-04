<?php

function personIsSeller(string $name)
{
    return $name[-1] === "m";
}

function addToQueue(\SplQueue $queue, array $persons) {
    foreach ($persons as $person) {
        $queue->enqueue($person);
    }
}

function search(string $name, array $graph)
{
  $queue = new \SplQueue();
  addToQueue($queue, $graph[$name]);
  $searched = [];
  while (!$queue->isEmpty()) {
    $person = $queue->dequeue();
    if (array_key_exists($person, $searched)) {
      continue;
    }

    if (personIsSeller($person)) {
      return "{$person} sells a mango!";
    } else {
      $searched[$person] = true;
      addToQueue($queue, $graph[$person]);
    }
  }

  return "Nobody sells a mango";
}

$graph["you"] = ["alice", "bob", "claire"];
$graph["bob"] = ["anuj", "peggy"];
$graph["alice"] = ["peggy"];
$graph["claire"] = ["thom", "jonny"];
$graph["anuj"] = [];
$graph["peggy"] = [];
$graph["thom"] = [];
$graph["jonny"] = [];

echo search("you", $graph);