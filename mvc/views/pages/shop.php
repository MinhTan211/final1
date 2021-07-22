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
                            <li class="active"><a href="./shop">Đặt Hàng</a></li>
                            <?php
                            include 'ButtonLogout.php';
                            ?>
                            <li>
                                <a href="./shopcart"><img src="../public/img/icon/bag.png" style="height: 25px;">
                                    <span>0</span> Cart: <span>$0.00</span></a>
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
                <div class="about__text">
                    <div class="section-title" style="margin-top: 50px;">
                        <h2 style="font-size: 80px; margin-bottom: 10px;">Đặt Hàng</h2>
                        <span>-------------------------------------------------------------------------------------------------</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Shop Section Begin -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#search").keyup(function() {
                var query = $(this).val();
                if (query != "") {
                    $.ajax({
                        url: 'ketqua',
                        method: 'POST',
                        data: {
                            query: query
                        },
                        success: function(data) {
                            $('#search_result').html(data);
                            $('#search_result').css('display', 'block');

                            $("#live_search").focusout(function() {
                                $('#search_result').css('display', 'none');
                            });
                            $("#live_search").focusin(function() {
                                $('#search_result').css('display', 'block');
                            });
                        }
                    });
                } else {
                    $('#search_result').css('display', 'none');
                }
            });
        });
    </script>
    <section class="shop spad" style="margin-top: -50px; margin-left: -30px;">
        <div class="container">
            <div class="shop__option">
                <div class="row">
                    <div class="col-lg-7 col-md-7">
                        <div class="shop__option__search">
                            <form method="POST">
                                <select name="MaLSP" onchange="this.form.submit()">
                                    <?php
                                    $getpr  = $this->model("ProductModel");
                                    $data = $getpr->Getpr();
                                    while ($row =  mysqli_fetch_array($data)) {
                                        echo "<option value='";
                                        echo $row["TenLSP"] . "/" . $row["MaLSP"] . "' name='TenLSP'>";
                                        echo $row["TenLSP"] . "</button></option>";
                                        $tui = $row[0];
                                    }
                                    $ArrayMaLSP          = $_POST['MaLSP'];
                                    $ma = explode("/", filter_var(trim($ArrayMaLSP, "/")));
                                    $MaLSP          = $ma[1];
                                    $TenLSP         = $ma[0];
                                    ?>
                                </select>
                                <style>
                                    .dropbtn {
                                        background-color: #fff;
                                        color: white;
                                        padding: 16px;
                                        font-size: 16px;
                                        border: none;
                                    }

                                    .dropup {
                                        width: 300px;
                                        height: 44px;
                                        position: relative;
                                        display: inline-block;
                                    }

                                    .dropup-content {
                                        display: none;
                                        position: absolute;
                                        background-color: #fafafa;
                                        min-width: 490px;
                                        top: 45px;
                                        right: -190px;
                                        z-index: 1;
                                        border-bottom-left-radius: 30px;
                                        border-bottom-right-radius: 30px;
                                    }

                                    .dropup-content a {
                                        color: black;
                                        padding: 12px 16px;
                                        text-decoration: none;
                                        display: block;
                                    }

                                    .dropup-content a:hover {
                                        background-color: #fafafa;
                                        border-bottom-left-radius: 30px;
                                        border-bottom-right-radius: 30px;
                                    }

                                    .dropup:hover .dropup-content {
                                        display: block;
                                    }

                                    .dropup:hover .dropbtn {
                                        background-color: #fff;
                                    }
                                </style>
                                <div class="dropup">
                                <input type="text" id="search" name="search" placeholder="Search" class="dropbtn">
                                <div class="dropup-content" style="margin-left: 130px;">
                                    <div id="search_result"></div>
                                </div>
                                </div>
                                <button name="up" style="margin-top: 0px;" type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                $loadsp = $this->model("ProductModel");
                if (isset($_POST['up'])) {
                    if (isset($_POST["search"])) {
                        $TenSP = $_POST['search'];
                    }
                    $data = $loadsp->SearchSP($TenSP);
                } elseif (isset($_POST['MaLSP'])) {
                    $ArrayMaLSP          = $_POST['MaLSP'];
                    $ma = explode("/", filter_var(trim($ArrayMaLSP, "/")));
                    $MaLSP          = $ma[1];
                    $data =  $loadsp->Show($MaLSP);
                } else {
                    $data = $loadsp->LoadSP();
                }
                while ($row =  mysqli_fetch_array($data)) {
                    echo "<div class='col-lg-3 col-md-6 col-sm-6'>
                        <div class='product__item'>
                            <div class='product__item__pic set-bg'>
                                <a href = './shopdetail?id=";
                    echo $row[0] . "'><img src='../uploads/";
                    echo $row["ImgBig"] . "' style='width: 270px; height: 270px;'><a>
                                <div class='product__label'>
                                    <span>";
                    echo $row["TenLSP"] . "</span>
                                </div>
                            </div>
                            <div class='product__item__text'>
                                <h6><a href='./shopdetail?id=";
                    echo $row[0] . "'>";
                    echo $row["TenSP"] . "</a></h6>
                                <div class='product__item__price'>";
                    echo $row["Gia"] . " VNĐ</div>
                                <div class='cart_add'>
                                    <a href='./cart?action=add&id=" . $row[0] . "&SoLuong=1'>Thêm Giỏ Hàng</a>
                                </div>
                            </div>
                        </div>
                    </div>";
                }
                ?>
            </div>
            <div class="shop__last__option">
                <div class="row">
                    <div style="margin-left: -80px;" class="col-lg-6 col-md-6 col-sm-6">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->

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
                        <p>Chúng tôi cung cấp cho bạn với ngon thức ăn nhanh với công thức nấu ăn của riêng chúng tôi,
                            giúp bạn thưởng thức những món ăn ngon nhất.</p>
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