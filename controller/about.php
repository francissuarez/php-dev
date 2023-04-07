<?php


$config = require ('config.php');

$test = new database($config["database"]);



$head = 'About';
$name = 'welcome database record ';




//start database
//
//class database {
//
//    public $connect;
//
//    public function __construct()
//
//    {
//
//        $dbconnect= "mysql: host=localhost; port=3306; user=root; dbname=testing";
//
//
//        $this -> connect = new PDO($dbconnect);
//
//    }
//
//    function query($data){
//
//        $statement = $this -> connect ->prepare($data);
//
//        $statement -> execute();
//
//        return $statement;
//
//    }
//
//
//}
//
//$test = new database();
//
//$post = $test -> query("select * from users where id <= 4") -> fetchAll(PDO::FETCH_ASSOC);

//end database



$post = $test -> query("SELECT * FROM public;") -> fetchAll();


//dd($post);


require "view/about.view.php";

