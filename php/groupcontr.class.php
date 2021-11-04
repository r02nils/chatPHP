<?php

class GroupContr extends Group
{
  public function createGroup($name,$users,$user_id){
    $this->addGroup($name,$user_id);
    $results = $this->getGroupsDesc();
    for ($i=0; $i < sizeOf($users); $i++) {
      $this-> addUserToGroup($results[0]['group_id'],$user_id,$users[$i]);
    }
  }
}
