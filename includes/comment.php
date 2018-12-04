<?php
       $page_id = 1;
       $mysqli = new mysqli("localhost", "root", "", "Client");
        $result_set = $mysqli->query("SELECT name, text_comment FROM `comments` WHERE `page_id`='$page_id'"); 
          while ($row = $result_set->fetch_assoc()) {//print_r($row);
			echo "<tr><td><b> " .$row['name']. "</b></td></tr> <tr><td> : <b>" .$row['text_comment']."</b></td></tr><br />";}  ?>