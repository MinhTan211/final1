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
}
?>