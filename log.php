<?php 
include('log1.php');
?>
<html>
<head>
	<title>login</title>
	<link  rel="stylesheet" href="log2.css"> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
	
	
</head>
	<body >
		<!--form start-->
		<div class="container" id="a">
		<h1 class="h">AUDITORIUM MANAGEMENT SYSTEM</h1>
		<h2 class="ha">Login</h2><br><br>
		<form action="" method="post" >
			<div class="form-group " id="fg">
			<i class="glyphicon glyphicon-user" style="color:white;float:left;margin-top:10px;"></i>
			<select style="width:90%;margin-left:10px;" name="u1" id="b">
				<option>User</option>
				<option>Admin</option>
			</select>
		</div>
		<div class="form-group " id="fg">
			<i class="glyphicon glyphicon-user" style="color:white;float:left;margin-top:10px;"></i>
			<input class="form-control" type="text" name="u2" placeholder="enter username" style="width:95%;float:left;" id="b"><br><br>
		</div>
		<div class="form-group" id="fg" >
			<i class="glyphicon glyphicon-lock" style="color:white;float:left;margin-top: 10px;"></i>
			<input class="form-control" type="password" name="u3" placeholder="enter password" style="width:95%;float: left; "id="b" >

		</div>
		<input type="submit" name="sub" value="submit" class="but" ><br>
		<label style="margin-left:35%;color:white;font-size:20 ;margin-top:px; ">Not a Member?<a  style="color:white;font-size:20px;background:none;border:none;" type="button" class="btn btn-info" data-toggle="modal" data-target="#signup" >Register</a>
		</label>
		</form>
		<div style="color:white;margin-left:40%;font-size:16;"><?php echo $message ;?></div>
		</div>
	
	<!--form end-->
	<!--popup start-->
	
	<div class="modal fade" id="signup" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content" id="pic">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h3 class="text-primary">User Register</h3></center>
        </div>
		
		<div class="modal-body">	
		    <form  method="POST" action="log.php"  class="form-horizontal">

			<div class="form-group">
			<label class="control-label col-md-3">username </label>
			<div class="col-md-9" >
			<input type="text" class="form-control" name="user"  placeholder="enter username" required >
			</div>
			</div>
			<div class="form-group">
			<label class="control-label col-md-3">Email </label>
			<div class="col-md-9" >
			<input type="email" class="form-control" name="email"  placeholder="Please Enter Your email" required >
			</div>
			</div>
			<div class="form-group">
			<label class="control-label col-md-3">Password </label>
			<div class="col-md-9">
			<input type="password" class="form-control" name="pass"  placeholder="Please Enter Your password" required id="s1">
			<input type="checkbox" onclick="show()"><label>show</label>
			</div>
			</div>	
			<div class="form-group">
			<label class="control-label col-md-3">confirm Password </label>
			<div class="col-md-9">
			<input type="password" class="form-control" name="cpass"  placeholder="Please Enter Retype Your password" required id="s2">
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
  
	</body>
</html>