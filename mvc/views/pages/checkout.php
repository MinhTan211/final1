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
                <div class="col-lg-12">
                    <nav class="header__menu mobile-menu fixed-top" style="background-color:#fcc77b;">
                        <ul>
                            <li><a href="./index">Trang Chủ</a></li>
                            <li><a href="./trademark">Thương Hiệu</a></li>
                            <li><a href="./shop">Đặt Hàng</a></li>
                            <li><a href="./login.php">Đăng Nhập</a>
                                <ul class="dropdown">
                                    <li><a href="./register">Đăng Ký</a></li>
                                </ul>
                            </li>
                            <li class="active">
                                <a href="./shopcart"><img src="../public/img/icon/bag.png" style="height: 25px;"> <span>0</span> Cart: <span>$0.00</span></a>
                            </li>
                            <a href="./informationpersonal" style="padding-left: 20px;"><img src="../public/img/img_logo/logo1.png" style="height: 40px; width: 40px;"><label style="margin-left: 10px; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; color: white;">TT.LT</label></a>
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
                <form action="#">
                    <div class="row">
                        <div class="about__text">
                            <div class="section-title">
                                <span>Chi Tiết Hóa Đơn</span>
                                <span>-------------------------------------------------------------------------------------------------</span>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6">
                            <div class="checkout__input">
                                <p>Họ Và Tên<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="checkout__input">
                                <p>Địa Chỉ<span>*</span></p>
                                <input type="text" placeholder="Tên phường,&ensp;xã,&ensp;thành phố..." class="checkout__input__add">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Số Điện Thoại<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Ghi Chú Gọi Món<span>*</span></p>
                                <input type="text" placeholder="Ghi chú những gì bạn muốn...">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" style="margin-top: 25px;">
                            <div class="checkout__order" style="width: 520px;">
                                <h6 class="order__title" style="text-align: center; font-size: 35px;">Your order</h6>
                                <table style="width: 500px;">
                                    <tr style="height: 70px;">
                                        <th style="width: 200px; padding-left: 20px;">Sản Phẩm</th>
                                        <th style="width: 100px; text-align: center;">Số Lượng</th>
                                        <th style="width: 150px; text-align: center;">Giá</th>
                                    </tr>
                                    <tr style="height: 45px;">
                                        <td style="width: 200px;">Bánh Tráng Trộn</td>
                                        <td style="width: 100px; text-align: center;">1</td>
                                        <td style="width: 150px; text-align: center;">15.000 VNĐ</td>
                                    </tr>
                                    <tr style="height: 45px;">
                                        <td style="width: 200px;">Bánh Donut</td>
                                        <td style="width: 100px; text-align: center;">1</td>
                                        <td style="width: 150px; text-align: center;">25.000 VNĐ</td>
                                    </tr>
                                    <tr style="height: 45px;">
                                        <td style="width: 200px;">Bánh xèo</td>
                                        <td style="width: 100px; text-align: center;">1</td>
                                        <td style="width: 150px; text-align: center;">45.000 VNĐ</td>
                                    </tr>
                                </table>
                                <ul class="checkout__total__all">
                                    <li>Mã Giảm <span>5.000 VNĐ</span></li>
                                    <li>Tổng Giá <span>80.000 VNĐ</span></li>
                                </ul>
                                <button style="padding-top: 15px; margin-top: -30px; width: 260px; margin-top: 30px; margin-left: 100px;" type="submit" class="btn btn-secondary" data-hover="Cảm Ơn!!"><div>Đặt Ngay</div></button>
                            </div>
                        </div>
                    </div>
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