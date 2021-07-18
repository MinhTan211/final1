<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    else{
        if(isset($_SESSION["Role"])){
            switch($_SESSION["Role"]){
                case 0:
                    echo "<script type='text/javascript'>
                            window.location = 'http://localhost/Final/Home/Index'
                        </script>";
                    break;
                default:
                    break;
            }
        }
        else
        echo "<script type='text/javascript'>
                window.location = 'http://localhost/Final/Home/Login'
            </script>";
    }
?>