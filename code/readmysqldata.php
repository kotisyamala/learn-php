<?php
include 'includes/database.php';

$sql = "SELECT * from article";
$results = mysqli_query($conn,$sql);

if($results === FALSE){
  echo mysqli_error($conn);
}else{
  $articles = mysqli_fetch_all($results,MYSQLI_ASSOC);
}

?>
<?php include 'includes/header.php';?>
    <h1>Articles</h1>
        <ol>
        <?php foreach($articles as $ar): ?>
                 <article>
                    <h2><a href="/readmysqlsingledatarecord.php?id=<?= $ar['id']?>"><?=$ar['title'];?></a></h2>
                    <p><?=$ar['content'];?></p>
                  </article>
        <?php endforeach; ?>
        </ol>
<?php include 'includes/footer.php';?>
