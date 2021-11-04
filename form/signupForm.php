<?php

if(isset($_POST['btn'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $pwd = $_POST['password'];
  $pwd2 = $_POST['password2'];

  checkSamePassword($pwd, $pwd2);

  $login = new UserContr();
  $login->signup($name,$email,$pwd);
}

function checkSamePassword($pwd, $pwd2){
  if($pwd == $pwd2){
    return true;
  }
  else{
    echo "passwords do not match!";
    return false;
  }
}

 ?>
