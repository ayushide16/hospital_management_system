<!DOCTYPE html>
<html>
  

	<head>
		<title>Animated Login Form</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
		<script src="https://kit.fontawesome.com/a81368914c.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<img class="wave" src="wave.png"/>
		<div class="container">
			<div class="img">
				<img src="background.svg"/>
			</div>
			<div class="login-content">
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
					<img src="avatar.svg"/>
					<h2 class="title">Welcome</h2>
					<div class="input-div one">
						<div class="i">
							<i class="fas fa-user"></i>
						</div>
						<div class="div">
							<h5>Username</h5>
							<input type="text" name="user" class="input">
						</div>
					</div>
					<div class="input-div pass">
						<div class="i"> 
							<i class="fas fa-lock"></i>
						</div>
						<div class="div">
							<h5>Password</h5>
							<input type="password" name="passwd" class="input">
						</div>
					</div>
					<a href="#">Forgot Password?</a>
					<input type="submit" class="btn" value="Login"> 
				</form>
				<?php
					if ($_SERVER["REQUEST_METHOD"] == "POST") 
					{
						$user=$_POST["user"];
						$passwd=$_POST["passwd"];
						$conn = new mysqli('localhost', 'ayushide', '1234', 'sem6_project');
						if ($conn->connect_error)
						{
							die("Connection failed: " . $conn->connect_error);
						}
						$sql="SELECT Username, Password FROM login_data;";
						$result=$conn->query($sql);
						$flag=0;
						if ($result->num_rows>0)
						{
							while($row=$result->fetch_assoc())
							{
								if ($row["Username"]===$user AND $row["Password"]===$passwd)
								{
									$flag=1;
								}
							}
						}
						if($flag === 1)
						{
							header("Location: index.html");
							
						}
						else
						{
							echo "Wrong username or password";
						}
						$conn -> close();
					}		
				?>
			</div>
		</div>
		<script> 
			const inputs = document.querySelectorAll(".input");
			function addcl()
			{
				let parent = this.parentNode.parentNode;
				parent.classList.add("focus");
			}
			function remcl()
			{
				let parent = this.parentNode.parentNode;
				if(this.value == "")
				{
					parent.classList.remove("focus");
				}
			}

			inputs.forEach(input => {
			input.addEventListener("focus", addcl);
			input.addEventListener("blur", remcl);
			});
		</script>
	</body>
</html>

