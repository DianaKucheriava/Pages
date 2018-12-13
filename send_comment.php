<?php session_start();
	include("bd.php"); 
	if(empty($_POST['js'])){
		if($_POST['message'] != '' && $_SESSION["id"] != ''){
			$id = $_SESSION["id"];
			$message =  $_POST['message'];
			$date = date('Y-m-d H:i:s'); 
			$result = $link->prepare("INSERT INTO comments (id, text_comment, date) VALUES (?,?,?)");
			$result->bind_param('sss', $id, $message, $date);
			$result->execute();
			if($result == true){
				echo 0; 
			}else{
				echo 1; 
			}
		}else{
				echo 2; 
		}	
	}
?>
