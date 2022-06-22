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
$sql = "SELECT * from article";
$results = mysqli_query($conn,$sql);

if($results === FALSE){
  echo mysqli_error($conn);
}else{
  $articles = mysqli_fetch_all($results,MYSQLI_ASSOC);
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Fruit</title>
    </head>
    <body>

    <h1>Articles</h1>
        <ol>
        <?php foreach($articles as $ar): ?>
                 <article>
                    <h2><?=$ar['title'];?></h2>
                    <p><?=$ar['content'];?></p>
                  </article>
        <?php endforeach; ?>
        </ol>
    </body>
</html>
