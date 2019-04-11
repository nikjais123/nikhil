

<?php
			session_start();
          	error_reporting(0);
			$dat=$_REQUEST["var1"];
			$aid=$_REQUEST["var"];
			//echo $dat;
			//echo $aid;
			$conn=mysqli_connect("localhost","nikhil","nik123","auditorium");
			//$conn=mysqli_connect("localhost","root","","auditorium");
			$sq="select * from booking_status where date='$dat' and aid='$aid'";
			$res=mysqli_query($conn,$sq);
			if(mysqli_num_rows($res)!=0)
			{
			
			
			while($row = mysqli_fetch_array($res)) {
				$_SESSION['date']=$dat;
				$_SESSION['auid']=$aid;
				$_SESSION['t1']=$row[2];
				$_SESSION['t2']=$row[3];
				$_SESSION['t3']=$row[4];
				$_SESSION['t4']=$row[5];
				
			}
			
			
                    
            
			
			}
			else
			{
				$_SESSION['date']=$dat;
				$_SESSION['auid']=$aid;
				$_SESSION['t1']="no";
				$_SESSION['t2']="no";
				$_SESSION['t3']="no";
				$_SESSION['t4']="no";
			}
	




			
      ?>
