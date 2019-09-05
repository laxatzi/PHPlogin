<?php
      //php code goes here
      //inserting a function
      function greetFriends($name="Panos"){
         return "Hello $name";
      }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>A custom PHP function</title>
	
	</head>
	<body>

		<h1>PHP Custom Functions - keeping your code clean</h1>
   <?php
      // PHP code goes 
      echo greetfriends("Maria"); // PHP function names are NOT case sensitive
                                  // browser will display "Hello Maria"

   ?>

	</body>
</html>
