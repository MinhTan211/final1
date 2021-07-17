<?php
class ShopModel extends DataBase{
    
    public function GetShop(){
        $qr = "SELECT * FROM billdetail";
        return mysqli_query($this->con,$qr);
    }
}
?>