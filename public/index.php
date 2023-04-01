<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Hello;

$result = new Hello;
echo $result->talk();

?>