<?php

//Syteax 1
$articles1 = ["WSJ","WEF","NT"];
//Syntax 2
$articles2 = array("WSJ","WEF","NT");

//echo $articles1; throws error Warning: Array to string conversion in C:\Users\user1\Documents\php\learn-php\code\arrays.php on line 8

//Print array
var_dump($articles1);
var_dump($articles1[2]);


//Syntax 3
$articles3 = array(1=>"WSJ","WEF","NT");
//Print array
var_dump($articles3);


//Syntax 4
$articles4 = array("one"=>"WSJ","two"=>"WEF","three"=>"NT");
//Print array
var_dump($articles4);


//Syntax 5
//$articles4 = array("one"=>"WSJ","WEF","NT");
//Print array
/*var_dump($articles5);  Error will be printed as "Warning: Undefined variable $articles5 in C:\Users\user1\Documents\php\learn-php\code\arrays.php on line 30
NULL" */
