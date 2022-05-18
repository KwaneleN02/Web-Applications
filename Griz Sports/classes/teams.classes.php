<?php
require_once 'connection.php';

class Gamers extends Dbh
{
    // Dynamically create new teams
    public function addTeams($firstname, $lastname, $gamertag, $game, $gamerstats)
    {
        $sql = " INSERT INTO Gamers(`Firstname`, `Lastname`, `Gamertag`, `Game`, `GamerStats`) VALUES(?,?,?,?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstname, $lastname, $gamertag, $game, $gamerstats]);
    }

    public function allTeams()
    {
        $sql = "SELECT * FROM Gamers";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        while($result = $stmt->fetchAll())
        {
         return $result;
        }
    }

    public function deleteGamer($gamerID)
    {
      $sql ="DELETE FROM Gamers WHERE gamerID=$gamerID";   //Use Stored Procedures
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute();
    }


    public function executeAllStatements()
    {
        if(isset($_POST['create-team']))
        {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $gamertag = $_POST['gamertag'];
            $game = $_POST['game'];
            $gamerstats = $_POST['gamerStats'];
            $this->addTeams($firstname, $lastname, $gamertag, $game, $gamerstats);
        }

        if(isset($_GET['deleteid']))
        {
            $gamerID = $_GET['deleteid'];
            $this-> deleteGamer($gamerID);
        }
    }
}

$teams = new Gamers();