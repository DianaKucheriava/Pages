<?php
  session_start();
  include("bd.php");
  $uploaddir = 'assets/img/';
  $apend=date('YmdHis').rand(100,1000).'.jpg'; 
  $uploadfile = "$uploaddir$apend"; 
  $err = [];
  if(($_FILES['userfile']['type'] == 'image/gif' || $_FILES['userfile']['type'] == 'image/jpeg' || $_FILES['userfile']['type'] == 'image/png') && ($_FILES['userfile']['size'] != 0 and $_FILES['userfile']['size']<=1000000)) 
  { 
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile))
    { 
      $size = getimagesize($uploadfile); 
      if ($size[0] < 501 && $size[1]<1501) 
      { 
        $user_id=$_SESSION['user_id'];
        $send_im=$link->prepare("UPDATE users SET img_src='$uploadfile' WHERE user_id=?");
        $send_im->bind_param('s',$user_id);
        $send_im->execute();
        header("Location:settings.php"); exit(); 
      } else {
         $err[]="Зображення що завантажується перевищує допустимі  норми (ширина <= 500; висота <= 1500)"; 
        unlink($uploadfile); // видалення файлу
      } 
    } else {
        $err[]="Файл не завантажено, поверніться і спробуйте ще раз";
    } 
  } 
?>