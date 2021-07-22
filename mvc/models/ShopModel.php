<?php
class ShopModel extends DataBase{
    
    public function GetShop($page, $limit, $pages){
        $start = ($page - 1) * $limit;
        if($page>$pages)
            $page = $pages;
        else if($page < 1)
            $page = 1;
        $qr = "SELECT * FROM bill ORDER BY MaHD LIMIT $start, $limit";
        return mysqli_query($this->con,$qr);
    }

    public function GetCount(){
        return mysqli_query($this->con, "SELECT COUNT(*) FROM bill")->fetch_row();
    }
    public function AddBill($MaKH, $SoLuong, $TongT){
        $qr = "INSERT INTO bill(Bookingdate, Quatity, Summoney, MaKH) VALUES ('date('d/m/Y')', '$SoLuong', '$TongT', '$MaKH')";
        mysqli_query($this->con,$qr)??false;
        $qr = "SELECT MAX(MaHD) FROM bill";
        $data = mysqli_query($this->con,$qr)->fetch_row();
        return $data[0];
    }
}
?>