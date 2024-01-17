<!--
File: createTable.php
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
    $dbname = "familytree";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    // sql to create table
    $sql = 'CREATE TABLE IF NOT EXISTS persons (
        person_id INTEGER PRIMARY KEY,
        name VARCHAR (80),
        birthdate DATE,
        birthplace VARCHAR (40),
        mother_id INTEGER,
        father_id INTEGER,
        deathdate DATE,
        deathplace VARCHAR (40)
        FOREIGN KEY (mother_id)
        REFERENCES persons(mother_id))';
    
    if ($conn->query($sql) === TRUE) {
      echo "Table MyGuests created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }
    
    $conn->close();
?>