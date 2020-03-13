<html>
<body>
<?php 
include("header.php");
?>
<!-----------------------------------------------Reset Password----------------------------------------------->
<section id="forget">
    <form action="#" method="post">
        <div class="container">
        <h2 style="font-family: FrizQuat;color:white">RESET PASSWORD PAGE</h2>      
            <div class="row"> 
                <div class="col-md-6 reset">      
          <label for="mail"><b>Email Id</b></label>  <br/>       
          <input type="text" class="form-control" name="mail" placeholder="example@abc.com"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,20}$" title="Enter the mail in correct format" >      
          <label for="uname"><b>Username</b></label>       
          <input type="text" class="form-control" placeholder="Username" name="uname" pattern="[A-za-z0-9]{5,10}" title="Enter the Registered Username"  >
          <button type="submit" class="btn btn-primary">SUBMIT</button>
          </div></div>
        </div>
      </form>
    </section>
 <?php 
include("footer.php");
?>
</body>
</html>