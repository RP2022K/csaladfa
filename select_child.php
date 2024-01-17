<!--
File: select_child.php
Author: Gyüre Árpád
Copyright: 2024, Gyüre Árpád
Group: Szoft II-1-E
Date: 2024-01-17
Github: https://github.com/RP2022K/csaladfa.git
Licenc: GNU GPL
-->

<?php
  include "home.php";

  echo "<h3 style='text-align: center'>Gyerekek Listája</h3>";

echo '
  <form action="select_child.php" method="post">
            <p>
               <label for="name">Szülő neve :</label>
               <input type="text" name="name" id="name">
            </p>
            <input type="submit" value="Kérés">
</form>';


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
   
   $parent = $_POST['name'];

   $sql = "SELECT person_id, name, mother_id, father_id 
           FROM persons 
           WHERE father_id = (SELECT person_id FROM persons WHERE name = '" . $parent . "')
           OR mother_id = (SELECT person_id FROM persons WHERE name = '" . $parent . "')";

   $result = $conn->query($sql);
   
   if ($result->num_rows > 0) {
     // output data of each row
     echo $parent . "  gyerekei : ";
     while($row = $result->fetch_assoc()) {
       echo $row["name"] . " ,   ";
     }
   } else {
     echo $parent . " : nincs gyermeke vagy nincs felvéve az adatbázisba";
   }
   $conn->close();
?>