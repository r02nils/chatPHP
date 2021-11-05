<?php
session_start();
  include 'autoloaderData.inc.php';

  $groups = new GroupView();
  $groups->showMyGroups($_SESSION['user_id']);
 ?>
