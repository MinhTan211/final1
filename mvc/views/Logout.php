<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
        echo "<script type='text/javascript'>
                window.location = 'http://localhost/Final/Home/Login'
            </script>";
    }
    else{
        unset($_SESSION["Username"]);
        unset($_SESSION["Password"]);
        unset($_SESSION["Role"]);
        echo "<script type='text/javascript'>
                window.location = 'http://localhost/Final/Home/Login'
            </script>";
    }
?>