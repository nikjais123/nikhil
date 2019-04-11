<?php
include('profile.php');
//echo $_SESSION['t3'];
//echo $_SESSION['date'];
//echo $_SESSION['auid'];
		
?>


<html>
<head>
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
	<body style="background-color: #ABEBC6;">
		<div class="col-sm-9" >
			<form method="post" action="">
			<?php 
			//$db=mysqli_connect("localhost","root","","Auditorium");
			$db=mysqli_connect("localhost","nikhil","nik123","Auditorium");
			$sql="select * from audi_details";
			$result=mysqli_query($db,$sql);
			echo  "<table class='table table-hover' border='1'><tr><th>audi_id</th><th>audi_name</th><th>seats</th><th>price</th><th>address</th><th>select</th></tr>";
			while($row=mysqli_fetch_array($result))
			{
				echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td><input type='radio' name='radio' value=$row[0] ></td></tr>";
			}


			?>
		</table>
		
	    </form>
		<center>
            <div class="form-group" style="width:48%; float:left;margin-top: 20px">
            	
             <label>DATE:</label>
             <input type="date" name="d1" onchange='showdate(this.value)'></input>
            </div>
			</center>
			<div id="txtHint"></div>
		
		

<form style="margin-top:18px" name="fname" action="bookingform.php" method="post" onsubmit="">
            <div class="form-group" style="margin-top:50px; margin-left:40px">
            	<button type="button" class="btn btn-primary" id="b1" style="display:; background-color:blue;" onclick="click2()">09:00-12:00</button>
            	<input type="text" id="c1" value="N/A" name="a1" style="display:none;" >
            	<button type="button" class="btn btn-primary" id="b2" style="display:; background-color:blue;" onclick="click3()" >12:30-15:30</button>
            	<input type="text" id="c2" value="N/A" name="a2" style="display:none" >
            	<button type="button" class="btn btn-primary" id="b3"  style="display:;background-color:blue;" onclick="click4()" >16:00-19:00</button>
            	<input type="text" id="c3" value="N/A" name="a3" style="display:none" >
            	<button type="button" class="btn btn-primary" id="b4"  style="display:;background-color:blue;" onclick="click5()">19:30-22:30</button>
            	<input type="text" id="c4" value="N/A" name="a4" style="display:none" >
				<input type="text"  value="<?php echo $_SESSION['date'] ?>" name="var1"style="display:none" >
				<input type="text"  value="<?php echo $_SESSION['auid'] ?>" name="var" style="display:none" >
            
		
             <input type="submit"  class="btn btn-success" value="NEXT" name="ok"/ style="margin-left:20%;" id="bs">
             <input type="reset" class="btn btn-danger" value="RESET" name="reset"/>

          

            
				</div>
			
             
			
			<hr><br>
             
</form>
</div>
<script>
             	function click2()
             	{

             		if(document.getElementById('c1').checked==false)
             		{
             			document.getElementById('c1').checked=true;
						document.getElementById('c1').value="Booked";
             			document.getElementById('b1').style.backgroundColor="green";
             		}
             		else if(document.getElementById('c1').checked==true)
             		{
             			document.getElementById('c1').checked=false;
						document.getElementById('c1').value="N/A";
             			document.getElementById('b1').style.backgroundColor="blue";
             		}
             	}

             	function click3()
             	{

             		
             		if(document.getElementById('c2').checked==false)
             		{
             			document.getElementById('c2').checked=true;
						document.getElementById('c2').value="Booked";
             			document.getElementById('b2').style.backgroundColor="green";
             		}
             		else if(document.getElementById('c2').checked==true)
             		{
             			document.getElementById('c2').checked=false;
						document.getElementById('c2').value="N/A";
             			document.getElementById('b2').style.backgroundColor="blue";
             		}

             	}
             	function click4()
             	{
             		
             		if(document.getElementById('c3').checked==false)
             		{
             			document.getElementById('c3').checked=true;
						document.getElementById('c3').value="Booked";
             			document.getElementById('b3').style.backgroundColor="green";
             		}
             		else if(document.getElementById('c3').checked==true)
             		{
             			document.getElementById('c3').checked=false;
						document.getElementById('c3').value="N/A";
             			document.getElementById('b3').style.backgroundColor="blue";
             		}
             	}
             	function click5()
             	{
             		
             		if(document.getElementById('c4').checked==false)
             		{
             			document.getElementById('c4').checked=true;
						document.getElementById('c4').value="Booked";
             			document.getElementById('b4').style.backgroundColor="green";
             		}
             		else if(document.getElementById('c4').checked==true)
             		{
             			document.getElementById('c4').checked=false;
						document.getElementById('c4').value="N/A";
             			document.getElementById('b4').style.backgroundColor="blue";
             		}
             	}
             </script>
                    
            		






<script>
function showdate(str) {
  var xhttp;
  var radios = document.getElementsByName('radio');
var value;
for (var i = 0; i < radios.length; i++) {
    if (radios[i].type === 'radio' && radios[i].checked) {
        // get value, set checked flag or do whatever you need to
        value = radios[i].value;       
    }
}
if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }  
  xhttp = new XMLHttpRequest();
  
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
	  window.location.reload();
    }
  };
  xhttp.open("POST", "ajx.php?var1="+str+"&var="+value,true);
  xhttp.send();
}
</script>

<script>
r1="<?php echo $_SESSION['t1']; ?>"
				if(r1=="Booked")
				{
				document.getElementById('b1').style.backgroundColor='red';
				document.getElementById('b1').disabled=true;
				}
</script>
<script>
r2="<?php echo $_SESSION['t2']; ?>"
				if(r2=="Booked")
				{
				document.getElementById('b2').style.backgroundColor='red';
				document.getElementById('b2').disabled=true;
				}
</script>
<script>
r3="<?php echo $_SESSION['t3']; ?>"
				if(r3=="Booked")
				{
				document.getElementById('b3').style.backgroundColor='red';
				document.getElementById('b3').disabled=true;
				}
</script>
<script>
r4="<?php echo $_SESSION['t4']; ?>"
				if(r4=="Booked")
				{
				document.getElementById('b4').style.backgroundColor='red';
				document.getElementById('b4').disabled=true;
				
				}
				
</script>
<script>
				if(r1=="Booked" && r2=="Booked" && r3=="Booked" && r4=="Booked" )
				{
					
					document.getElementById('bs').style.backgroundColor='red';
				document.getElementById('bs').disabled=true;
				}
</script>

 <script>
 window.onload=refresh;
 function refresh()
 {
	 <?php unset($_SESSION['t1']);
	 unset($_SESSION['t2']);
	 unset($_SESSION['t3']);
	 unset($_SESSION['t4']);
	 unset($_SESSION['date']);
	 unset($_SESSION['auid']);
	 ?>
				
 }
</script> 

		

<div class="container" id="a1" >
 
</div>
	</body>
		

</html>
