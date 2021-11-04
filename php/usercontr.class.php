<?php

class UserContr extends User
{
  public function createUser($name,$email,$password){
    $this->setUser($name,$email,$password);
  }

  public function login($name,$password){
    $this->loginUser($name,$password);
  }

  public function signup($name,$email,$password){
    $this->signupUser($name,$email,$password);
  }
}
