<?php
require_once 'connection.php';

class About extends Dbh
{
    public function addContent($title, $slogan, $bodyHeader, $paragraph )
    {
        $sql = " INSERT INTO about (`title`, `slogan`, `bodyHeader`, `paragraph`) VALUES(?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$title, $slogan, $bodyHeader, $paragraph]);
    }


    public function aboutContent()
    {
        $sql = 'SELECT * FROM about'; 
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute(); 

        while($result = $stmt->fetchAll())
        {
         return $result;
        }
    }

    public function deleteEvent($contentID)
    {
      $sql = "DELETE FROM about WHERE contentID=$contentID";   //Use Stored Procedures
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute();
    }

    public function executeStatements()
    {
        if(isset($_POST['add-content']))
        {
            $title = htmlspecialchars($_POST['title']);
            $slogan = htmlspecialchars($_POST['slogan']);
            $bodyHeader = htmlspecialchars($_POST['body-header']);
            $paragraph = htmlspecialchars($_POST['paragraph']);
            $this->addContent($title, $slogan, $bodyHeader, $paragraph);
        }

        if(isset($_GET['delete-content']))
        {
            $contentID = $_GET['delete-content'];
            $this-> deleteEvent($contentID);
        }
    }
}

$getAbout = new About();

