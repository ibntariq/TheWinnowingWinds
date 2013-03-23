<?php

//Inserting a post

    include 'ChromePhp.php';

    $host = "localhost";
    $user = "root";
    $pass = "omer";
    $db   = "testdb";
    $title = $_POST['Title'];
    $post  = $_POST['Post'];

    //Connecting to the database
    $mysqli = new mysqli($host,$user,$pass,$db);

    //Checking for errors
    if(mysqli_connect_error()){
        die("Unable to connect");
    }

    $insertQuery = "INSERT INTO wbtest2
        (title,post) VALUES('$title','$post')";

    $mysqli->query($insertQuery) or die("Data Could Not Be Inserted!");
    
    $res = "Data Entered";
    echo $res;


?>



