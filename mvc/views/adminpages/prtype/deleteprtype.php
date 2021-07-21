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
    function curPageURL() {
        $pageURL = 'http';
        if ($_SERVER["HTTPS"]??null == "on") {$pageURL .= "s";}
        $pageURL .= "://";
        if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
        } else {
        $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
        }
        return $pageURL;
        }
    curPageURL();
    $arr = explode("=",filter_var(trim($_SERVER["REQUEST_URI"], "/")));
    $this->model('ProductTypeModel')->XoaLSP($arr[1])??false;
    echo "<script type='text/javascript'>
        window.location = 'http://localhost/Final/Admin/listproducttype'
        </script>";
?>