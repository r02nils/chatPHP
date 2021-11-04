<?php

class Group extends mySql
{
  protected function getGroups(){
    $sql = "SELECT * FROM groupt";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();

    $results = $stmt->fetchAll();
    return $results;
  }

  protected function getGroupsDesc(){
    $sql = "SELECT * FROM groupt order by group_id desc";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();

    $results = $stmt->fetchAll();
    return $results;
  }

  protected function getGroupById($group_id){
    $sql = "SELECT * FROM groupt where group_id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$group_id]);

    $results = $stmt->fetchAll();
    return $results;
  }

  protected function getMyGroups($user_id){
    $sql = "SELECT * FROM group_usert inner join groupt on groupt.group_id = group_usert.group_id where user_id = ? ";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$user_id]);

    $results = $stmt->fetchAll();
    return $results;
  }

  protected function getCountMembers($group_id){
    $sql = "SELECT count(group_id) as count FROM group_usert where group_id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$group_id]);

    $results = $stmt->fetchAll();
    return $results;
  }

  protected function addGroup($name,$user_id){
    $sql = "INSERT INTO groupt(group_name) VALUES(?);";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$name]);

    $group = $this->getGroupsDesc();
    $group_id = $group[0]['group_id'];

    $sql = "INSERT INTO group_usert(group_id, user_id) VALUES(?,?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$group_id, $user_id]);
  }

  protected function addUserToGroup($group_id, $user_id ,$new){
    $sql = "SELECT * FROM group_usert where group_id = ? and user_id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$group_id,$user_id]);

    $sql = "SELECT user_id FROM usert WHERE name = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$new]);

    $newResults = $stmt->fetchAll();
    $new_id = $newResults[0]['user_id'];

    $user = $stmt->fetchAll();
    $sql = "INSERT INTO group_usert(group_id, user_id) VALUES(?,?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$group_id,$new_id]);

    $results = $stmt->fetchAll();
    return $results;
  }
}
