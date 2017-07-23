<!DOCTYPE html>
<html>
<head>
	<title>List of PG's</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/cc6df5477b.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Plaster" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Bellefair|Concert+One|Dancing+Script|Pacifico" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top ">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span> 
        </button>
        <a class="navbar-brand" href="index.php">Navita</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="#">List of PG's</a></li> 
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#" id="login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        </ul>
      </div>
    </div>
  </nav>


  <!-- Login div modal -->
  <div id="logindiv" class="modal">
    <form class="modal-content animate" action="#" method="post">
      <div class="imgcontainer">
        <span class="close" title="Close">&times;</span>
        <img src="img/avatar1.jpg" alt="Avatar" class="avatar">
      </div>
      <div class="container1">
        <label><b>Email</b></label>
        <input type="email" placeholder="Enter Email" name="email" required>
        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>        
        <button type="submit" name="login">Login</button>
        <input type="checkbox" checked="checked"> Remember me
      </div>
      <div class="container1" id="loginbottom">
        <button type="button" class="cancelbtn">Cancel</button>
        <span class="password">Forgot <a href="#">password?</a></span>
      </div>
    </form>
  </div>

  <!-- Starting introduction -->
  <div class="dashboard-introduction">
  	<div class="dashboard-introduction-wrapper">
  		<center><h4 class="dashboard-introduction-heading">Some text</h4></center>
  		<center><p>Some more text</p></center>
  		<div class="container">
				<div class="row1">
					<div class="col-2 desktop-display"></div>
					<div class="col-4">
						<a href="#"><span>Walk in</span></a>
					</div>
					<div class="col-4">
						<a href="#"><span>Book Now!!</span></a>
					</div>
					<div class="col-2 desktop-display"></div>
				</div>
  		</div>
  	</div>
  </div>

  <!-- Details  -->
  <div class="dashboard-details">
  	<div class="container">
  		<div class="dashboard-details-seperator">
  			<div class="row1">
  				<div class="col-4">
  					<h3><b>CHILL IN YOUR LOUNGE</b></h3>
  					<p>Dine and play with your friends in the lavish lounge area.</p>
  				</div>
  				<div class="col-8">
  					<img src="img/dash1.jpg" width="100%" title="CHILL IN YOUR LOUNGE">
  				</div>
  			</div>
  			<div class="row1">
  				<div class="col-6">
  					<img src="img/dash2.jpg" width="100%" title="CHILL IN YOUR LOUNGE">
  				</div>
  				<div class="col-6">
  					<img src="img/dash3.jpg" width="100%" title="CHILL IN YOUR LOUNGE">
  				</div>
  			</div>
  		</div>
  		<div class="dashboard-details-seperator">
  			<div class="row1">
  				<div class="col-4">
  					<h3><b>ENJOY YOUR OWN SPACE</b></h3>
  					<p>Compact yet luxurious space at the heart of the city.</p>
  				</div>
  				<div class="col-8">
  					<img src="img/dash4.jpg" width="100%" title="ENJOY YOUR OWN SPACE">
  				</div>
  			</div>
  			<div class="row1">
  				<div class="col-6">
  					<img src="img/dash5.jpg" width="100%" title="ENJOY YOUR OWN SPACE">
  				</div>
  				<div class="col-6">
  					<img src="img/dash6.jpg" width="100%" title="ENJOY YOUR OWN SPACE">
  				</div>
  			</div>
  		</div>
  		<div class="dashboard-details-seperator">
  			<div class="row1">
  				<div class="col-4">
  					<h3><b>MODERN KITCHEN WITH LIVE-COOKING</b></h3>
  					<p>Enjoy freshly cooked wholesome meals</p>
  				</div>
  				<div class="col-8">
  					<img src="img/dash7.jpg" width="100%" title="MODERN KITCHEN WITH LIVE-COOKING">
  				</div>
  			</div>
  			<div class="row1">
  				<div class="col-6">
  					<img src="img/dash8.jpg" width="100%" title="MODERN KITCHEN WITH LIVE-COOKING">
  				</div>
  				<div class="col-6">
  					<img src="img/dash9.jpg" width="100%" title="MODERN KITCHEN WITH LIVE-COOKING">
  				</div>
  			</div>
  		</div>
  		<div class="dashboard-details-seperator">
  			<div class="row1">
  				<div class="col-4">
  					<h3><b>PREMIUM SHOWER & WASHROOM</b></h3>
  					<p>Clean and hygienic washrooms</p>
  				</div>
  				<div class="col-8">
  					<img src="img/dash10.jpg" width="100%" title="PREMIUM SHOWER & WASHROOM">
  				</div>
  			</div>
  		</div>
  	</div>
  </div>

  <!-- Fee structure -->
  <div class="dashboard-fee">
  	<div class="container">
			<center>
				<h2><b>MONTHLY FEE </b></h2>
				<div class="dashboard-details-seperator">
					<span id="single">Single</span>
					<span class="dashboard-selector-active" id="twin">Twin</span>
				</div>
				<div class="dashboard-details-seperator">
					<span class="deco"><b>PER HEAD COST </b></span>
					<b><i class="fa fa-inr"></i></b><span id="cost-value" class="deco" >1000</span>
					<a href=""#><p>*Terms and conditions</p></a>
				</div>
			</center>	
			<div class="dashboard-ready-confirm dashboard-details-seperator">
				<div class="row1">
					<div class="col-1 desktop-display"></div>
					<div class="col-2"><h2>Ready Yet?</h2></div>
					<div class="col-1 desktop-display"></div>
					<div class="col-3">
						<a href="#"><span>Walk in</span></a>
					</div>
					<div class="col-1 desktop-display"></div>
					<div class="col-3">
						<a href="#"><span>Book Now</span></a>
					</div>
					<div class="col-1 desktop-display"></div>
				</div>	
			</div>
  	</div>
  </div>
  <script type="text/javascript">
  	$(document).ready(function(){
			$("#single").click(function(){
				$("#single").addClass("dashboard-selector-active");
				$("#twin").removeClass("dashboard-selector-active");
				document.getElementById("cost-value").innerHTML = "2000";
			});
			$("#twin").click(function(){
				$("#single").removeClass("dashboard-selector-active");
				$("#twin").addClass("dashboard-selector-active");
				document.getElementById("cost-value").innerHTML = "1000";
			});
		});
  </script>

  <!-- Conclusion -->
  <div class="dashboard-conclusion">
		<div class="black-div">
			<div class="container">
				<h1>What is Lorem Ipsum?</h1>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
			</div>
		</div>	
  </div>

  <!-- Footer -->
  <footer id="footer" >   
	<div class="container-made"> 
    <div class="navita-conditions">
      <center>
        <a href="#">About us</a> |
        <a href="#">Contact us</a> |
        <a href="#">Careers</a> |
        <a href="#">Privacy Policy</a> |
        <a href="#">Blog</a> |
        <a href="#">Terms and Conditions</a>
      </center>
    </div>
		<div id="follow">
			<center>
				<h3>Follow us on</h3>
					<a href="#"><i class="fa fa-facebook" style="font-size:40px; color:white"></i></a>
					<a href="#"><i class="fa fa-twitter" style="font-size:40px; color:white"></i></a>
					<a href="#"><i class="fa fa-linkedin" style="font-size:40px; color:white"></i></a>
					<a href="#"><i class="fa fa-google-plus" style="font-size:40px; color:white"></i></a>
					<a href="#"><i class="fa fa-youtube" style="font-size:40px; color:white"></i></a>
				</div>
			</center>
		</div> 
        <center>
 			    <p>Copyright &copy;Navita. All Rights Reserved  |  Contact Us: +91 7577045235</p> 
     	</center>  
     </div> 
  </footer> 

  <script src="script.js" rel="text/javascript"></script>

</body>
</html>
