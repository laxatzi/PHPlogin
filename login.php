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
                 //We use heredoc to echo out the form 
                  $myForm = <<<MYFORM
                     <p>Welcome to WheatBook!</p>
                     <h2>Please enter your user name and password to log in:</h2>
                  
                     <form method='post' action='login-response.php'>
                  
                        <input type='text' name='userName' id='username'>
                        <input type='password' name='password'>
                        <input type='submit'>
                  
                     </form>
MYFORM;

                  echo $myForm;
              }
            ?>

            <?php

                       if(isset($_GET["isBlock"])){
                           $isBlock =  $_GET["isBlock"];

                       }
                       if(isset($isBlock)){ 
                        echo $isBlock;
                    }
                       if(isset($_GET["badUserCredentials"])){
                        $badUserCredentials = $_GET["badUserCredentials"];

                       }

         // conditional to decide which message to send via querystring
                    if(isset($isBlock)) {

                     echo "<h2>Ah, ah, aaaaah ... you need to log in buddy!</h2>";
                     echo "<script>document.getElementById('username').focus();</script>";
               
                   } else if(($badUserCredentials)) {
               
                     echo "<h2>User name OR password is wrong buddy!</h2>";
                     echo "<script>document.getElementById('username').focus();</script>";
               
                   }
            ?>

      </main>

</body>
</html>