<?php

include "listhelper.php";
include "header.php";

$obj = new Laxman();
for($i=1;$i<5;$i++) {
	switch ($i) {
		case '1':
			$t = "< 400";
			break;
		case '2':
			$t = "Between 401 AND 800";
			break;
		case '3':
			$t = "Between 801 AND 1200";
			break;
		case '4':
			$t = "> 1200";
			break;
		
		default:
			# code...
			break;
	}

	echo "<div class='row' style='background-color:white'>";

	$res = $obj->getlist('cities', 'city_id '.($t).'');
	echo "<div class='col-lg-3'>";
	while($row = mysqli_fetch_assoc($res)) {
		echo "<ul>
			<li>".$row['city_name']."</li>
		</ul>";
	}
	echo "</div>";
	}
	echo "</div>";
	?>
<style>
	li {
		font-weight: 600;
		color: #3F4E65;
	}
</style>