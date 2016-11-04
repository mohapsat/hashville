<?php


$hash_method = trim($_POST['hash_method']);
$salt = trim($_POST['salt']);
$expr = trim($_POST['expr']);
$response_type = trim($_POST['response_type']);

$expr = trim($expr.$salt);
$time = microtime(true);
$hash = hash($hash_method, $expr, false);
$time = microtime(true) - $time;
// $time = $time * 1000000000; //in microseconds
$hash_length = strlen($hash);

$result = array(
  'expression'    => $expr
  ,'salt'         => $salt
  ,'hash_method'  => $hash_method
  ,'length'       => $hash_length
  ,'hash'         => $hash
  ,'time_taken'   => $time
  ,'response_type'=> $response_type
);

if($response_type == 'json') {
  print_r(json_encode($result, true));
} elseif ($response_type == 'array') {
  print_r($result);
} else {
  echo "EXPRESSION = $hash\n";
  echo "SALT = $salt\n";
  echo "HASH_METHOD = $hash_method\n";
  echo "LENGTH = $hash_length\n";
  echo "HASH = $hash\n";
  echo "TIME_TAKEN = $time\n";
  echo "RESPONSE_TYPE = $response_type\n";
}

// print_r(json_encode($result));

 ?>
