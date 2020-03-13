<?php
//session_start();
 if(!isset($_SESSION)) 
    { 
        //session_start(); 
    } 
?>
<br /><br /><br />
<div class="box no_margin">
  <?php 
       // if(isset($_SESSION["adminid"]))
        //{
       
        ?>
        <div class="box_t">
          <div class="box_b">
            <br /><br />
            <ul>
              <li><a href="">Home</a></li>
              <li><a href="#">About Us</a></li>
              
              <li><a href="#">Contact Us</a></li>
              <li><a href="registration.php">Test Registration</a></li>
              
            </ul>
          </div>
        </div>
         <?php 
        
       // } 
        ?>
        <?php 
        if(isset($_SESSION["empid"]))
        {
       
        ?>
        <div class="box_t">
          <div class="box_b">
            <h2>Admin Menu</h2>
            <ul>
              <li><a href="#">Dashboard</a></li>
              <li><a href="user_payment_report.php">User Payment Report</a></li>
              <li><a href="log_out.php">Log Out</a></li>
            </ul>
          </div>
        </div>
        <?php 
        
        } 
        ?>
      
</div>