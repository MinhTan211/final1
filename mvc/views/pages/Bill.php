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
    $getTong = explode("=",filter_var(trim($_SERVER["REQUEST_URI"], "/")));
    $customer = $this->model('CustomerModel')->ChitietKH($_SESSION["Username"])->fetch_row();
    $model = $this->model('ProductModel');
    if(!empty($getTong[1])){
        $MaHD = $this->model('ShopModel')->AddBill($customer[0], count($_SESSION['cart']), $getTong[1]);
        foreach($_SESSION['cart'] as $id => $value){
            $row = $model->ChitietSP($id)->fetch_row();
            $this->model('BillDetailModel')->AddBillDetail($MaHD, $id, $row[9], $_SESSION['cart'][$id]["SoLuong"]);
        }
    }
    unset($_SESSION['cart']);
    echo "<script type='text/javascript'>
                window.location = 'http://localhost/Final/Home/shop'
            </script>";
?>