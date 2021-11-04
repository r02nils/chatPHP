<?php

class User extends mySql
{
  protected function getUser($name){
    $sql = "SELECT * FROM usert WHERE name = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$name]);

    $results = $stmt->fetchAll();
    return $results;
  }

  public function getUserIdByName($name){
    $sql = "SELECT user_id FROM usert WHERE name = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$name]);

    $results = $stmt->fetchAll();
    return $results;
  }

  protected function setUser($name, $email, $password){
    $sql = "INSERT INTO usert(name, email, password) VALUES(?,?,?);";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$name,$email,$password]);
  }

  protected function loginUser($name,$password){
    $sql = "SELECT * FROM usert WHERE name = ? and password = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$name,$password]);

    if($stmt->rowCount() == 1){
      $user = $stmt->fetchAll();
      session_start();
      $_SESSION['user_id'] = $user[0]['user_id'];
      $_SESSION['user_name'] = $user[0]['name'];

      echo "login successful!";
    }
    else{
      echo "login error!";
    }
  }

  protected function signupUser($name,$email,$password){
    $sql = "INSERT INTO usert(name, email, password) VALUES(?,?,?);";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$name,$email,$password]);

    echo "signup successful!";
  }
}
