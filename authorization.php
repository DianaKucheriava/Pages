<?php
 session_start();
  include ("bd.php");
  if (isset($_POST['submit'])){  
        $err = [];
        $login = $_POST['login'];
        $password = $_POST['password'];
        $result=$link->prepare("SELECT * FROM users WHERE login=? AND password=?");
        $result->bind_param('ss', $login, $password);
        $result->execute();
        $user_data = $result->get_result()->fetch_array(MYSQLI_ASSOC);
    if ($user_data['password'] == $password){
        $_SESSION['login']=$user_data['login'];
        $_SESSION['user_id']=$user_data['user_id'];
        header("Location:home.php"); 
        exit();
    }
    else { 
        $err[]="Помилковий логін\пароль !";
    } 
  } 
?>