<?php

function con(){

    return mysqli_connect("localhost","root","", "blog") ;  

};

$info = array(
    "name" => "Sample Blog" ,
    "short" => "SB" ,    
    "description" => "Sample Project" ,
);

$role =["Admin", "Editor", "User"] ;

$url = "http://{$_SERVER['HTTP_HOST']}" ;


date_default_timezone_set("Asia/Yangon") ;

// KK(;nnWu;}rd