<?php
   // start the session
   session_start();

   // remove all session variables
   session_unset();

   // destroy the session
   session_destroy(); 
?>

<!DOCTYPE html>
<html>
	
	<title>Form processing - Logout page.</title>
  <link rel="stylesheet" type="text/css" href="styles.css">

<body>

  <nav>
    <ul>
         <li><a href="loginNew.php">Home</a></li>
         <li><a href="protected-pageNew.php">Protected page</a></li>
         <li><a href="#">Contact</a></li>
         <li><a href="logoutNew.php">Log Out</a></li>
    </ul>
  </nav>
  <main>

    <p>You have been logged out!</p>

  </main>

	</body>
</html>

