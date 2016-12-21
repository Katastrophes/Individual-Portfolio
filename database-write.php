<?php
    $firstname = Trim(stripslashes($_POST['firstname']));
    $lastname = Trim(stripslashes($_POST['lastname']));
    $phone = Trim(stripslashes($_POST['phone']));

    // Database Connection
    include 'db-info.php';
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    // Database Query
    $query = "INSERT INTO friends (first_name, last_name, phone) VALUES ('$firstname', '$lastname', '$phone')";
    
    $result = mysqli_query($connection, $query);

    //Error Checking
    $NumberOfRowsAffected = mysqli_affected_rows($connection);
    if($NumberOfRowsAffected < 1)
    {
        die('No records were written to the database. Waaaa!');
    }

    // Close Connection & Reditrect
    mysqli_close($connection);
    header("Location: database-read.php");
?>