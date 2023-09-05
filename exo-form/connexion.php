<?php
$host = 'localhost';
$dbName = 'facebook_form_db';
$user = 'root';
$password = '';

$pdo = new PDO("mysql:host=$host;dbname=$dbName", $user, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);