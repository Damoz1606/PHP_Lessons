<?php

class Connection
{
    static public function Init_connection()
    {
        $link =  new PDO("mysql: host=localhost;dbname=curso_php;", "root", "");

        $link->exec("set names utf8");
        return $link;
    }
}
