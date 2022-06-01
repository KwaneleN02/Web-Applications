<?php
require_once 'connection.php';
class Events extends Dbh
{

    public function addEvents($eventHeader, $eventBody, $eventDate)
    {
        $sql = " INSERT INTO events (`eventHeader`, `eventBody`, `eventDate`) VALUES(?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$eventHeader, $eventBody, $eventDate]);
    }


    public function allEvents()
    {
        $sql = 'SELECT * FROM events'; 
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute(); 

        while($result = $stmt->fetchAll())
        {
         return $result;
        }
    }

    public function deleteEvent($eventID)
    {
      $sql ="DELETE FROM events WHERE eventID=$eventID";   //Use Stored Procedures
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute();
    }

    public function executeStatements()
    {
        if(isset($_POST['create-event']))
        {
            $eventHeader = $_POST['event-header'];
            $eventBody = $_POST['event-body'];
            $eventDate = $_POST['event-date'];
            $this->addEvents($eventHeader, $eventBody, $eventDate);
        }

        if(isset($_GET['delete-event']))
        {
            $eventID = $_GET['delete-event'];
            $this-> deleteEvent($eventID);
        }
    }
}

$events = new Events();
