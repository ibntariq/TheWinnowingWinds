<?php

//Showing all posts
                    
                    $host = "localhost";
                    $user = "root";
                    $pass = "omer";
                    $db   = "testdb";

                    //Connecting to the database
                    $mysqli = new mysqli($host,$user,$pass,$db);

                    //Checking for errors
                    if(mysqli_connect_error()){
                        die("Unable to connect");
                    }

                    $viewQuery = "SELECT * FROM wbtest2";

                    $result = $mysqli->query($viewQuery);

                    $rows = array();

                    while($r = $result->fetch_array()) {                      
                        
                     $rows[] = $r;
                     }
                     
                     echo json_encode($rows);
                     
                    ?>