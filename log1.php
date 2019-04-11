<!--for login-->
		
<?php
   session_start();
   error_reporting(0);
if(isset($_POST["sub"]))
{
	
	if(!empty($_POST['u1']) && !empty($_POST['u2']) && !empty($_POST['u3'])) 
	{
	
	//$conn=mysqli_connect("localhost","root","","auditorium");
	$conn=mysqli_connect("localhost","nikhil","nik123","auditorium");

	$ta="select * from login where usertype='".$_POST['u1']."' AND username='".$_POST['u2']."' AND password='".$_POST['u3']."' ";
	$res=mysqli_query($conn,$ta);
	$value=mysqli_num_rows($res);  
	if($value!=0)
	{
		while($row=mysqli_fetch_array($res))
		{
			
			$_SESSION['uid']=$row[0];
			$_SESSION['utype']=$row[1];
			
            header('location:http://localhost/clg/home.php');
			
		
	
		}

	}
	else
	{
		$message= "password incorrect";
	}

	}
	else
	{
		$message= "please enter the data";
	}

}

?>
<!--for register-->

<?php 
	if(isset($_POST["reg"]))
	{
		//$db=mysqli_connect("localhost","root","","auditorium");
		$db=mysqli_connect("localhost","nikhil","nik123","auditorium");
		$utype="user";
		$uname=$_POST["user"];
		$uemail=$_POST["email"];
		$pass=$_POST["pass"];
		$cpass=$_POST["cpass"];
	
		if($pass==$cpass)
		{
			$sq="insert into login(usertype,username,email,password,cpassword) values ('".$utype."','".$uname."','".$uemail."','".$pass."','".$cpass."')";
			mysqli_query($db,$sq);
			echo "<script> alert('user created successfully');
			window.location='log.php';</script>";
		}
		else
		{
			echo "<script> alert('password did not match');
			window.location='log.php';</script>";
		}
	}
	?>