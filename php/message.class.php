<?php

class Message extends mySql
{

  protected function sendMsg($user_id, $group_id, $content){
    $sql = "INSERT INTO messaget(user_id, group_id, content) VALUES(?,?,?);";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$user_id,$group_id,$content]);

    echo "message sent";
  }

  protected function getMessages($group_id){
    $sql = "SELECT * FROM messaget inner join usert on usert.user_id = messaget.user_id where group_id = ? order by mDate desc";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$group_id]);

    $results = $stmt->fetchAll();
    return $results;
  }

}
