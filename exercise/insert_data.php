<?php

include("connectdb.php");

if(isset($_POST["submit"]))
{
// $fname ="";
// $lname ="";
// $message ="";

$fname = $_POST["first_name"];
$lname = $_POST["last_name"];
$message = $_POST["message"];
// echo $fname."<br>";
// echo $lname."<br>";
// echo $message;

$insert_query = "INSERT INTO contact_table (first_name, last_name,message) VALUES('$fname', '$lname', '$message')";

if(mysqli_query($link,$insert_query))
{
echo "inserted";
}
else
{
    echo "error";
}


}

?>