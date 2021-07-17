<?php
class Tool{
    //http://localhost/Final/controller/acction/param1/param2..
    protected $controller="Home";
    protected $acction = "index";
    protected $params= [];
    function __construct()
    {
        //Array ( [0] => Home [1] => sayhi [2] => 1 [3] => 2 [4] => 3 )
        $arr = $this->UrlProcess();

        //handling controller
        //check controller exists
        if(file_exists("./mvc/controllers/".$arr[0].".php")){
            $this->controller = $arr[0];
            unset($arr[0]);
        }
        require_once  "./mvc/controllers/". $this->controller.".php";
        $this->controller = new $this->controller;
        //handling acction
        //check if arr[1] exists
        if(isset($arr[1])){
            //method_exists(class, a method check)
            if( method_exists($this->controller, $arr[1])){
                $this->acction = $arr[1];   
            }
            unset($arr[1]);
        }
        //handding params
        $this->params = $arr?array_values($arr):[];

        call_user_func_array([$this->controller, $this->acction], $this->params);
    }

    function UrlProcess()
    {
        if(isset($_GET["url"])){
            return explode("/",filter_var(trim($_GET["url"], "/")));
        }
    }
}
?>