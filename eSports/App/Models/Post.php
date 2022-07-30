<?php

// Loaded by the controller (Model);

class Post 
{
    private $db;

    public function __construct()
    {
       $this->db = new Database; 
    }

    public function  getResults()
    {
        $sql = "SELECT * FROM Gamers";
        $this->db->query($sql);

       return $this->db->resultSet(); //From Database Library. Then call this method from the Controller
    }
}