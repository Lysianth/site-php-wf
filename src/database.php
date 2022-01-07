<?php

    $database = new PDO('mysql:host=localhost;dbname=php_ddb', 'root', '');

    //CRUD
    function getAll($database,$table) :array
    {
        $sql="SELECT * FROM `experiences`";
        $result= [];
    //debug($database->query($sql));
        foreach ($database->query($sql) as $row) {
        //debug($value ["title_experience"]);
            $result[] = $row;
         }
         return $result;
    }