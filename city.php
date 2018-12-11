<?php
	include("bd.php");
	if (isset($_POST['id_region']) && !empty($_POST['id_region'])){
		$id_region = ($_POST['id_region']);
		$res=$link->query("SELECT * FROM city WHERE id_region=$id_region");
		$result=array();
			while ($row=$res->fetch_array(MYSQLI_BOTH)){
				$result[]=array('id_city'=>$row['id_city'], 'city'=>$row['city']);
			}
			echo json_encode($result);			
	} 