<?php
// DATABASE CONNNECTION INFORMATION
// set the default connection values.
$host = "localhost"; // use 127.0.0.1:8889 if you're not using port 3306
$dbname = "ag_capstone";
$username = "root";
$password = "root";
//'pbcs.us'
if($_SERVER['HTTP_HOST'] == 'agit1solution.com'){  

$host = "localhost"; // use 127.0.0.1:8889 if you're not using port 3306
$dbname = "agordon_capstone";
$username = "agordon_root";
$password = "AGcapstonepass11!";

}

// Try to connect to the DB server and select a specific DB:
try {
    // PDO database functions go here: connect, query, etc important you need three if three display is needed on one page instant etc.
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $db_two = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);  //ag added to display our differen querys to test
    $db_three = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);//ag added to display our differen querys
    $db_agent = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);//ag added to display our differen querys

    //for password authorization
  
    //for password authorization

} catch (PDOException $e) {
    echo $e->getMessage();

    exit(); // Optional, but probably a good idea if things have failed
    }


    