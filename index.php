<?php
session_start();
  include 'includes/autoloader.inc.php';
  include 'form/msgForm.php';
  include 'form/groupSessionForm.php';
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Chat</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/master.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>
    <div class="content">
      <div class="groups">
        <?php
          $groups = new GroupView();
          $groups->showMyGroups($_SESSION['user_id']);
         ?>
      </div>
      <div class="chat">
        <div class="info">
          <?php
            $groups = new GroupView();
            (empty($_SESSION['group_id'])!=true)?$groups->showInfo($_SESSION['group_id']):"";
           ?>
        </div>
        <div class="messages">
          <?php
            $messages = new MessageView();
            (empty($_SESSION['group_id'])!=true)?$messages->showMessages($_SESSION['group_id']):"";
           ?>
        </div>
        <div class="write">
          <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="text" name="content" value="" placeholder="message">
            <input type="submit" name="btn" value="send">
          </form>
        </div>
      </div>
    </div>
    <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" hidden>
      <input id="id" type="text" name="id" value="<?php echo $_SESSION['group_id']; ?>" readonly hidden>
      <input id="groupBtn" type="submit" name="groupBtn" value="" readonly hidden>
    </form>
    <script src="js/group.js" charset="utf-8"></script>
  </body>
</html>
