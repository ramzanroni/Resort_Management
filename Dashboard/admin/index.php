
<?php 
	include ('conn.php');
	session_start();
	if (isset($_POST['submit'])) 
	{
		$pass=$_POST['password'];
		$email=$_POST['email'];
		$sql=$con->query("SELECT * FROM admin ");
		if($sql->num_rows>0)
		{
			$row = $sql->fetch_assoc();
			
				if ($email==$row['email'] && $pass==$row['password']) 
				{
					$_SESSION['username']=$row['email'];
					header("Location: home.php");
				}
				else
				{
					echo "Enter Correct Password and email address...!";
				}
			

		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
	<style type="text/css">
		body{
			background-image: url("images/home-banner1.jpg");
			min-height: 100%;
			min-width: 1024px;
			width: 100%;
			height: auto;
			position: fixed;
			top: 200px;
			left: 0;


		}
		.form-group label{
			font-size: 20px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row d-flex justify-content-md-center">
			<div class="col-md-6 shadow-lg p-3 mb-5 bg-white rounded mt-5">
				<h2 style="text-align: center;font-family: cursive;font-size: 40px;">Admin Login</h2>
				<form method="post" action="">
					<div class="form-group">
						<label>Email Address</label>
						<input type="text" name="email" class="form-control">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control">
					</div>
					<div class="form-group">
						<input style="font-size: 25px; background-color: orange; color: white;" type="submit" name="submit" class="form-control btn ">
					</div>
				</form>	
			</div>
		</div>
	</div>
</body>
</html>