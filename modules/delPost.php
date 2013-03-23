<?php

//Deleting a post

    $host = "localhost";
    $user = "root";
    $pass = "omer";
    $db = "testdb";
    $id = $_POST['ID'];
    
    $res="Post Deleted";
    
    
   $mysqli = new mysqli($host,$user,$pass,$db);
   
   if(mysqli_connect_error()){
       die("Unable To Connect");
   }   
   
   $delQuery = "DELETE FROM wbtest2
                WHERE id=$id ";
   
   $result = $mysqli->query($delQuery) or die("Error in Query");
   echo $res;
   

?>
