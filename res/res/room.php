<?php
include('header.php');
include('dbcon.php');


?>
<style>
    .room-status{
        display: none;
    }
</style>

<div id="room-home">
     <figure>
         <img src="img/deluxroom.jpg" alt="delux">
         <img src="img/delux2.jpg" alt="delux">
         <img src="img/delux3.jpg" alt="delux">
         <img src="img/deluxroom.jpg" alt="delux">
         <img src="img/delux3.jpg" alt="delux">
         
     </figure>
        

</div>

<div id="f1">
    <h2 class="room-h2"><i class="fas fa-hotel"></i> SEARCH YOUR ROOMS HERE</h2>
         <form action="roomprocess.php " method="get"> 
         <center><table >
             <tr>
                 
                <th width="20%" height="50px" required>Check In Date</th>
                 <th width="20%" height="50px" required>Check Out Date</th>
                 <th width="20%" height="50px">Room</th>
                 <td rowspan="2"><input type="submit" name="sub" id="check-btn" value="Check"  ></td>
             </tr>
             <tr>
                
                <td width="20%" height="50px"><center><input type="date" name="ci" required></center></td>
                 <td width="20%" height="50px"><center><input type="date" name="co" required></center></td>
                 <td width="20%" height="50px">
                    <center> <select name="room">
                         <option >1</option>
                         <option >2</option>
                         <option >3</option>
                         <option >4</option>
                         <option >5</option>
                        

                     </select></center>
            </form>
           
                 </td>
             </tr>
         </table></center>
         
    <div class="room-status">

     <section id="rooms-right">
        
    </section>
    <section id="rooms-right">
       
    </section>
    <section id="rooms-right">
        
    </section>
    </div>
    
   
<?php
include('headfooter.php');
?>

</body>
</html>