<!--
File: select_parents.php
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
   
   $child = "Kiss Alfons";

$sql = "SET @mother = (SELECT mother_id FROM persons WHERE name = 'Kiss Alfons');";
$sql .= "SET @father = (SELECT father_id FROM persons WHERE name = 'Kiss Alfons');";
$sql .= "SELECT '" . $child . " szülei';";
$sql .= "SELECT name FROM persons WHERE person_id = @mother;";
$sql .= "SELECT name FROM persons WHERE person_id = @father;";

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