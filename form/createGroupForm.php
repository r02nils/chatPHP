<?php

if(isset($_POST['createGroupBtn'])){
  $name = $_POST['name'];
  $users = $_POST['users'];
  $user_id = $_SESSION['user_id'];
  $usersArray = explode(",", $users);

  $group = new GroupContr();
  $group->createGroup($name,$usersArray,$user_id);
}

 ?>
