<?php

class MessageView extends Message
{
  public function showMessages($group_id){
    $results = $this->getMessages($group_id);
    for ($i=0; $i < sizeOf($results); $i++) {
      $content = str_replace(":)","<img class='smiley' src='img/s1.png'/>",$results[$i]['content']);
      if(($_SESSION['user_id']) == ($results[$i]['user_id'])){
        echo "<div class='msg bg-green'>";
        echo "<span>".$content."</span><br>";
        echo "<span class='msg-name'>".$results[$i]['name']."</span>";
        echo "</div>";
      }
      else{
        echo "<div class='msg bg-yellow'>";
        echo "<span>".$content."</span><br>";
        echo "<span class='msg-name'>".$results[$i]['name']."</span>";
        echo "</div>";
      }
    }
  }
}
