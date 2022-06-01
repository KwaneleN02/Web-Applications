<?php
require_once 'connection.php';

class FeaturedGames extends Dbh
{
    public function addGame($game)
    {
        $sql = " INSERT INTO games (`game`) VALUES(?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$game]);
    }


    public function allGames()
    {
        $sql = 'SELECT * FROM games'; 
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute(); 

        while($result = $stmt->fetchAll())
        {
         return $result;
        }
    }

    public function deleteEvent($gameID)
    {
      $sql = "DELETE FROM games WHERE gameID=$gameID";   //Use Stored Procedures
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute();
    }

    public function executeStatements()
    {
        if(isset($_POST['add-game']))
        {
            $game = htmlspecialchars($_POST['game']);
            $this->addGame($game);
        }

        if(isset($_GET['delete-game']))
        {
            $gameID = $_GET['delete-game'];
            $this-> deleteEvent($gameID);
        }
    }
}

$getGames = new FeaturedGames();

