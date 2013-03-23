<!DOCTYPE html>
<html>
    <head>
        <title>The Winnowing Winds</title>
        <!--dependencies-->
        <link type="text/css" rel="stylesheet" href="/WWB/css/index.css"/>
        <script language="javascript" src="/WWB/js/jquery-1.9.1.min.js"></script>
        <script src="/WWB/js/index.js"></script>
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
                    <h1>Recent Posts</h1>                    
                </div>
       
    </body>
</html>
