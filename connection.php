<?php
class DB
{
    public $db;

    public function __construct()
    {
        try {
            $this->db = new PDO(
                'mysql:host=localhost;dbname=mvc',
                'admin',
                'welcome'
            );
        }
        catch (PDOException $e)
        {
            die($e->getTrace());
        }
    }
}