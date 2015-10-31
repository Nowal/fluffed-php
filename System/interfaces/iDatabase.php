<?php
interface iDatabase
{
    public function connect();
    public function __set($name,$value);
}