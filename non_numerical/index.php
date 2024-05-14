<?php 

$params = ['name' => 'Ashikur', 'email' => 'info.co.ashik@gmail.com'];

// $name   = $params['name'];
// $email  = $params['email'];

list('name' => $name, 'email' => $email) = $params;

var_dump($name, $email);