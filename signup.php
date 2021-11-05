<?php
  require 'includes/autoloader.inc.php';
  require 'form/signupForm.php';
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Chat | Signup</title>
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
      <h1>Signup</h1>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="name" value="" placeholder="Username"><br>
        <input type="email" name="email" value="" placeholder="Email"><br>
        <input type="password" name="password" value="" placeholder="Password"><br>
        <input type="password" name="password2" value="" placeholder="Password"><br>
        <input type="submit" name="btn" value="signup">
      </form>
      <p><a href="login.php">login</a></p>
    </div>
    <script src="js/blockReplaceState.js" charset="utf-8"></script>
  </body>
</html>
