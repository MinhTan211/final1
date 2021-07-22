<?php
    if(isset($_SESSION['Username']))
        echo '<li>
        <a href="./shopcart"><img src="../public/img/icon/bag.png" style="height: 25px;">
            <span>Giỏ hàng</span>('.count($_SESSION["cart"]).')</a>
    </li>';
    else
        echo '<li>
        <a href="./shopcart"><img src="../public/img/icon/bag.png" style="height: 25px;">
            <span>Giỏ hàng</span></a>
        </li>';
?>