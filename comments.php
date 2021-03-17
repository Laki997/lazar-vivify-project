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
  <button type="submit" name="add" class="btn btn-primary">Submit</button>
</form>