<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
	<html lang="en">
    <meta charset="UTF-8">
    <title>Homepage</title>
    <link rel="stylesheet" href="style2.css">    
</head>
<body>
	<a href="logout.php">Logout</a>
	Hello, <?php echo $_COOKIE["anik"]; ?>
	<header>
		<dir class="main">
			<ul>
				<li class="active"><a href="http://localhost/project/phptutorial/">Home</a></li>
				<li><a href="http://localhost/project/about/about.php">About</a></li>
				<li><a href="http://localhost/project/list/list.php">List</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
	</div>
	<div class="title">
		<h1>Welcome To The<span> Periodic Table</span></h1>
	</div>
	</header>
</body>
</html>