
<!DOCTYPE html>
<html>
<head>
<title>Online DJ Management System||Home Page</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<link href='http://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
<!---->
<?php include_once('includes/header.php');?>
<!---->
<script src="js/responsiveslides.min.js"></script>
  <script>
    // You can also use "$(window).load(function() {"
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
        manualControls: '#slider3-pager',
      });
    });
  </script> 
<div class="content">
	 <div class="container">  
		  <div class="slider">
			<!-- Slideshow 3 -->
			<ul class="rslides" id="slider">
			  <li><img src="images/101.png" alt="">
				<div class="caption">
					<h1>Interstellar Music</h1>
					<p>Interstellar music festival announces move to kentucky speedway in 2022.</p>
				</div>
			  </li>
			  <li><img src="images/111.gif" alt="">
				<div class="caption">
					<h1>Carnival Club</h1>	  
					<p>Once a year grand fest in the world's Largest Carnival Club performed in 2021.</p>
				</div>
			  </li>	      
			  <li><img src="images/103.png" alt="">
				<div class="caption">
					<h1>Eric Prydz's Concert</h1>	  
					<p>Nam est purus, egestas eu varius in, commodo vitae massa. Fusce mollis a lacus in tincidunt.</p>
				</div>
			  </li>
			  <li><img src="images/104.png" alt="">
				<div class="caption">
					<h1>Hippie's Nightout's</h1>
					<p>Nam est purus, egestas eu varius in, commodo vitae massa. Fusce mollis a lacus in tincidunt.</p>
				</div>
			  </li>
			  <li><img src="images/105.png" alt="">
				<div class="caption">
					<h1>VideoHive Music Show</h1>	  
					<p>Nam est purus, egestas eu varius in, commodo vitae massa. Fusce mollis a lacus in tincidunt.</p>
				</div>
			  </li>	      
			  <li><img src="images/106.png" alt="">
				<div class="caption">
					<h1>Jay-Z Backed Ethos</h1>	  
					<p>Nam est purus, egestas eu varius in, commodo vitae massa. Fusce mollis a lacus in tincidunt.</p>
				</div>
			  </li>
			  <li><img src="images/107.png" alt="">
				<div class="caption">
					<h1>Indie Karoake</h1>	  
					<p>Nam est purus, egestas eu varius in, commodo vitae massa. Fusce mollis a lacus in tincidunt.</p>
				</div>
			  </li>	      
			  <li><img src="images/108.png" alt="">
				<div class="caption">
					<h1>Balkan Wedding Party</h1>	  
					<p>Nam est purus, egestas eu varius in, commodo vitae massa. Fusce mollis a lacus in tincidunt.</p>
				</div>
			  </li>
			</ul>
			<!-- Slideshow 3 Pager --></br></br>
			<ul id="slider3-pager">
			  <li><a href="#"><img src="images/101.png" alt=""></a></li>
			  <li><a href="#"><img src="images/102.png" alt=""></a></li>
			  <li><a href="#"><img src="images/103.png" alt=""></a></li>
			   <li><a href="#"><img src="images/104.png" alt=""></a></li>
			  <li><a href="#"><img src="images/105.png" alt=""></a></li>
			  <li><a href="#"><img src="images/106.png" alt=""></a></li>
			  <li><a href="#"><img src="images/107.png" alt=""></a></li>
			  <li><a href="#"><img src="images/108.png" alt=""></a></li>
			</ul>   
				<div class="clearfix"></div>
		  </div>
	 </div>
	<?php include_once('includes/footer.php');?>
</div>
<!---->

<!---->
</body>
</html>