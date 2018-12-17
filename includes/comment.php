<?php
include('bd.php');
$result = $link->query("SELECT comments.*, img_src, users.login AS user FROM comments LEFT JOIN users ON users.user_id = comments.user_id ORDER BY num");
$all_comment=$result->fetch_array(MYSQLI_BOTH);
	do {
		echo "<img id='smallAva' src=".$all_comment['img_src']."><b>".$all_comment['user']."</b> - <i>".$all_comment['text_comment']."</i><br>".$all_comment['date']."<br />";
	}
	while ($all_comment=$result->fetch_array(MYSQLI_BOTH));
?>
