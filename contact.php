<?php
     // variables
 $error_open = "<label class='error'>";
 $error_close = "</label>";
 $valid_form = true;
 $redirect = "success.php";
 $form_elements = array('name', 'email', 'phone','fax', 'message');
  // another variable to hold all form_elements required to be filled
 $required = array('name', 'email', 'message');
 
 //i want each form element to start at an empty state 
 foreach($required as $require){
    $error[$require] = "";
 }
// if submit button clicked and form is submitted...go ahead and process the form
  if(isset($_POST['submit'])) {
   // process form
   // get form data
   foreach($form_elements as $element){
      $form[$element] = htmlspecialchars($_POST[$element]); //htmlspecialchars make sure all characters in the input are valid...this statement is gonna loop through each or our form elements and its gonna set our form array by grab the form data (names) from the form 
   }
    // the next step is to actually check these form elements
   }
   else{
      foreach($form_elements as $element){
         $form[$element] = '';
      }
      // display the form
         include('form_validation.php');
   }
?>

