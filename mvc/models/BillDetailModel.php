<?php
class ShopModel extends DataBase{
    
    public function GetShop($page, $limit, $pages){
        $start = ($page - 1) * $limit;
        if($page>$pages)
            $page = $pages;
        else if($page < 1)
            $page = 1;
        $qr = "SELECT * FROM billdetail ORDER BY MaHD LIMIT $start, $limit";
        return mysqli_query($this->con,$qr);
    }

    public function GetCount(){
        return mysqli_query($this->con, "SELECT COUNT(*) FROM billdetail")->fetch_row();
    }
    public function AddBillDetail($MaHD, $Gia, $SoLuong){
        
    }
}
?>