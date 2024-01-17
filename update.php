<!--
File: update.php
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
   
   $id = 9;
   $name = "Jane Doe";
   $birthdate = "2000-01-01";
   $birthplace = "Detroit";
   $mother_id = 'NULL';
   $father_id = 'NULL';
   $deathdate = 'NULL';
   $deathplace = 'NULL';
   $child_id = 'NULL';

   $sql = "UPDATE persons SET name = '" . $name . "', 
                              birthdate =" . "'" . $birthdate . "', 
                              birthplace =" . "'" . $birthplace . "', 
                              mother_id =" . "'" . $mother_id . "', 
                              father_id =" . "'" . $father_id . "', 
                              deathdate =" . "'" . $deathdate . "', 
                              deathplace =" . "'" . $deathplace . 
          "WHERE person_id = '" . $id . "';";
   
   if ($conn->query($sql) === TRUE) {
     echo "Record updated successfully";
   } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
   }
   
   $conn->close();
?>