<?php 

if (isset($_COOKIE["Username"]))
  $sUserName = $_COOKIE["Username"];
else 
  $sUserName = "Guest";
  
if(isset($_GET["mb"]))
{
header("location:secret.php");
}

if(isset($_GET["Logout"]))
{
header("location:login.php?logout=1");
}
if(isset($_GET["btnOk"]))
{
header("location:login.php");
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
					<h1>Welcome <?php echo $sUserName ?></h1>
					<style type="text/css">
					    #mb{
					        position:relative;
					        left:22%;
					    }
					</style><?php if($sUserName == "Guest"): ?>
						<div><img src="1.jpg"></img></div>
						<?php else: ?>
						<div><img src="3.png" width=170px height=170px></img></div>
						<?php endif; ?>
					
					<div>
					    <?php if($sUserName == "Guest"): ?>
						<input type="submit" name="btnOk" id="btnOk" value="登入" />
						<?php else: ?>
						<input type="submit" name = "Logout" id = "Logout"  value="登出" />
						<?php endif; ?>
						<input type="submit" name = "mb" id = "mb"  value="會員中心" onclick="location.href='secret.php'"/>
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
