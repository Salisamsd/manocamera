<?php

header('Content-Type: application/json');

$data = [
    [
        'id' => 1,
        'name' => 'fuji'
    ],
    [
        'id' => 2,
        'name' => 'sony'
    ],
    [
        'id' => 3,
        'name' => 'pana'
    ]
];

echo json_encode($data);