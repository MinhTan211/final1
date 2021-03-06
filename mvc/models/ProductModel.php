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

    public function ThemSP($TenSP, $ImgBig, $ImgSmallfisrt, $ImgSmallsecond, $ImgSmallthird, $ImgSmallfourth, $ImgSmallfifth, $MoTa, $Gia, $MaLSP, $TenLSP){
        $qr = "INSERT INTO product(TenSP, ImgBig, ImgSmallfisrt, ImgSmallsecond, ImgSmallthird, ImgSmallfourth, ImgSmallfifth, MoTa, Gia, MaLSP, TenLSP) VALUES ('$TenSP', '$ImgBig', '$ImgSmallfisrt', '$ImgSmallsecond', '$ImgSmallthird', '$ImgSmallfourth', '$ImgSmallfifth', '$MoTa', '$Gia', '$MaLSP', '$TenLSP')";
        return mysqli_query($this->con,$qr);
    }

    public function Getpr(){
        $qr = "SELECT * FROM producttype";
        return mysqli_query($this->con,$qr);
    }
    public function UpdatePr($id, $TenSP, $MoTa, $Gia){
        $qr = "UPDATE product SET TenSP ='$TenSP', MoTa='$MoTa', Gia ='$Gia' WHERE MaSP = '$id'";
        return mysqli_query($this->con,$qr);
    }

    public function ChitietSP($id){
        $qr = "SELECT * FROM product WHERE MaSP = '$id'";
        return mysqli_query($this->con,$qr);
    }

    public function LoadSP($page, $limit, $pages){
        $start = ($page - 1) * $limit;
        if($page>$pages)
            $page = $pages;
        else if($page < 1)
            $page = 1;
        $qr = "SELECT * FROM product ORDER BY MaSP LIMIT $start, $limit";
        return mysqli_query($this->con,$qr);
    }

    public function CheckSP($TenSP){
        $qr = "SELECT * FROM product WHERE TenSP = '$TenSP'";
        return mysqli_num_rows(mysqli_query($this->con,$qr));
    }

    public function Show($MaLSP){
        $qr = "SELECT * FROM product WHERE MaLSP = '$MaLSP'";
        return mysqli_query($this->con,$qr);
    }

    public function LoadMaLSP($MaLSP, $page, $limit, $pages){
        $start = ($page - 1) * $limit;
        if($page>$pages)
            $page = $pages;
        else if($page < 1)
            $page = 1;
        $qr = "SELECT * FROM product WHERE MaLSP = '$MaLSP' ORDER BY MaLSP LIMIT $start, $limit";
        return mysqli_query($this->con,$qr);
    }

    public function DeleteSP($MaSP){
        $qr = "DELETE FROM product WHERE MaSP = '$MaSP'";
        return mysqli_query($this->con,$qr);
    }

    public function SearchSP($TenSP, $page, $limit, $pages){
        $start = ($page - 1) * $limit;
        if($page>$pages)
            $page = $pages;
        else if($page < 1)
            $page = 1;
        $qr = "SELECT * FROM product WHERE TenSP LIKE '%$TenSP%' ORDER BY MaSP LIMIT $start, $limit";
        return mysqli_query($this->con,$qr);
    }
    public function LiveSearchSP($TenSP){
        $qr = "SELECT * FROM product WHERE TenSP LIKE '%$TenSP%' LIMIT 3";
        return mysqli_query($this->con,$qr);
    }
}
?>