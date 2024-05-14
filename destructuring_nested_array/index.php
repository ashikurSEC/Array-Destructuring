<?php 

$user = [
    'username'  => 'ashikurrrahman',
    'password'  => '1234',

    'address' => [
        'past'      =>['village' => 'Jogonnathpur', 'Thana' => 'Chatmohar', 'Distric' => 'Pabna'],
        'present'   => 'Mirpur-10, Kazipara'
    ]
];

// $username = $user['username'];
// $password = $user['password'];
// $address  = $user['address']['past'];

[
    'username'  => $username,
    'password'  => $password,
    'address'   => [
        'present'  => $address,
    ],
] = $user;


var_dump( $username, $password, $address );
