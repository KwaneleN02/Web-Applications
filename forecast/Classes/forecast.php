<?php
require_once 'connection.php';


class forecasts extends Dbh
{
    // Gets all forecast records
    public function getForecast()
    {
        $sql = "SELECT * FROM forecast";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        while($result = $stmt->fetchAll())
        {
            return $result;
        }
    }


    // Creates forecast record
    public function addForecast($forecastdate, $atr, $onCall, $actualRenewalRate, $totalForecast, $month)
    {
        $sql = 'INSERT INTO forecast(forecastdate, atr, oncall, actualrenewalrate, totalforecast, forecastmonth) VALUES(?, ?, ?, ?, ?, ?)';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$forecastdate, $atr, $onCall, $actualRenewalRate, $totalForecast, $month]);
    }


    // Deleting forecast

    public function removeForecast($forecastID)
    {
      $sql ="DELETE FROM forecast WHERE forecastID=$forecastID";   //Use Stored Procedures
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute();
    }

    
    // Method to execute all queries
    public function executeStatements()
    {
        // Instantiate Queries

        if(isset($_POST['forecast-submit']))
            {
                 $forecastdate = htmlspecialchars($_POST['forecastdate'], FILTER_SANITIZE_NUMBER_INT);
                 $atr = htmlspecialchars( $_POST['atr'], FILTER_SANITIZE_NUMBER_INT);
                 $onCall = htmlspecialchars($_POST['oncall'], FILTER_SANITIZE_NUMBER_INT);
                 $actualRenewalRate = htmlspecialchars($_POST['actualrenewal'], FILTER_SANITIZE_NUMBER_INT);
                 $totalForecast = htmlspecialchars($_POST['totalforecast'], FILTER_SANITIZE_NUMBER_INT);
                 $totalForecast = $atr/$actualRenewalRate;
                 $month = htmlspecialchars($_POST['currentmonth'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                 $month = date('M');
                 $this -> addForecast($forecastdate, $atr, $onCall, $actualRenewalRate, $totalForecast, $month);
            }

      else if(isset($_GET['deleteid']))
       {
           $forecastID = $_GET['deleteid'];
           $this -> removeForecast($forecastID);
       }

         
    }


    public function emptyValues()
    {
        
    }



}



$forecasts = new forecasts();            //Executes all queries    
$forecasts->executeStatements(); 
