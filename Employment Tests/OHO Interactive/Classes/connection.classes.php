<?php
class DataConnection
{
  private $servername = "localhost";
  Private $username = "yourUsername";
  Private $password = "yourPassword";
  private $dbName = 'databaseName';

  protected function connect()
  {
    $dsn = 'mysql:host='. $this->servername. ';dbname='. $this->dbName;
    $pdo = new PDO($dsn, $this->username, $this->password);
    // Pull from database
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
  }
}
