<?php
      //PHP Sessions are SuperGlobal variables...a type of array
      // PHP Sessions allow to track people visiting your website thus ...maintaining state
      
      session_start();   //start the session => it tells php engine that we gonna use sessions on this page


?>
<!DOCTYPE html>

<html>
<head>
	<title>Ch 11 PHP Sessions</title>
</head>

<body>
      <h2>PHP sessions allow you to track people</h2>

      <a href="http://localhost/test_folder/Ch11-php-sessions-2.php">View Session</a>
</body>
</html>
