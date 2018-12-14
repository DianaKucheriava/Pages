<?php session_start(); 
    header('Content-type: application/json');
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
    		$response_array['status'] = 'success';  
		}else {
   			$response_array['status'] = 'error';  
		}
	} else {
			$response_array['status'] = 'warning'; 
	}
	echo json_encode($response_array);
}
?>