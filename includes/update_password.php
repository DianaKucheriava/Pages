<?php session_start();
	include("bd.php"); 
	$err = []; 
	$user_id=$_SESSION['user_id'];
	if (isset($_POST['update_password'])){  
	    $old_password = $_POST['old_password'];
	    $new_password = $_POST['new_password'];
		$result=$link->prepare("SELECT * FROM users WHERE password=? AND user_id=?");
	    $result->bind_param('ss', $old_password, $user_id);
	    $result->execute();
	    $user_data = $result->get_result()->fetch_array(MYSQLI_ASSOC);
	    if ($user_data['password'] == $old_password){
	        $update_passw=$link->query("UPDATE users SET password='$new_password' WHERE user_id='$user_id'");
	       	$err[]="Пароль успішно змінений!" ;
		}
	    else { 
	        $err[]="Ви ввели помилковий пароль !";
	    } 
	} 
?>