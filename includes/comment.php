<?php
	include('bd.php');
	$result = $link->query("SELECT comments.*, users.login AS user FROM comments LEFT JOIN users ON users.id = comments.id");
	$all_comment=$result->fetch_array(MYSQLI_BOTH);
	do {
		echo "<b>".$all_comment['user']."</b> - <i>".$all_comment['text_comment']."</i><br>".$all_comment['date']."<br />";
	}
	while ($all_comment=$result->fetch_array(MYSQLI_BOTH));
?>