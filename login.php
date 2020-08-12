<?php
require 'dbcon.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.php">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php include 'style.php';?>
</head>
<body>

<?php
  if(isset($_POST['submitlog'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    // echo $email;
    // echo '<br>';
    // echo $password;

    $sql = "select * from registration where email='$email'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
      while($user = mysqli_fetch_assoc($result))
      {
        if($email == $user['email'] && $password == $user['password'])
        {
          //echo '<script>alert("Succes Login");</script>';
          header('location: dash.php');
        }
        else{
          echo "error";
        }
      }
    }else{
      "0 results";
    }
  }
?>

	 <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>
            <form class="form-signin" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required autofocus>
                <label for="inputEmail">Email address</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>
              <br>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="submitlog">Sign in</button>
             
              <hr class="my-4">
              <label><a href="index.php" style="color: grey; text-decoration: none;">Don't have Account?</label></a><br><br>
              <label style="font-size: 18px;color: grey">Or</label><br><br>

              <a href="" class="fa fa-google-plus  w3-xlarge" style="text-decoration: none;"></a>
			        <a href="" class="fa fa-facebook w3-xlarge" style="margin-left: 40px; text-decoration: none;"></a>
			        <a href="" class="fa fa-twitter w3-xlarge" style="margin-left: 45px; text-decoration: none;"></a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>