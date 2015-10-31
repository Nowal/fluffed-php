<?php
require 'database.class.php';

$db_info = [];

$db_info['dsn']       = 'localhost';
$db_info['database']  = 'database';
$db_info['user']      = 'root';
$db_info['password']  = '';

if(array_count_values($db_info) == 4)
{
    $db = new __CORE;
    foreach($db_info AS $key => $value)
    {
        $db->$key = $value; // Like a boss
    }
}
