<?php
require_once '../interfaces/iDatabase.php';
class __CORE implements iDatabase
{
    protected $pdo,$dsn,$database,$user,$password;

    public function __set($name,$value)
    {
        return $this->$name = $value;
    }

    public function __CONSTRUCT()
    {
        $this->connect();
    }

    public function connect()
    {
        try {
            $this->pdo = new PDO('mysql:host=' . $this->dsn. ';dbname' . $this->database, $this->user, $this->password);
        } catch (PDOException $e)
        {
            echo 'Cannot connect to your database :';
            echo $e->getMessage();
            die();
        }
    }

    public function __sleep()
    {
        return ['dsn','database','user','password'];
    }

    public function __wakeup()
    {
        $this->connect();
    }
}