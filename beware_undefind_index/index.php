<?php 

['host' => $host, 'query' => $query] = parse_url('http://codecourse.com?a=abc');

var_dump( $host, $query );