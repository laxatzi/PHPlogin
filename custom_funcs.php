<?php
      /*
         - a function name can start either with a letter of an underscore but NOT with a number
         - function names are NOT case sensitive e.g greetFriends() and greetfriends() are same function
      */
      //inserting a function
      function greetFriends($nameFirst="Panos", $nameLast="Papadopoulos"){
         return "Hello $nameFirst $nameLast";
      }
      function myName($name="Lambros"){
         echo "My name is $name";
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
      echo greetfriends()."<br>"; // PHP function names are NOT case sensitive
                                  // browser will display "Hello Maria"
      myName();    // function already echoed in declaration
   ?>

	</body>
</html>
