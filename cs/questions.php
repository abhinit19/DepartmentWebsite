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
                 $sql="insert into questions(topic,question,opA,opB,opC,Answer) values(,'$topic','$qns','$oA','$oB','$oC','$answer')";
                  $res=$conn->query($sql);
                  if($res==TRUE)
                  {
                    echo"<script>alert('Questions added succesfully')</script>";
                    echo"<script>location.href='questions.php'</script>";
                  }
                  else
                  {
                  echo"error:".$conn->error;
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
    <select name="">
	<option value="HTML">	HTML
	</option>
	</select>
      </div> 
	   <div class="form-group col-md-6">
    <label><b>Question</b></label>
    <input type="text" class="form-control " name="qns"  title="Type the Question" required>
      </div> 
</div>
<div class="form-row">
    <div class="form-group col-md-4">
 <label><b>Option A</b></label>
 <input type="text" class="form-control " name="oA" title="Type the Option A" required>
      </div> 
    <div class="form-group col-md-4">  
<label><b>Option B</b></label>
 <input type="text" class="form-control " name="oB" title="Type the Option B" required>
     </div> 
	  <div class="form-group col-md-4">  
<label ><b>Option C</b></label>
 <input type="text" class="form-control " name="oC" title="Type the Option C"required>
     </div> 
</div>  
<div class="form-row">
   <div class="form-group col-md-6">
    <label><b>Answer</b></label>
    <input type="text" class="form-control " name="answer"title="Details Required" required>
      </div> 
</div>  
<br/>   
<button type="submit" class="btn btn-primary" name="upload" value="Submit">Submit</button>
<button type="reset" class="btn btn-primary">Reset</button>
</div>
</div>
</form>
</body>
</html>



