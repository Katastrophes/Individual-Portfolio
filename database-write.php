<?php

    $iname = Trim(stripslashes($_POST['iname']));

    $iemail = Trim(stripslashes($_POST['iemail']));

    $iphone = Trim(stripslashes($_POST['iphone']));

    $imessage = Trim(stripslashes($_POST['imessage']));



    // Database Connection

    include 'db-info.php';

    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);



    // Database Query

    $query = "INSERT INTO people (name, email, phone, message) VALUES ('$iname', '$iemail', '$iphone', '$imessage')";

    

    $result = mysqli_query($connection, $query);



    //Error Checking

    $NumberOfRowsAffected = mysqli_affected_rows($connection);

    if($NumberOfRowsAffected < 1)

    {

        die('No records were written to the database. Waaaa!');

    }



    // Close Connection & Reditrect

    mysqli_close($connection);

    header("Location: success.php");

?>