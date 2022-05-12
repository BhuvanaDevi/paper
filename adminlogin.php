<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin Login</title>
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

			<div class="login" style="pointer-events: none">
            <label for="chk" aria-hidden="true">Admin Login</label>
				<!-- <form method="POST" action="">
					<input type="text" name="username" placeholder="User name" required="">
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="password" placeholder="Password" required="">
				<button type="submit" name="signup">Sign up</button>
				</form> -->
			</div>
	</div>
<!-- partial -->
  
<?php
include("connection.php");
if(isset($_POST['login']))
{
	$email1 = isset($_POST['email1']) ? $_POST['email1'] : "" ;  
	$password1 = isset($_POST['password1']) ? $_POST['password1'] : "";  
	
	$sqll = "select * from admin where username = '$email1' and password = '$password1'";  
	$resultl = mysqli_query($con, $sqll);  
	$nol=mysqli_num_rows($resultl);
	$rowl = mysqli_fetch_row($resultl);

if($nol)
{
	 setcookie('password',$password1,time()+60*60*7);
   setcookie('email',$email1,time()+60*60*7);
   
   session_start();
  $cook_pass=$_COOKIE['password'];
   $cook_email=$_COOKIE['email'];

   header("location:userbuy.php");
}
else{
	echo '<script>
	Swal.fire({ title: "Login Failed!",
	   text: "Please Given Correct Email and Password Here",
	   type: "danger"}).then(okay => {
		 if (okay) {
		  window.location.href = "adminlogin.php";
		}
	  });
</script>';
	}    
}
?>

</body>
</html>
