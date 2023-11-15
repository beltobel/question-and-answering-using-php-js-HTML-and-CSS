<?php

require_once('../helpers/init.php');


$email = "";
$password = "";


if(isset($_POST['email']) )
{
    $email = $_POST['email'];

}
if(isset($_POST['password'])) {
   
    $password = $_POST['password'];
}
if(!empty($email) && !empty($password))
{
    $loggedInUser =LoginUser($email, $password);
  
}
?>