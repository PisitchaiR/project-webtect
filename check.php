<?php
$data = [
    'type' => $_POST['type'],
    'sex' => $_POST['sex']
];

echo json_encode($data);
