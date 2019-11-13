<?php include("header.php") ?>


<?php
include 'sqlConnectionString.php';



if (isset($_POST['email'])){
if(isset($_POST['submit'])){ 
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];



$query = mysqli_query($connection,"SELECT email, password FROM registrationform WHERE email = '$email'");

$row = mysqli_fetch_array($query);

   if($row['email']==$email && $row['password']==$password){
	    $_SESSION['email'] = $email;
	    $_SESSION['loggedin']=true;
    
            // Redirect user to index.php
     header("Location: index.php");
         }else{
			   $_SESSION['loggedin']=false;
 echo " <center>email/password is incorrect.</center>";
 
 }
    }
}
?>

<!--if($row['email']==$email && $row['password']==$password){
    echo"Validate user.";
}
else{
    echo"Sorry, your credentials are not valid, Please try again.";
}
}
?>-->
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>
            <form class="form-signin" method="post">
              <div class="form-label-group">
                <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                
              </div>

              <div class="form-label-group">
                <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
               
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" name="submit" type="submit" value="submit">Sign in</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
 </body>
  <?php include("footer.php") ?>