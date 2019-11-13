<?php include("header.php") ?>

<?php
include 'sqlConnectionString.php';


if(isset($_POST['submit'])){ 
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];
 $query1 = "SELECT * FROM registrationform WHERE email = '$email'";
    $selectresult = mysqli_query($connection, $query1);
    if(mysqli_num_rows($selectresult)>0)
    {
         $msg = 'email already exists';
    }
    elseif($password != $confirmpassword) {
echo("<center> Passwords do not match </center>");

}
    else{
$sql = "Insert into registrationform(username,email ,password,confirmpassword) values ('$username', '$email'  ,
'$password' , '$confirmpassword')";
if (mysqli_query($connection, $sql)) {
	
echo "<center> Data Inserted. Registered Successfully </center>";
}
else{
echo "Insertion Failed ";
}
}
}


mysqli_close($connection); 
?>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
          </div>

          <div class="card-body">
            <h5 class="card-title text-center">Register</h5>
            <form action="" method="post" class="form-signin">
              <div class="form-label-group">
                <input name="username" type="text" id="inputUserame" class="form-control" placeholder="Username" value="" required autofocus>
               
              </div>

              <div class="form-label-group">
                <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" value="" required>
               
              </div>
              
              <hr>

              <div class="form-label-group">
                <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" value="" required>
               
              </div>
              
              <div class="form-label-group">
                <input name="confirmpassword" type="password" id="inputConfirmPassword" class="form-control" placeholder="Confirm Password" value="" required>
             
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" name= "submit" type="submit" value="submit">Register</button>
              <a class="d-block text-center mt-2 small" href="login.php">Sign In</a>
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
 </body>
  <?php include("footer.php") ?>