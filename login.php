<?php

if (isset($_GET["logout"]))
{
	setcookie("Username", "Guest", time() - 3600);
	header("Location: index.php");
	exit();
}

	if(isset($_POST["btnOk"]))
	{
		if($_POST["username"] != "")
		{
			setcookie("Username",$_POST["username"]);
			header("location: index.php");
			exit();
		}
	}
	
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Login form using HTML5 and CSS3</title>
	<link rel="stylesheet" href="css/style.css">
</head>

<body>

	<body>
		<div class="container">
			<section id="content">
				<form id="form1" name="form1" method="post" action="login.php">
					<h1>Login Form</h1>
					<div>
						<input type="text" placeholder="Username" required="" id="username" name="username" />
					</div>
					<div>
						<input type="password" placeholder="Password" required="" id="password" name="password"/>
					</div>
					<div>
						<input type="submit" name="btnOk" id="btnOk" value="Log in" />
						<input type="reset" name = "btnReset" id = "btnReset" align="right" value="Reset" />
					</div>
				</form>
				<!-- form -->
				<div class="button">
					<a href="http://getbootstrap.com/">Free Web</a>
				</div>
				<!-- button -->
			</section>
			<!-- content -->
		</div>
		<!-- container -->
	</body>
	<script src="js/index.js"></script>
</body>

</html>
