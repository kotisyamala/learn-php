<?php
//Process Each Element of an Array: foreach Loops
$articles = ["one","two","three"];

//echo $articles; will throw error.

//Prints definition including elements
var_dump($articles);

//Prints each element if you know the position prints the value
echo $articles[0];
echo $articles[1];
echo $articles[2];

//For each loop
foreach ($articles as $article){
  echo $article. ", ";
}

//For each loop with index
foreach ($articles as $index =>$article){
  echo $index ."-". $article. ", ";
}
