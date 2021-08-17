<?php
	require "dbconfig/config.php"
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Change Password</title>
		<script src="https://kit.fontawesome.com/b26b33266f.js" crossorigin="anonymous"></script>
		<link type="text/css" rel="stylesheet" href="css/style.css">
	</head>
	<body>
		
		<div>
			<h1>
				UPDATE
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
						<input type="password" placeholder="Old Password" name = "password" required>
					</div>

					<div class = "loginfield">
						<span style="font-size: 20px; color: white;">
							<i class="fas fa-lock"></i>
						</span>
						<input type="password" placeholder="New Password" name = "npassword" required>
					</div>
					
					<div>
						<input type="submit" id="chgbtn" value="Change password" name="change">
						<br>
						<input type="button" id="backbtn" value="Back to Login Page" onclick= "window.location.href = 'index.php'">
					</div>
				</form>
			</h2>
		</div>

	</body>
</html>