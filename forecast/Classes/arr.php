<?php
require_once './Classes/connection.php';

class arr extends Dbh
{
    // Add new ARR
    function addArr($arr, $under, $over, $explanation)
    {
        $sql = "INSERT INTO ARR (arr, under, projectionover, explanation) VALUES(?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$arr, $under, $over, $explanation]);
    }


    public function removeArr($projectionID)
    {
      $sql =" DELETE FROM ARR WHERE projectionID=$projectionID ";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute();
    }


    // Display ARRS
    function getArr()
    {
        $sql = "SELECT *  FROM ARR";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        while($result = $stmt->fetchAll())
        {
            return $result;
        }
    }

    function executeArrStatements()
    {
        if(isset($_POST['projection-submit']))
        {
            $arr = htmlspecialchars( $_POST['new-arr'], FILTER_SANITIZE_NUMBER_INT);
            $under = htmlspecialchars( $_POST['under-arr'],FILTER_SANITIZE_NUMBER_INT );
            $over = htmlspecialchars( $_POST['over-arr'],FILTER_SANITIZE_NUMBER_INT );
            $explanation = htmlspecialchars( $_POST['reason'], FILTER_SANITIZE_NUMBER_INT);
            $this->addArr($arr, $under, $over, $explanation);
        }

        else if(isset($_GET['deleteprojectionID']))
       {
          $projectionID = $_GET['deleteprojectionID'];
          $this -> removeArr($projectionID);
          $this -> getArr();
       } 
    }
}

$projection = new arr();
