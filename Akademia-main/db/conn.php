<?php
    $dbHost     = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName     = "academia";

    $conn = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUsername, $dbPassword);

    $link = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if ($link->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    // define('HOST', 'localhost');
    // define('USER', 'root');
    // define('PASS', '');
    // define('DBNAME', 'akademia');
    // define('PORT', '3306');

    // try{
    //     $conn = new pdo('mysql:host=' . HOST . ';port=' . PORT . ';dbname=' . DBNAME, USER, PASS);

    // } catch(exception $err){
    //     echo("<p>Erro ao conectar!" . $err->getCode() . "</p>");
    // }
?>