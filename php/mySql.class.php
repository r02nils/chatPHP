<?php

class mySql{
  private $host = "localhost";
  private $user = "root";
  private $pwd = "";
  private $dbName = "chatdb";

  protected function connect(){
    $d = 'mysql:host='.$this->host.';dbname='.$this->dbName;
    $p = new PDO($d,$this->user, $this->pwd);
    $p->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $p;
  }
}
