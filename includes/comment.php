<?php
	include('bd.php');
	     $result = $link->query("SELECT * FROM comments");
		 $all_comment=$result->fetch_array(MYSQLI_BOTH);
		 do { echo "<b>".$all_comment['login']."</b> - <i>".$all_comment['text_comment']."</i><br />"; }
		 while ($all_comment=$result->fetch_array(MYSQLI_BOTH));
?>