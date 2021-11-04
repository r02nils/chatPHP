<?php

if(isset($_POST['btn'])){
  $name = $_POST['name'];
  $pwd = $_POST['password'];

  $login = new UserContr();
  $login->login($name,$pwd);
}

 ?>
