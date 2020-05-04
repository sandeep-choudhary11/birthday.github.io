<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Greeting Card</title>
</head>
<style type="text/css">
	
</style>
<body>
<div class="container">
<form method="post"action="display.php">
	<fieldset>
		<legend>Form:</legend>
Enter Name:<input type="text" name="name" placeholder="Enter your Name"required>
<br>
<br>
<input type="submit" name="submit"value="submit">
</fieldset>	
</form>	
</div>
</body>
</html>
<?php
if(isset($_POST['submit'])){
$_SESSION['name']=$_POST['name'];
	
}


?>