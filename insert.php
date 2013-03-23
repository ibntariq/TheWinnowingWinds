<?php

session_start();

if (!$_SESSION["valid_user"])
        {
        // If the user is not logged in redirect to home
        Header("Location: index.php");
        }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Create A Post</title>
        <!--dependencies-->
        <link type="text/css" rel="stylesheet" href="/WWB/css/insertPost.css"/>
        <script language="javascript" src="/WWB/js/jquery-1.9.1.min.js"></script>
        <script src="/WWB/js/insertPost.js"></script>
    </head>
    
    <body>
        
        <div id="nav">
            <img id="logo" src="/WWB/logo/logo.png" />
                    <ul id="links2">
                            <li><a class="links" href="index.php" style="font-weight: lighter;">Home</a>
                            <li><a class="links" href="insert.php">Create Post</a></li>
                            <li><a class="links" href="viewposts.php">View Posts</a></li>
                            <li><a class="links" href="logout.php">Logout</a></li>
                          </ul>
             
            </div>
                <div id="content">
                    <h1>Create A New Post</h1>
                    <p>TITLE:</p></br><input type="text" id="title" /></br>
                    <p>POST:</p></br><textarea rows="20" cols="60" id="post"></textarea>
                    <div id="submit"><p id="submitText">SUBMIT</p></div>
                </div>
       
    </body>
</html>