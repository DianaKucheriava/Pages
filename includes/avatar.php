<?php session_start();
	include("bd.php");
		$id_user=$_SESSION['user_id'];
		$avatar=$link->prepare("SELECT img_src FROM users WHERE user_id =? "); 
		$avatar->bind_param('s', $id_user);
		$avatar->execute();
		$ava = $avatar->get_result()->fetch_array(MYSQLI_ASSOC);
?>