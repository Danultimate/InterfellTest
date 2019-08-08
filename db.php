<?php
$dsn = 'mysql:host=localhost;dbname=phpcrud';
$username = 'root';
$password = 'root';
$options = [];
try {
$connection = new PDO($dsn, $username, $password, $options);
} catch(PDOException $e) {

}