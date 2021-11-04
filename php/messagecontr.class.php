<?php

class MessageContr extends Message
{
  public function sendMessage($user_id,$group_id,$content){
    $this->sendMsg($user_id,$group_id,$content);
  }

}
