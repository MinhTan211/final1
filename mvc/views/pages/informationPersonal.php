<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Cake Template">
    <meta name="keywords" content="Cake, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cake | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../public/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../public/css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="../public/css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="../public/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="../public/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../public/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../public/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../public/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../public/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../public/css/style.css" type="text/css">
    <link rel="stylesheet" href="../public/css/index.css" type="text/css">

    <!--font mater-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Round" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Sharp" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Two+Tone" rel="stylesheet">

    <script type="text/javascript">
        function onFileSelected(event) {
            var selectedFile = event.target.files[0];
            var reader = new FileReader();

            var imgtag = document.getElementById("ImgCus");
            imgtag.title = selectedFile.name;

            reader.onload = function(event) {
                imgtag.src = event.target.result;
            };

            reader.readAsDataURL(selectedFile);
}
    </script>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="header__menu mobile-menu fixed-top" style="background-color:#fcc77b;">
                        <ul>
                            <li><a href="./index">Trang Ch???</a></li>
                            <li><a href="./trademark">Th????ng Hi???u</a></li>
                            <li><a href="./shop">?????t H??ng</a></li>
                            <?php
                                include 'ButtonLogout.php';
                                include 'ButtonCart.php';
                            ?>
                            <li class="active">
                            <a href="./informationPersonal" style="padding-left: 20px;"><img src="../public/img/img_logo/logo1.png" style="height: 40px; width: 40px;"><label style="margin-left: 10px; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; color: white;">TT.LT</label></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <form action="#" method="POST" enctype="multipart/form-data">
                <?php
                     $customer = $this->model('CustomerModel')->ChitietKH($_SESSION["Username"])->fetch_row();
                ?>
                    <div class="row">
                        <div class="about__text">
                            <div class="section-title">
                                <span>TH??NG TIN C?? NH??N</span>
                                <span>-------------------------------------------------------------------------------------------------</span>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" style="text-align: center;">
                            <img style="width: 300px; height: 360px;" src = "../uploads/<?php echo $customer[8] ?>">
                            </br>
                            <div style="margin-top: 20px; padding-left: 45px;">
                            <a style="text-align: center; margin-right: 50px;"><?php echo $customer[1] ?><span class="material-icons" style="color: black; margin-left: 10px;">
                                edit
                                </span></a>
                            </div>
                            
                            <div class="vertical-menu" style="margin-top: 30px; margin-left: 30px;">
                                <a href="./informationPersonal" class="active">C???p Nh???t Th??ng Tin</a>
                            </div>
                            <div class="vertical-menu" style="margin-top: 30px; margin-left: 30px;">
                                <a href="./historybuy" class="active">L???ch S??? Mua H??ng</a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5">
                            <div class="checkout__input">
                                <p>H??? V?? T??n<span>*</span></p>
                                <input name="TenKH" type="text" value="<?php echo $customer[1] ?>">
                            </div>
                            <div class="checkout__input">
                                <p>?????a Ch???<span>*</span></p>
                                <input name="Address" type="text" placeholder="T??n ph?????ng,&ensp;x??,&ensp;th??nh ph???..." class="checkout__input__add" value="<?php echo $customer[2]?>">
                            </div>
                            <div class="checkout__input">
                                <p>Email<span>*</span></p>
                                <input name="Email" type="text" placeholder="Email..." class="checkout__input__add" <?php echo $customer[3] ?>>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>S??? ??i???n Tho???i<span>*</span></p>
                                        <input name="Numberphone" type="text" value="<?php echo $customer[4] ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                    <p>Gi???i T??nh<span>*</span></p>
                                        <?php
                                            if($customer[5] == 1)
                                            {
                                                echo "<input style='width: 15px; height: 15px;' type='radio' name='gander' value='Nu'><span class='material-icons'>
                                                female
                                                </span>
                                            <input style='width: 15px; height: 15px; margin-left: 15px; margin-top: 15px;' type='radio' name='gander' value='Nam' checked><span class='material-icons'>
                                                male
                                                </span>";
                                            }else{
                                                echo "<input style='width: 15px; height: 15px;' type='radio' name='gander' value='Nu' checked><span class='material-icons'>
                                                female
                                                </span>
                                            <input style='width: 15px; height: 15px; margin-left: 15px; margin-top: 15px;' type='radio' name='gander' value='Nam' ><span class='material-icons'>
                                                male
                                                </span>";
                                            }
                                        ?>   
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Ng??y Sinh<span>*</span></p>
                                        <input type="date" id="day" name="Birthday" value="<?php echo $customer[6] ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <a href="#">
                                <img id="ImgCus" src="../public/img/img_logo/icon.png" style="font-size: 120px; margin-top: 10px; margin-left: 80px; height: 250px;">
                            </a>
                            <input name="file" type="file" onchange="onFileSelected(event)" style=" margin-top: 20px; margin-left: 80px; background: transparent; background: transparent;">
                        </div>
                    </div>
                    <?php
                        if($_SERVER["REQUEST_METHOD"] == "POST")
                        {
                            $TenKH          = "";
                            $Address        = "";
                            $Email          = "";
                            $Numberphone    = "";
                            $Gender         = "";
                            $Birthday       = "";
                            $ImgCus         = "";
                            if (isset($_POST["TenKH"])) {
                                $TenKH = $_POST['TenKH'];
                            }
                            if (isset($_POST["Email"])) {
                                $Email = $_POST['Email'];
                            }
                            if (isset($_POST["Address"])) {
                                $Address = $_POST['Address'];
                            }
                            if (isset($_POST["Numberphone"])) {
                                $Numberphone = $_POST['Numberphone'];
                            }
                            if (isset($_POST["Birthday"])) {
                                $Birthday = $_POST['Birthday'];
                            }
                            if(isset($_POST['gander'])){
                                $gender1 = $_POST['gander'];
                                if($gender1 == 'Nam')
                                {
                                    $Gender = 1;
                                }else{
                                    $Gender = 0;
                                }
                            }
                            if(!empty($ImgCus) && !empty($customer[8]))
                                if(file_exists('uploads/'.$customer[8]))
                                    unlink('uploads/'.$customer[8]);
                            if ($_FILES['file']['name'] != NULL) { // ???? ch???n file
                                    $path = "uploads/";
                                $tmp_name = $_FILES['file']['tmp_name'];
                                $arr = $_FILES['file']['name'];
                                $arr = $customer[7]."_1.jpg";
                                move_uploaded_file($tmp_name,$path.$arr);
                            }
                            $ImgCus = $arr;
                            $customer = $this->model('CustomerModel')->ChitietKH($_SESSION["Username"])->fetch_row();
                            $id             = $customer[0];
                            $ifmation       = $this->model('CustomerModel');
                            $ifmation->addinf($id, $TenKH, $Address, $Email, $Numberphone, $Gender, $Birthday, $ImgCus);
                            echo "<script type='text/javascript'>
                                    window.location = 'http://localhost/Final/Home/shop'
                                    </script>";
                        } 
                    ?>
                    <button class="btn3" style="margin-left: 580px; background: transparent; margin-top: 1000px;">
                        <span class="btn-label">L??u</span></button>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer set-bg" data-setbg="../public/img/footer-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>KHUNG GI??? L??M VI???C</h6>
                        <ul>
                            <li>Th??? 2 - Th??? 6:&ensp; 08:00h &ensp; ??? &ensp;21:30h</li>
                            <li>Th??? 7:&ensp; 08:00h &ensp; ??? &ensp;16:00h</li>
                            <li>Ch??? Nh???t:&ensp; 10:00 am &ensp;??? &ensp;16:00 pm</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="../public/img/img_logo/logo1.png" style="height: 150px; width: 150px;" alt=""></a>
                        </div>
                        <p>Ch??ng t??i cung c???p cho b???n v???i ngon th???c ??n nhanh v???i c??ng th???c n???u ??n c???a ri??ng ch??ng t??i, gi??p b???n th?????ng th???c nh???ng m??n ??n ngon nh???t.</p>
                        <div class="footer__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__newslatter">
                        <h6>????ng K??</h6>
                        <p>Nh???p ??u ????i V?? C???p Nh???t S???m Nh???t</p>
                        <form action="#">
                            <input type="text" placeholder="Email">
                            <button type="submit"><i class="fa fa-send-o"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <p class="copyright__text text-white">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            All rights reserved | This template is made with
                            <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib & FF.TL</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                    <div class="col-lg-5">
                        <div class="copyright__widget">
                            <ul>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Fastfood@support.com</a></li>
                                <li><a href="#">08287584**</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="../public/js/jquery-3.3.1.min.js"></script>
    <script src="../public/js/bootstrap.min.js"></script>
    <script src="../public/js/jquery.nice-select.min.js"></script>
    <script src="../public/js/jquery.barfiller.js"></script>
    <script src="../public/js/jquery.magnific-popup.min.js"></script>
    <script src="../public/js/jquery.slicknav.js"></script>
    <script src="../public/js/owl.carousel.min.js"></script>
    <script src="../public/js/jquery.nicescroll.min.js"></script>
    <script src="../public/js/main.js"></script>
</body>

</html>