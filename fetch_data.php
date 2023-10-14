<?php

include("connectdb.php");

if (isset($_POST["display"])) {

    //fetch data from database
    $fetch_query = "SELECT * FROM contact_table";

    $result = mysqli_query($link, $fetch_query);


?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>student information fetched from database</title>
    </head>

    <body>
        <h3>Student information fetched from database</h3>
        <?php
        if (!empty($result)) {
            //fetch using associate array
            print '<pre>';

            while ($row_ass = mysqli_fetch_assoc($result)) {
                print_r($row_ass);
            }

            //fetch using  array
            print '<pre>';
            while ($row_arr = mysqli_fetch_array($result)) {
                print_r($row_arr);
            }
        } else {
            echo "record not found";
        }

        echo "<h3> this one is fetched using table </h3>";
       // Query to fetch data from the table
        $sql = "SELECT user_id, first_name, last_name, message FROM contact_table";
        $result = mysqli_query($link, $sql);
        
        if ($result && mysqli_num_rows($result) > 0) {
            // Fetch using table
            echo "<table border='1'>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>First Name</th>";
            echo "<th>Last Name</th>";
            echo "<th>Message</th>";
            echo "</tr>";
        
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['user_id'] . "</td>";
                echo "<td>" . $row['first_name'] . "</td>";
                echo "<td>" . $row['last_name'] . "</td>";
                echo "<td>" . $row['message'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "No records found";
        }
        ?>

    </body>

    </html>

<?php
}


?>