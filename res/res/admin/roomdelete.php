<?php
  include('../dbcon.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete room</title>
    <link rel="stylesheet" href="stylee.css">
</head>
<style>
     body{
        background-color:pink;
    }
   
    h1{
        text-align:center;
        margin-top: 20px;
    }
    .delux-insert{
        height: 200px;
        width: 400px;
        border-radius:10px;
        background-color:crimson;
        margin-top: -10px;
        margin-left: 38%;
        
    }
    .delux-insert form{
          display: flex;
          flex-direction:column;
          align-items:center;
          justify-content:center;
          padding-top: 30px;
    }
    .delux-insert form table tr td input{
       padding:4px 0;
       margin-bottom: 10px;
       border-radius:8px;
       padding-left: 10px;
    }
    .delux-insert form table tr td{
        font-size:20px;
    }
    #delux-btn{
        width:80%;
        background-color:blue;
        font-size:16px;
    }
    .imgg{
        display: flex;
        justify-content:space-evenly;
        margin-top: 10px;
    }
    img{
        width: 350px;
        /* margin-left: 100px; */
    }
</style>
<body>
    <div class="wrapper-container">
    <div class="wrapper">
        <ul>
            
            <li><a href="#">Room Update</a>
                    <ul>
                        <li><a href="adelux.php">Delux ac</a></li>
                        <li><a href="aac.php"> ac</a></li>
                        <li><a href="anonac.php">Non ac</a></li>
                    </ul>
            </li>
            <li><a href="roomdelete.php">Delete Room</a></li>
            <li><a href="booking.php">Booking</a></li>
            <li><a href="roomdetails.php">Room Details</a></li>
            <li><a href="admindash.php">Admin Dash</a></li>
            
        </ul>
    </div>
    </div>
    <h1 >Rooms Delete</h1>
    <div class="imgg">
    <img src="../img/acroom2.jpg" alt="delux ac">
    <img src="../img/acroom2.jpg" alt="delux ac">
    </div>


    <div class="signup-form">
    <center>
        <b>
    <form action="deleteroomProcess.php" method="post" enctype="multipart/form-data">
		
        <div class="wrapper">
        <label for="Room Number">Room Number:</label>
        	<input type="number" class="form-control" name="Roomno" placeholder="Room Number" required="required">
        </div></br>
        <div class="wrapper">
            <label for="cars">Choose a Room type:</label>

<select name="cars" id="cars">
  <option value="select">--Select--</option>
  <option value="deluxacroom">Deleux Ac Room</option>
  <option value="acroom">Ac Room</option>
  <option value="nonac">Non Ac Room</option>
</select>
        </div></br>
		<div class="wrapper">
            <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Submit</button>
        </div>
        
    </form>
</b>
    </center>
</div>
</div>
</body>
</html>