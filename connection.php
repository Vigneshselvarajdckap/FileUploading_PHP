<?php

try{
    $pdo = new PDO
    (
        'mysql:host=127.0.0.1;dbname=file_uploading',
        'root',
        'welcome'
    );
}

catch (Exception $e){
    die($e->getMessage());
}