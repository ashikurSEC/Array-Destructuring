<?php 

$params = [null, 10, null, 20];

[, $x, ,$y, ] = $params; // Skipping (,) null 

var_dump($x, $y);