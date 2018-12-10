<?php
include("bd.php");
if (isset($_POST['id_region']) && !empty($_POST['id_region'])){
	$id_region = ($_POST['id_region']);
	$result=$link->query("SELECT * FROM city WHERE id_region=$id_region");
	echo "<select class='city' name='city'>";
	while ($row=$result->fetch_array(MYSQLI_BOTH)){
echo "<option value='{$row['id_city']}'>".$row['city']."</option>";
			}
			echo "</select>";
} else { 
	echo "<select name='city' disabled><option value='0'>------Оберіть місто-------</option></select>";}

?> 
