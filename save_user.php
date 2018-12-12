<?php
    include("bd.php");
        if(isset($_POST['submit'])){
                 $err = [];
                 $login = $_POST['login'];
                 $password = $_POST['password'];
                 $country = $_POST['country'];
                 $region = $_POST['region'];
                 $city = $_POST['city'];
                 $result=$link->query("SELECT id FROM users WHERE login='$login'");
                 $row_cnt = $result->num_rows;
            if ($row_cnt>0) {
                $err[]="Логін вже зайнятий!";
            }
            if(!preg_match("/^[a-zA-Z0-9]+$/",$_POST['login'])){
                $err[] = "Логін може складатись лише з букв англійського алфавіту та цифр!";
           }
            if(strlen($_POST['login']) < 3 or strlen($_POST['login']) > 30){ 
                $err[] = "Логін не повинен бути меньше 3-х символів і не більше 30";
            }
            if(count($err) == 0){
                $login = $_POST['login'];
                $password = $_POST['password'];
                $stmt2=$link->prepare("INSERT INTO users SET login=(?), password=(?), id_country=(?), id_region=(?), id_city=(?)");
                $stmt2->bind_param('sssss', $login, $password, $country, $region, $city);
                $stmt2->execute();
                header("Location:index.php"); exit();
            } 
        }
?>
