


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

           
    <?php  include('header.php')?>
 
        <main role="main" class="container">
            <div class="row">



          
        <div class="col-sm-8 blog-main">
          <div class="blog-post">
               <?php 
               include('db.php');

               if (isset($_GET['post_id'])){
                 
                // $post_id = $_GET['post_id'];
               

                  // if ($_SERVER['REQUEST_METHOD'] ==='POST'){
                  
                //   // $autor = $_POST['autor'];
                //   // $tekst = $_POST['tekst'];
                 
                  

                //   // $sqlCom = "INSERT INTO comments (autor, tekst, post_id) values ('$autor','$tekst', '$post_id')";

                //   // getDataToDatabase($sqlCom, $connection);

                //   // }
                  
                
               

                $sql = "SELECT *,  a.ime as ime, a.prezime as prezime, a.pol as pol from posts p inner join author a on p.author_id = a.id where p.id =  {$_GET['post_id']}";

                $post = getDataFromDatabaseSingleton($sql, $connection);

                $sql2 = "SELECT *, a.ime as autor  from comments c left join author a on c.author_id = a.id where c.post_id = {$_GET['post_id']}";

                $comments = getDataFromDatabase($sql2, $connection);


              

             ?>
  
     
            <a href="" class="blog-title-color"><?php echo $post['title'] ?></a>
            <p class="blog-post-meta">
              <?php echo $post['created_at']; ?> by <a href="#" class="option-color-single-<?php echo $post['pol']; ?>"><?php echo $post['ime'] .' '. $post['prezime']?></a>
            </p>
            <p>
                <?php echo $post['body']; ?>
            </p>
            <br>
            <h3>Comments</h3>
            <hr>
            <ul>
              <?php foreach($comments as $comment) {  
                   
                  echo "<li>" . "<strong>" . $comment['autor'].  "</strong>" ."</li>";
                  echo "<div>" . $comment['tekst']. "</div>";
                  echo "<hr>";
                  
              }?>




            </ul>
            <br>
            <h3>Unesite komentar</h3>
            <hr>
            <br>
          <form action="single-post.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Autor</label>
    <input type="text" name="autor" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter autor" required>
    
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Tekst</label>
    <textarea name="tekst" rows="5" cols="40" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter tekst" required></textarea>
    

 
    
    
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

</form>
<br>
<br>

          <!-- /.blog-post -->
          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>
         
        </div>
        
        <?php } ?>
               </div>
               <?php include('sidebar.php') ?>
            
        </main>
        <!-- /.blog-main -->
      


    
    <?php include('footer.php') ?>

    
    
</body>
</html>