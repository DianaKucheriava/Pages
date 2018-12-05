<?php
  include ("bd.php");
    if (isset($_POST['submit'])) {
       $login = $_POST['login'];
       $password = $_POST['password'];
       $query = mysqli_query($link,"SELECT * FROM users WHERE login='$login'");
       $user_data= mysqli_fetch_array($query);
              if ($user_data['password'] == $password) {
                   header("Location:home.php"); exit();}
                      else {
                         echo "<form id='errorReg'><b>Помилковий логін\пароль!</b></form>";} 
    }
 ?>