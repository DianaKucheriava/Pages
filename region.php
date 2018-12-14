<?php
include("bd.php");
if (isset($_POST['id_country']) && !empty($_POST['id_country'])){
	$id_country = ($_POST['id_country']);
	$result = array();
	$res=$link->prepare("SELECT * FROM region WHERE id_country=?");
	$res->bind_param('s', $id_country);
	$res->execute();
	$ress=$res->get_result();
	while ($row = $ress->fetch_array(MYSQLI_BOTH)){
		$result[]=array('id_region'=>$row['id_region'], 'region'=>$row['region']);
	}
	echo json_encode($result);
}
?>	
