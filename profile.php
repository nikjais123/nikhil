<?php
session_start();
$userlogin=$_SESSION['uid'];
if($userlogin==true)
{
	
}
else
{
	header('location:log.php');
}	
?>

<?php
$myuser=$_SESSION["uid"];
//$my1=mysqli_connect("localhost","root","","auditorium");
$my1=mysqli_connect("localhost","nikhil","nik123","auditorium");
$sq="select * from login where userid='".$myuser."'";
$rse=mysqli_query($my1,$sq);
$row=mysqli_fetch_array($rse);


?>



<html>
<head>
  <title>home</title>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
	<script>
	function my()
	{
		if (confirm("Are you sure update Account?"))
		{
			alert("updated");
			
          return true;


		}
		else
		{
			alert('sorry');
			return false;
		}
	}  
	</script>
<style type="text/css">
	#a{
		height:200px;
		width: 100%;
		background-color:PURPLE;
		float:left;
		
		}
	#b
	{
		
		width:20%;
		height:400px;
		float:left;
	}
	#a1{
		height:150px;
		width: 100%;
		background-color:PURPLE;
		float:left;
		
		}
		ul{
			list-style: none;
		}
		li{
			list-style: none;
		}
	</style>
</head>
<body>
	<div id="a" class="container">
		<center><h1 style="margin-top:50px;color:white;font-family:'Algerian'; text-shadow: 7px 7px 7px BLACK ">AUDITORIUM &nbsp;MANAGEMENT <br>SYSTEM</h1></center>
		<p style="color:white;float:right;margin-top:px;"><?php echo "welcome &nbsp;".$_SESSION["utype"] ."&nbsp;" .$row[2]?></p>
		<p style="color:white;float:right;margin-top:10px;margin-right:-100px;"><a  style="color: white;font-size:18;" href="logout.php" class="btn btn-link"  onclick="return confirm('you want to logout?');">logout</a></p>
   
	</div>
	<div id="b" class="col-sm-4" >
	
	<l1><a href="home.php">	<button type="button" class="btn btn-primary btn-block" style="height:75px;background-color: #A569BD;">Home</button></a></l1>
	<l1><button type="button" class="btn btn-primary btn-block" style="height:75px;margin-top:7px;background-color: #A569BD;" data-toggle="modal" data-target="#update">profile</button></l1>
	<li><a href="show.php"><button type="button" class="btn btn-primary btn-block" style="height:75px;margin-top:6px;background-color: #A569BD;">Book</button></a></li>
	<li><button type="button" class="btn btn-primary btn-block" style="height:75px;margin-top:6px;background-color: #A569BD;">Button 2</button></li>
	<?php
	$userty=$_SESSION['utype'];
	if($userty=="user")	
	{	
		
	echo '<li><button type="button" class="btn btn-primary btn-block" style="height:75px;margin-top:6px;background-color: #A569BD;">Button 3</button></li>';
	}
	?>	

	
	<?php
	$userty=$_SESSION['utype'];
	if($userty=="admin")	
	{	
									
	echo '<li><a href="update.php "><button type="button" class="btn btn-primary btn-block" style="height:75px;background-color: #A569BD;margin-top:6px;">Admin</button></a></li>';
	}
	?>	

	</div>
	
	
<!--popup start-->
	
	<div class="modal fade" id="update" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content" style="background-color: #45B39D;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h3 class="text-primary">profile</h3></center>
        </div>
		
		<div class="modal-body">	
		    <form  method="POST" action=""  class="form-horizontal">
		    <div class="form-group">
			<label class="control-label col-md-3">userid </label>
			<div class="col-md-9" >
			<input type="text" class="form-control" name="a" value="<?php echo $_SESSION['uid'] ?>" readonly>
			</div>
			</div>
			<div class="form-group">
			<label class="control-label col-md-3">username </label>
			<div class="col-md-9" >
			<input type="text" class="form-control" name="b" value="<?php echo $row[2]; ?>">
			</div>
			</div>
			<div class="form-group">
			<label class="control-label col-md-3">Email </label>
			<div class="col-md-9" >
			<input type="email" class="form-control" name="c" value="<?php echo $row[3];?>" >
			</div>
			</div>
			<div class="form-group">
			<label class="control-label col-md-3">Password </label>
			<div class="col-md-9">
			<input type="text" class="form-control" name="d" value="<?php echo $row[4]; ?>" >
	
			</div>
			</div>	
			
			<div class="form-group">
			<div class="col-md-3"></div>
			<div class="col-md-9">
				<input type="submit"  value="update" name="edit" class="btn btn-info" class="but" onclick="return my();">
			 
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
  

</body>

<?php
 
if(isset($_POST["edit"]))
{
	
$myuser1=$_POST["a"];
$myname=$_POST["b"];
$myemail=$_POST["c"];
$mypass=$_POST["d"];

    //$my1=mysqli_connect("localhost","root","","auditorium");
	$my1=mysqli_connect("localhost","nikhil","nik123","auditorium");

$sq1="update login set username='".$myname."',email='".$myemail."',password='".$mypass."',cpassword='".$mypass."' where userid='".$myuser1."'";
$rse=mysqli_query($my1,$sq1);

}
?>
</html>
