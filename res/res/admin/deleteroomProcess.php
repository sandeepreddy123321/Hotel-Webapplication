<?php
extract($_POST);
include("co.php");
$sql=mysqli_query($conn,"SELECT * FROM deluxacroom where roomno='$Roomno'");
if(mysqli_num_rows($sql)==0)
{
    echo "Room Doesnot Exists"; 
	exit;
}

else if(isset($_POST['save']))
{
    if ($_POST["pass"] == $_POST["cpass"]) {
        $query="DELETE FROM deluxacroom WHERE roomno = '$Roomno'";
        $sql=mysqli_query($conn,$query)or die("Could Not Perform the Query");
        
     }
    
}
?>




