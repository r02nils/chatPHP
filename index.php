<?php
session_start();
  require 'includes/autoloader.inc.php';
  require 'form/msgForm.php';
  require 'form/groupSessionForm.php';

  if($_SESSION['user_id'] == ''){
    header("Location: login.php");
  }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Chat</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>
    <div class="content">
      <div class="groups" id="groups">

      </div>
      <div class="chat">
        <div class="info">
          <?php
            $groups = new GroupView();
            (empty($_SESSION['group_id'])!=true)?$groups->showInfo($_SESSION['group_id']):"";
           ?>
        </div>
        <div class="messages" id="msg">

        </div>
        <div class="write">
          <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <input id="msgBox" type="text" name="content" value="" placeholder="message">
            <input type="submit" name="btn" value="send">
          </form>
        </div>
      </div>
    </div>
    <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" hidden>
      <input id="id" type="text" name="id" value="<?php echo $_SESSION['group_id']; ?>" readonly hidden>
      <input id="groupBtn" type="submit" name="groupBtn" value="" readonly hidden>
    </form>
    <script src="js/blockReplaceState.js" charset="utf-8"></script>
    <script src="js/loadData.js" charset="utf-8"></script>
    <script src="js/group.js" charset="utf-8"></script>
  </body>
</html>
