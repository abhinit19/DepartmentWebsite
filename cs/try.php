<?php
session_start();

?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Loyola College Computer Science(CS)</title>
<link href="css/style.css" rel="stylesheet"  type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<?php 
include("header.php");
?>
<html>
<head>
<title>login</title>
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("Images/10.jpg");

height:100%;
width;100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  
  position: absolute;
  right:250;
  margin: 200px;
  max-width: 500px;
  padding: 30px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>
<div id="frm">
<div class="bg-img">
<div class="container">
<form action="try.php" method="POST">
<h1>Login</h1>
<p>
<label for="Username"><b>Username</b></label>
   <input type="text" class="form-control " placeholder="Full name" name="username" title="Name required" required>
</p>
<p>
<label>Password</label>
<input type="password" id="pass" name="password" required/>
</p>
<p>
<input type="submit" name="login" class="btn" value="Login"/>
</p>
</form>
</div>
</body>
</html>
<br><br><br><br><br><br><br><br><br><br><br><br>
<?php
				if(isset($_POST['login'])){
                                include 'config.php';
					
					
					$username = $_POST['username'];
					$password = $_POST['password'];
					
					$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
					$rs = $conn->query($query);
					$num = $rs->num_rows;
					$rows = $rs->fetch_assoc();
					if($num > 0){
			
						$_SESSION['username'] = $rows['username'];
						$_SESSION['password'] = $rows['password'];
						echo "<script type = \"text/javascript\">
									alert(\"Login Successful. Welcome\");
									window.location = (\"dashboard.php\")
									</script>";
					} else{
						echo "<script type = \"text/javascript\">
									alert(\"Login Failed. Try Again................\");
									window.location = (\"try.php\")
									</script>";
					}
				}
			?>
			


