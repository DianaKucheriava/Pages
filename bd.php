<?php
  $link=mysqli_connect("localhost", "user", "1234", "mysql");
  //////////////////bd2/////////////////////////////////////
  $name = $_POST["name"];
  $page_id = $_POST["page_id"];
  $text_comment = $_POST["text_comment"];
  $name = htmlspecialchars($name);
  $text_comment = htmlspecialchars($text_comment);
  $mysqli = new mysqli("localhost", "root", "", "Client");
  $mysqli->query("INSERT INTO `comments` (`name`, `page_id`, `text_comment`) VALUES ('$name', '$page_id', '$text_comment')");
  header("Location: ".$_SERVER["HTTP_REFERER"]);// повернення на сторінку
?>