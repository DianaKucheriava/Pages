<?php session_start(); 
include("bd.php");
if(empty($_POST['js'])){
	if($_POST['message'] != '' && $_SESSION["user_id"] != ''){
		$user_id = $_SESSION["user_id"];
		$message = $_POST['message'];
		$date = date('Y-m-d H:i:s'); 
		$result = $link->prepare("INSERT INTO comments (user_id, text_comment, date) VALUES (?,?,?)");
		$result->bind_param('sss', $user_id, $message, $date);
		$result->execute();
		if($result == true){
			$success=true;
    		$message = 'Ваше повідомлення відправлено';  
		}else if($result == false){
			$success=false;
   			$message = 'Повідомлення не відправлено Помилка БД';  
		}
	} else {
			$success = false; 
			$message = 'Не можна відправляти порожні повідомлення!';  
	}
	$result=array("message" => $message, "success" => $success);
	echo json_encode($result);
}
?>
