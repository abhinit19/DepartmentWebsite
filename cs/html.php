 <?php
 session_start();
 $_SESSION['message']='';
 if(isset($_SESSION['username']))
 {
	 
 }
 else
 {
	 echo"<script>location.href='index.php'</script>";
 }
 
 ?>
 <html> 
    <head>     
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" >
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Rokkitt&display=swap" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet"  type="text/css">
		<link href="css/style1.css" rel="stylesheet"  type="text/css">

    </head>
    <body ><section>
	<header class="dash">
	 <!--Nav bar-->
        <nav class="navbar navbar-expand-md navbar-light">
            <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
			 <div class="container-fluid">
                   <div class="row">
                       <!--sidebar-->
                       <div class="col-xl-2 col-lg-3 col-md-4 sidebar fixed-top">
                            <h5 class="navbar-brand text-white d-block mx-auto py-3 text-center mb-4 bottom-border">LC_CS</h5>
                           <div class=" bottom-border pb-3" >
                            <a href=''><h5 style="color:white"><i class="fas fa-user fa-fw fa-lg mr-3"></i><?php echo $_SESSION['username'] ?></h5></a>
                           </div>
                               <ul class="navbar-na flex-column mt-4">
                                 <li class="nav-item"><a class="nav-link text-dark p-3 mb-2  current" href=''><i class="fas fa-database fa-lg mr-3"></i>HTML Test</a></li>               
                              </ul>
                           </div>
                       <!--end of sidebar-->
                       <!--topnav-->
                       <div class="col-xl-10 col-lg-9 col-md-8 ml-auto fixed-top py-3 top-navbar">
                           <div class="row align-items-center">
                               <div class="col-md-4 ">
                                   <h4 class="text-light mb-0">Test to Register</h4>
                               </div>
                               <div class="col-md-6"></div>
                               <div class="col-md-2">
							   <h4 class="text-light mb-0"></h4>
                                   <ul class="navbar-nav">
                                       <li class="nav-item  mb-0">
                                           <a href="try.php" class="nav-link"><i class="fas fa-sign-out-alt fa-lg text-danger"></i></a>
                                       </li>
                                   </ul>
                               </div>
                           </div>
                       </div>
                       <!--end of topnav-->
                   </div>
               </div>
			       </div>
            </div>
        </nav>
		</section>
		</header>
        <div class="container">
<br>
<br>
<br><br>
<form action='' method='post' id='quizForm' id='1'>
<center><h2>LOYOLA CS ONLINE ADMISSION</h2></center>

