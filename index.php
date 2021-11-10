<?php
session_start();
  require 'includes/autoloader.inc.php';
  require 'form/msgForm.php';
  require 'form/groupSessionForm.php';
  require 'form/createGroupForm.php';

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <link rel="stylesheet" href="css/master.css">
    <script src="js/emojionearea.min.js"></script>
    <link rel="stylesheet" href="css/emojionearea.min.css">

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
            <input autocomplete="off" id="msgBox" type="text" name="content" value="" placeholder="message">
            <input type="submit" name="btn" value="send">
          </form>
        </div>
      </div>
    </div>
    <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" hidden>
      <input id="id" type="text" name="id" value="<?php echo $_SESSION['group_id']; ?>" readonly hidden>
      <input id="groupBtn" type="submit" name="groupBtn" value="" readonly hidden>
    </form>

    <script type="text/javascript">
      $(document).ready(function() {
        $("#msgBox").emojioneArea();
      });
    </script>

    <!-- create Group -->
    <!-- Modal HTML embedded directly into document -->
<div id="ex1" class="modal">
  <h1>Create Group</h1>
  <form class="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    Group name <br>
    <input type="text" name="name" value="" placeholder="name"><br><br>
    Users <br>
    <input type="text" name="users" value="" placeholder="name,name,name"><br><br>
    <input type="submit" name="createGroupBtn" value="create"><br><br>
  </form>
</div>


    <script src="js/blockReplaceState.js" charset="utf-8"></script>
    <script src="js/loadData.js" charset="utf-8"></script>
    <script src="js/group.js" charset="utf-8"></script>

    <div onlclass="">

    </div>

  </body>
</html>
