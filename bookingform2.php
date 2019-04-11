<?php
error_reporting(0);
	$name=$_POST["name"];
	$email=$_POST["email"];
	$cont=$_POST["cont"];
	$altcont=$_POST["altcont"];
	$addrs=$_POST["addrs"];
	$audi_id=$_POST["audi_id"];
	$date=$_POST["date"];
	$t1=$_POST["t1"];
	$t2=$_POST["t2"];
	$t3=$_POST["t3"];
	$t4=$_POST["t4"];
	$audi_name=$_POST["audi_name"];
	$date=$_POST["date"];
	$seats=$_POST["seats"];
	$price=$_POST["price"];
	$dprice=$_POST["dprice"];
	$event=$_POST["event"];

	

						//$conn=mysqli_connect("localhost","root","","auditorium");
						$conn=mysqli_connect("localhost","nikhil","nik123","auditorium");
							$sql="select * from audi_details";
						$res= mysqli_query($conn,$sql);
							while($row=mysqli_fetch_assoc($res))
						{
							if($audi_id==$row["audi_id"])
							{
							$audi_name=$row["audi_name"];
							$price= $row["price"];
							$seats=$row["seats"];
							
								
							}
							
						}
			
?>




<html>
<head>
		
<link rel="stylesheet"  href="my.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     
        



   


<script>
function goback()
{
	window.history.go(-1);
}

</script>
<script>
	function con()
	{
		if (confirm("Are you sure for final submit?"))
		{
          return true;
		  
		}
		else
		{
			alert('sorry');
			return false;
		}
	}  
	</script>
</head>
<title>Student Registration</title>

<!-- internal css -->
<style>
#form
{
    background-color:#ABEBC6;
    min-height:auto;
    padding:10px 40px 40px 40px;
}

.h1
{
    font-size:35px;
    font-family:Times New Roman;

    font-weight:700;
    border-bottom-style:ridge;
}

label
{
    font-size:15px;
}

.btn-success
{
    padding:10px;
    width:48%;
    
}

.btn-danger
{
    padding:10px;
    width:48%;
    float:right;
}



</style>


<body>


	
	







	

<div class="container" style="margin-top:-18px;margin-bottom:5px;">
	
 <div class="row">
		
  <div class="col-md-6 col-md-offset-3" id="form">
		
	<form style="margin-top:18px" name="fname" action="booking4.php" method="POST">
    	<div class="form-group">
		<center>
			<label style="font-size:25"><u>Confirm Your Details</u></label><br>
			<center><label style="margin-top:20px">Booking Details</label></center><hr style="margin-top:10px">
		</center>
				<div class="form-group" style="width:100%; float:left">
             <label> AUDITORIUM Id :</label>
             <input type="text" name="audi_id"  class="form-control" value="<?php echo($audi_id);?>" readonly>
            </div>
			<br><label>Name :</label>
			<input type="text" class="form-control" name="name" value="<?php echo ($name); ?>" readonly></input>
		</div>
					
			<div class="form-group">
			 <label>E-mail ID :</label>
			 <input type="email" class="form-control" name="email" value="<?php echo ($email); ?>" readonly></input>
			</div>
					
			<div class="form-group" style="width:48%; float:left">
			 <label>Contact No. :</label>
			 <input type="number" class="form-control" maxlength="10" name="cont" value="<?php echo ($cont); ?>" readonly></input>
			</div>
			
			<div class="form-group"  style="width:48%; float:right">
			 <label>Alt. Contact No. :</label>
			 <input type="number" class="form-control" name="altcont" value="<?php echo ($altcont); ?>" readonly></input>
			</div><hr style="margin-top:100px">
			<div class="form-group" style="width:100%; float:left">
                    <label>Event Name</label>
                    <input type="text" class="form-control"  placeholder="Enter Event Name" name="event" value="<?php echo ($event); ?>" readonly></input>
                
            </div>	
			
			<div class="form-group">
				<center>
					<label>Address</label>
					<input type="text" class="form-control" style="resize:none" name="addrs" value="<?php echo ($addrs); ?>" readonly></input>
				</center>
			</div>


           
			<hr>
			<div class="form-group" style="width:96%; float:left">
			 <label style="padding-left:175px">AUDITORIUM:</label>
			 <input type="text" class="form-control" id="audi_name" name="audi_name" value="<?php echo ($audi_name); ?>" readonly></input>
			</div>
			 <hr>            
     
			<div class="form-group" style="width:96%; float:left">
             <label>DATE :</label>
             <input type="text" class="form-control" name="date" value="<?php echo($date);?>" readonly >
            </div>
			<div class="form-group" style="width:48%; float:left">
             <label>09:00-12:00:</label>
             <input type="text" class="form-control" name="t1" value="<?php echo($t1);?>" readonly>
            </div>
			<div class="form-group" style="width:48%; float:right">
             <label>12:30-03:30 :</label>
             <input type="text" class="form-control" name="t2" value="<?php echo($t2);?>" readonly>
            </div>
			<div class="form-group" style="width:48%; float:left">
             <label>16:00-19:00 :</label>
             <input type="text" class="form-control" name="t3" value="<?php echo($t3);?>" readonly>
            </div>
			<div class="form-group" style="width:48%; float:right">
             <label>19:30-22:30 :</label>
             <input type="text" class="form-control" name="t4" value="<?php echo($t4);?>" readonly>
            </div>

			<center>
			<div class="form-group" style="width:48%">
			 <label>CAPACITY:</label>
			 <input type="number" class="form-control" name="seats" value="<?php echo ($seats); ?>" readonly></input>
			</div>
			</center>
			
			<div class="form-group" style="width:48%;float:left">
			 <label>TOTAL PRICE:</label>
			 <input type="number" class="form-control" name="price" id="price" value="<?php echo ($price); ?>" readonly></input>
			</div>
			<div class="form-group" style="width:48%;float:right">
			 <label>Discount :</label>
			 <input type="text" class="form-control" name="dprice" value="" ></input>
			</div>
			

			
			<hr><br>
					
			<div class="form-group" style="width:96%; float:left;padding-left:150px" >
			 <button type="button" class="btn btn-success" data-toggle="modal" data-target="#sub">Submit</button>

			
			<!--Modal-->
			<div class="modal fade" id="sub" role="dialog">
			 <div class="modal-dialog modal-sm">
	
			<!-- Modal content-->
			  <div class="modal-content">
			   <div class="modal-header">
			   <button type="button" class="close" data-dismiss="modal">&times;</button> 
			   <h4 class="modal-title">Are you sure you want to continue..?</h4>
			   </div>
		
		
		
			   <div class="modal-footer">
			   <button type="button" class="btn btn-default" data-dismiss="modal" name="close">Close</button>
			   <input type="submit" class="btn btn-success" value="Save Changes" name="save"/></a>
			   </div>
			  </div> 
			 </div>
			</div>

			</div> 
			
			
					<div >
                </div>
               </div>   
    </div>
	</form>
	</div>

			
			
			
 

</body>