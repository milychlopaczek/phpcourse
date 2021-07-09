<?php
$host = 'db';
$db   = 'air_pup';
$user = 'root';
$password = 'tgyfvaeohqugfteqr';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host; port=3306; dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];