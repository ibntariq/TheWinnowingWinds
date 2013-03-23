<?php

//Logs in the author

    $host = "localhost";
    $user = "root";
    $pass = "omer";
    $db   = "testdb";
    $username = $_POST['UserName'];
    $password = $_POST['Password'];
    
    
    $mysqli = new mysqli($host,$user,$pass,$db);

    //Checking for errors
    if(mysqli_connect_error()){
        die("Unable to connect");
    }
    
    //To Protect MySql Injection
    $username = stripslashes($username);
    $password = stripslashes($password);
    $username = mysql_real_escape_string($username);
    $password = mysql_real_escape_string($password);
    
    $authQuery=" SELECT * FROM auth WHERE user='$username' and pass='$password' ";
    
    $result = $mysqli->query($authQuery);
    
    $string = 'Logged In!';
    $stringError = 'Could Not Log In';
    
    // Mysql_num_row is counting table row
     if(mysqli_num_rows($result) == 1){         
         echo $string;
         session_start();
         $_SESSION["valid_user"] = $_POST['UserName'];         
     }else{
         echo $stringError;
     }
    
    
    ?>


