<?php
class ProductModel extends DataBase
{
    public function GetProduct(){
        $qr = "SELECT * FROM product";
        return mysqli_query($this->con,$qr);
    }

    public function GetProductType(){
        $qr = "SELECT * FROM producttype";
        return mysqli_query($this->con,$qr);
    }
}
?>