<?php
session_start();
unset($_SESSION['admin']); 
echo"<script>location.href='try.php'</script>";
?>