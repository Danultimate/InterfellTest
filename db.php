<?php
$dsn = 'mysql:host=https://db4free.net;dbname=phpcrud_1';
$username = 'interfell';
$password = 'interfell';
$options = [];
try {
$connection = new PDO($dsn, $username, $password, $options);
} catch(PDOException $e) {

}