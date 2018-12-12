<?php include("bd.php");
if(empty($_POST['js'])){
	if($_POST['message'] != '' && $_POST['name'] != ''){
		$name =  $_POST['name'];
		$message =  $_POST['message'];
		$date = date('Y-m-d H:i:s'); 
		$result = $link->prepare("INSERT INTO comments (login, text_comment, date) VALUES (?,?,?)");
		$result->bind_param('sss', $name, $message, $date);
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