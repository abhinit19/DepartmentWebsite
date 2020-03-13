<?php
session_start();
$_SESSION['message']='';
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
include("config.php");
?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    
        $name = $conn->real_escape_string($_POST['username']);
        $phone = $conn->real_escape_string($_POST['phone']);
        $pass=$_POST['password'];
        $pass1=$_POST['password2'];
        $email = $conn->real_escape_string($_POST['email']);
        if($pass==$pass1)
{
        
        
               
                 $sql="insert into user(username,email,phone,password) values('$name','$email','$phone','$pass')";
                  $res=$conn->query($sql);
                  if($res==TRUE)
                  {
                    echo"<script>alert('Registered succesfully')</script>";
                    echo"<script>location.href='try.php'</script>";
                  }
                  else
                  {
                  echo"error:".$conn->error;
                   }
                  }
                  else
                  {
                  $_SESSION['message']="PASSWORD DOESN'T MATCH";
                  }
                }
                ?>
<!DOCTYPE html>
<html>
<style>
body {font-family: "Cambria";
color:white;
background-image: url("Images/art.jpg");
 /* The image used */

height:114vh;
width:100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 5px;
  border: none;
  cursor: pointer;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}
/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 100px) {
  .cancelbtn, .signupbtn {
     width: 50%;
  }
}
</style>
<body>

<form  action="" method="post" style="border:1px solid #ccc">
<div class="bg-img">
  <div class="container">

    <div><center><h2 style="font-family: FrizQuat;">STUDENT REGISTRATION PAGE</center></h2>
    <p>Please fill in this form to create an account.</p>
    <p style='color:red; font-size:20px;'><?php echo $_SESSION['message']?></p>
     <div class="form-row">
    <div class="form-group col-md-6">
    <label for="Username"><b>Username</b></label>
   <input type="text" class="form-control " placeholder="Full name" name="username" title="Name required" required>
      </div> 
</div>
<div class="form-row">
    <div class="form-group col-md-6">
    <label for="email"><b>Phone</b></label>
    <input type="text" class="form-control " name="phone" placeholder="start with 9/8/7/6 followed by 9 numbers" pattern="^[6789]\d{9}$" title="Details Required" required> <!--pattern="[789][0-9]{9}" -->
      </div> 
</div>
<div class="form-row">
    <div class="form-group col-md-6">
    <label for="email"><b>Email</b></label>
    <input type="email" class="form-control " name="email" placeholder="example@abc.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,20}$" title="Details Required" required>
      </div> 
</div>
<div class="form-row">
    <div class="form-group col-md-6">
 <label for="psw"><b>Password</b></label>
 <input type="password" class="form-control " name="password" placeholder="Qwerty1@" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,15}" title="Need 7 or more alphanumericals with atleast 1 special character upto 15 charcters" required>
      </div> 
</div>     
  <div class="form-row">
    <div class="form-group col-md-6">  
<label for="psw-repeat"><b>Repeat Password</b></label>
 <input type="password" class="form-control " name="password2" placeholder="Qwerty1@" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,15}" title="Need 7 or more alphanumericals with atleast 1 special character upto 15 charcters" required>
     </div> 
</div>        
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
<br/>
    
<button type="submit" class="btn btn-primary" name="register" value="Submit">Submit</button>
<button type="reset" class="btn btn-primary">Reset</button>
   <span class="alogin">Already Registered <a href="try.php">Click Here!</a></span>
  </div>
</div>
</form>
</body>
</html>



