<?php
$dsn = 'mysql:host=db4free.net;port=3306;dbname=phpcrud_1';
$username = 'interfell';
$password = 'interfell';
$options = [];
try {
$connection = new PDO($dsn, $username, $password, $options);
} catch(PDOException $e) {

}