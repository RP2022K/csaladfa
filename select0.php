<!--
File: select0.php
Author: Gyüre Árpád
Copyright: 2024, Gyüre Árpád
Group: Szoft II-1-E
Date: 2024-01-17
Github: https://github.com/RP2022K/csaladfa.git
Licenc: GNU GPL
-->

<?php
    include "home.php";

    echo '
    <div class="big">
	<div class="mid">
		<ul>
			<h1>Személyek kezelése</h1><br>
			<li><a href="select.php"><button class="btn">A család tagjainak neve</button></a></li>
			<li><a href="select_child.php"><button class="btn">A megadott személy gyerekei</button></a></li>
			<li><a href="select_parents.php"><button class="btn">A megadott személy szülei</button></a></li>
		</ul>
	</div>
	</div>';

?>