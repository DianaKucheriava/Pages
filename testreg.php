<?php
  include ("bd.php");
   if (isset($_POST['submit'])){  
       $err = [];
       $login = $_POST['login'];
       $password = $_POST['password'];
       $result=$link->prepare("SELECT * FROM users WHERE login=?");
       $result->bind_param('s', $login);
       $result->execute();
       $user_data = $result->get_result()->fetch_array(MYSQLI_ASSOC);
          if ($user_data['password'] == $password){header("Location:home.php"); exit();
          }
            else { $err[]="Помилковий логін\пароль !"; } 
   } 
?>