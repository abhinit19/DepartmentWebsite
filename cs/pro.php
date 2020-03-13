
<html>
<head>
<style type="text/css">
#wrapper {
width:950px;
height:auto;
padding: 13px;
margin-right:auto;
margin-left:auto;
background-color:#fff;
}
</style>
</head>
<?php
$fid = $_GET['id'];
?>
<body bgcolor="#e1e1e1">
<div id="wrapper">
<center><font face="Andalus" size="5">Your Score</font></center>
<br />
<br />
<?php
$answer1= $_POST['answerOne'];
$answer2= $_POST['answerTwo'];
$answer3= $_POST['answerThree'];
$score = 0;
if ($answer1 == "B"){$score++;}
if ($answer2 == "B"){$score++;}
if ($answer3 == "B"){$score++;}
echo "<center><font face='Berlin Sans FB' size='8'>Your Score is <br> $score/3</font></center>";
?>
</div><!--- end of wrapper div --->
</body>
</html>