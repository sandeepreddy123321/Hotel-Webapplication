<?php
   $con=mysqli_connect("localhost","root","","users");
   
   if(mysqli_connect_error())
   {
       echo"<script>alert('Cannot Connect');</script>";
       exit();
   }

?>