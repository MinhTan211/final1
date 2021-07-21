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
<!--
=========================================================
Material Dashboard - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Material Dashboard by Creative Tim
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="../public/admin/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../public/admin/demo/demo.css" rel="stylesheet" />
    <link href="../public/admin/css/my.css" rel="stylesheet" />
    <link href="../public/admin/css/input.css" rel="stylesheet" />
    <link href="../public/admin/css/button.css" rel="stylesheet" />
    <script type="text/javascript">
        function onFileSelected(event) {
            var selectedFile = event.target.files[0];
            var reader = new FileReader();
            var imgtag = document.getElementById("ImgBig");
            imgtag.title = selectedFile.name;
            reader.onload = function(event) {
                imgtag.src = event.target.result;
            };
            reader.readAsDataURL(selectedFile);

            var selectedFile = event.target.files[1];
            var reader1 = new FileReader();
            var imgtag1 = document.getElementById("ImgSmallfisrt");
            imgtag1.title = selectedFile.name;
            reader1.onload = function(event) {
                imgtag1.src = event.target.result;
            };
            reader1.readAsDataURL(selectedFile);

            var selectedFile = event.target.files[2];
            var reader2 = new FileReader();
            var imgtag2 = document.getElementById("ImgSmallsecond");
            imgtag2.title = selectedFile.name;
            reader2.onload = function(event) {
                imgtag2.src = event.target.result;
            };
            reader2.readAsDataURL(selectedFile);


            var selectedFile = event.target.files[3];
            var reader3 = new FileReader();
            var imgtag3 = document.getElementById("ImgSmallthird");
            imgtag3.title = selectedFile.name;
            reader3.onload = function(event) {
                imgtag3.src = event.target.result;
            };
            reader3.readAsDataURL(selectedFile);

            var selectedFile = event.target.files[4];
            var reader4 = new FileReader();
            var imgtag4 = document.getElementById("ImgSmallfourth");
            imgtag4.title = selectedFile.name;
            reader4.onload = function(event) {
                imgtag4.src = event.target.result;
            };
            reader4.readAsDataURL(selectedFile);

            var selectedFile = event.target.files[5];
            var reader5 = new FileReader();
            var imgtag5 = document.getElementById("ImgSmallfifth");
            imgtag5.title = selectedFile.name;
            reader5.onload = function(event) {
                imgtag5.src = event.target.result;
            };
            reader5.readAsDataURL(selectedFile);
        }
    </script>
</head>

