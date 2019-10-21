<?php
$servername = "localhost";
$username = "millet";
$password = "millet69!";

try {
    $bdd = new PDO("mysql:host=$servername;dbname=millet", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}