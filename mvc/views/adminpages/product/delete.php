<?php
if (!isset($_SESSION)) {
    session_start();
} else {
    if (isset($_SESSION["Role"])) {
        switch ($_SESSION["Role"]) {
            case 0:
                echo "<script type='text/javascript'>
                            window.location = 'http://localhost/Final/Home/Index'
                        </script>";
                break;
            default:
                break;
        }
    } else
        echo "<script type='text/javascript'>
                window.location = 'http://localhost/Final/Home/Login'
            </script>";
}
?>
<?php
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
    $getId = explode("=",filter_var(trim($_SERVER["REQUEST_URI"], "/")));
    $data = $this->model('productmodel')->ChitietSP($getId[1]);
    $prDetail = $data->fetch_row();
    for($i = 2; $i<=7;$i++){
        if(file_exists('uploads/'.$prDetail[$i])){
            unlink('uploads/'.$prDetail[$i]);
        }
    }
    $Xoa = $this->model('productmodel')->DeleteSP($getId[1])??false;
    echo "<script type='text/javascript'>
                window.location = 'http://localhost/Final/Admin/listproduct'
        </script>";
?>