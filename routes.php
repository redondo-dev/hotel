<?php

use App\Controllers\HomeController;

function get($path,$controller,$function){

    $url = explode("/",$_GET["ctrl"]?? "");
    $pathExplode = explode("/",$path);


    if(!isset($_GET["ctrl"])){

        $controller = new HomeController();
        $controller->index();
        exit();

    }else if(isset($_GET["ctrl"]) && $_GET["ctrl"] == str_replace("/", "", $path)){
        
        
       
        $nameController = "App\Controllers\\". $controller;
        $controller = new $nameController();
        $controller->$function();
        
    }else if(isset($_GET["ctrl"]) && $path == "/".$_GET["ctrl"]){
        $nameController = "App\Controllers\\". $controller;
        $controller = new $nameController();
        $controller->$function();

    }else if(isset($_GET["ctrl"], $url[1]) &&  intval($url[1]) > 0 && isset($pathExplode[2]) && $pathExplode[2] === ":id"){
        $nameController = "App\Controllers\\". $controller;
        $controller = new $nameController();
        $controller->$function(intval($url[1]));
    }

}