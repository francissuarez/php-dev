<?php


$uri = parse_url($_SERVER["REQUEST_URI"])["path"];



$Route  = [

    '/' => "./controller/index.php",
    "/contact" => "./controller/contact.php",
    "/about" => "./controller/about.php"


];


function notfound($uri, $Route){


    if (array_key_exists($uri,$Route)){


        require $Route[$uri];
    }
    else
    {
        abort();
    }
}


notfound($uri, $Route);


function abort( $love = 404){

    http_response_code($love);

    require  "view/$love.php";


    die();

}
