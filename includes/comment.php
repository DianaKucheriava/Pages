<?php
	include('bd.php');
	     $text_comment=$_POST['text_comment'];
	     $name=$_POST['name'];
	     $comment=$link->query("UPDATE users SET text_comment='$text_comment' WHERE login='$name'");
	     $login=$link->query("SELECT login, text_comment FROM users");

$result = $link->query("SELECT * FROM users");
$all_comment=$result->fetch_array(MYSQLI_BOTH);
do {echo "<b>".$all_comment['login']."</b> - <i>".$all_comment['text_comment']."</i><br />";
}
while ($all_comment=$result->fetch_array(MYSQLI_BOTH));
?>
	