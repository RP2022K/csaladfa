<!--
File: connection.php
Author: Gyüre Árpád
Copyright: 2024, Gyüre Árpád
Group: Szoft II-1-E
Date: 2024-01-17
Github: https://github.com/RP2022K/csaladfa.git
Licenc: GNU GPL
-->

<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password);
  
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
?>