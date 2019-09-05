<?php
      session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ch 11 PHP Sessions</title>
</head>

<body>
   <?php
      echo "Favorite color is ".$_SESSION["favcolor"].".<br>";
      echo "Favorite animal is ".$_SESSION["favanimal"].".";
   ?>
    <h2>View session with print_r</h2>
    <?php 
         print_r($_SESSION);
    ?>
    <h2>Reset session variables</h2>
    <?php
         $_SESSION["favcolor"] = "green";
         $_SESSION["favanimal"] = "cat";
         print_r($_SESSION);
    ?>

    <h2>Destroy session variables</h2>
    <?php 
      // remove all session variables
         session_unset();
      // destroy all session variables

      // print session variables
      print_r($_SESSION);
    ?>
    <h2>Use sessions in a variable in a conditional statement!</h2>

    <?php 
         // create new session variable
         $_SESSION["favcar"] = "audi";

         //unset($_SESSION["favcar"]);

         if(isset($_SESSION["favcar"])) {
            echo "It has been set! It is: ".$_SESSION["favcar"];
         }
         else {
            echo "It has not been set yet!";
            $_SESSION["isAnswered"] = "No";
         }
    ?>

</body>
</html>

