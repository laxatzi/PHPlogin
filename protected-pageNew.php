<?php 
   //start the session_abort
   start_session();

   // check session to see if logged in 

   if(isset($_SESSION['isLoggedIn'])){

   }else{
      header('Location: loginNew.php?isBlock=true');
   }
?>

<!DOCTYPE html>
<html>

  <title>Protected page.</title>
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

    <p>You are now viewing members only content! Aren't you special!</p>

  </main>

	</body>
</html>