<body background="../public/img/img_background_header/header3.jpg">
    <div class="main-panel" style="margin-right: 50px; margin-top: -70px;">
        <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-header card-header-primary" style="background: #f5e0c2; margin-top: -45px;">
                                <h4 class="card-title" style="color: black; text-align: center; font-size: 40px; font-family:'Courier New', Courier,">THÊM SẢN PHẨM</h4>
                                <p class="card-category"></p>
                            </div>
                            <div class="card-body" style="margin-top: 30px; margin-left: 50px;">
                                <form style="font-family: Courier New;" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="page">
                                                <label class="field field_v1">
                                                    <input name="TenSP" class="field__input" placeholder="Xin mời nhập...">
                                                    <span class="field__label-wrap">
                                                        <span class="field__label">Tên Sản Phẩm</span>
                                                    </span>
                                                </label>
                                                <label class="field field_v2">
                                                    <input name="Gia" class="field__input" placeholder="Xin mời nhập...">
                                                    <span class="field__label-wrap">
                                                        <span class="field__label">Giá</span>
                                                    </span>
                                                </label>
                                                <label class="field field_v3">
                                                    <textarea name="MoTa" class="field__input" placeholder="Xin mời nhập..."></textarea>
                                                    <span class="field__label-wrap">
                                                        <span class="field__label">Mô Tả</span>
                                                    </span>
                                                </label>
                                                <label class="field field_v1" style="margin-bottom: 40px;">
                                                    <select name="MaLSP" class="field__input">
                                                        <?php
                                                        $getpr  = $this->model("ProductModel");
                                                        $data = $getpr->Getpr();
                                                        while ($row =  mysqli_fetch_array($data)) {
                                                            echo "<option value='";
                                                            echo $row["TenLSP"]."/".$row["MaLSP"]."' name='TenLSP'>";
                                                            echo $row["TenLSP"];
                                                            echo "</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <input name="file[]" type="file" multiple onchange="onFileSelected(event)">
                                            <?php
                                            if (isset($_POST['down'])) {
                                                $TenSP          = "";
                                                if ($_FILES['file']['name'] != NULL) { // Đã chọn file
                                                    $arr = $_FILES['file']['name'];  
                                                    $countfiles = count($_FILES['file']['name']);
                                                    // file hợp lệ, tiến hành upload
                                                    for ($i = 0; $i < $countfiles; $i++) {
                                                        $filename = $_FILES['file']['name'][$i];
                                                        // Upload file
                                                        move_uploaded_file($_FILES['file']['tmp_name'][$i], 'uploads/' . $filename);
                                                    }
                                                }
                                                $ImgBig         = $arr[0];
                                                $ImgSmallfisrt  = $arr[1];
                                                $ImgSmallsecond = $arr[2];
                                                $ImgSmallthird  = $arr[3];
                                                $ImgSmallfourth = $arr[4];
                                                $ImgSmallfifth  = $arr[5];
                                                $MoTa           = "";
                                                $Gia            = "";
                                                $ArrayMaLSP          = $_POST['MaLSP'];
                                                $ma = explode("/",filter_var(trim($ArrayMaLSP, "/")));
                                                $MaLSP          = $ma[1];
                                                $TenLSP         = $ma[0];
                                                if (isset($_POST["TenSP"])) {
                                                    $TenSP = $_POST['TenSP'];
                                                }
                                                if (isset($_POST["Gia"])) {
                                                    $Gia = $_POST['Gia'];
                                                }
                                                if (isset($_POST["MoTa"])) {
                                                    $MoTa = $_POST['MoTa'];
                                                }
                                                $themsp = $this->model("ProductModel");
                                                if($themsp->CheckSP($TenSP))
                                                {
                                                    echo "<script type='text/javascript'>
                                                    alert('Tên Sản Phẩm Đã Tồn Tại!');
                                                        </script>";
                                                }else{
                                                    $themsp->ThemSP($TenSP, $ImgBig, $ImgSmallfisrt, $ImgSmallsecond, $ImgSmallthird, $ImgSmallfourth, $ImgSmallfifth, $MoTa, $Gia, $MaLSP, $TenLSP);
                                                    echo "<script type='text/javascript'>
                                                                 window.location = 'http://localhost/Final/Admin/listproduct'
                                                          </script>";
                                                }
                                            }
                                            ?>
                                            <img id="ImgBig" src="../public/img/img_logo/Icon.png" style="width: 300px; height: 300px; margin-left: 30px; margin-top: 20px; border-radius: 20px;">
                                        </div>
                                    </div>
                                    <div style="margin-top: 5px; margin-bottom: 10px;">
                                        <img id="ImgSmallfisrt" src="../public/img/img_logo/Icon.png" style="width: 100px; height: 100px; margin-left: 60px; border-radius: 20px;">
                                        <img id="ImgSmallsecond" src="../public/img/img_logo/Icon.png" style="width: 100px; height: 100px; margin-left: 60px; border-radius: 20px;">
                                        <img id="ImgSmallthird" src="../public/img/img_logo/Icon.png" style="width: 100px; height: 100px; margin-left: 60px; border-radius: 20px;">
                                        <img id="ImgSmallfourth" src="../public/img/img_logo/Icon.png" style="width: 100px; height: 100px; margin-left: 60px; border-radius: 20px;">
                                        <img id="ImgSmallfifth" src="../public/img/img_logo/Icon.png" style="width: 100px; height: 100px; margin-left: 60px; border-radius: 20px;">
                                    </div>
                                    <button class="btn" name="down" style="margin-right: -130px; margin-bottom: -30px; width: 250px;">
                                        <span class="btn-label">Thêm Sản Phẩm</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="../public/admin/js/core/jquery.min.js"></script>
    <script src="../public/admin/js/core/popper.min.js"></script>
    <script src="../public/admin/js/core/bootstrap-material-design.min.js"></script>
    <script src="../public/admin/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!-- Plugin for the momentJs  -->
    <script src="../public/admin/js/plugins/moment.min.js"></script>
    <!--  Plugin for Sweet Alert -->
    <script src="../public/admin/js/plugins/sweetalert2.js"></script>
    <!-- Forms Validations Plugin -->
    <script src="../public/admin/js/plugins/jquery.validate.min.js"></script>
    <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
    <script src="../public/admin/js/plugins/jquery.bootstrap-wizard.js"></script>
    <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="../public/admin/js/plugins/bootstrap-selectpicker.js"></script>
    <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
    <script src="../public/admin/js/plugins/bootstrap-datetimepicker.min.js"></script>
    <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
    <script src="../public/admin/js/plugins/jquery.dataTables.min.js"></script>
    <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src="../public/admin/js/plugins/bootstrap-tagsinput.js"></script>
    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="../public/admin/js/plugins/jasny-bootstrap.min.js"></script>
    <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
    <script src="../public/admin/js/plugins/fullcalendar.min.js"></script>
    <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
    <script src="../public/admin/js/plugins/jquery-jvectormap.js"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="../public/admin/js/plugins/nouislider.min.js"></script>
    <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <!-- Library for adding dinamically elements -->
    <script src="../js/plugins/arrive.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chartist JS -->
    <script src="../public/admin/js/plugins/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../public/admin/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../public/admin/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="../public/admin/demo/demo.js"></script>
    <script>
        $(document).ready(function() {
            $().ready(function() {
                $sidebar = $('.sidebar');

                $sidebar_img_container = $sidebar.find('.sidebar-background');

                $full_page = $('.full-page');

                $sidebar_responsive = $('body > .navbar-collapse');

                window_width = $(window).width();

                fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

                if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
                    if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                        $('.fixed-plugin .dropdown').addClass('open');
                    }

                }

                $('.fixed-plugin a').click(function(event) {
                    // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                    if ($(this).hasClass('switch-trigger')) {
                        if (event.stopPropagation) {
                            event.stopPropagation();
                        } else if (window.event) {
                            window.event.cancelBubble = true;
                        }
                    }
                });

                $('.fixed-plugin .active-color span').click(function() {
                    $full_page_background = $('.full-page-background');

                    $(this).siblings().removeClass('active');
                    $(this).addClass('active');

                    var new_color = $(this).data('color');

                    if ($sidebar.length != 0) {
                        $sidebar.attr('data-color', new_color);
                    }

                    if ($full_page.length != 0) {
                        $full_page.attr('filter-color', new_color);
                    }

                    if ($sidebar_responsive.length != 0) {
                        $sidebar_responsive.attr('data-color', new_color);
                    }
                });

                $('.fixed-plugin .background-color .badge').click(function() {
                    $(this).siblings().removeClass('active');
                    $(this).addClass('active');

                    var new_color = $(this).data('background-color');

                    if ($sidebar.length != 0) {
                        $sidebar.attr('data-background-color', new_color);
                    }
                });

                $('.fixed-plugin .img-holder').click(function() {
                    $full_page_background = $('.full-page-background');

                    $(this).parent('li').siblings().removeClass('active');
                    $(this).parent('li').addClass('active');


                    var new_image = $(this).find("img").attr('src');

                    if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                        $sidebar_img_container.fadeOut('fast', function() {
                            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                            $sidebar_img_container.fadeIn('fast');
                        });
                    }

                    if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                        var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                        $full_page_background.fadeOut('fast', function() {
                            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                            $full_page_background.fadeIn('fast');
                        });
                    }

                    if ($('.switch-sidebar-image input:checked').length == 0) {
                        var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                        var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                        $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                        $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                    }

                    if ($sidebar_responsive.length != 0) {
                        $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
                    }
                });

                $('.switch-sidebar-image input').change(function() {
                    $full_page_background = $('.full-page-background');

                    $input = $(this);

                    if ($input.is(':checked')) {
                        if ($sidebar_img_container.length != 0) {
                            $sidebar_img_container.fadeIn('fast');
                            $sidebar.attr('data-image', '#');
                        }

                        if ($full_page_background.length != 0) {
                            $full_page_background.fadeIn('fast');
                            $full_page.attr('data-image', '#');
                        }

                        background_image = true;
                    } else {
                        if ($sidebar_img_container.length != 0) {
                            $sidebar.removeAttr('data-image');
                            $sidebar_img_container.fadeOut('fast');
                        }

                        if ($full_page_background.length != 0) {
                            $full_page.removeAttr('data-image', '#');
                            $full_page_background.fadeOut('fast');
                        }

                        background_image = false;
                    }
                });

                $('.switch-sidebar-mini input').change(function() {
                    $body = $('body');

                    $input = $(this);

                    if (md.misc.sidebar_mini_active == true) {
                        $('body').removeClass('sidebar-mini');
                        md.misc.sidebar_mini_active = false;

                        $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

                    } else {

                        $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

                        setTimeout(function() {
                            $('body').addClass('sidebar-mini');

                            md.misc.sidebar_mini_active = true;
                        }, 300);
                    }

                    // we simulate the window Resize so the charts will get updated in realtime.
                    var simulateWindowResize = setInterval(function() {
                        window.dispatchEvent(new Event('resize'));
                    }, 180);

                    // we stop the simulation of Window Resize after the animations are completed
                    setTimeout(function() {
                        clearInterval(simulateWindowResize);
                    }, 1000);

                });
            });
        });
    </script>
    <script>
        /* Demo purposes only */
        $("button").mouseleave(
            function() {
                $(this).removeClass("hover");
            }
        );
    </script>
</body>

</html>