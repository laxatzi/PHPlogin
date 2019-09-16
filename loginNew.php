<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="styles.css" type="text/css">
   <title>Form Processing</title>
</head>
<body>
   <nav>
      <ul>
         <li><a href="loginNew.php">Home</a></li> 
         <li><a href="protected-pageNew.php">Protected Page</a></li> 
         <li><a href="#">Contact</a></li> 
         <li><a href="logoutNew.php">Logout</a></li> 
      </ul>
   </nav>
   <main>
       <!-- php code here -->
       <?php 
            // check if user is already logged in - if so...do not show form and confuse
            if(isset($_SESSION['isLoggedIn'])) {
               echo "<p>You are already logged in buddy!</p>";
            }
            else {  // Use Heredoc to echo out the form
               $theForm = <<<THEFORM

               <p>Welcome to WheatBook!</p>
               <h2>Please enter your user name and your password to log in: </h2>
               <form action="login-response.php" method="POST">
                  <input type="text" name="username" id="username">
                  <input type="password" name="password">
                  <input type="submit" value="Submit Form">
               </form>
THEFORM;
               echo $theForm; // end of heredoc
            }
       ?>

       <?php 
           
               $isBlock = $_GET["isBlock"];
               $badUserCredentials = $_GET["badUserCredentials"];
            
// conditional to decide which message to send via querystring
            if(isset($isBlock)){
               echo "<h2>You need to log in buddy!</h2>";
               echo "<script>document.getElementById('username').focus();</script>";
            }else if(($badUserCredentials)){
               echo "<h2>>User name OR password is wrong buddy!</h2>";
               echo "<script>document.getElementById('username').focus();</script>";
            }
       ?>
   </main>
</body>
</html>
