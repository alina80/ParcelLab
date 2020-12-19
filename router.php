<?php

    //Load all class
    require __DIR__ . '/config.php';
  //  require __DIR__ . '/class/database/DBmysql.php';

    $response = [];
    //connect to DB
    try {
        $conn = new DBmysql();
    } catch (PDOException $e) {
        $response = ['error' => 'DB Connection error: '.$e->getMessage()];
    }