<?php
session_start();
?>
<h1 id="center">
	<?php
echo "Hello, ".$_SESSION['name']=$_POST['name'];

?>
</h1>
<?php

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	#center{
		display: flex;
		justify-content: center;
		align-items: center;
		font-size: 42px;
		color: black;
		

	}
	*{
		margin: 0px;
		padding: 0px;

	}
	body{
		background-image: url('animated-birthday-image-0015.gif');
		
	}
</style>
<body>

<a href="logout.php"style="color: green;top:55px;">Logout</a>


</body>
</html>