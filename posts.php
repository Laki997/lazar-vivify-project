<?php include('db.php');



$sql = "SELECT *, p.id as post_id, a.ime as ime, a.prezime as prezime from posts p  inner join author a on p.author_id = a.id order by created_at desc";

$posts = getDataFromDatabase($sql, $connection);



?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" href="../../../../favicon.ico" />

    <title>Vivify Blog</title>

    <!-- Bootstrap core CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
      integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
      crossorigin="anonymous"
    />

    <!-- Custom styles for this template -->
    <link href="styles/blog.css" rel="stylesheet" />
    <link href="styles/styles.css" rel="stylesheet" />
  </head>

  <body>
    <?php include('header.php'); ?>

    <main role="main" class="container">
      <div class="row">
        <div class="col-sm-8 blog-main">

   <?php foreach ($posts as $post) { ?>


          <div class="blog-post">
            <a href="single-post.php?post_id=<?php echo ($post['post_id']) ?>" class="blog-title-color"><?php echo $post['title']; ?></a>
            <p class="blog-post-meta">
              <?php echo $post['created_at']; ?> by <a href="#"><?php echo $post['ime'] .' ' . $post['prezime']; ?></a>
            </p>

            <p>
             <?php echo $post['body']; ?>
            </p>
            <hr />
            


            <?php } ?>
            
            
            
          <!-- /.blog-post -->
                   
          

          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>
            
        </div>
        <!-- /.blog-main -->
        
            
       

        <!-- /.blog-sidebar -->
      </div>
      <?php include('sidebar.php') ?>
      <!-- /.row -->
    
    </main>
    
    <!-- /.container -->

 <?php include('footer.php') ?>
  </body>
</html>
