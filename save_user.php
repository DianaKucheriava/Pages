<?php
    include("bd.php");
        if(isset($_POST['submit'])){
                $err = [];
           if(!preg_match("/^[a-zA-Z0-9]+$/",$_POST['login']))//перевірка по шаблону для логіну
           {
               $err[] = "Логін може складатись лише з букв англійського алфавіту та цифр!";
           }
                    if(strlen($_POST['login']) < 3 or strlen($_POST['login']) > 30) //перевірка чи логін від 3 до 30 символів
                    {
                $err[] = "Логін не повинен бути меньше 3-х символів і не більше 30";}
                $result = $link->query("SELECT id FROM users WHERE login='".$mysqli->affected_rows['login']."'");
                $row_cnt = $result->num_rows;

                             if($row_cnt > 0)
                             {
                                $err[] = "Користувач з таким логіном вже існує в базі даних!";
                            }
                                    if(count($err) == 0){
                                        $login = $_POST['login'];
                                        $password = $_POST['password'];
                                        $stmt=$link->prepare("INSERT INTO users SET login=(?), password=(?)");
                                        $stmt->bind_param('ss', $login, $password);
                                        $stmt->execute();
                                       // $link->query("INSERT INTO users SET login='".$login."', password='".$password."'");
                                        header("Location:index.php"); exit();
                            }
                                else{
                                        echo  "<form id='errorSave'><b>При реєстрації відбулись наступні помилки:</b><br>";
                                        foreach($err AS $error){
                                        echo $error."<br></form>";}
                                    }
         }
?>
