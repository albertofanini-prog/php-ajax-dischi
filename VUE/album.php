<?php
    include __DIR__ . '/database.php';

    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');

    echo json_encode( $albums );
?>