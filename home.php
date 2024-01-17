<!--
File: home.php
Author: Gyüre Árpád
Copyright: 2024, Gyüre Árpád
Group: Szoft II-1-E
Date: 2024-01-17
Github: https://github.com/RP2022K/csaladfa.git
Licenc: GNU GPL
-->

<?php

include "head.php";
?>
<body>
	<nav>
		<input type="checkbox" id="check">
		<label for="check" class="checkbtn"><i class="fas fa-bars"></i> </label>
		<label class="logo"><a href="home.php">Home</a></label>
		<label class="about"><a href="#">About</a></label>
		<ul>

			<li><p class="logo" href="#">Családfa</p></li>
			<!--<li><a href="#">Személyek</a></li>
			<li><a href="#">Családok</a></li>-->
			<li><a class="collapsible" type="button" href="events.php">Események</a></li>
			
		

		</ul>
	</nav><br>
	
</body>