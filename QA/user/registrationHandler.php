<?php

require_once('../helpers/init.php');

$fname = "";
$lname ="";
$email = "";
$password = "";

//grab values from user interface 
// Retrieve form values
if(isset($_POST['firstName'])) 
{
 $firstName = $_POST['firstName'];
}
if(isset($_POST['lastName']))
{
    $lastName = $_POST['lastName'];
}
if(isset($_POST['email']) )
{
    $email = $_POST['email'];

}
if(isset($_POST['password'])) {
   
    $password = $_POST['password'];
}
if(!empty($firstName)&& !empty($lastName)&& !empty($email) && !empty($password))
{
    registerUser($firstName, $lastName, $email, $password);
    // $fname = $firstName;
    // $lname = $lastName;
    // $email = $email;
    // $password = $password;
}
?>