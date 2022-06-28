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
//Pass the articles id in the wehre clause
$sql = "SELECT * from article where id=1";
$results = mysqli_query($conn,$sql);

if($results === FALSE){
  echo mysqli_error($conn);
}else{
  $article = mysqli_fetch_assoc($results);
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Article</title>
    </head>
    <body>
        <?php if($article === null): ?>
          <p>Article not found!</p>
        <?php else:?>
                 <article>
                    <h2><?=$article['title'];?></h2>
                    <p><?=$article['content'];?></p>
                  </article>
          <?php endif;?>
    </body>
</html>
