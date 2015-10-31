<?php
require 'database.class.php';

$dsn = 'localhost';
$database = 'database';
$user = 'root';
$password = '';

$db = new __CORE;
$db->dsn = $dsn;
$db->database = $database;
$db->user = $user;
$db->password = $password;


