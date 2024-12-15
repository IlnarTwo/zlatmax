<?php

    //PDO
    try {
        $conn = new PDO("mysql:host=MySQL-8.2; dbname=zlatmax", "root", "");        
    }
    catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
    }

    //mysqli
    try
    {
        $db = new mysqli('MySQL-8.2', 'root','','zlatmax','3306');
    }
    catch (Exception $ex)
    {
        echo "Ошибка: ".$ex->getMessage();
    }
    
?>
