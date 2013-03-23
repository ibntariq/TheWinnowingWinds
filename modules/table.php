<?php

        $host = "localhost";
        $user = "root";
        $pass = "omer";
        $db = "testdb";


       $mysqli = new mysqli($host,$user,$pass,$db);

       if(mysqli_connect_error()){
           die("Unable To Connect");
       }   

//       $createQuery = "CREATE TABLE auth(
//           id INT PRIMARY KEY AUTO_INCREMENT,
//           user VARCHAR(15),
//           pass VARCHAR(15)
//           );";
//
//       $result = $mysqli->query($createQuery) or die("Could not create table");
//
//       echo "Table Created!";
       
       $q2 = "INSERT INTO auth
           (user,pass) VALUES('omer','123')";
       
       $result2 = $mysqli->query($q2) or die("Data Entered");

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
