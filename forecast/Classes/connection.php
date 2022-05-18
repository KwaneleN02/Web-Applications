<?php

class Dbh 
{
  private $servername = "localhost";
  Private $username = "Kwanele";
  Private $password = "Wifeshandi@0207";
  private $dbName = 'Kwanele';

  protected function connect()
  {
    $dsn = 'mysql:host='. $this->servername. ';dbname='. $this->dbName;
    $pdo = new PDO($dsn, $this->username, $this->password);
    // Pull from database
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
  }
}
