<?php
function debugMode($active)
{
    if($active){
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
 
    }
    return;
}

function fromInc($name){
    if(file_exists("./templates/includes/". $name . ".inc.php")){
        include "./templates/includes/". $name . ".inc.php";
    }else{
        return false;
    }
}

