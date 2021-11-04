<?php

if(isset($_POST['btn'])){
  $user_id = $_SESSION['user_id'];
  $group_id = $_SESSION['group_id'];
  $content = $_POST['content'];

  $msg = new MessageContr();
  $msg->sendMessage($user_id,$group_id,$content);
}

 ?>
