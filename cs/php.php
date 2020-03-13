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
                                 <li class="nav-item"><a class="nav-link text-dark p-3 mb-2  current" href=''><i class="fas fa-database fa-lg mr-3"></i>PHP Test</a></li>               
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
<h3>PHP files have a default file extension of ___________ ?</h3>
<div>
<input type="radio" name="answerOne" id="answerOne" value="A">
<label for="answerOneA">A) .html</label>
</div>
<div>
<input type="radio" name="answerOne" id="answerOne" value="B">
<label for="answerOneB">B) .xml</label>
</div>
<div>
<input type="radio" name="answerOne" id="answerOne" value="C">
<label for="answerOneC">C) .php</label>
</div>
</li>
<li>
<h3>What should be the correct syntax to write a PHP code?</h3>
<div>
<input type="radio" name="answerTwo" id="answerTwo" value="A">
<label for="answerTwoA">A) <php></label>
</div>
<div>
<input type="radio" name="answerTwo" id="answerTwo" value="B">
<label for="answerTwoB">B) < ? php ?></label>
</div>
<div>
<input type="radio" name="answerTwo" id="answerTwo" value="C">
<label for="answerTwoC">C)<? ?></label>
</div>
</li>
<li>
<h3>Which of the below statements is equivalent to $add +=$add?</h3>
<div>
<input type="radio" name="answerThree" id="answerThree" value="A">
<label for="answerThreeA">A)$add=$add </label>
</div>
<div>
<input type="radio" name="answerThree" id="answerThree" value="B">
<label for="answerThreeB">B) $add=$add + $add</label>
</div>
<div>
<input type="radio" name="answerThree" id="answerThree" value="C">
<label for="answerThreeC">C) $add=$add + 1</label>
</div>
</li>
<li>
<h3>Which statement will ouput $x on the screen?</h3>
<div>
<input type="radio" name="answerFour" id="answerFour" value="A">
<label for="answerFourA">A)echo "\$x"; </label>
</div>
<div>
<input type="radio" name="answerFour" id="answerFour" value="B">
<label for="answerFourB">B)echo "$$x";</label>
</div>
<div>
<input type="radio" name="answerFour" id="answerFour" value="C">
<label for="answerFourC">C) echo "/$x";</label>
</div>
</li>
<li>
<h3>Which one of the following PHP functions can be used to find files?</h3>
<div>
<input type="radio" name="answerFive" id="answerFive" value="A">
<label for="answerFiveA">A)glob() </label>
</div>
<div>
<input type="radio" name="answerFive" id="answerFive" value="B">
<label for="answerFive">B)file()</label>
</div>
<div>
<input type="radio" name="answerFive" id="answerFive" value="C">
<label for="answerFiveC">C) fold()</label>
</div>
</li>
<li>
<h3>Which one of the following functions can be used to compress a string?</h3>
<div>
<input type="radio" name="answerSix" id="answerSix" value="A">
<label for="answerSixA">A)zip_compress() </label>
</div>
<div>
<input type="radio" name="answerSix" id="answerSix" value="B">
<label for="answerSixB">B)zip()</label>
</div>
<div>
<input type="radio" name="answerSix" id="answerSix" value="C">
<label for="answerSixC">C)gzcompress()</label>
</div>
</li>
<li>
<h3>PHP's numerically indexed array begin with position?</h3>
<div>
<input type="radio" name="answerSeven" id="answerSeven" value="A">
<label for="answerSevenA">A)1 </label>
</div>
<div>
<input type="radio" name="answerSeven" id="answerSeven" value="B">
<label for="answerSevenB">B)2</label>
</div>
<div>
<input type="radio" name="answerSeven" id="answerSeven" value="C">
<label for="answerSevenC">C) 0</label>
</div>
</li>
<li>
<h3>Which inbuilt function will add a value to the end of an array?</h3>
<div>
<input type="radio" name="answerEight" id="answerEight" value="A">
<label for="answerEightA">A)into_array()</label>
</div>
<div>
<input type="radio" name="answerEight" id="answerEight" value="B">
<label for="answerEightB">B)inend_array()</label>
</div>
<div>
<input type="radio" name="answerEight" id="answerEight" value="C">
<label for="answerEightC">C) array_push()</label>
</div>
</li>
<li>
<h3>Which of the following function is used to get the value of the previous element in an array?</h3>
<div>
<input type="radio" name="answerNine" id="answerNine" value="A">
<label for="answerNineA">A)last()</label>
</div>
<div>
<input type="radio" name="answerNine" id="answerNine" value="B">
<label for="answerNineB">B)before()</label>
</div>
<div>
<input type="radio" name="answerNine" id="answerNine" value="C">
<label for="answerNineC">C)prev()</label>
</div>
</li>
<li>
<h3>Which function returns an array consisitng of associative key/value pairs?</h3>
<div>
<input type="radio" name="answerTen" id="answerTen" value="A">
<label for="answerTenA">A)count()</label>
</div>
<div>
<input type="radio" name="answerTen" id="answerTen" value="B">
<label for="answerTenB">B)array_count_values() </label>
</div>
<div>
<input type="radio" name="answerTen" id="answerTen" value="C">
<label for="answerTenC">C) count_values()</label>
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
if ($answer1 == "C"){$score++;}
if ($answer2 == "C"){$score++;}
if ($answer3 == "B"){$score++;}
if ($answer4 == "A"){$score++;}
if ($answer5 == "A"){$score++;}
if ($answer6 == "C"){$score++;}
if ($answer7 == "C"){$score++;}
if ($answer8 == "C"){$score++;}
if ($answer9 == "C"){$score++;}
if ($answer10 == "B"){$score++;}
$sql=$conn->query("insert into score(username,test_name,mark) values('$_SESSION[username]','php','$score')");
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
