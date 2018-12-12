<?php
	include("bd.php");
	if (isset($_POST['id_region']) && !empty($_POST['id_region'])){
		$id_region = ($_POST['id_region']);
		$result=array();
		$res=$link->prepare("SELECT * FROM city WHERE id_region=?");
		$res->bind_param('s', $id_region);
		$res->execute();
		$ress=$res->get_result();
			while ($row=$ress->fetch_array(MYSQLI_BOTH)){
				$result[]=array('id_city'=>$row['id_city'], 'city'=>$row['city']);
			}
			echo json_encode($result);			
	} 

