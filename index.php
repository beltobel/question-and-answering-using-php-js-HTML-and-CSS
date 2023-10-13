
  

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

  <!-- <h1>global variables </h1> -->

  
<!-- supper global variables example  -->

<?php  

// $a = "alex";
// $b =  2;

// print "<pre>";
// print_r($GLOBALS);

?>
<br>

<!-- <h1> server variable in php</h1> -->


<!-- supper global variables example  -->

 <?php  

// echo "<h1> POST variable </h1>";
// print "<pre>";
// print_r ($_POST);


// echo "<br> <h1> GET variable </h1>";
// print "<pre>";
// print_r ($_GET);

// $_REQUEST 
// php $_REQUEST is a php super global variable which is used to collect data after submitting an HTML form. it is used to hold both GET and POST variable

// echo "<br> <h1> REQUEST variable </h1>";
// print "<pre>";
// print_r ($_REQUEST);

//$_FILES 


//cookies and session 
//cookies is a small that the server embeds on the user,s computer. originally, cookies are created with the intention of improving your experience when visiting a website. these small files saved on your browser help developers give more personal, convenient website visits. on the other hand cookies can also be used to spy on you. 

//>> a cookies is created with the setcookies()



// print "<pre>";
// print_r($_SERVER);

// $cookie_name ="test_cookie";
// $cookie_value ="visited content page";
// setcookie($cookie_name, $cookie_value, time()+(86400*30), "/");

// // print cookie

// print"<pre>";
// print_r($_COOKIE);




// //SESSION 
// session_start(); // session should be start before used it 
// print"<pre>";
// print_r($_SESSION);

// $_SESSION["test"] = 'alex';

//>> we can access the session on the other page. 

?> 




<br>
</body>
</html>