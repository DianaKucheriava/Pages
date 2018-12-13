<?php include("bd.php");
	if(empty($_POST['js'])){
		if($_POST['message'] != '' && $_POST['id'] != ''){
			$id=$_POST['id'];
			$message =  $_POST['message'];
			$date = date('Y-m-d H:i:s'); 
			$result = $link->prepare("INSERT INTO comments (id, text_comment, date) VALUES (?,?,?)");
			$result->bind_param('sss', $id, $message, $date);
			$result->execute();
			echo json_encode(array('Ваше повідомлення відправлено' => $success, 'Повідомлення не відправлено Помилка БД' => $success, 'Неможна відправляти порожні повідомлення' => $success)); 
		}
	}
?>