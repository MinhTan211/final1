<?php
class ProductTypeModel extends DataBase
{
    public function GetCount(){
        return mysqli_query($this->con, "SELECT COUNT(*) FROM producttype")->fetch_row();
    }
    public function GetProductType($page, $limit, $pages){
        $start = ($page - 1) * $limit;
        if($page>$pages)
            $page = $pages;
        else if($page < 1)
            $page = 1;
        $qr = "SELECT * FROM producttype ORDER BY MaLSP LIMIT $start, $limit";
        return mysqli_query($this->con,$qr);
    }
    public function ThemLSP($TenLSP){
        $qr = "INSERT INTO producttype(TenLSP) VALUES ('$TenLSP')";
        return mysqli_query($this->con,$qr);
    }
    public function CheckLSP($TenLSP){
        $row = mysqli_query($this->con, "SELECT COUNT(*) FROM producttype WHERE TenLSP = '$TenLSP'")->fetch_row();
        return $row[0];
    }
}
?>