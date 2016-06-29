 <?php
	 if(isset($_GET["btnOk"]))
	header("location:index.php");
	
	if (isset($_COOKIE["Username"]))
		$sUserName = $_COOKIE["Username"];
		setcookie("lastPage","secret.php");
		$number = "1";
	
	if (!isset($_COOKIE["Username"]))
	{
	setcookie("lastPage", "secret.php");
	header("Location: login.php");
	exit();
	
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
				<form action="">
					<h1>Member Page</h1>
					
					<div>
						<table border="1" width="50%" align="center">
							<tr align="center"><th>編號</th><th>帳號</th></tr>
								<td><?php echo $number; ?></td><td><?php echo $sUserName; ?></td>
							
						</table>
					</div>
					<div>
					<style type="text/css">
						input{
							position:relative;
							left:27%;
						}
					</style>
					<input type="submit" name="btnOk" id="btnOk" value="回首頁" />
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