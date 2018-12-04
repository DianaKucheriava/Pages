<?
    include("bd.php");
      if(isset($_POST['submit']))
          {
              $query = mysqli_query($link,"SELECT id, password FROM users WHERE login='".mysqli_real_escape_string($link,$_POST['login'])."' LIMIT 1");
              $data = mysqli_fetch_assoc($query);
             if($data['password'] === ($_POST['password']))
                  {
                    header("Location:home.php"); exit();
                  }
              else
                  {
                    echo "<form id='errors'>Ви введи неправильний логін/пароль</form>";
                  }
          }
?>