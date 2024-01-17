<!--
File: insert.php
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

<form action="insert1.php" method="post">
            <p>
               <label for="name">Name:</label>
               <input type="text" name="name" id="name">
            </p>
            <p>
               <label for="birthdate">Születési idő:</label>
               <input type="text" name="birthdate" id="birthdate">
            </p>
            <p>
               <label for="birthplace">Születési hely:</label>
               <input type="text" name="birthplace" id="birthplace">
            </p>
            <p>
               <label for="mother">Anyja neve:</label>
               <input type="text" name="mother" id="mother">
            </p>
            <p>
               <label for="father">Apja neve:</label>
               <input type="text" name="father" id="father">
            </p>
            <p>
               <label for="deathdate">Halálozási idő:</label>
               <input type="text" name="deathdate" id="deathdate">
            </p>
            <p>
               <label for="deathplace">Halálozás helye:</label>
               <input type="text" name="deathplace" id="deathplace">
            </p>
            <input type="submit" value="Submit">
</form>
