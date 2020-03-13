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
<div class="container-fluid ">
<div class="row ">
<div class="col-lg-12">
<a href="admin-logout.php" class="nav-link"><i class="fa fa-sign-out fa-lg text-danger"></i></a>
</div>
</div>
<div class="row justify-content-around ">
<div class="col-lg-8">

<center><h2>Admission Details</h2>
<table class="table table-bordered table-hover">
<tr>
<th>username</th>
<th>Email Id</th>
<th>Phone Number</th>
<th>Test Name</th>
<th>Scores</th>
<th>Action</th>


<tr>
<?php
$sql=$conn->query("select * from user");
if($sql->num_rows>0)
{
	while($row=$sql->fetch_array())
	{
		$sql1=$conn->query("select test_name,mark from score where username='$row[username]'");
		$row1=$sql1->fetch_array();
		echo"<tr><td>".$row['username']."</td>
		<td>".$row['email']."</td>
		<td>".$row['phone']."</td>
		<td>".$row1['test_name']."</td>
		<td>".$row1['mark']."</td>
		
		";
	
?>
<td>
<div class='row'>
<div class='col-lg-6'>
<form action='edit_user.php' method='post'><input type='hidden' name='id' value="<?php echo $row['username'] ?>">
<button type="submit" class="btn btn-sm btn-info"name="edit">Edit</button></form>
</div>
<div class='col-lg-6'>
<form action='' method='post'><input type='hidden' name='id' value="<?php echo $row['username'] ?>">
<button type="submit" class="btn btn-sm btn-danger"name="delete">Delete</button></form>
</div>
</td>
</tr>
<?php
}
}
?>
</table>

</div>
</div>
</div>

<?php
if(isset($_POST["delete"]))
{
	
	$id=$_POST['id'];
	$score=$conn->query("delete from score where username='$id'");
	if( $score==true)
	{
		$user=$conn->query("delete from user where username='$id'");
		if($user==true)
		{
		echo"<script>alert('deleted successfully')</script>";
		echo"<script>location.href='admin-dashboard.php'</script>";
		}
		
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
