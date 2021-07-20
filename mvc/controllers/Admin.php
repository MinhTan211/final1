<?php
class Admin extends Controller{

    function Dashboard()
    {
        $this->viewadmin("dashboard");
    }

    function Listaccoun()
    {
        $this->viewadmin("listaccoun");
    }

    function Listcustomer()
    {
        $this->viewadmin("listcustomer");
    }

    function Listproduct()
    {
        $this->viewadmin("listproduct");
    }

    function Listshopping()
    {
        $this->viewadmin("listshopping");
    }

    function ListProducttype()
    {
        $this->viewadmin("listproducttype");
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
    
    function Logout()
    {
        $this->viewlogup("logout");
    }

    function test(){
        $account1 = $this->model("AcountModel");
        $this->viewaedt("test", ["list"=>$account1->GetTK()]);
    }
}
?>