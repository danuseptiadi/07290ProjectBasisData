<?php
class Denda{
    private $p;
    function __construct()
    {
        $this->p = new database;
    }

    function getAll_Denda()
    {
    $data = $this->p->getAll('SELECT * FROM denda');
        
        return $data;
    }
}