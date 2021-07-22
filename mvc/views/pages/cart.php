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
    $action = $getAdd[1][0];
    if($action == "delete"){
        unset($_SESSION['cart']);
    }
    else{
        $getAdd[2] = explode("&", $getAdd[2]);
        $id = $getAdd[2][0];
        if(empty($getAdd[3]))
            $SL = 1;
        else{
            $getAdd[3] = explode("&", $getAdd[3]);
            $SL = $getAdd[3][0];
        }
        if($SL<0)
            $SL = 0;
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
                        $_SESSION['cart'][$id]=array("SoLuong"=>$SL, "Gia"=>$SanPham[9], "TenSP" =>$SanPham[1]);
                    break;
                case 'edit':
                    if(isset($_SESSION['cart'][$id])){
                        if($SL==0)
                            unset($_SESSION['cart'][$id]);
                        else
                            $_SESSION['cart'][$id]['SoLuong'] = $SL;
                        echo "<script type='text/javascript'>
                            window.location = 'http://localhost/Final/Home/shopcart'
                            </script>";
                    }
                    else
                        echo "<script type='text/javascript'>
                            alert('Sản phẩm không tồn tại trong giỏ hàng');
                            </script>";
                    break;
                case 'remove':
                    if(isset($_SESSION['cart'][$id])){
                        unset($_SESSION['cart'][$id]);
                        echo "<script type='text/javascript'>
                            window.location = 'http://localhost/Final/Home/shopcart'
                        </script>";
                    }
                    else
                        echo "<script type='text/javascript'>
                            alert('Sản phẩm không tồn tại trong giỏ hàng');
                            </script>";
                    break;
            }
    }
    echo "<script type='text/javascript'>
        window.location = 'http://localhost/Final/Home/shop'
        </script>";
?>