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
                                 <li class="nav-item"><a class="nav-link text-dark p-3 mb-2  current" href=''><i class="fas fa-database fa-lg mr-3"></i>ONLINE Test</a></li>               
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
                                           <a href="user-logout.php" class="nav-link"><i class="fas fa-sign-out-alt fa-lg text-danger"></i></a>
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
<center><h2>LOYOLA CS ONLINE ADMISSION</h2></center>

<div class="row">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">HTML TEST</h5>
        <p class="card-text">Total Number Of Questions - 10</p>
        <a href="html.php" class="btn btn-primary">Take Up Test</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">PHP TEST</h5>
        <p class="card-text">Total Number Of Questions - 10</p>
        <a href="php.php" class="btn btn-primary">Take Up Test</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">CSS TEST</h5>
        <p class="card-text">Total Number Of Questions - 10</p>
        <a href="css.php" class="btn btn-primary">Take Up Test</a>
      </div>
    </div>
  </div>
</div>
</div>

</body>
    </html>


