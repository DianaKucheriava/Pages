<?php
	$result=$link->query("SELECT * FROM country");
	while ($row=$result->fetch_array(MYSQLI_BOTH)){
	echo "<option value='{$row['id_country']}'>".$row['country']."</option>";
	}
?>	