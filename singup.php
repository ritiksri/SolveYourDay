

<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register New Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="index.php?act=2" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="name">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Last Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="last_name">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="username">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label> <small>(Optional)</small>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" required name="password">
  </div>
  <div class="form-group">
  <label for="exampleInputPassword1">Profile Picture (Required)</label>
  <input type="file" name="fileToUpload" id="fileToUpload" class="form-control btn-primary " required>
  </div>

  <input type="submit" value="Register" name="submit" class="btn btn-primary my-2">

  <!-- <button type="submit" class="btn btn-success">Sign Up</button> -->
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
     
    </div>
  </div>
</div>



