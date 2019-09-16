<?php 
   //start the session_abort
   start_session();

   // check session to see if logged in 

   if(isset($_SESSION['isLoggedIn'])){

   }else{
      header('Location: loginNew.php?isBlock=true');
   }
?>


