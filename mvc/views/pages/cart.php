<?php
    if(!isset($_SESSION)) 
    { 
        session_start();
    }
    if(!isset($_SESSION["Role"]))
        echo "<script type='text/javascript'>
                window.location = 'http://localhost/Final/Home/login'
            </script>";
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
    $getAdd = explode("=",filter_var(trim($_SERVER["REQUEST_URI"], "/")));
    $getAdd[1] = explode("&", $getAdd[1]);
    $getAdd[2] = explode("&", $getAdd[2]);
    $getAdd[3] = explode("&", $getAdd[3]);
    $id = $getAdd[2][0];
    if(empty($getAdd[3][1]))
        $SL = 1;
    else
        $SL = $getAdd[3][1];
    if($SL<0)
        $SL = 0;
    $action = $getAdd[1][0];
    $data = $this->model('ProductModel')->ChitietSP($id);
    $SanPham = $data->fetch_row();
    if(mysqli_num_rows($data)==0){
        echo "<script type='text/javascript'>
            alert('Sản phẩm không tồn tại');
            </script>";
    }
    else
        switch($action){
            case 'add':
                if(isset($_SESSION['cart'][$id]))
                    $_SESSION['cart'][$id]['SoLuong']+=$SL;
                else
                    $_SESSION['cart'][$id]=array("SoLuong"=>$SL, "Gia"=>$SanPham[9]);
                }
                break;
            case 'edit':
                if(isset($_SESSION['cart'][$id])){
                    if($SL==0)
                        $_SESSION['cart'][$id].unset();
                    else
                        $_SESSION['cart'][$id]['SoLuong'] = $SL;
                }
                else
                    echo "<script type='text/javascript'>
                        alert('Sản phẩm không tồn tại trong giỏ hàng');
                        </script>";
                break;
            case 'remove':
                if(isset($_SESSION['cart'][$id])){
                    $_SESSION['cart'][$id].unset();
                }
                else
                    echo "<script type='text/javascript'>
                        alert('Sản phẩm không tồn tại trong giỏ hàng');
                        </script>";
                break;
        }
    echo "<script type='text/javascript'>
        window.location = 'http://localhost/Final/Home/shop'
        </script>";
?>