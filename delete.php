<?php
	require "dbconfig/config.php"
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Delete</title>
		<script src="https://kit.fontawesome.com/b26b33266f.js" crossorigin="anonymous"></script>
		<link type="text/css" rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<?php
			$username = $password = $cpassword = "";
			if(isset($_POST["delete"])){
				$username = $_POST["username"];
				$password = $_POST["password"];
				
					$query = "SELECT * from userinfo WHERE username ='$username' AND password = '$password'";
					$query_run = mysqli_query($con, $query);

					if(mysqli_num_rows($query_run)>0){
						$query = "DELETE from userinfo WHERE username = '$username'";
						$query_run = mysqli_query($con, $query);
						echo "<script> alert('Account deleted')</script>";
					}else{
							echo "<script> alert('Unable to delete account')</script>";
						}
				}
		?>
		
		<div>
			<h1>
				DELETE
			</h1>

			<h2>
				<form method = "post" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" class = "loginbox">
					<div class = "loginfield">
						<span style="font-size: 20px; color: white;">
  							<i class="fas fa-user"></i>
						</span>
						<input type="text" placeholder="Your Username" name = "username" required>
					</div>

					<div class = "loginfield">
						<span style="font-size: 20px; color: white;">
							<i class="fas fa-lock"></i>
						</span>
						<input type="password" placeholder="Your Password" name = "password" required>
					</div>
					
					<div>
						<input type="submit" id="delbtn" value="Delete" name="delete">
						<br>
						<input type="button" id="backbtn" value="Back to Login Page" onclick= "window.location.href = 'index.php'">
					</div>
				</form>
			</h2>
		</div>

	</body>
</html>