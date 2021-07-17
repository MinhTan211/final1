<?php
class CustomerModel extends DataBase{

    public function GetCustomer(){
        $qr = "SELECT * FROM informationcustomer";
        return mysqli_query($this->con,$qr);
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
}
?>