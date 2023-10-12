
  

<!DOCTYPE html>
<html>
<head>
  <title>Contact Us</title>
</head>
<body>

<?php
    echo date("Y-m-d");
   
    ?>
  <h1>Contact Us</h1>
  
  <form action="contact_us.php" method="POST">
    <label for="first_name">First Name:</label>
    <input type="text" id="first_name" name="first_name" required><br><br>
    
    <label for="last_name">Last Name:</label>
    <input type="text" id="last_name" name="last_name" required><br><br>
    
    <label for="message">Message:</label>
    <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>
    
    <input type="submit" value="Submit">
  </form>

  <h1>global variables </h1>

  
<!-- supper global variables example  -->

<?php  

$a = "alex";
$b =  2;

print "<pre>";
print_r($GLOBALS);

?>
<br>

<h1> server variable in php</h1>


<!-- supper global variables example  -->

<?php  


print "<pre>";
print_r($_SERVER);

?>




<br>
</body>
</html>