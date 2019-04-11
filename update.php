<?php
$c=1;
//$db1=mysqli_connect("localhost","root","","Auditorium");
$db1=mysqli_connect("localhost","nikhil","nik123","Auditorium");
if(isset($_POST["audi"]))
{


$aname1=$_POST["aname"];
$aseat1=$_POST["aseat"];
$aprice1=$_POST["aprice"];
$add1=$_POST["add"];
$sql="select * from audi_details";
	$res= mysqli_query($db1,$sql);
	while($row=mysqli_fetch_assoc($res))
	{ $c=$c+1;}
    
	 $aid="IAMS".(string)$c;
	
$sql1="INSERT INTO `audi_details`(`audi_id`,`audi_name`,`seats`,`price`,`address`) VALUES ('".$aid."','".$aname1."','".$aseat1."','".$aprice1."','".$add1."')";
mysqli_query($db1,$sql1);
	echo "<script> alert('audi details created successfully');
			window.location='update.php';</script>";




}

if(isset($_POST["reg"]))
{

$usert="admin";
$user=$_POST["myname"];
$pass=$_POST["mypass"];
$pass1=$_POST["mycpass"];
if($pass==$pass1)
{
$sql="INSERT INTO `login`(`usertype`,`username`, `password`, `cpassword`) VALUES ('".$usert."','".$user."','".$pass."','".$pass1."')";
mysqli_query($db1,$sql);
	echo "<script> alert('user_id created successfully');
			window.location='update.php';</script>";

}
else
{
	
	echo "<script> alert('password mismatch');window.location='update.php';</script>";
  }

}
?>
		
		
			
		 <?php 
		if(isset($_POST["del"]))	
		{
			$id=$_POST['s1'];
			$sql1="delete from login where userid='".$id."'";
			$result1=mysqli_query($db1,$sql1);
			header('location:update.php');
		}
		?>
		<?php 
		if(isset($_POST["del1"]))	
		{
			$txt=$_POST['s2'];
			$sql1="delete from audi_details where audi_id='".$txt."'";
			$result1=mysqli_query($db1,$sql1);
			header('location:update.php');
		}
		?>
			 
			

<?php
include('profile.php');
?>
	<html>
<head>
	<title>admin</title>
	
 <script type="text/javascript">
	function show()
	{
		var x =document.getElementById("s1");
		if (x.type==="password")
		{
			x.type="text";
		}
		else
		{
			x.type="password";
		}
	}
	function show1()
	{
		var x =document.getElementById("s2");
		if (x.type==="password")
		{
			x.type="text";
		}
		else
		{
			x.type="password";
		}
	}
	</script>
	<style>
	th
	{
		background-color:#A569BD;
		color:white;
	}
	td
	{
		
		color:#A569BD;
	}
	
	</style>


</head>