<ol>
<li>
<h3>WWW is based on which model ?</h3>
<div>
<input type="radio" name="answerOne" id="answerOne" value="A">
<label for="answerOneA">A) Local-Server</label>
</div>
<div>
<input type="radio" name="answerOne" id="answerOne" value="B">
<label for="answerOneB">B) Client-Server</label>
</div>
<div>
<input type="radio" name="answerOne" id="answerOne" value="C">
<label for="answerOneC">C) 3-tier</label>
</div>
</li>
<li>
<h3>Web pages starts with which of the following tags?</h3>
<div>
<input type="radio" name="answerTwo" id="answerTwo" value="A">
<label for="answerTwoA">A) body </label>
</div>
<div>
<input type="radio" name="answerTwo" id="answerTwo" value="B">
<label for="answerTwoB">B) title </label>
</div>
<div>
<input type="radio" name="answerTwo" id="answerTwo" value="C">
<label for="answerTwoC">C) html </label>
</div>
</li>
<li>
<h3>HTML is a subset of?</h3>
<div>
<input type="radio" name="answerThree" id="answerThree" value="A">
<label for="answerThreeA">A)SGMT</label>
</div>
<div>
<input type="radio" name="answerThree" id="answerThree" value="B">
<label for="answerThreeB">B) SGML</label>
</div>
<div>
<input type="radio" name="answerThree" id="answerThree" value="C">
<label for="answerThreeC">C) SGMD</label>
</div>
</li>
<li>
<h3>which of the following is a container?</h3>
<div>
<input type="radio" name="answerFour" id="answerFour" value="A">
<label for="answerFourA">A) <"Select"></label>
</div>
<div>
<input type="radio" name="answerFour" id="answerFour" value="B">
<label for="answerFourB">B) <"body"></label>
</div>
<div>
<input type="radio" name="answerFour" id="answerFour" value="C">
<label for="answerFourC">C) Both a and b</label>
</div>
</li>
<li>
<h3>From which tag the descriptive list starts ?</h3>
<div>
<input type="radio" name="answerFive" id="answerFive" value="A">
<label for="answerFive">A) "<LL>" </label>
</div>
<div>
<input type="radio" name="answerFive" id="answerFive" value="B">
<label for="answerFive">B) <"DD"></label>
</div>
<div>
<input type="radio" name="answerFive" id="answerFive" value="C">
<label for="answerFiveC">C) <"DL"></label>
</div>
</li><li>
<h3>The tag which allows you to rest other HTML tags within the description is ?</h3>
<div>
<input type="radio" name="answerSix" id="answerSix" value="A">
<label for="answerSixA">A) <"TH"></label>
</div>
<div>
<input type="radio" name="answerSix" id="answerSix" value="B">
<label for="answerSixB">B) <"TR"></label>
</div>
<div>
<input type="radio" name="answerSix" id="answerSix" value="C">
<label for="answerSixC">C) <"CAPTION"></label>
</div>
</li><li>
<h3> <"Base"> tag is designed to appear only between ?</h3>
<div>
<input type="radio" name="answerSeven" id="answerSeven" value="A">
<label for="answerSevenA">A) <"HEAD"></label>
</div>
<div>
<input type="radio" name="answerSeven" id="answerSeven" value="B">
<label for="answerSevenB">B) <"TITLE"></label>
</div>
<div>
<input type="radio" name="answerSeven" id="answerSeven" value="C">
<label for="answerSevenC">C) <"FORM"></label>
</div>
</li><li>
<h3>The tag used to create a new list item and also include a hyperlink is ?</h3>
<div>
<input type="radio" name="answerEight" id="answerEight" value="A">
<label for="answerEightA">A) <"DL"></label>
</div>
<div>
<input type="radio" name="answerEight" id="answerEight" value="B">
<label for="answerEightB">B) <"LI"></label>
</div>
<div>
<input type="radio" name="answerEight" id="answerEight" value="C">
<label for="answerEightC">C) <"UL"></label>
</div>
</li><li>
<h3>Any part of the graphic that is not included in another hot zone is considered to be part of ?</h3>
<div>
<input type="radio" name="answerNine" id="answerNine" value="A">
<label for="answerNineA">A) rect </label>
</div>
<div>
<input type="radio" name="answerNine" id="answerNine" value="B">
<label for="answerNineB">B) point </label>
</div>
<div>
<input type="radio" name="answerNine" id="answerNine" value="C">
<label for="answerNineC">C) default </label>
</div>
</li><li>
<h3><"INPUT"> is?</h3>
<div>
<input type="radio" name="answerTen" id="answerTen" value="A">
<label for="answerTenA">A) format tag</label>
</div>
<div>
<input type="radio" name="answerTen" id="answerTen" value="B">
<label for="answerTenB">B) empty tag</label>
</div>
<div>
<input type="radio" name="answerTen" id="answerTen" value="C">
<label for="answerTenC">C) None of these</label>
</div>
</li>
</ol>
<input type="submit" name="submit"value="Submit Quiz">
</form>
</div>

</body>
    </html>

<?php
include('config.php');
if(isset($_POST['submit']))
{
$answer1= $_POST['answerOne'];
$answer2= $_POST['answerTwo'];
$answer3= $_POST['answerThree'];
$answer4= $_POST['answerFour'];
$answer5= $_POST['answerFive'];
$answer6= $_POST['answerSix'];
$answer7= $_POST['answerSeven'];
$answer8= $_POST['answerEight'];
$answer9= $_POST['answerNine'];
$answer10= $_POST['answerTen'];
$score = 0;
if ($answer1 == "B"){$score++;}
if ($answer2 == "C"){$score++;}
if ($answer3 == "B"){$score++;}
if ($answer4 == "C"){$score++;}
if ($answer5 == "C"){$score++;}
if ($answer6 == "C"){$score++;}
if ($answer7 == "A"){$score++;}
if ($answer8 == "B"){$score++;}
if ($answer9 == "C"){$score++;}
if ($answer10 == "B"){$score++;}
$sql=$conn->query("insert into score(username,test_name,mark) values('$_SESSION[username]','html','$score')");
if($sql==true)
{
	
                    echo"<script>alert('completed succesfully')</script>";
					echo"<script>location.href='try.php'</script>";
	
}
else
{
                    echo"<script>alert('completed s')</script>";
}
}
?>
