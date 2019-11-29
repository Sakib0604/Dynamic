<?php
	include_once"includes/header.php";
	
	if($_POST){

		$host="localhost";
		$user="root";
		$pass="";
		$db="demo_cse311";

		$username=$_POST['username'];
		$password=$_POST['password'];
		$con=mysqli_connect($host,$user,$pass,$db);

		$query="SELECT * from members where username='$username' and password='$password'";
        /*print($query);die();*/
		$result=mysqli_query($con,$query);

		if(mysqli_num_rows($result)==1)
		{
				/*session_start();*/
				$_SESSION['demo_cse311']='true';
				header('location:userprofile.php');
				$_SESSION['username']=$username;
				
			}
			else{
				echo "wrong username or password";
				}
}
?>

<h1>Login</h1>
<form method="POST">
<div class="centerdiv" style="width: 25%; margin: 0 auto;">
	<strong>Username:<br></strong>
	<input id="text5" type="text" name="username"><br>
	<strong>Password:<br></strong>
	<input id="text5" type="password" name="password"><br>
</div>
	<p>
		<button class="button submit">Login</button>
	</p>

</form>


	</body>
</html>