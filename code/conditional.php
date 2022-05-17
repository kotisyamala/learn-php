<?php
//Run Code Conditionally: the if Construct
//$articles = [];
$articles = ["First Post","Second Post","Third Post"];

if(empty($articles)){
  echo "Array of articles is empty!";
}else{
  echo "The array is NOT empty!";
}

//Comparision operator
var_dump(3==3);

//While loop
$month = 1;
while($month<=12){
  echo $month.", ";
  $month = $month +1;
}

//For loop
for($i=1;$i<10;$i++){
  echo $i.", ";
}

//Else if conditional statements
$hour = 18  ;
if($hour <12){
  echo "Good Morning!";
}elseif($hour >=12 && $hour <=17){
  echo "Good Afternoon";
}else{
  echo "Good Evening";
}


//Switch case
/*break; statement is requrired for each case otherwise control will go though the all cases*/
/*defaul is the case where none of the cases are matched the default case will get executed*/
$day = "Sun";

switch($day){
  case "Mon":
    echo "Monday!";
    break;
  case "Tue":
    echo "Tuesday!";
    break;
  default:
    echo "Sorry! I'm busy!";
    break;
}
