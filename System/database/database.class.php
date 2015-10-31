<?php
require_once '../interfaces/iDatabase.php';
class __CORE implements iDatabase
{
    private $init = [];
    protected $pdo;

    public function __set($name,$value)
    {
        return $this->init[$name] = $value;
    }

    public function connect()
    {
        try {
            $this->pdo = new PDO('mysql:host=' . $init['dsn'] . ';dbname' . $init['database'], $init['user'], $init['password']);
        } catch (PDOException $e)
        {
            echo 'Cannot connect to your database :';
            echo $e->getMessage();
            die();
        }
    }
}