<?php
include('profile.php');
?>


<html>
<head>
  <title>home</title>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	
	<div style="height:400px;width:80%;float:left;">
	<div id="my" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#my" data-slide-to="0" class="active"></li>
    <li data-target="#my" data-slide-to="1"></li>
    <li data-target="#my" data-slide-to="2"></li>
    <li data-target="#my" data-slide-to="3"></li>
    <li data-target="#my" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="img/a.png" alt="img1" style="height:400px;width:100%;">
    </div>

    <div class="item">
      <img src="img/5.jpg" alt="img2"  style="height:400px;width:100%;">
    </div>

    <div class="item">
      <img src="img/6.jpg" alt="img3"  style="height:400px;width:100%;">
    </div>
    <div class="item">
      <img src="img/a.jpg" alt="img3"  style="height:400px;width:100%;">
    </div>
    <div class="item">
      <img src="img/d.jpg" alt="img3"  style="height:400px;width:100%;">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#my" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#my" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>	
	</div>
	
		<div class="jumbotron">
		<marquee><h2 style="color: #A569BD;font-size: 40px;">Media Partner</h2></marquee><br><br>
			<img src="img/m.png" class="img-rounded" alt="Cinque Terre" style="height:100px;width:15%;margin-left: 15px;">
			<img src="img/m5.png" class="img-rounded" alt="Cinque Terre" style="height:100px;width:15%;margin-left: 50px;">
			<img src="img/m2.png" class="img-rounded" alt="Cinque Terre" style="height:100px;width:15%;margin-left: 50px;">
			<img src="img/m3.png" class="img-rounded" alt="Cinque Terre" style="height:100px;width:15%;margin-left: 50px;">
			<img src="img/m4.png" class="img-rounded" alt="Cinque Terre" style="height:100px;width:15%;margin-left: 50px;">
		
	</div>
	</div>
	<div class="container" id="a1">
 
</div>


</body>

<?php
 
if(isset($_POST["edit"]))
{
	
$myuser1=$_POST["a"];
$myname=$_POST["b"];
$myemail=$_POST["c"];
$mypass=$_POST["d"];
//$my1=mysqli_connect("localhost","root","","Auditorium");
$my1=mysqli_connect("localhost","nikhil","nik123","Auditorium");

$sq1="update login set username='".$myname."',email='".$myemail."',password='".$mypass."',cpassword='".$mypass."' where userid='".$myuser1."'";
$rse=mysqli_query($my1,$sq1);

}
?>
</html>
