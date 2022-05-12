<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sign up</title>
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" type="text/css" href="slide navbar style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">

</head>
<body>
<!-- partial:index.partial.html -->
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form action="" method="POST">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="email1" placeholder="Email" required="">
					<input type="password" name="password1" placeholder="Password" required="">
					<button type="submit" name="login">Login</button>
				</form>
			</div>

			<div class="login">
				<form method="POST" action="">
					<label for="chk" aria-hidden="true">Signup</label>
					<input type="text" name="username" placeholder="User name" required="">
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="password" placeholder="Password" required="">
				<button type="submit" name="signup">Sign up</button>
				</form>
			</div>
	</div>
<!-- partial -->
  
<?php
include("connection.php");
if(isset($_POST['signup']))
{
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];

	$sql = "select count(*) from register where email='$email'";
	$result = mysqli_query($con, $sql);
	$no = mysqli_num_rows($result);
	$row = mysqli_fetch_row($result);
if($row[0]){
		echo '<script>
		Swal.fire({ title: "Email Id Already Registered",
		   text: "Try Again..",
		   type: "danger"}).then(okay => {
			 if (okay) {
			  window.location.href = "index.php";
			}
		  });
	</script>';
	}
	else  {
		$inspack="insert into register(username,email,password) values('$username','$email','$password')";
        $pack=mysqli_query($con,$inspack);
		if($pack){
			echo '<script>
			Swal.fire({ title: "Account Created Success",
			   text: "Please Go To Login",
			   type: "success"}).then(okay => {
				 if (okay) {
				  window.location.href = "login.php";
				}
			  });
		</script>';
		}
		else{
			echo '<script>
			Swal.fire({ title: "Account Created Failure",
			   text: "Please Try Again",
			   type: "danger"}).then(okay => {
				 if (okay) {
				  window.location.href = "index.php";
				}
			  });
		</script>';
		}

	}
   

}

if(isset($_POST['login']))
{
	$email1 = isset($_POST['email1']) ? $_POST['email1'] : "" ;  
	$password1 = isset($_POST['password1']) ? $_POST['password1'] : "";  
	
	$sqll = "select * from register where email = '$email1' and password = '$password1'";  
	$resultl = mysqli_query($con, $sqll);  
	$nol=mysqli_num_rows($resultl);
	$rowl = mysqli_fetch_row($resultl);
	
if($nol > 0)
{
	 setcookie('password',$password1,time()+60*60*7);
   setcookie('email',$email1,time()+60*60*7);
   
   session_start();
  $cook_pass=$_COOKIE['password1'];
   $cook_email=$_COOKIE['email1'];

   header("location:index.php");
}
else{
	echo '<script>
	Swal.fire({ title: "Login Failed!",
	   text: "Please Given Correct Email and Password Here",
	   type: "danger"}).then(okay => {
		 if (okay) {
		  window.location.href = "index.php";
		}
	  });
</script>';
	}    
}
?>

</body>
</html>
