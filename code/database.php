<?php

$db_host = "localhost";
$db_name = "cms";
$db_user = "cms_www";
$db_password = "GwhIod0h!JZK3z)F";

$conn = mysqli_connect($db_host,$db_user,$db_password,$db_name);

if(mysqli_connect_error()){
  echo mysqli_connect_error();
  exit;
}
