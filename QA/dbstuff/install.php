<?php
$root =realpath($_SERVER["DOCUMENT_ROOT"]);


require_once($root."/config.php");

$conn = @mysqli_connect($sql_db_host, $sql_db_user,$sql_db_pass, $sql_db_name);

// if($conn)
// {
// echo "Connection established";
// }


//access dbQuery file 

$queryfile ='dbQuery.sql';

//temporary variable, used to store current query
$templine = '';

//read entire file 

$lines = file($queryfile);

//loop through lines

foreach($lines as $line)
{
//skip it if it's a comment 
if(substr($line, 0, 2) =='--'|| $line == '')
continue;

//add this line to the current segment 
$templine .= $line;
$query = false;

//if it has a semicolon at the end, it's the end of the query 

if(substr(trim($line), -1, 1) == ';')
{
    $query = mysqli_query($conn, $templine);

    //reset temp variable to empty 

    $templine = '';
}
}

echo "done at good mode\n";
?>