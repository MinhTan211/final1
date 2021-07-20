<?php
    if(!isset($_SESSION["Username"]))
        echo "<li><a href='./login'>Đăng Nhập</a>
            <ul class='dropdown'>
                <li><a href='./register'>Đăng Ký</a></li>
            </ul>
        </li>";
    else{
        echo "<li><a href='./informationPersonal'>". $_SESSION["Username"] ."</a>
            <ul class='dropdown'>
                <li><a href='./Logout'>Đăng Xuất</a></li>
            </ul>
        </li>";
    }
?>