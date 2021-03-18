<?php

include('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $pol = $_POST['pol'];

    $sql = "INSERT INTO author (ime, prezime, pol) values ('$ime', '$prezime','$pol')";
    
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
  <form action="create-author.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Ime</label>
    <input type="text" name="ime" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter ime" required>
    
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Prezime</label>
    <input name="prezime"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter prezime" required></input>
  </div>
    <div class="form-group-flex">
    <label for="exampleInputEmail1">Pol</label>
    <input type="radio" name="pol" value="M" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter author" required> M
    <input type="radio" name="pol" value="Z" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter author" required> Z
    
    
  </div>
 
    
    
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

</form>

  </div>
  <?php include('sidebar.php'); ?>
</div>



      <!-- /.row -->
    

            
        
</main>
        <!-- /.blog-sidebar -->
    
    <!-- /.container -->

<?php include('footer.php'); ?>
  </body>
</html>