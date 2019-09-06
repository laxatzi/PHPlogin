<?php
      //start php session
      session_start();
?>
<!DOCTYPE html>
<html>
	<head>
	   <title>Form Processing</title>
      <link rel="stylesheet" type="text/css" href="styles.css">
  </head>
  <body>
      <nav>
         <ul>
            <li><a href="login.php">Home</a></li>
            <li><a href="protected-page.php">Protected page</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="logout.php">Log Out</a></li>
         </ul>
      </nav>
      <main>
      
           <?php
      //The user logged in - don't show form and confuse the poor guy!

              if(isset($_SESSION['isLoggedIn'])){
                echo "<p>You are already logged in!</p>";
              }
              else{
                  
              }
            ?>
      </main>
</body>
</html>