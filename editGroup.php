<?php
session_start();
  require 'includes/autoloader.inc.php';
  require 'form/createGroupForm.php';
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Chat | Create Group</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body>
    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>
    <div class="content">
      <h1>Edit Group</h1>
      <form class="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="name" value="<?php $groupName = new GroupView(); $groupName->showGroupName($_SESSION['group_id']); ?>" placeholder="Group name" readonly><br>
        <input type="text" name="users" value="" placeholder="add users"><br>
        <input type="text" name="users" value="" placeholder="remove users"><br>
        <input type="submit" name="btn" value="save"><br>
      </form>
      <p><a href="index.php">back</a></p>
    </div>
    <script src="js/blockReplaceState.js" charset="utf-8"></script>
  </body>
</html>
