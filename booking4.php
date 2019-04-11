<?php
error_reporting(0);
	$audi_id=$_POST["audi_id"];
	$name=$_POST["name"];
	$email=$_POST["email"];
	$event=$_POST["event"];
	$cont=$_POST["cont"];
	$altcont=$_POST["altcont"];
	$addrs=$_POST["addrs"];
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
	$fprice=$price-$dprice;
	global $bookid;
$c=1;
if(isset($_POST["sub"]))
{

	
    //$conn=mysqli_connect("localhost","root","","auditorium");
	$conn=mysqli_connect("localhost","nikhil","nik123","auditorium");
	$sq="select * from booking_status where aid='".$audi_id."' and date='".$date."'";
    $re= mysqli_query($conn,$sq);
	
	if(mysqli_num_rows($re)!=0)
	{
		
    
    $sql="select * from booking";
    $res= mysqli_query($conn,$sql);
       
    while($row=mysqli_fetch_assoc($res))
    { $c=$c+1;}
     $bookid="AUDIBOOKID".(string)$c;
    
    
  
    $sql1="insert into booking (bid, name, Address, C_no, A_no, email, aid, seat, event, price, date,slot1,slot2,slot3,slot4) values ('".$bookid."','".$name."','".$addrs."', '".$cont."','".$altcont."',
	'".$email."','".$audi_id."','".$seats."','".$event."','".$price."','".$date."','".$t1."','".$t2."','".$t3."','".$t4."')";

    mysqli_query($conn,$sql1);
	if($t1=="Booked")
	{
	$sql3="update booking_status set slot1='Booked' where aid='".$audi_id."' and date='".$date."'";
	mysqli_query($conn,$sql3);
	}
	 if($t2=="Booked")
	{
	$sql3="update booking_status set slot2='Booked' where aid='".$audi_id."' and date='".$date."'";
	mysqli_query($conn,$sql3);
	}
	if($t3=="Booked")
	{
	$sql3="update booking_status set slot3='Booked' where aid='".$audi_id."' and date='".$date."'";
	mysqli_query($conn,$sql3);
	}
	if($t4=="Booked")
	{
	$sql3="update booking_status set slot4='Booked' where aid='".$audi_id."' and date='".$date."'";
	mysqli_query($conn,$sql3);
	}
    
	$sql2="select * from booking where bid='".$bookid."'";
	$my=mysqli_query($conn,$sql2);
	$p=mysqli_fetch_row($my);
	if($p==true)
	{   
		$y=1;
	}	
	}
	
	
	else
	{
		$sql="select * from booking";
    $res= mysqli_query($conn,$sql);
       
    while($row=mysqli_fetch_assoc($res))
    { $c=$c+1;}
     $bookid="AUDIBOOKID".(string)$c;
    
    
  
    $sql1="insert into booking (bid, name, Address, C_no, A_no, email, aid, seat, event, price, date,slot1,slot2,slot3,slot4) values ('".$bookid."','".$name."','".$addrs."', '".$cont."','".$altcont."',
	'".$email."','".$audi_id."','".$seats."','".$event."','".$price."','".$date."','".$t1."','".$t2."','".$t3."','".$t4."')";

    mysqli_query($conn,$sql1);
	$sql3="insert into booking_status (aid, date, slot1, slot2, slot3,slot4)values('".$audi_id."','".$date."','".$t1."','".$t2."','".$t3."','".$t4."')";
    mysqli_query($conn,$sql3);
	$sql2="select * from booking where bid='".$bookid."'";
	$my=mysqli_query($conn,$sql2);
	$p=mysqli_fetch_row($my);
	if($p==true)
	{   
		$y=1;
	}	
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
	window.history.go(-2);
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
<title>booking</title>
,, 
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
		
	<form style="margin-top:18px" name="fname" action="#" method="POST" onsubmit="return con()">
    	<div class="form-group">
		<center>
			<label style="font-size:25"><u>Confirm Your Details</u></label><br>
			<center><label style="margin-top:20px">Booking Details</label></center><hr style="margin-top:10px">
		</center>
			<div class="form-group" style="width:100%; float:left">
             <label> AUDITORIUM Id :</label>
             <input type="text" name="audi_id" id="a1"  class="form-control" value="<?php echo($audi_id);?>"  required readonly>
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
			 <input type="text" class="form-control"  name="audi_name" value="<?php echo ($audi_name); ?>" readonly ></input>
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
			 <input type="number" class="form-control" name="dprice" value="<?php echo ($dprice); ?>" readonly></input>
			</div>
			<center>
			<div class="form-group" style="width:48%">
			 <label>FINAL PRICE:</label>
			 <input type="number" class="form-control" name="fprice" value="<?php echo ($fprice); ?>" readonly></input>
			</div>
			</center>



			
			<hr><br>
					
			<div class="form-group" >
			
			 <input type="submit" class="btn btn-success"  id="r" value="Final Submit"   name="sub">

			
			<input type="button" class="btn btn-danger" value="Edit" name="edit" id="e">
			<a href="show.php"><button type="button" style="margin-top:20px;margin-left:80%;height:30px;">cancel</button></a>
			</div> 
			
			
					<div ><p style="background-color:gold;width:35%"><?php echo"YOUR Booking ID is $bookid <br>"?>
					</p>
					</div>

			</div> 
			</form>
			
			
	
             
    </div>
	</div>
	<script>
	    
r="<?php echo $y;  ?>"
if(r==1)
{
	document.getElementById('r').disabled=true;
	document.getElementById('r').style.backgroundColor="lightgreen";
	document.getElementById('r').style.color="white";
	document.getElementById('e').disabled=true;
	document.getElementById('e').style.backgroundColor="lndianred";
	document.getElementById('e').style.color="white";
}


			
			
			
 

</body>
</html>