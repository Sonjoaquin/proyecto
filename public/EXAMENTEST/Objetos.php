<?php

//namespace Mini\Model;

use Mini\Core\Database;

Class Objeto
{
    public function todosObjetos()
    {
        $ssql = 'SELECT * FROM objetos';

        $query = $conn->prepare($ssql);

        $query->execute();

        return $query->fetchAll();
    }

    public static function insert($datos)
    {

    }
}
