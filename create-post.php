<?php

include('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    $title = $_POST['title'];
    $body = $_POST['body'];
    $author = $_POST['author'];
    $created_at = date('Y-m-d',strtotime($_POST['created_at']));

    


    $sql = "INSERT INTO posts (title, body, author, created_at) values ('$title', '$body','$author','$created_at')";

     getDataToDatabase($sql, $connection);



}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
      integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
      crossorigin="anonymous"
    />

    <link href="styles/blog.css" rel="stylesheet" />
    <link href="styles/styles.css" rel="stylesheet" />

</head>

  <body>
    <?php include('header.php'); ?>

    <main role="main" class="container">
      <div class="row">
        <div class="col-sm-8 blog-main">
          <div class="blog-post">
  <form action="create-post.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter title" required>
    
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Body</label>
    <textarea name="body" rows="5" cols="40" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter body" required></textarea>
    
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Author</label>
    <input type="text" name="author" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter author" required>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Created At</label>
    <input type="text" name="created_at" class="form-control" id="exampleInputPassword1" placeholder="Enter date" required>
  </div>
  <div class="form-group form-check">
    
    
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

</form>

  </div>
</div>

<?php include('sidebar.php'); ?>

      <!-- /.row -->
    

            
        
</main>
        <!-- /.blog-sidebar -->
    
    <!-- /.container -->

<?php include('footer.php'); ?>
  </body>
</html>