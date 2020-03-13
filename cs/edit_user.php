<?php
session_start();
if(isset($_SESSION['admin']))
{
	
}
else
{
echo"<script>location.href='admin.php'</script>";
}
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
include ('config.php');
?>
<?php
if(isset($_POST["edit"]))
{
	$id=$_POST['id'];
	$_SESSION['id']=$id;
	$sql=$conn->query("select * from user where username='$id'");
	while($row=$sql->fetch_array())
	{
		$username=$row['username'];
		$email=$row['email'];
		$phone=$row['phone'];
	}
}


?>
<div class="container-fluid ">
<div class="row justify-content-around ">
<div class="col-lg-8">
<center><h2>Edit User</h2>
<form action='' method='post'>
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" name='user' id="exampleInputEmail1" value="<?php echo $username   ?>" aria-describedby="emailHelp" placeholder="Enter email" readonly>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email id</label>
    <input type="email" class="form-control" name='email' id="exampleInputPassword1" value="<?php echo $email   ?>"  placeholder="Enter Your Email" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Phone Number</label>
    <input type="text" class="form-control" name='phone' id="exampleInputPassword1" value="<?php echo $phone   ?>" pattern="^[6789]\d{9}$"  placeholder="Enter Your Email" required>
  </div>
  <button type="submit" name='update' class="btn btn-primary">Update</button>
</form>

</div>
</div>
</div>

<?php
if(isset($_POST["update"]))
{
	
		$email=$_POST['email'];
		$phone=$_POST['phone'];

	$sql=$conn->query("update user set email='$email', phone='$phone' where username='$_SESSION[id]'");
	if( $sql==true)
	{
		echo"<script>alert('Updated successfully')</script>";
		echo"<script>location.href='admin-dashboard.php'</script>";
	}
	else
	{
		echo"<script>alert('error ')</script>";
	}
}
?>







<div class="container-fluid fixed-bottom">
<?php
include("footer.php");
?>
</div>
