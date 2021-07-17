<?php
class Admin extends Controller{

    function Dashboard()
    {
        $this->viewadmin("dashboard");
    }

    function Listaccoun()
    {
        $account = $this->model("AcountModel");
        $this->viewadmin("listaccoun", ["listaccount"=>$account->GetTK()]);
    }

    function Listcustomer()
    {
        $customer = $this->model("CustomerModel");
        $this->viewadmin("listcustomer", ["listcustomer"=>$customer->GetCustomer()]);
    }

    function Listproduct()
    {
        $product = $this->model("ProductModel");
        $this->viewadmin("listproduct", ["listproduct"=>$product->GetProduct()]);
    }

    function Listshopping()
    {
        $shop = $this->model("ShopModel");
        $this->viewadmin("listshopping", ["listshopping"=>$shop->GetShop()]);
    }

    function ListProducttype()
    {
        $shoptype = $this->model("ProductModel");
        $this->viewadmin("listproducttype", ["listproducttype"=>$shoptype->GetProductType()]);
    }

    function Add()
    {
        $addp = $this->model("ProductModel");
        $this->viewaedp("add");
    }
    
    function Delete()
    {
        $this->viewaedp("delete");
    }

    function Edit()
    {
        $this->viewaedp("edit");
    }

    function Addprtype()
    {
        $this->viewaedt("addprtype");
    }

    function Deleteprtype()
    {
        $this->viewaedt("deleteprtype");
    }

    function Editprtype()
    {
        $this->viewaedt("editprtype");
    }

    function Tk()
    {
        $this->viewacc("addtk");
    }

    function Xoatk()
    {
        $this->viewacc("xoatk");
    }

    function Themtk()
    {
        $this->viewacc("themtk");
    }

    function Suatk()
    {
        $this->viewacc("suatk");
    }
    
    function test(){
        $account1 = $this->model("AcountModel");
        $this->viewaedt("test", ["list"=>$account1->GetTK()]);
    }
}
?>