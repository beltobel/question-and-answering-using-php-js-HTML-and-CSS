
<?php
$root =realpath($_SERVER["DOCUMENT_ROOT"]);


require_once($root."/config.php");

$conn = mysqli_connect($sql_db_host, $sql_db_user,$sql_db_pass, $sql_db_name);



?>