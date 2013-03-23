<?php

    session_start();
    session_unset();

    session_destroy();
    Header("Location: index.php");
    // Logged out, return home.
//    Header("Location: index.php");
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
