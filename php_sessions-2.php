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
    <h2>Use sessions in a variable in a conditional statement!</h2>

</body>
</html>

