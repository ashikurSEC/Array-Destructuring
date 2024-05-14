<?php 

// ['host' => $host, 'query' => $query] = array_merge(['query' => null],parse_url('http://codecourse.com?a=abc'));


// ['host' => $host, 'query' => $query] = parse_url('http://coudecourse.com?q=abc') + ['query' => null];

$defaults = [
    'query' => null
];

['host' => $host, 'query' => $query] = parse_url('http://coudecourse.com?a=abc') + $defaults;

var_dump( $host, $query );