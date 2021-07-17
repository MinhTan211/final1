<?php
class Controller{
    public function model($model){
        require_once "./mvc/models/".$model.".php";
        return new $model;
    }

    public function view($view, $data =[]){
        require_once "./mvc/views/pages/".$view.".php";
    }

    public function viewadmin($view, $data=[]){
        require_once "./mvc/views/adminpages/".$view.".php";
    }

    public function viewaedp($view, $data=[]){
        require_once "./mvc/views/adminpages/product/".$view.".php";
    }

    public function viewaedt($view, $data=[]){
        require_once "./mvc/views/adminpages/prtype/".$view.".php";
    }

    public function viewacc($view, $data=[]){
        require_once "./mvc/views/adminpages/prtk/".$view.".php";
    }
}
?>