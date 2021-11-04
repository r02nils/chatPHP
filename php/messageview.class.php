<?php

class MessageView extends Message
{
  public function showMessages($group_id){
    $results = $this->getMessages($group_id);
    for ($i=0; $i < sizeOf($results); $i++) {
      if(($_SESSION['user_id']) == ($results[$i]['user_id'])){
        echo "<div class='msg bg-green'>";
        echo "<span>".$results[$i]['content']."</span><br>";
        echo "<span class='msg-name'>".$results[$i]['name']."</span>";
        echo "</div>";
      }
      else{
        echo "<div class='msg bg-yellow'>";
        echo "<span>".$results[$i]['content']."</span><br>";
        echo "<span class='msg-name'>".$results[$i]['name']."</span>";
        echo "</div>";
      }
    }
  }
}
