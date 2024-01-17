<!--
File: insert1.php
Author: Gyüre Árpád
Copyright: 2024, Gyüre Árpád
Group: Szoft II-1-E
Date: 2024-01-17
Github: https://github.com/RP2022K/csaladfa.git
Licenc: GNU GPL
-->

<?php
   include "home.php";
   
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "familytree";
   
   // Create connection
   $conn = new mysqli($servername, $username, $password, $dbname);
   // Check connection
   if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   }
   
   $name = $_REQUEST['name'];
   $birthdate = $_REQUEST['birthdate'];
   $birthplace = $_REQUEST['birthplace'];
   $mother = $_REQUEST['mother'];
   $father = $_REQUEST['father'];
   $deathdate = $_REQUEST['deathdate'];
   $deathplace = $_REQUEST['deathplace'];

   $sql = "SET @mother = (SELECT person_id FROM persons WHERE name = '" . $mother . "');";
   $sql .= "SET @father = (SELECT person_id FROM persons WHERE name = '" . $father . "');";

   $sql .= "INSERT INTO persons (name, birthdate, birthplace, mother_id, father_id, deathdate, deathplace)
           VALUES ('" . $name . "', '" 
                      . $birthdate . "', '" 
                      . $birthplace . "', @mother, @father, '" 
                      . $deathdate . "', '" 
                      . $deathplace . "')";
   
   // Execute multi query
if ($conn -> multi_query($sql)) {
  do {
    // Store first result set
    if ($result = $conn -> store_result()) {
      while ($row = $result -> fetch_row()) {
        printf("%s\n", $row[0]);
      }
     $result -> free_result();
    }
    // if there are more result-sets, the print a divider
    if ($conn -> more_results()) {
      printf("\n");
    }
     //Prepare next result set
  } while ($conn -> next_result());
}

   $conn->close();


?>