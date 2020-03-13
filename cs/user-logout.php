<?php
session_start();
unset($_SESSION['username']); 
echo"<script>location.href='try.php'</script>";
?>