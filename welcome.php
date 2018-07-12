<?php
   include('session.php');
?>
<html>
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
        <div class="page-header">
            <h1>Hi, <b><?php echo htmlspecialchars($_SESSION['login_user']); ?></b>. Welcome to our site.</h1>
        </div>
        <p><a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a></p>
   </body>
   
</html>