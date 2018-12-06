<?php
    if (isset($_REQUEST['ok'])) {
     	$string = '<tr><td><b>'.$_REQUEST['name'].'</b></td></tr> <tr><td> : <b>'.$_REQUEST['text_comment']. '</b></td></tr><br />';
      	file_put_contents('1.txt', $string, FILE_APPEND);
      	header("Location:".$_SERVER["HTTP_REFERER"]); 
    }
    include ('1.txt');
?>