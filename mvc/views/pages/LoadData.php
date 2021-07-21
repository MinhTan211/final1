<?php
    function curPageURL() {
        $pageURL = 'http';
        if ($_SERVER["HTTPS"]??null == "on") {$pageURL .= "s";}
        $pageURL .= "://";
        if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
        } else {
        $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
        }
        return $pageURL;
    }
    curPageURL();
    $getpage = explode("=",filter_var(trim($_SERVER["REQUEST_URI"], "/")));
    if(empty($getpage[1]))
    $page = 1;                                                   
    else
    $page=$getpage[1];
    $count = $model->GetCount();
    $limit = 8;
    $pages = ceil($count[0]/$limit);
?>