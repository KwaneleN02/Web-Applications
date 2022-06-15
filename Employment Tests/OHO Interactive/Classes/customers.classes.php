<?php
include ('connection.classes.php');

class CustomerData extends DataConnection
{

    public function getCustomers()
    {
        // Query data from a dummy database
       $sql = 'SELECT customerName, customerOrder, orderPrice FROM Orders WHERE orderPrice > 200 ';
       $stmt = $this->connect()->prepare($sql);
       $stmt->execute();

        // This will print the results from the query
       while($result = $stmt->fetchAll())

       {
           print_r($result);
       }

    } 
}

// Instantiate a class
$printRecords = new CustomerData();
$printRecords->getCustomers();






