<?php
//clean up function
function cleanUp($input)
{
    $input = htmlspecialchars($input);
    $input = stripslashes($input);
    $input = trim($input);
    return $input;
}

//register user function 
function registerUser($fname, $lname, $email, $password)
{
    global $conn;
    $fname = cleanUp($fname);
    $lname = cleanUp($lname);
    $email = cleanUp($email);
    $password = md5($password);
    $joined_date = date("Y-m-d H:i:s");
    $uHash  = md5($email);

    $insertUserQuery = "INSERT INTO users (fName, lName, email, pass, joined_date, uHash) VALUES('$fname', '$lname', '$email', '$password', '$joined_date', '$uHash')";
   

    if (mysqli_query($conn,  $insertUserQuery)) {
        echo "New record created successfully";
        
    } else {
        echo "Error: " . $insertUserQuery . "<br>" . mysqli_error($conn);
    }
}


function LoginUser($email, $password)
{
    global $conn;
    $email = cleanUp($email);
    $password = md5($password);

    $fetched_data = array();

    $selectUser = "SELECT * FROM users WHERE email = '$email' AND pass = '$password'";
    $result = mysqli_query($conn, $selectUser);

    if($result)
    {
    while($row = mysqli_fetch_assoc($result))
    {
        $fetched_data = $row;
    }
    }
    return $fetched_data;
}
