<!DOCTYPE html>
<html>
    <head>
        <title>All Posts</title>
        <!--dependencies-->
        <link type="text/css" rel="stylesheet" href="/WWB/css/viewPost.css"/>
        <script language="javascript" src="/WWB/js/jquery-1.9.1.min.js"></script>
        <script src="/WWB/js/viewPost.js"></script>
    </head>
    
    <body>
        
        <div id="nav">
            <img id="logo" src="/WWB/logo/logo.png" />
            <!--Displaying different sets of links based on whether the user is logged in or not-->
            <?php
            session_start();
                if (!(isset($_SESSION["valid_user"]))){
                    echo '<ul id="links1">
                            <li><a class="links" href="index.php">Home</a>
                            <li><a class="links" href="login.php">Login</a></li>
                            <li><a class="links" href="viewposts.php">View Posts</a></li>
                          </ul>';
                }else{
                    echo '<ul id="links2">
                            <li><a class="links" href="index.php">Home</a>
                            <li><a class="links" href="insert.php">Create Post</a></li>
                            <li><a class="links" href="viewposts.php">View Posts</a></li>
                            <li><a class="links" href="logout.php">Logout</a></li>
                          </ul>';
                }
            ?>             
            </div>  
        
                <div id="content">                   
                    
                    
                </div>   
        
        
    </body>
</html>
