<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "authentication");
if(isset($_POST['submit']))
{
	$name = mysqli_real_escape_string($conn,$_POST['name']);
	$comment = mysqli_real_escape_string($conn,$_POST['comment']);
	if($name&&$comment)
	{
		
		$sql = "INSERT INTO comment" . "(movie_id, name, comment)" . "VALUES ('T_S1','$name','$comment')";
		mysqli_query($conn, $sql);
		header("location: T_S1.php");
	}
	else
	{
		echo "Please fill out all the fields.";		
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>World Wide Movies</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=BenchNine:300,400,700" rel="stylesheet" type="text/css">
</head>
<body>
	<header class="top-header">
		     <div class="container">
			      <div class="row">
				       <div class="col-xs-5 header-logo col-md-3">
					        <a href="index.php"><img src="img/logo1.png" alt="" class="img-responsive logo"></a>
				       </div>
                       <div class="col-md-9">
					        <nav class="navbar navbar-default">
					             <div class="container-fluid nav-bar">
					                  <div class="navbar-header">
					                       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					                               <span class="sr-only">Toggle navigation</span>
					                               <span class="icon-bar"></span>
					                               <span class="icon-bar"></span>
					                               <span class="icon-bar"></span>
											       <span class="icon-bar"></span>
											       <span class="icon-bar"></span>
					                       </button>
					                  </div>
					                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					                       <ul class="nav navbar-nav navbar-right">
					                           <li><a class="menu" href="hollywood.php">Hollywood</a></li>
					                           <li><a class="menu" href="bollywood.php">Bollywood</a></li>
					                           <li><a class="menu" href="tollywood.php">Tollywood</a></li>
					                           <li><a class="menu" href="animated.php">Animated</a></li>
							                   <li><a class="menu" href="webseries.php">Web Series</a></li>
					                       </ul>
					                  </div>
					             </div>
					        </nav>
				       </div>
			      </div>
		     </div>
	 </header>
    <section class="slider" id="home">
			  <div class="container-fluid">
				   <div class="row">
					    <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
					         <div class="header-backup">
							 </div>
					    </div>
				   </div>
			  </div>
	 </section>
	<section class="api-map" id="about">
			 <div class="container-fluid">
				  <div class="row">
					   <style>
                       p.normal
                       {
                         font-style: normal;
                       }
					   </style>
				  <div class="about-heading">							
					   <p><font size="60"> &nbsp; &nbsp;Titans Season 1 Dual Audio [Hindi-DD5.1] 720p HDRip ESubs Download</font></p>
				  </div>
				  <div class="col-md-3 col-sm-5">
					   <div class="single-about-detail">
							<div class="about-img">
								 <img src="img/series21.jpg" alt="">
							</div>
					   </div>
				  </div>
			 </div>
		</div>
	</section>	
		<p align="center">
		   <b>IMDB&nbsp;Rating</b> : 8.0/10<br>
		   <b>Genres</b> : 
			  <a rel="tag">Action</a>,
			  <a rel="tag">Adventure</a>
			  <a rel="tag">Crime</a>
		   <br>			
		   <b>Release&nbsp;Date</b> :12&nbsp;October&nbsp;2018<br>			
		   <b>Cast</b> : 
			  <a rel="tag"> Anna Diop</a>, 
			  <a rel="tag">Brenton Thwaites</a>,
			  <a rel="tag">Teagan Croft</a>
		   <br>
		   <div class="movies-heading text-center">
			 <h3>Trailer</h3>
		   </div>	
		   <p align="center">
		   <iframe width="700" height="400" src="https://www.youtube.com/embed/EzvfRHXPEZI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		   </p>	   
		</p>
		<p align="center"> 
			 <b>Language: </b>Hindi DD5.1 + English<br> 
			 <b>Quality: </b>720p BluRay<br>
			 <b>Size: </b>4.3GB<br> 
			 <b>Movie Resolution: </b>1280*640<br>
			 <b>Subtitle: </b>English<br>
        <div class="movies-heading text-center">
			 <h3>ScreenShots</h3>
		</div>
<div class="separator"style="clear: both; text-align: center;"> 
    <img class="alignnone" 
	     title="Titans Season 1 Dual Audio [Hindi-DD5.1] 720p HDRip ESubs Download" 
	     src="https://3.bp.blogspot.com/-cAKKfaS80bc/XWFCjrv3YLI/AAAAAAAAtVM/MY27npXjgcEOPWkoHPtTGJgNdO7XF78KACLcBGAs/s640/vlcsnap-2019-08-24-19h25m24s821.png" 
		 alt="Titans Season 1 Dual Audio [Hindi-DD5.1] 720p HDRip ESubs Download" 
		 border="0"> <br> 
	<img class="alignnone" 
	     title="Titans Season 1 Dual Audio [Hindi-DD5.1] 720p HDRip ESubs Download" 
		 src="https://1.bp.blogspot.com/-gVrpT30-uSY/XWFCjpTGEzI/AAAAAAAAtVQ/i4sOinEtS7cVxDGDmEL5hvErML_9LmvVACLcBGAs/s640/vlcsnap-2019-08-24-19h25m52s695.png" 
		 alt="Titans Season 1 Dual Audio [Hindi-DD5.1] 720p HDRip ESubs Download" 
		 border="0"> <br> 
	<img class="alignnone" 
	     title="Titans Season 1 Dual Audio [Hindi-DD5.1] 720p HDRip ESubs Download" 
		 src="https://3.bp.blogspot.com/-nA6F8v6x4cA/XWFCjnK81xI/AAAAAAAAtVU/P2QHw62TJ3gf3wDNDIvqFZMLE297DBZHwCLcBGAs/s640/vlcsnap-2019-08-24-19h26m11s633.png" 
		 alt="Titans Season 1 Dual Audio [Hindi-DD5.1] 720p HDRip ESubs Download" 
		 border="0"> <br> 
	<img class="alignnone" 
	     title="Titans Season 1 Dual Audio [Hindi-DD5.1] 720p HDRip ESubs Download" 
		 src="https://4.bp.blogspot.com/-igv76nf3vAw/XWFCkZE1qVI/AAAAAAAAtVY/T5dSAGodjp4LsTKqrAZJkEAQ48WrZ7cmACLcBGAs/s640/vlcsnap-2019-08-24-19h27m53s015.png" 
		 alt="Titans Season 1 Dual Audio [Hindi-DD5.1] 720p HDRip ESubs Download" 
		 border="0">
</div>
	    <div class="movies-heading text-center">
             <h3><b>Download Links</b></h3>
        </div>
	    </p>
	    <p align="center">
			<b></b>
			   <a href="https://www.indishare.org/qnzij9y2eb01" target="_blank">Indishare [Ep. 1-5]</a>
		   <br>
		   <b></b>
               <a href="https://www.indishare.org/fnbyf12gzyfh" target="_blank">Indishare [Ep. 6-11]</a>
		   <br>	
		   <b></b>
        </p>
	<div class="movies" align="left">
		 <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; You May Also Like :</h3>
		     <ul>
				 <li>
					 <a href="ST_S1.php">
						<span class="movies">Stranger Things Season 1 Hindi Dubbed WEB Series All Episodes 720p Free Downlod</span>
					 </a>
				 </li>
		     </ul>
	</div>
    
<br/><br/>
<div align="left">
<h3>&nbsp;&nbsp;&nbsp;&nbsp;Comment Section</h3>
<br/>
<form action="T_S1.php" method="POST">
<table>
	<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Name: &nbsp;&nbsp;</td><td><input type="text" name="name" /></td></tr>
	<tr><td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;Comment: </td></tr>
	<tr><td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;<textarea name="comment"></textarea></td><td>
	<tr><td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Submit" /></td></tr>
</table>
</form>	
<?php
$sql1 = "SELECT * FROM comment WHERE movie_id='T_S1' ORDER BY datetime DESC";
$result = mysqli_query($conn, $sql1);
while($row = mysqli_fetch_array($result))
{
	$id=$row['id'];
	$name=$row['name'];
	$comment=$row['comment'];
	$datetime=$row['datetime'];
	echo '<hr width="2500px"/><h4>&nbsp;&nbsp;<font color="red">Name :  </font>' . $name . '</h4><b>&nbsp;&nbsp;<font color="red">Comment :-</font><br/>&nbsp;&nbsp;' . $comment . '</b><br/><br/><time><small>&nbsp;&nbsp;' . $datetime . '</small></time><br/><hr width="2500px"/>';
}
?>
</div>

    <footer class="footer clearfix">
		<div class="container">
			 <div class="row">
				  <div class="col-xs-10 footer-para">
					   <p> 
						  <a href="https://www.000webhost.com/members/website/list" target="_blank"><font size="4">Members LOGIN</font></a>
					   </p>
				  </div>
				  
				  <div class="col-xs-6 footer-para">
					   <p>&copy; <a href="https://wwmovies.000webhostapp.com">World Wide Movies</a> All right reserved</p>
				  </div>
				 
				 <div class="col-xs-6 text-right">
					   <a href=""><i class="fa fa-facebook"></i></a>
					   <a href=""><i class="fa fa-youtube"></i></a>
					   <a href=""><i class="fa fa-instagram"></i></a>
			      </div>
			 </div>
		</div>
</footer>
</body>
</html>