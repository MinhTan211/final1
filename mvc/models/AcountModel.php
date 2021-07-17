<?php
class AcountModel extends DataBase{

    public function GetTK(){
        $qr = "SELECT * FROM account";
        return mysqli_query($this->con,$qr);
    }

    public function ThemTK($Username, $Password, $Role){
        $qr = "INSERT INTO account (Username, Password, Role) VALUES ('$Username','$Password','$Role')";
        return mysqli_query($this->con,$qr);
    }

    public function XoaTK($id){
        $qr = "DELETE FROM account WHERE Username = '$id'";
        return mysqli_query($this->con,$qr);
    }

    public function ChitietTK($id){
        $qr = "SELECT * FROM account WHERE Username = '$id'";
        return mysqli_query($this->con,$qr);
    }

    public function SuaTK($id, $Username, $Password, $Role){
        $qr = "UPDATE account SET Username = '$Username', Password = '$Password', Role = '$Role' WHERE Username = '$id'";
        return mysqli_query($this->con,$qr);
    }
}
?>