<?php
    include_once 'dbHandler.php';
    $sql = "SELECT * FROM tickets WHERE family_line="ultra";";

    // Querying the code
    //  mysql_query() takes 2 params: a connection 
    //  to the database, and the query command.
    $result = mysqli_query($conn, $sql);

    // Checking the query if it returns nothing
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0){
        // we can reiterate through the data entries 
        // using mysqli_fetch_assoc() 
        while ($row = mysqli_fetch_assoc($result)){
            echo $row['subject']."<br>".$row['user_last']."<br>";
        }
    }
?>















