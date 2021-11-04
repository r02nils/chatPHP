<?php

class UserView extends User
{
  public function showUser($name){
    $results = $this->getUser($name);
    echo "Name: " . $results[0]['name'];
  }
}
