<?php

$data = [
    1 => [
        'articleId' => "0001",
        'name' => 'Pantalla Acer',
        'image' => '/img/pantalla.png',
        'price' => 150,
        'description' => ''
    ],
    2 => [
        'articleId' => "0002",
        'name' => 'Pantalla Samsung',
        'image' => '/img/pantallaSamsung.png',
        'price' => 300,
        'description' => ''
    ],
    3 => [
        'articleId' => "0003",
        'name' => 'SSD SP',
        'image' => '/img/ssd.png',
        'price' => 100,
        'description' => ''
    ],
    4 => [
        'articleId' => "0004",
        'name' => 'SSD SanDisk 1Tb',
        'image' => '/img/ssd1tb.png',
        'price' => 130,
        'description' => ''
    ]
];

$articleId =  $_GET['articleId'] ??  null;

if ($articleId === null || false === isset($data[$articleId])) {
    http_response_code(404);
} else {
    header('Content-Type: application/json');
    echo json_encode($data[$articleId]);
}