
<!DOCTYPE html>
<html>

<head>
	<title>BLOOD DONOR ORGANIZATION</title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords"  />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic'
	    rel='stylesheet' type='text/css'>
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet">
</head>

<body>
	<!-- header -->
	<div class="header" id="home">
		<div class="top_menu_w3layouts">

			<div class="header_left">
				<ul>
					<li><i class="fa fa-map-marker" aria-hidden="true"></i> DHANMONDI-15, DHAKA</li>
					<li><i class="fa fa-phone" aria-hidden="true"></i> +(010) 221 918 811</li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">anikaalamsuhi@gmail.com</a></li>
				</ul>
			</div>
			<div class="header_right">
				<ul class="forms_right">
					<li><a class="active" href="signin.php"> Sign In</a> </li>
					
				</ul>

			</div>
			<div class="clearfix"> </div>
		</div>

		<div class="content white">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
						<a class="navbar-brand" href="index.php">
							<h1><span class="fa fa-comments-o" aria-hidden="true"></span></h1>
						</a>
					</div>
					<!--/.navbar-header-->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<nav>
							<ul class="nav navbar-nav">
								<li><a href="index.php" class="active">Home</a></li>
								
								<li><a href="all donor list.php">ALL DONOR LIST</a></li>
									
								
								<li class="dropdown">
									<a href="services.html" class="dropdown-toggle" data-toggle="dropdown">DONORS BY GROUP <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="A+.php">A+</a></li>
										<li class="divider"></li>
										<li><a href="A-.php">A-</a></li>
										<li class="divider"></li>
										<li><a href="B+.php">B+</a></li>
										<li class="divider"></li>
										<li><a href="B-.php">B-</a></li>
										<li class="divider"></li>
										<li><a href="AB+.php">AB+</a></li>
										<li class="divider"></li>
										<li><a href="AB-.php">AB-</a></li>
										<li class="divider"></li>
										<li><a href="O+.php">O+</a></li>
										<li class="divider"></li>
										<li><a href="O-.php">O-</a></li>
										<li class="divider"></li>
									</ul>
								</li>
								<li><a href="request for blood.php">REQUEST FOR BLOOD</a></li>
								<li><a href="blood bank.php">BLOOD BANK</a></li>
								<li><a href="signup.php"> JOIN </a> </li>
								<li><a href="all request list.php">ALL REQUEST</a></li>
							</ul>
						</nav>
					</div>
					<!--/.navbar-collapse-->
					<!--/.navbar-->
				</div>
			</nav>
		</div>
	</div>

	<div class="services-breadcrumb_w3ls">
		<div class="inner_breadcrumb">

			
		</div>
	</div>

	<div class="banner-bottom">
		<div class="container">
				<div class="tittle_head_w3layouts">
				<h3 class="tittle three">BLOOD BANK</h3>
				
				<?php
echo "<table style='border: solid 5px black;'>";
echo "<tr><th>Name</th><th>Location</th><th>Contact</th><th>Address</th></tr>";

class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
} 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blood_donor_organization";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM hospital_info"); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>
				
				
				
				
			</div>
			<div class="inner_sec_info_agileits_w3">
			
			</div>
		</div>
	</div>


	<!-- footer -->
	<div class="footer_top_agile_w3ls">
		<div class="container">
			<div class="col-md-3 footer_grid">
				<h3>About Us</h3>
				<p>NIJEDER NAME, INFO

				</p>
				<div class="social">
					<ul>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-rss"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3 footer_grid">
				<h3>OUR MISSION</h3>
				<ul class="footer_grid_list">
					<li><i class="fa fa-angle-right" aria-hidden="true"></i>
						<a >mission no.1 </a>
					</li>
					<li><i class="fa fa-angle-right" aria-hidden="true"></i>
						<a >mission no 2</a>
					</li>
					<li><i class="fa fa-angle-right" aria-hidden="true"></i>
						<a >mission no.3 </a>
					</li>
					<li><i class="fa fa-angle-right" aria-hidden="true"></i>
						<a >mission no.4</a>
					</li>
					<li><i class="fa fa-angle-right" aria-hidden="true"></i>
						<a >mission no.5 </a>
					</li>
				</ul>
			</div>
			<div class="col-md-3 footer_grid">
				<h3>Contact Info</h3>
				<ul class="address">
					<li><i class="fa fa-map-marker" aria-hidden="true"></i>DHANMONDI-15 <span>DHAKA.</span></li>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">anikaalamsuhi@gmail.com</a></li>
					<li><i class="fa fa-phone" aria-hidden="true"></i>+09187 8088 9436</li>
				</ul>
			</div>
			
			<div class="clearfix"> </div>

		</div>
	</div>
	<div class="footer_wthree_agile">
		<p>© 2017 BLOOD DONOR ORGANIZATION. All rights reserved </p>

	</div>

	<!-- //footer -->
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script>
		$('ul.dropdown-menu li').hover(function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});
	</script>
	<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->

	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>