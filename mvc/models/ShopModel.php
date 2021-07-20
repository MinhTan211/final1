<?php
class ShopModel extends DataBase{
    
    public function GetShop($page, $limit, $pages){
        $qr = "SELECT * FROM billdetail";
        return mysqli_query($this->con,$qr);
    }
    public function GetCount(){
        return mysqli_query($this->con, "SELECT COUNT(*) FROM product")->fetch_row();
    }
}
?>