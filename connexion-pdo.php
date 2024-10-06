<?php

try {
    $pdoConnect = new PDO("mysql:host=localhost;dbname=maktaba", "root", "");
    
} catch (PDOException $e) {
    echo $e->getMessage();
    exit();
}


?>