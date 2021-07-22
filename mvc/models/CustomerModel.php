<?php
class CustomerModel extends DataBase{

    public function GetCustomer($page, $limit, $pages){
        $start = ($page - 1) * $limit;
        if($page>$pages)
            $page = $pages;
        else if($page < 1)
            $page = 1;
        $qr = "SELECT * FROM informationcustomer ORDER BY MaKH LIMIT $start, $limit";
        return mysqli_query($this->con,$qr);
    }
    public function GetCount(){
        return mysqli_query($this->con, "SELECT COUNT(*) FROM informationcustomer")->fetch_row();
    }
    public function ThemKH($Username){
        $qr = "INSERT INTO informationcustomer(Username) values ('$Username')";
        return mysqli_query($this->con,$qr);
    }
    public function XoaKH($Username){
        $qr = "DELETE FROM informationcustomer WHERE Username = '$Username'";
        return mysqli_query($this->con,$qr);
    }
    public function ChitietKH($Username){
        $qr = "SELECT * FROM informationcustomer WHERE Username = '$Username'";
        return mysqli_query($this->con,$qr);
    }
    public function SuaKH($Username, $TenKH, $Address, $Email, $Numberphone, $Gender, $Birthday){
        $qr = "UPDATE informationcustomer SET TenKH = '$TenKH', Address = '$Address', Email = '$Email', Numberphone = '$Numberphone', Gender = '$Gender', Birthday = '$Birthday' WHERE Username = '$Username'";
        return mysqli_query($this->con,$qr);
    }
    public function CheckKH($Username){
        $qr = "SELECT * FROM informationcustomer WHERE Username = '$Username'";
        return mysqli_num_rows(mysqli_query($this->con,$qr));
    }

    public function addinf($id, $TenKH, $Address, $Email, $Numberphone, $Gender, $Birthday, $ImgCus){
        $qr = "UPDATE informationcustomer SET TenKH ='$TenKH', Address ='$Address', Email ='$Email', Numberphone='$Numberphone', Gender='$Gender',Birthday ='$Birthday', ImgCus ='$ImgCus' WHERE MaKH = '$id'";
        return mysqli_query($this->con,$qr);
    }
}
?>