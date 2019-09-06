<?php
      //start the session
      session_start();
      
?>
<!DOCTYPE html>
<html>

  <title>Form processing - Protected page.</title>
  <link rel="stylesheet" type="text/css" href="styles.css">

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

    <p>You are now viewing members only content! Aren't you special!</p>

  </main>

	</body>
</html>
