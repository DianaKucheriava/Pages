<?php
if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } 
if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
if (empty($login) or empty($password)) 
{
exit ("Ви ввели не всю інформацію, поверніться назад і заповніть всі поля!");
}
$login = stripslashes($login);
$login = htmlspecialchars($login);
$password = stripslashes($password);
$password = htmlspecialchars($password);
$login = trim($login);
$password = trim($password);
include ("bd.php"); 
$result = mysqli_query($link, "SELECT id FROM users WHERE login='$login'");
$myrow = mysqli_fetch_array($result);
if (!empty($myrow['id'])) {
exit ("Вибачте, логін що Ви ввели вже зареєстрований. Введіть інший логін.");
}
$result2 = mysqli_query ($link, "INSERT INTO users (login, password) VALUES('$login','$password')");
if ($result2 =='TRUE')
{
echo "Ви успішно зареєстровані! Тепер ви можете зайти на сайт. <a href='index.php'> Головна сторінка </a>";
}
else {
echo "Помилка! Ви не зареєстровані!";
     }
?>