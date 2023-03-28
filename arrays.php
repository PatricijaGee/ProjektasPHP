<?php
$numbers = [1, 44, 55, 22];
$fruits = array('apple', 'orange', 'pear');

//print_r($numbers);
//var_dump($numbers);
//echo $fruits[1];

$colors = [
    1 => 'red',
    4 => 'blue',
    6 => 'green',
];

//echo $colors[4];

$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f'
];

//echo $hex['blue'];

$person = [
    'first_name' => 'patricija',
    'last_name' => 'gust',
    'email' => 'kauf@jdksbfdjs.vom'
];

echo $person['first_name'];

$people = [
    [
        'first_name' => 'patricija',
    'last_name' => 'gust',
    'email' => 'kauf@jdksbfdjs.vom'
    ],
    [
        'first_name' => 'pat',
    'last_name' => 'gust',
    'email' => 'kauf@jdksbfdjs.vom'
    ],
    [
        'first_name' => 'patri',
    'last_name' => 'gust',
    'email' => 'kauf@jdksbfdjs.vom'
    ]
    ];

    echo $people[1]['email'];

    var_dump(json_encode($people));

    ?>