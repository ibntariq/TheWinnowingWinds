<?php

//Viewing a single post

                    $host = "localhost";
                    $user = "root";
                    $pass = "omer";
                    $db   = "testdb";
                    $id = $_POST['ID'];

                    //Connecting to the database
                    $mysqli = new mysqli($host,$user,$pass,$db);

                    //Checking for errors
                    if(mysqli_connect_error()){
                        die("Unable to connect");
                    }

                    $viewQuery = "SELECT * FROM wbtest2
                                  WHERE id=$id ";

                    $result = $mysqli->query($viewQuery);

                    $rows = array();

                    while($r = $result->fetch_array()) {                      
                        
                     $rows[] = $r;
                     }
                     
                     echo json_encode($rows);

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
