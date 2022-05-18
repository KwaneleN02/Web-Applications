<?php
require_once 'connection.php';

class forecastDash extends Dbh
{
    public function getDash()
    {
        $sql = 'SELECT * FROM forecast';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();

    }

    public function getNewARR()
    {
        $sql = 'SELECT * FROM ARR';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
       
    }



}

$forecastStats = new forecastDash();

// put at the bottom
$output = new stdClass();              //Typecasting Objects 
$output->dash = $forecastStats->getDash();
$output->arr = $forecastStats->getNewARR();

print json_encode($output);