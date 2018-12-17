<?php session_start();
	include("bd.php"); 
	$er = []; 
	if (isset($_POST['update_login'])){  
		$user_id=$_SESSION['user_id'];
	    	$new_login = $_POST['new_login'];
	    	$password=$_POST['password'];
		$result=$link->prepare("SELECT * FROM users WHERE password=? AND user_id=?");
	    	$result->bind_param('ss', $password, $user_id);
	    	$result->execute();
	    	$user_data = $result->get_result()->fetch_array(MYSQLI_ASSOC);
	    	if ($user_data['password'] == $password){
	        	$update_login=$link->query("UPDATE users SET login='$new_login' WHERE password='$password'");
	       		$er[] = "Логін успішно змінений!" ;
		} 
			else { 
	        		$er[] = "Ви ввели помилковий пароль !";
	    		} 
	} 
?>
