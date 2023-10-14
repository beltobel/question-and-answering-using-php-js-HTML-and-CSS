
<!DOCTYPE html>
<html>
<head>
  <title>Contact Us</title>
</head>
<body>

<?php
    echo date("Y-m-d");
   
    ?>
  <h1>Student Registration</h1>
  <!-- contact_us.php -->
  <form action="insert_data.php" method="POST">
    <label for="first_name">First Name:</label>
    <input type="text" id="first_name" name="first_name" required><br><br>
    
    <label for="last_name">Last Name:</label>
    <input type="text" id="last_name" name="last_name" required><br><br>
    
    <label for="message">Message:</label>
    <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>
    
    <input type="submit" value="Submit" name ="submit">
    
  </form>
  <form action="fetch_data.php" method="POST">
  <input type="submit" value="Display" name ="display">
  </form>
  <!-- <h1>global variables </h1> -->

  
<!-- supper global variables example  -->

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


<?php  

//writing to file using PHP
// ************************** 

// if(isset($_POST["submit"]))
// {
 
//*************************************** 
//open the file you want to write your data on and write it
// $handle = fopen('newphpfile.txt', 'a'); //open file in append mode
// if(!empty($fname))
// {
//   fwrite($handle, $fname."\n");
// }

// if(!empty($lname))
// {
//   fwrite($handle, $lname."\n");
// }

// if(!empty($message))
// {
//   fwrite($handle, $message."\n");
// }

// fclose($handle);

// echo "successfully saved";

// }


// $a = "alex";
// $b =  2;

// print "<pre>";
// print_r($GLOBALS);



?>


<br>
</body>
</html>