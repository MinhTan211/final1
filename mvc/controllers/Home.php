<?php
class Home extends Controller{
    function index(){
        $this->view("index");
    }

    function Login(){
        $this->view("login");
    }

    function Register(){
        $this->view("register");
    }

    function Checkout(){
        $this->view("checkout");
    }

    function InformationPersonal(){
        $this->view("informationPersonal");
    }

    function Historybuy(){
        $this->view("historybuy");
    }

    function Shop(){
        $this->view("shop");
    }

    function ShopDetail(){
        $this->view("shopdetail");
    }

    function ShopCart(){
        $this->view("shopcart");
    }

    function Trademark(){
        $this->view("trademark");
    }
    function Logout()
    {
        $this->viewlogup("logout");
    }
    function cart(){
        $this->view("cart");
    }
    function bill(){
        $this->view("bill");
    }
    function ketqua(){
        $this->view("ketqua");
    }
}
?>