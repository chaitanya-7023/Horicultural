<?php
header('Content-Type: application/json');

$crops = [
    ['name' => 'Tomato', 'price' => 2.5],
    ['name' => 'Cabbage', 'price' => 1.8],
    ['name' => 'Carrot', 'price' => 1.2],
    ['name' => 'Potato', 'price' => 0.9],
    ['name' => 'Onion', 'price' => 1.0]
];

echo json_encode($crops);
?>
