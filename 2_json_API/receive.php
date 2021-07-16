<?php // read the incoming POST body (the JSON)
$input = file_get_contents('php://input');
//https://www.php.net/manual/en/wrappers.php.php
// decode/unserialize it back into a PHP data structure
$data = json_decode($input);
//echo $data;
//printf($input);
print_r($data);
// $data is now the same thing it was line 1 of your given sample code
?>
