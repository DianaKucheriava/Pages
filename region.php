<?php
	include("bd.php");
	if (isset($_POST['id_country']) && !empty($_POST['id_country'])){
		$id_country = ($_POST['id_country']);
		$res=$link->query("SELECT * FROM region WHERE id_country=$id_country");
		$result = array();
		while ($row=$res->fetch_array(MYSQLI_BOTH)){
			$result[]=array('id_region'=>$row['id_region'], 'region'=>$row['region']);
		}
		echo json_encode($result);
	}
?>	