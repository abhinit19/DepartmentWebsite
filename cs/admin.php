<?php
session_start();
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Loyola College Computer Science(CS)</title>
<link href="style.css" rel="stylesheet"  type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
</html>
<?php
include("header.php");
?>
<?php
				if(isset($_POST['login'])){
                                include 'config.php';
					
					
					$username = $_POST['username'];
					$password = $_POST['password'];
					
					$query = "SELECT * FROM admin where username='$username' and password='$password'";
					$rs = $conn->query($query);
					
					
					if($rs->num_rows > 0){
						$row=$rs->fetch_array();
						$_SESSION['admin'] = $row[username];
						echo "<script type = \"text/javascript\">
									alert(\"Login Successful. Welcome\");
									
									</script>";
						echo"<script>location.href='admin-dashboard.php'</script>";

					} else{
						echo "<script type = \"text/javascript\">
									alert(\"Login Failed. Try Again................\");
									window.location = (\"admin.php\")
									</script>";
					}
				}
			?>




<html>
<head>
<link href="css/style3.css" rel="stylesheet" />
</head>

<body>
<div id="container">
 <h1><center>Admin Login</center> </h1>
<form method="post" action="">
 <center>
  
  <div class="userinput">
   <label> USERNAME </label>   
   <input type="text" name="username" required>
  </div>
  
   <div class="userinput">
   <label> PASSWORD </label>   
   <input type="password" name="password" required>
  </div>
</center>
  <div style="text-align:center">
   <input type="submit" value="login" name="login" class="sampleBtn"/>   
  </div>
 
 
  
 </form>
 
 </div>
 
</body>

</html>
<br><br><br><br><br><br><br><br><br><br><br>
<?php
include("footer.php");
?>
