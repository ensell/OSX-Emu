<?php require_once( 'inc.php' ); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>title</title>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>
	
	<!--[if lt IE 9]>
	<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
	<![endif]-->
<script type="text/javascript">

</script>
	
	<link rel="stylesheet" href="default.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<section id="wrap">
		<header id="header">
		
		<style>
		#header ul {
			margin-left: 10px;
		}
		#header ul, #header ul li {
			height: inherit;
		}
		#header ul li a {
			display: block;
			height: 100%;
		}
		
		#header ul li a#apple {
			width: 35px;
			background: url(img/apple.png) no-repeat center 1px;
		}
		#header ul li a#apple:hover {
			width: 35px;
			background: url(img/apple.png) no-repeat center -20px, url(img/taskbar_h.png );
		}		
		</style>
		<ul>
			<li><a href="" id="apple"></a></li>
		</ul>
			
		</header>


		</section>
	</section>

	<footer id="footer">
		<div id="dock">
		  <div class="container">
			  <a class="dock-item" href="#"><span>TotalFinder</span><img src="img/finder.png" alt="home" /></a> 
			  <a class="dock-item" href="#"><span>Finder</span><img src="img/finder.png" alt="home" /></a> 
			  <a class="dock-item" href="#"><span>Finder</span><img src="img/finder.png" alt="home" /></a> 
			  <a class="dock-item" href="#"><span>Finder</span><img src="img/finder.png" alt="home" /></a> 
			  <a class="dock-item" href="#"><span>Finder</span><img src="img/finder.png" alt="home" /></a> 
			  	<div id="background">
			  		<div id="frontline"></div>
			  	</div>
		  </div>
		</div>
	</footer>
<?php 
foreach ( glob("js/*.js") as $filename) {
    echo "<script src='" . $filename . "'></script>";
}
?>
</body>
</html>