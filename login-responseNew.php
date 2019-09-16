<?php
// Start the session
session_start();
    
    /* Checking to see if they put in the right username.

In the real world, we would be checking both username and password and 
we would also be talking to a database that would be storing the usernames and
passwords. 

.. But alas, we are just noob nerds, so we are doing something simple. 

*/

$username = $_POST["username"];

    if(trim($username)==="Lambros") {
      $_SESSION['isLoggedIn']=true;
      header('Location: protected-pageNew.php');
    }else{
         header('Location: loginNew.php?badUserCredentials=true');
    }
?>
