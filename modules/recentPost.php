<?php

//Showing recent posts

    $host = "localhost";
    $user = "root";
    $pass = "omer";
    $db   = "testdb";
    
    $mysqli = new mysqli($host,$user,$pass,$db);
    
    //Checking for errors
    if(mysqli_connect_error()){
    die("Unable to connect");
    }
    
    // Make testdb the current database
    $db_selected = $mysqli->select_db('testdb');
    
    if (!$db_selected) {
    // Creating database and tables if they dont exist
    $creatDb = 'CREATE DATABASE testdb';
    
    $createResult = $mysqli->query($createDb) or die("Could Not Create DB");
    
    //Creating the blog post table
    $createTable = "KEY AUTO_INCREMENT,
       title VARCHAR(30),
       post TEXT,
       date TIMESTAMP);";
    
    $tableResult = $mysqli->query($createTable) or die("Could not create table");
    
    //Creating the admin table
     $createAdmin = "CREATE TABLE auth(
           id INT PRIMARY KEY AUTO_INCREMENT,
           user VARCHAR(15),
           pass VARCHAR(15)
           );";

       $result = $mysqli->query($createAdmin) or die("Could not create table");

       echo "Table Created!";
       
       $q2 = "INSERT INTO auth
           (user,pass) VALUES('omer','123')";
       
       $result2 = $mysqli->query($q2) or die("Data Entered");
    
    
    }
    
    //Otherwise fetch the last 6 posts
    $recentQuery = "SELECT * FROM wbtest2 ORDER BY date DESC LIMIT 6;";
    
    $result = $mysqli->query($recentQuery) or die("Data Could Not Be Inserted!");
    
    $rows = array();
    
    if(mysqli_num_rows($result) == 0){
        $res = "No Entries Exists";
        echo $res;        
    }else{
        while($r = $result->fetch_array()){
          $rows[] = $r;
          }                     
         echo json_encode($rows);
    }

?>
