<?php
  include ("bd.php");
    if (isset($_POST['submit'])) { //перевірка чи встановлені змінні
       $login = $_POST['login'];
       $password = $_POST['password'];
      $result=$link->query("SELECT * FROM users WHERE login='$login'");
        $user_data=$result->fetch_array(MYSQLI_ASSOC);
          if ($user_data['password'] == $password) {
         header("Location:home.php"); exit();}
    else {
         echo "<form id='errorReg'><b>Помилковий логін\пароль!</b></form>";} 
    }
 ?>
