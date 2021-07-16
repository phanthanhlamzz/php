<?php
header('Content-type: application/json');

$array = [];
if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $array = [
      "foo" => "bar",
      "bar" => "foo",
  ];
}

echo json_encode($array);
 ?>
