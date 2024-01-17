<!--
File: select.php
Author: Gyüre Árpád
Copyright: 2024, Gyüre Árpád
Group: Szoft II-1-E
Date: 2024-01-17
Github: https://github.com/RP2022K/csaladfa.git
Licenc: GNU GPL
-->

<?php
  include "home.php";
?>

<?php

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
   
   $sql = "SELECT * FROM persons";
   $result = $conn->query($sql);
   

?>

<div class="container">
  <table class="table table-bordered text-center">
    <tr>
      <td>Név</td>
      <td>Szül.hely</td>
      <td>Szül.idő</td>
      <!--<td>Anyja neve</td>
      <td>Apja neve</td>-->
      <td>Halálozás ideje</td>
      <td>Halálozás helye</td>
    </tr>
    <tr>
      <?php
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo "<tr>
                  <td>" . $row["name"] . "</td>",
                 "<td>" . $row["birthplace"] . "</td>",
                 "<td>" . $row["birthdate"]. "</td>",
                 //"<td>" . $row["mother_id"]. "</td>",
                 //"<td>" . $row["father_id"]. "</td>",
                 "<td>" . $row["deathdate"]. "</td>",
                 "<td>" . $row["deathplace"]. "</td>,
                 </tr>";
          }
        } else {
          echo "0 results";
        }
        $conn->close();
      ?>
    </tr>
  </table>
</div>
