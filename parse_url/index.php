<?php 

// $url = parse_url('http://codecourse.com');

// $host = $url['host'];

// var_dump( $url );
// echo "<br>";
// var_dump( $host );


['host' => $host] = parse_url('http://codecourse.com');

var_dump( $host );