<body style="background-color:;">



	<script>
	function delt()
	{
		if (confirm("Are you sure Delete Account?"))
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
		<!-- show and delete-->
		 
		<div class="container-fluid" style="margin-top:-20px;background-color: #ABEBC6;">
		<div class="col-sm-4" style="border:2px solid white;margin-left:50px; ">
		<h3 style="color:white;text-decoration:underline;text-align:center;">admin Panel</h3>
		<div class="col-sm-12">
		<a  style="color:white;font-size:20px;margin-top:50px;background-color: #A569BD" type="button" class="btn " data-toggle="modal" data-target="#admin" >create admin</a>
		</div>
		
		<form action="" method="post" class="form-group" onsubmit="return delt()">
		<div class="col-sm-12" style="margin-top:50px;">
		<input type="text" name="s1" placeholder="enter user_id" required>
		<input type="submit" value="delete user" name="del" >
		</div>
		</form>
		<form action="" method="post" class="form-group">
		<div class="col-sm-12" style="margin-top:50px;">
		<input type="submit" value="show user" class="btn-success"name="disp">
		<input type="submit" value="CLOSE"name="sub4" style="background-color:red;color:white;">
	
		<?php if(isset($_POST["disp"]))
		{
			//$db2=mysqli_connect("localhost","root","","Auditorium");
				$sql2="select * from login";
				$result2=mysqli_query($db1,$sql2);
			echo  "<table class='table table-hover' border='1' style='margin-left:-30px;'><tr><th>userid</th><th>usertype</th><th>username</th><th>password</th></tr>";
			while($row=mysqli_fetch_array($result2))
			{
				echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[4]</td></tr>";
			}


		}?>
		</table>
		</div>
		</form>
		</div>
		
		<!--course-->
		<div class="col-sm-4" style="border:2px solid white;margin-left:50px;">
		<h3 style="color:white;text-decoration:underline;text-align:center;">Auditorium Panel</h3>
		<div class="col-sm-12">
		<a  style="color:white;font-size:20px;margin-top:50px;background-color: #A569BD" type="button" class="btn" data-toggle="modal" data-target="#audi1" >add Auditorium details</a>
		</div>
		
		<form action="" method="post" class="form-group" onsubmit="return delt()">
		<div class="col-sm-12" style="margin-top:50px;">
		<input type="text" name="s2" placeholder="enter course" required>
		<input type="submit" value="delete audi" name="del1" >
		</div>
		</form>
		<form action="" method="post" class="form-group">
		<div class="col-sm-12" style="margin-top:50px;">
		<input type="submit" value="show course" class="btn-success"name="disp1">
		<input type="submit" value="CLOSE"name="sub4" style="background-color:red;color:white;">
	
		<?php if(isset($_POST["disp1"]))
		{
			//$db2=mysqli_connect("localhost","root","","Auditorium");
				$sql2="select * from audi_details";
			$result2=mysqli_query($db1,$sql2);
			echo  "<table class='table table-hover' border='1'><tr><th>audi_id</th><th>audi_name</th><th>seats</th><th>price</th><th>address</th></tr>";
			while($row=mysqli_fetch_array($result2))
			{
				echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td></tr>";
			}


		}?>
		</table>
		</div>
		</form>
		</div>
		</div>
		
		
<!-- pop window for signup -->
	<div class="modal fade" id="admin" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content" style="background-color: #45B39D;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h3 class="text-primary">Admin Register</h3></center>
        </div>
		
		<div class="modal-body">	
		    <form  method="POST" action=""  class="form-horizontal">

			<div class="form-group">
			<label class="control-label col-md-3">username </label>
			<div class="col-md-9" >
			<input type="text" class="form-control" name="myname"  placeholder="enter username" required >
			</div>
			</div>
			<div class="form-group">
			<label class="control-label col-md-3">Password </label>
			<div class="col-md-9">
			<input type="password" class="form-control" name="mypass"  placeholder="Please Enter Your password" required id="s1">
			<input type="checkbox" onclick="show()"><label>show</label>
			</div>
			</div>	
			<div class="form-group">
			<label class="control-label col-md-3">confirm Password </label>
			<div class="col-md-9">
			<input type="password" class="form-control" name="mycpass"  placeholder="Please Enter Retype Your password" required id="s2">
			<input type="checkbox" onclick="show1()"><label>show</label>
			</div>
			</div>
			<div class="form-group">
			<div class="col-md-3"></div>
			<div class="col-md-9">
			<input type="submit" name="reg" value="Register" class="btn btn-info" class="but"> <input type="reset" name="Reset" value="Reset" class="btn btn-info"> 
			</div>	
			</div>	
			</form>					
               
		</div>
        <div class="modal-footer" >
          <input type="button" class="btn btn-info" data-dismiss="modal" value="close">
        </div>
      </div>      
    </div>
  </div>
  
  
  <!-- pop window end-->
  
  <!-- pop window for course-->
  
	<div class="modal fade" id="audi1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content" style="background-color: #45B39D;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h3 class="text-primary"><u>add Auditorium details</u></h3></center>
        </div>
		
		<div class="modal-body">
		<div class="">	
		    <form  method="POST" action=""  class="form-horizontal">
			<div class="form-group">
			<label class="control-label col-md-3">Auditorium name</label>
			<div class="col-md-9">
			<input type="text" class="form-control" name="aname"  placeholder="Please Enter Auditorium name" required>
			</div>
			</div>			
			<div class="form-group">
			<label class="control-label col-md-3">Seats </label>
			<div class="col-md-9">
			<input type="text" class="form-control" name="aseat"  placeholder="Please Enter how many  seats" required>
			</div>
			</div>
			<div class="form-group">
			<label class="control-label col-md-3">price </label>
			<div class="col-md-9">
			<input type="text" class="form-control" name="aprice"  placeholder="Please Enter Auditorium price" required>
			</div>
			</div>
			<div class="form-group">
			<label class="control-label col-md-3">Address </label>
			<div class="col-md-9">
			<input type="text" class="form-control" name="add"  placeholder="Please Enter Address" required>
			</div>
			</div>
			
			<div class="form-group">
			<div class="col-md-3"></div>
			<div class="col-md-9">
			<input type="submit" name="audi" value="submit" class="btn btn-success"> <input type="reset" name="Reset" value="Reset" class="btn btn-danger"> 
			</div>	
			</div>	
			</form>					
                </div>
		</div>
        <div class="modal-footer" >
          <input type="button" class="btn btn-danger" data-dismiss="modal" value="close">
        </div>
      </div>      
    </div>
  </div>
  
  <div class="container" id="a1">
 
</div>
  


		</html>