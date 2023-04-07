<?php



$config = require ('config.php');

$test = new database($config["database"]);


$head = 'DashBoard';

//
//echo "<pre>";
//var_dump($_SERVER);
//echo  "</pre>";
//
////dd($_SERVER);
//
//var_dump($_SERVER["REQUEST_TIME_FLOAT"]);

//die();

$post = $test ->query("select * from users;") ->fetchAll();







require "view/index.view.php";





//dd($post);

//
//function good($post,$value){
//
//    $test = [];
//
//    foreach ($post as $books)
//    {
//
//        if ($books["id"] ===  $value){
//            $test[] = $books;
//
//        }
//    }
//    return $test;
//}
//
//
//
//
//
//foreach (good($post, 3) as $gwapo){
//
//    echo( "<li> ". $gwapo["id"]. "/ " . $gwapo["titile"].  "</li>");
//
//
//
//
//}
//

