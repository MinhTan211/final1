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
                    $arr = explode("=",filter_var(trim($_SERVER["REQUEST_URI"], "/")));
                    $id = $arr[1];
                    $suasp = $this->model("ProductModel");
                    $rs = $suasp->ChitietSP($id);
                    $row =  mysqli_fetch_assoc($rs);
                ?>
                <div class="col-lg-12">
                    <nav class="header__menu mobile-menu fixed-top" style="background-color:#fcc77b;">
                        <ul>
                            <li><a href="./index">Trang Chủ</a></li>
                            <li><a href="./trademark">Thương Hiệu</a></li>
                            <li class="active"><a href="./shop">Đặt Hàng</a></li>
                            <?php
                                include 'ButtonLogout.php';
                            ?>
                            <li>
                                <a href="./shopcart"><img src="../public/img/icon/bag.png" style="height: 25px;"> <span>0</span> Cart: <span>$0.00</span></a>
                            </li>
                            <a href="./informationPersonal" style="padding-left: 20px;"><img src="../public/img/img_logo/logo1.png" style="height: 40px; width: 40px;"><label style="margin-left: 10px; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; color: white;">TT.LT</label></a>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="about__text" style="margin-top: 50px;">
                    <div class="section-title">
                        <h2>Chi Tiết Sản Phẩm</h2>
                        <span>-------------------------------------------------------------------------------------------------</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Shop Details Section Begin -->
    <section class="product-details spad" style="margin-top: -100px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product__details__img">
                        <div class="product__details__big__img">
                            <img name="ImgBig" style="height: 450px; height: 450px;" class="big_img" src="../uploads/<?php echo $row["ImgBig"] ?>" alt="">
                        </div>
                        <div class="product__details__thumb">
                            <div class="pt__item active">
                                <img name="ImgSmallfisrt" style="width: 90px; height: 90px;" data-imgbigurl="../uploads/<?php echo $row["ImgSmallfisrt"] ?>" src="../uploads/<?php echo $row["ImgSmallfisrt"] ?>" alt="">
                            </div>
                            <div class="pt__item">
                                <img name="ImgSmallsecond" style="width: 90px; height: 90px;" data-imgbigurl="../uploads/<?php echo $row["ImgSmallsecond"] ?>" src="../uploads/<?php echo $row["ImgSmallsecond"] ?>" alt="">
                            </div>
                            <div class="pt__item">
                                <img name="ImgSmallthird" style="width: 90px; height: 90px;" data-imgbigurl="../uploads/<?php echo $row["ImgSmallthird"] ?>" src="../uploads/<?php echo $row["ImgSmallthird"] ?>" alt="">
                            </div>
                            <div class="pt__item">
                                <img name="ImgSmallfourth" style="width: 90px; height: 90px;" data-imgbigurl="../uploads/<?php echo $row["ImgSmallfourth"] ?>" src="../uploads/<?php echo $row["ImgSmallfourth"] ?>" alt="">
                            </div>
                            <div class="pt__item">
                                <img name="ImgSmallfifth" style="width: 90px; height: 90px;" data-imgbigurl="../uploads/<?php echo $row["ImgSmallfifth"] ?>" src="../uploads/<?php echo $row["ImgSmallfifth"] ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product__details__text">
                        <div class="product__label"><?php echo $row["TenLSP"] ?></div>
                        <h4><?php echo $row["TenSP"] ?></h4>
                        <h5><?php echo $row["Gia"]?> VNĐ</h5>
                        <p><?php echo $row["MoTa"] ?></p>
                        <div class="product__details__option" style="margin-top: 148px;">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" value="2">
                                </div>
                            </div>
                            <a href="#" class="primary-btn">Thêm Vào Giỏ Hàng</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__details__tab">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Mô Tả Hương Vị</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Xuất Xứ</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-8">
                                    <p><?php echo $row["MoTa"] ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-2" role="tabpanel">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-8">
                                    <p><?php echo $row["TenLSP"]?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Details Section End -->

    <!-- Related Products Section Begin -->
    <section class="related-products spad">
        <div class="container">
            <div class="row">
                <div class="about__text">
                    <div class="section-title">
                        <span>-------------------------------------------------------------------------------------------------</span>
                    </div>
                </div>
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>Sản Phẩm Tương Tự</h2>
                    </div>
                </div>
                <div class="about__text">
                    <div class="section-title">
                        <span>-------------------------------------------------------------------------------------------------</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="related__products__slider owl-carousel">
                    <?php
                        $MaLSP  = $row["MaLSP"];
                        $Show   = $this->model("ProductModel");
                        $data   = $Show->Show($MaLSP);
                        while($row1 =  mysqli_fetch_array($data))
                        {
                            echo "<div class='col-lg-3'>
                            <div class='product__item'>
                                <div class='product__item__pic set-bg'>
                                    <img src='../uploads/"; echo $row1["ImgBig"]."'style='height: 260px; width: 260px;'>
                                    <div class='product__label'>
                                        <span>"; echo $row1["TenLSP"]."</span>
                                    </div>
                                </div>
                                <div class='product__item__text'>";
                                $id = $row1["MaSP"];
                                echo "
                                    <h6><a href='../detail?id=";echo $row1[0]."'>"; echo $row1["TenSP"]."</a></h6>
                                    <div class='product__item__price'>$32.00</div>
                                    <div class='cart_add'>
                                        <a href='#'>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>";
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Related Products Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer set-bg" data-setbg="../public/img/footer-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>KHUNG GIỜ LÀM VIỆC</h6>
                        <ul>
                            <li>Thứ 2 - Thứ 6:&ensp; 08:00h &ensp; – &ensp;21:30h</li>
                            <li>Thứ 7:&ensp; 08:00h &ensp; – &ensp;16:00h</li>
                            <li>Chủ Nhật:&ensp; 10:00 am &ensp;– &ensp;16:00 pm</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="../public/img/img_logo/logo1.png" style="height: 150px; width: 150px;" alt=""></a>
                        </div>
                        <p>Chúng tôi cung cấp cho bạn với ngon thức ăn nhanh với công thức nấu ăn của riêng chúng tôi, giúp bạn thưởng thức những món ăn ngon nhất.</p>
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
                        <h6>Đăng Ký</h6>
                        <p>Nhập Ưu Đãi Và Cập Nhật Sớm Nhất</p>
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