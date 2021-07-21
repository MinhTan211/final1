<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    else{
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $Username = $_POST['username'];
            $Password = $_POST['pass'];
            $Role = 0;
            $themtk = $this->model("AcountModel");
            $CheckTK = $themtk->CheckTK($Username);
            if($CheckTK == 0){
                $data[$themtk->ThemTK($Username,$Password, $Role)]??null;
                if($Role == 0){
                    $themkh = $this->model("CustomerModel");
                    $datakh[$themkh->ThemKH($Username)]??null;
                    $_SESSION["Username"] = $Username;
                    $_SESSION["Password"] = $Password;
                    $_SESSION["Role"] = $Role;
                }
                echo "<script type='text/javascript'>
                    window.location = 'http://localhost/Final/Home/shop'
                    </script>";
            }
            else{
                echo "<script type = 'text/javascript'>
                let isExecuted = confirm('Tài Khoản Đã Tồn Tại Xin Nhập Lại');
                console.log(isExecuted);
                </script>
                ";
            }
        }
        if(isset($_SESSION["Role"])){
            switch($_SESSION["Role"]){
                case 0:
                    echo "<script type='text/javascript'>
                            window.location = 'http://localhost/Final/Home/shop'
                        </script>";
                    break;
                case 1:
                    echo "<script type='text/javascript'>
                            window.location = 'http://localhost/Final/Admin/dashboard'
                        </script>";
                    break;
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V18</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../public/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../public/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../public/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../public/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../public/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../public/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../public/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->

    <link rel="stylesheet" type="text/css" href="../public/css/util.css">
    <link rel="stylesheet" type="text/css" href="../public/css/main.css">
    <link rel="stylesheet" type="text/css" href="../public/css/index.css">
    <!--===============================================================================================-->
</head>

<body>
    <script type="text/javascript">
        function matchpass() {
            var firstpassword = document.form.pass.value;
            var secondpassword = document.form.repass.value;

            if (firstpassword == secondpassword) {
                return true;
            } else {
                alert("Xác nhận mật khẩu sai");
                return false;
            }
        }
    </script>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form name="form" action="" method="POST" onSubmit="return matchpass()" class="login100-form validate-form"
                    style="height: 100px;background-color:#fce5c5;">
                    <img src="../public/img/img_logo/logo1.png" style="width: 150px;
                    height: 150px; margin-top: -190px; margin-left: 140px;">
                    <span class="login100-form-title p-b-43">
                        FF.LT Kính Chào
                    </span>
                    <div class="wrap-input100" style="border-color: black;">
                        <input class="input100" type="text" name="username" required>
                        <span class="focus-input100"></span>
                        <span class="label-input100">Username</span>
                    </div>


                    <div class="wrap-input100" style="border-color: black;">
                        <input class="input100" type="password" name="pass" required>
                        <span class="focus-input100 "></span>
                        <span class="label-input100 ">Mật Khẩu</span>
                    </div>
                    <div class="wrap-input100" style="border-color: black;">
                        <input class="input100" type="password" name="repass" required>
                        <span class="focus-input100"></span>
                        <span class="label-input100">Xác Nhận Mật Khẩu</span>
                    </div>
                    <div class="container-login100-form-btn" style="margin-top: 30px;">
                        <button type="submit" style="height: 50px; width: 300px; " class="btn"
                            data-hover="ORDER NOW! ">
                            <div>ĐĂNG KÝ</div>
                        </button>
                    </div>
                    <div class="login100-form-social flex-c-m m-t-10" style="margin-left: 35px;">
                        <a href="./shop"
                            style="height: 50px; border: none; margin-top: 7px; font-size: 18px; margin-left: -30px;"
                            class="btn " data-hover="◄◄◄">
                            <div style="font-size: 13px;">Mua Hàng</div>
                        </a>
                        <a style="width: 20px; margin-left: -30px; text-align: left;">|</a>
                        <a href="./login"
                            style="height: 50px; border: none; margin-top: 7px; font-size: 18px; margin-left: -48px;"
                            class="btn " data-hover="►►►">
                            <div style="font-size: 13px;">Đăng Nhập</div>
                        </a>
                    </div>
                </form>
                <div class="login100-more "
                    style="background-image: url( '../public/img/img_background_header/header2.jpg'); ">
                </div>
            </div>
        </div>
    </div>






    <!--===============================================================================================-->
    <script src="../public/vendor/jquery/jquery-3.2.1.min.js "></script>
    <!--===============================================================================================-->
    <script src="../public/vendor/animsition/js/animsition.min.js "></script>
    <!--===============================================================================================-->
    <script src="../public/vendor/bootstrap/js/popper.js "></script>
    <script src="../public/vendor/bootstrap/js/bootstrap.min.js "></script>
    <!--===============================================================================================-->
    <script src="../public/vendor/select2/select2.min.js "></script>
    <!--===============================================================================================-->
    <script src="../public/vendor/daterangepicker/moment.min.js "></script>
    <script src="../public/vendor/daterangepicker/daterangepicker.js "></script>
    <!--===============================================================================================-->
    <script src="../public/vendor/countdowntime/countdowntime.js "></script>
    <!--===============================================================================================-->
    <script src="../public/js/main1.js "></script>
</body>

</html>