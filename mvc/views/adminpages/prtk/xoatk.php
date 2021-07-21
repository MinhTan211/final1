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
    $getidXoa = explode("=",filter_var(trim($_SERVER["REQUEST_URI"], "/")));
    if(empty($getidXoa[1]))
        echo "<script type='text/javascript'>
                    window.location = 'http://localhost/Final/Admin/listaccoun'
                    </script>";
    else{
        $model = $this->model('AcountModel');
        $model->XoaTK($getidXoa[1])??false;
        $Role = $model->GetVaiTro($getidXoa[1])->fetch_row();
        if($Role==0)
            $this->model('CustomerModel')->XoaKH($getidXoa[1])??false;
        echo "<script type='text/javascript'>
                    window.location = 'http://localhost/Final/Admin/listaccoun'
                    </script>";
    }
?>