<?php
class ProductModel extends DataBase
{
    public function GetProduct($page, $limit, $pages){
        $start = ($page - 1) * $limit;
        if($page>$pages)
            $page = $pages;
        else if($page < 1)
            $page = 1;
        $qr = "SELECT * FROM product ORDER BY MaSP LIMIT $start, $limit";
        return mysqli_query($this->con,$qr);
    }
    public function GetCount(){
        return mysqli_query($this->con, "SELECT COUNT(*) FROM product")->fetch_row();
    }

    public function GetProductType($page, $limit, $pages){
        $qr = "SELECT * FROM producttype";
        return mysqli_query($this->con,$qr);
    }

    public function ThemSP($TenSP, $ImgBig, $ImgSmallfisrt, $ImgSmallsecond, $ImgSmallthird, $ImgSmallfourth, $ImgSmallfifth, $MoTa, $Gia, $MaLSP, $TenLSP){
        $qr = "INSERT INTO product(TenSP, ImgBig, ImgSmallfisrt, ImgSmallsecond, ImgSmallthird, ImgSmallfourth, ImgSmallfifth, MoTa, Gia, MaLSP, TenLSP) VALUES ('$TenSP', '$ImgBig', '$ImgSmallfisrt', '$ImgSmallsecond', '$ImgSmallthird', '$ImgSmallfourth', '$ImgSmallfifth', '$MoTa', '$Gia', '$MaLSP', '$TenLSP')";
        return mysqli_query($this->con,$qr);
    }

    public function ThemLSP($TenLSP){
        $qr = "INSERT INTO producttype(TenLSP) VALUES ('$TenLSP')";
        return mysqli_query($this->con,$qr);
    }
}
?>