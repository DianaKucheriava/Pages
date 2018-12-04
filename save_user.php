<?
    include("bd.php");
    if(isset($_POST['submit']))
                {
                    $err = [];
                    if(!preg_match("/^[a-zA-Z0-9]+$/",$_POST['login']))
                        {
                            $err[] = "Логін може складатись лише з букв англійського алфавіту та цифр!";
                        }
                    if(strlen($_POST['login']) < 3 or strlen($_POST['login']) > 30)
                        {
                            $err[] = "Логін не повинен бути меньше 3-х символів і не більше 30";
                        }
                            $query = mysqli_query($link, "SELECT id FROM users WHERE login='".mysqli_real_escape_string($link, $_POST['login'])."'");
                    if(mysqli_num_rows($query) > 0)
                        {
                            $err[] = "Користувач з таким логіном вже існує в базі даних!";
                        }
                    if(count($err) == 0)
                        {
                                $login = $_POST['login'];
                                $password = $_POST['password'];
                            mysqli_query($link,"INSERT INTO users SET login='".$login."', password='".$password."'");
                            header("Location:index.php"); exit();
                       }
                    else
                        {
                           print "<form id='errors'><b>При реєстрації відбулись наступні помилки:</b><br>";
                             foreach($err AS $error)
                                {
                                   print $error."<br></form>";
                                }
                        }
                }
?>