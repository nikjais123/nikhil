<?php 
include('profile.php');
error_reporting(0);
 ?>
<?php   

            if(isset($_POST['ok']))
                {
                    
                        
							//$conn=mysqli_connect("localhost","root","","auditorium");
							$conn=mysqli_connect("localhost","nikhil","nik123","auditorium");
						$sql="select * from audi_details";
                        $audi_id=$row["audi_id"];
                        $res= mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_assoc($res))
                        {
                            if($audi_id==$row["audi_id"])
                            {
                            $price= $row["price"];
                            $seats=$row["seats"];
                                
                            }
                            
                        }
                }
                ?>




<html>
<head>  
<link rel="stylesheet"  href="my.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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

</head>
<title>booking form</title>





<body>

<div class="container" style="margin-top:-15px;margin-bottom:5px;">
    
 <div class="row" >
        
  <div class="col-md-6 col-md-offset-3" id="form" >
    <center><b class="h1">BOOKING  FORM</b></center>
        
    <form style="margin-top:18px" name="fname" action="bookingform2.php" method="POST" onsubmit="return validateform3()">
        <div class="form-group">
        <center><label style="margin-top:20px">Booking Details</label></center><hr style="margin-top:10px">
               <div class="form-group" style="width:100%; float:left">
             <label> AUDITORIUM Id :</label>
             <input type="text" name="audi_id"  class="form-control" value="<?php echo($_REQUEST['var']);?>" readonly>
            </div>
						
            <br><label>NAME :</label>
            <input type="text" class="form-control" placeholder="Enter Full Name" name="name"  required></input>
        </div>
                    
            <div class="form-group">
             <label>E-mail ID :</label>
             <input type="email" class="form-control" placeholder="Enter E-mail" name="email" required></input>
            </div>
                    
            <div class="form-group" style="width:48%; float:left">
             <label>Contact No. :</label>
             <input type="text"  class="form-control" placeholder="Enter Contact No." name="cont"  required></input>
            </div>
            
            <div class="form-group"  style="width:48%; float:right">
             <label>Alt. Contact No. :</label>
             <input type="text"  class="form-control" placeholder="Enter Contact No." name="altcont" ></input>
            </div><hr style="margin-top:100px">
               <div class="form-group" style="width:100%; float:left">
                    <label>Event Name</label>
                    <input type="text" class="form-control"  placeholder="Enter Event Name" name="event" required></input>
                
            </div>         
            <div class="form-group">
                <center>
                    <label>Address</label>
                    <input type="text" class="form-control"  style="resize:none" placeholder="Enter Address Details" name="addrs" required></input>
                </center>
            </div>
            <hr>            
            
			<div class="form-group" style="width:96%; float:left">
             <label>DATE :</label>
             <input type="text"class="form-control" name="date" value="<?php echo($_REQUEST['var1']);?>" readonly>
            </div>
			<div class="form-group" style="width:48%; float:left">
             <label>09:00-12:00:</label>
             <input type="text"  class="form-control"name="t1" value="<?php echo($_REQUEST['a1']);?>" readonly>
            </div>
			<div class="form-group" style="width:48%; float:right">
             <label>12:30-03:30 :</label>
             <input type="text" class="form-control" name="t2" value="<?php echo($_REQUEST['a2']);?>"readonly>
            </div>
			<div class="form-group" style="width:48%; float:left">
             <label>16:00-19:00 :</label>
             <input type="text" class="form-control" name="t3" value="<?php echo($_REQUEST['a3']);?>" readonly>
            </div>
			<div class="form-group" style="width:48%; float:right">
             <label>19:30-22:30 :</label>
             <input type="text" class="form-control" name="t4" value="<?php echo($_REQUEST['a4']);?>"readonly>
            </div>
            

            
            
            
            <hr><br>
                    
            <div class="form-group"  >
             <input type="submit"  class="btn btn-success" value="NEXT" name="ok"/>
             <input type="reset" class="btn btn-danger" value="RESET" name="reset"/>

            </div>
            
            
            
            
           
</form>

</div>
                
  </div>
        
</div>
<div class="container footer fixed-bottom" id="a1">
 
</div>

</body>
</html>