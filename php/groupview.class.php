<?php

class GroupView extends Group
{
  public function showMyGroups($user_id){
    $results = $this->getMyGroups($user_id);
    for ($i=0; $i < sizeOf($results); $i++) {
      echo "<div class='group' onclick='clickGroup(".$results[$i]['group_id'].")'>";
      echo "<p>".$results[$i]['group_name']."</p>";
      echo "</div>";
    }
    echo "<div class='group'>";
    echo "<a href='createGroup.php'>create Group</a>";
    echo "</div>";
  }

  public function showInfo($group_id){
    $count = $this->getCountMembers($group_id);
    $name = $this->getGroupById($group_id);
    echo $name[0]['group_name']." | Members: ". $count[0]['count'];
  }

  public function showCountMembers($group_id){
    $results = $this->getCountMembers($group_id);
    echo "Members: ". $results[0]['count'];
  }

  public function showGroupName($group_id){
    $name = $this->getGroupById($group_id);
    echo $name[0]['group_name'];
  }
}
