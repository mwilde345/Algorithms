<?php
  $week = $_POST['Week'];
  $message = $_POST['Message'];
  return bool mail('mwilde345@gmail.com',$week,$message);
 ?>
