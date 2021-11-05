<?php
session_start();
  include 'autoloaderData.inc.php';

  $messages = new MessageView();
  (empty($_SESSION['group_id'])!=true)?$messages->showMessages($_SESSION['group_id']):"";
 ?>
