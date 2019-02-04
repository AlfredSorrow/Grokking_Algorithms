<?php

$graph['start']['a'] = 6;
$graph['start']['b'] = 2;
$graph['a']['fin'] = 1;
$graph['b']['a'] = 3;
$graph['b']['fin'] = 5;
$graph['fin'] = [];

$costs['a'] = 6;
$costs['b'] = 2;
$costs['fin'] = INF;

$parents['a'] = "start";
$parents['b'] = "start";
$parents['fin'] = null;

function findLowestCostsNode(array $costs, $processed)
{
  $minCost = INF;
  $minCostNode = null;
  foreach ($costs as $node => $cost) {
    if ($cost < $minCost && !array_key_exists($node, $processed)) {
      $minCost = $cost;
      $minCostNode = $node;
    }
  }

  return [$minCostNode, $processed];
}

function dijkstrasAlgorithm(array $graph, array $costs, array $parents){

$processed = [];
[$node, $processed] = findLowestCostsNode($costs, $processed);

while ($node !== null) {
  $cost = $costs[$node];
  $neighbors = $graph[$node];

  foreach ($neighbors as $key => $neighbor) {
    $newCost[$key] = $cost + $neighbor;
    if ($costs[$key] > $newCost[$key]) {
      $costs[$key] = $newCost[$key];
      $parents[$key] = $node;
    }
  }
  $processed[$node] = true;
  [$node, $processed] = findLowestCostsNode($costs, $processed);
}

return $costs;
}


print_r(dijkstrasAlgorithm($graph, $costs, $parents));
